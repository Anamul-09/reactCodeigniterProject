<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Config\View;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\View\View as ViewView;

class Category extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new CategoryModel();
        $data['cats'] = $model->findAll();
        return View('category/category_list', $data);

        // echo "helo";
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
        return view('category/add_category');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new CategoryModel();
        $data = $this->request->getPost();
        $model->save($data);
        return view('category/category_list');
        // echo "hello";
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new CategoryModel();
        $data['cats'] = $model->find($id);
        return view('category/edit_category', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new CategoryModel();
        $data = $this->request->getPost();
        if ($model->update($id, $data)) {
            return redirect()->to('category');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // $model = new CategoryModel();
        // $model->delete($id);
        // return redirect()->to('category');
        echo "hello";
    }
}
