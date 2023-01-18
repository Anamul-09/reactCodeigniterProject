import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const ProductList = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/frontend/products");
    setProducts(products.data);
  };

  const deleteProduct = async (id) => {
    await axios.delete(`http://localhost:8080/frontend/products/${id}`);
    getProducts();
  };

  return (
    <div>
      <table className="table is-striped is-fullwidth">
        <thead>
          <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
            <th>Product Image</th>
          </tr>
        </thead>
        <tbody>
          {products.map((product, index) => (
            <tr key={product.id}>
              <td>{index + 1}</td>
              <td>{product.product_name}</td>
              <td>{product.product_details}</td>
              <td>{product.product_price}</td>
              <td>
                {/* {product.product_img} */}
                <img
                  style={{ width: "70px" }}
                  src={`http://localhost:8080/${product.product_img}`}
                />
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ProductList;
