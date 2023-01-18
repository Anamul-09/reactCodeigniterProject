<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    function __construct()
    {
        // helper(['form', 'url']);
    }
    use ResponseTrait;
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->orderBy('id', 'DESC')->findAll();
        return view('product/product_list', $data);
        // print_r($data);
        // return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $cModel = new CategoryModel();
        $cdata['cats'] = $cModel->orderBy('cat_name', 'ASC')->findAll();
        return view("product/add_product", $cdata);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     * 
    
     */

    public function create()
    {

        // $validate = \config\Services::validation();
        $rules = [
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[20]',
            'product_price' => 'required|numeric',
            // /image upload start here
            'product_img' => [
                // 'uploaded[product_image]',
                'mime_in[product_img,image/jpg,image/jpeg,image/png]',
                'max_size[product_img,1024]',
            ]
        ];

        $errors = [
            'product_name' => [
                'required' => 'product Name must be fill',
                'min_length' => 'Minimum length 5',
                'max_length' => 'Maximum length 20',
            ],
            'product_details' => [
                'required' => 'product detailsmust be fill',
                'min_length' => 'Minimum length 20',

            ],
            'product_price' => [
                'required' => 'product price must be fill',
                'numeric' => 'product price must be neumeric',

            ],
            'product_img' => [
                'mime_in' => 'Only jpg,png and jpeg are allowed',
            ],  'max_size' => 'Not more than 1MB'

        ];
        $validation = $this->validate($rules, $errors);
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductModel();
            //image upload start here
            $img = $this->request->getFile('product_img');
            $path = "assets/uploads/";

            $img->move($path);
            $data['product_name'] = $this->request->getPost('product_name');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $data['product_catagory'] = $this->request->getPost('cat_name');
            // $data['product_img'] = $this->request->getPost('product_img');

            $namepath = $path . $img->getName();
            $data['product_img'] = $namepath;
            //image upload ends here
            $model->save($data);
            return redirect()->to('/products')->with('msg', 'Product Inserted Sussessfully');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {

        $model = new ProductModel();
        $cModel = new CategoryModel();
        $data['cats'] = $cModel->orderBy('cat_name', 'ASC')->findAll();
        $data['product'] = $model->find($id);
        return view('product/edit_product', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = [
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[20]',
            'product_price' => 'required|numeric',
            // /image upload start here
            'product_img' => [
                // 'uploaded[product_image]',
                'mime_in[product_img,image/jpg,image/jpeg,image/png]',
                'max_size[product_img,1024]',
            ]
        ];

        $errors = [
            'product_name' => [
                'required' => 'product Name must be fill',
                'min_length' => 'Minimum length 5',
                'max_length' => 'Maximum length 20',
            ],
            'product_details' => [
                'required' => 'product detailsmust be fill',
                'min_length' => 'Minimum length 20',

            ],
            'product_price' => [
                'required' => 'product price must be fill',
                'numeric' => 'product price must be neumeric',

            ],
            'product_img' => [
                'mime_in' => 'Only jpg,png and jpeg are allowed',
            ],  'max_size' => 'Not more than 1MB'

        ];
        $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('product_img');
            // print_r($img);
            $path = "assets/uploads/";

            if ($img->getName() != '') {
                $img->move($path);
                $data['product_img'] = $path . $img->getName();
            } else {
                $data['product_img'] = '';
            }

            $model = new ProductModel();
            $data['product_name'] = $this->request->getPost('product_name');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $data['product_catagory'] = $this->request->getPost('cat_name');

            $model->update($id, $data);
            return redirect()->to('/products')->with('msg', 'Update Sussessfully');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ProductModel();
        $data =  $model->delete($id);
        // echo "yes";
        // return redirect()->to('products');
        return redirect()->to('/products')->with('msg', 'Product Deleted Sussessfully');
    }
}
