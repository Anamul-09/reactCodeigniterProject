import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { useOutletContext } from "react-router-dom";

const ProductList = (addToCart, product) => {
  const [products, setProducts] = useState([]);
  const [cartItems, onAdd] = useOutletContext();

  //searchTerm start here
  const [searchTerm, setSearchTerm] = useState("");

  const handleSearch = (event) => {
    setSearchTerm(event.target.value);
  };

  useEffect(() => {
    getProducts();
  }, []);

  const searchProduct = products.filter(
    (pr) =>
      pr.product_name.toLowerCase().includes(searchTerm) ||
      pr.product_price.includes(searchTerm)
  );

  const getProducts = async () => {
    const products = await axios.get(
      "http://localhost:8080/frontend/products"
      // "http://anamshop.bdprogrammers.com/frontend/products"
    );
    setProducts(products.data);
  };

  return (
    <div>
      <div className="container py-5">
        <div className="row">
          <div className="col-lg-3">
            <h1 className="h2 pb-4">Categories</h1>
            <hr />
            <ul className="list-unstyled templatemo-accordion">
              <li className="pb-3">
                <a
                  className="collapsed d-flex justify-content-between h3 text-decoration-none"
                  href="#"
                >
                  All Products
                </a>
              </li>
              <hr />
              <li className="pb-3">
                <a
                  className="collapsed d-flex justify-content-between h3 text-decoration-none"
                  href="#"
                >
                  Bages
                </a>
              </li>
              <hr />
              <li className="pb-3">
                <a
                  className="collapsed d-flex justify-content-between h3 text-decoration-none"
                  href="#"
                >
                  Handkerchif
                </a>
              </li>
              <hr />
              <li className="pb-3">
                <a
                  className="collapsed d-flex justify-content-between h3 text-decoration-none"
                  href="#"
                >
                  Sarees
                </a>
              </li>
            </ul>
          </div>
          <div className="col-lg-9">
            <div className="row">
              <div className="col-md-6 pb-4">
                <div className="d-flex search">
                  <label className="label" htmlFor="search">
                    Search Your Product:
                  </label>
                  <input
                    id="search"
                    className="input"
                    name="searchTerm"
                    onChange={handleSearch}
                    type="text"
                  />
                </div>
              </div>
            </div>

            <div className="row">
              {searchProduct.map((product, index) => (
                <div className="col-md-4">
                  <div className="card mb-4 product-wap rounded-0">
                    <div className="card rounded-0">
                      <img
                        className="card-img rounded-0 img-fluid"
                        style={{ height: "250px" }}
                        src={`http://localhost:8080/${product.product_img}`}
                      />
                      <div className="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul className="list-unstyled">
                          <li>
                            <a
                              className="btn btn-success text-white"
                              href="shop-single.html"
                            >
                              <i className="far fa-heart"></i>
                            </a>
                          </li>
                          <li>
                            <a
                              className="btn btn-success text-white mt-2"
                              href="shop-single.html"
                            >
                              <i className="far fa-eye"></i>
                            </a>
                          </li>
                          <li>
                            <a
                              className="btn btn-success text-white mt-2"
                              role="button"
                              onClick={() => onAdd(product)}
                              href=""
                            >
                              <i className="fas fa-cart-plus"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div className="card-body">
                      <a
                        href="shop-single.html"
                        className="h3 text-decoration-none"
                      >
                        <h3>{product.product_name}</h3>
                      </a>
                      <hr></hr>
                      <ul className="w-100 list-unstyled d-flex justify-content-between mb-0">
                        <li>{product.product_details}</li>
                        <li className="pt-2">
                          <span className="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                          <span className="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                          <span className="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                          <span className="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                          <span className="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                        </li>
                      </ul>
                      <ul className="list-unstyled d-flex justify-content-center mb-1">
                        <li>
                          <i className="text-warning fa fa-star"></i>
                          <i className="text-warning fa fa-star"></i>
                          <i className="text-warning fa fa-star"></i>
                          <i className="text-muted fa fa-star"></i>
                          <i className="text-muted fa fa-star"></i>
                        </li>
                      </ul>
                      <p className="text-center mb-0">
                        ${product.product_price}
                      </p>
                      {/* <button onClick={() => addToCart(product)}>
                        Add To Cart
                      </button> */}
                      <a
                        role="button"
                        onClick={() => onAdd(product)}
                        className=" btn btn-warning button add_to_cart_button"
                      >
                        Add to Cart
                      </a>
                    </div>
                  </div>
                </div>
              ))}
            </div>
            <div div="row">
              <ul className="pagination pagination-lg justify-content-end">
                <li className="page-item disabled">
                  <a
                    className="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                    href="#"
                    tabindex="-1"
                  >
                    1
                  </a>
                </li>
                <li className="page-item">
                  <a
                    className="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                    href="#"
                  >
                    2
                  </a>
                </li>
                <li className="page-item">
                  <a
                    className="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                    href="#"
                  >
                    3
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      {/* <!-- End Content -->

    <!-- Start Brands --> */}
      <section className="bg-light py-5">
        <div className="container my-4">
          <div className="row text-center py-3">
            <div className="col-lg-6 m-auto">
              <h1 className="h1">Our Brands</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod Lorem ipsum dolor sit amet.
              </p>
            </div>
            <div className="col-lg-9 m-auto tempaltemo-carousel">
              <div className="row d-flex flex-row">
                {/* <!--Controls--> */}
                <div className="col-1 align-self-center">
                  <a
                    className="h1"
                    href="#multi-item-example"
                    role="button"
                    data-bs-slide="prev"
                  >
                    <i className="text-light fas fa-chevron-left"></i>
                  </a>
                </div>
                {/* <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div className="col"> */}
                <div
                  className="carousel slide carousel-multi-item pt-2 pt-md-0"
                  id="multi-item-example"
                  data-bs-ride="carousel"
                >
                  {/* <!--Slides--> */}
                  <div
                    className="carousel-inner product-links-wap"
                    role="listbox"
                  >
                    {/* <!--First slide--> */}
                    <div className="carousel-item active">
                      <div className="row">
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                    {/* <!--End First slide-->

                                    <!--Second slide--> */}
                    <div className="carousel-item">
                      <div className="row">
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                      </div>
                    </div>

                    <div className="carousel-item">
                      <div className="row">
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div className="col-3 p-md-5">
                          <a href="#">
                            <img
                              className="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                    {/* <!--End Third slide--> */}
                  </div>
                  {/* <!--End Slides--> */}
                </div>
              </div>
              {/* <!--End Carousel Wrapper--> */}

              {/* <!--Controls--> */}
              <div className="col-1 align-self-center">
                <a
                  className="h1"
                  href="#multi-item-example"
                  role="button"
                  data-bs-slide="next"
                >
                  <i className="text-light fas fa-chevron-right"></i>
                </a>
              </div>
              {/* <!--End Controls--> */}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default ProductList;
