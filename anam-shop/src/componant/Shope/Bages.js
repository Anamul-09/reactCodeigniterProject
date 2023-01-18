import axios from "axios";
import React, { useEffect, useState } from "react";

export default function Bages() {
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
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-8 pb-4">
                <div class="d-flex">
                  <select class="form-control">
                    <option>Featured</option>
                    <option>A to Z</option>
                    <option>Item</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              {products.map((product, index) => (
                <div class="col-md-4">
                  <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                      <img
                        class="card-img rounded-0 img-fluid"
                        style={{ height: "350px" }}
                        src={`http://localhost:8080/${product.product_img}`}
                      />
                      <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                          <li>
                            <a
                              class="btn btn-success text-white"
                              href="shop-single.html"
                            >
                              <i class="far fa-heart"></i>
                            </a>
                          </li>
                          <li>
                            <a
                              class="btn btn-success text-white mt-2"
                              href="shop-single.html"
                            >
                              <i class="far fa-eye"></i>
                            </a>
                          </li>
                          <li>
                            <a
                              class="btn btn-success text-white mt-2"
                              href="shop-single.html"
                            >
                              <i class="fas fa-cart-plus"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-body">
                      <a
                        href="shop-single.html"
                        class="h3 text-decoration-none"
                      >
                        {product.product_name}
                      </a>
                      <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                        <li>Price:{product.product_price}</li>
                        <li class="pt-2">
                          <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                          <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                          <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                          <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                          <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                        </li>
                      </ul>
                      <ul class="list-unstyled d-flex justify-content-center mb-1">
                        <li>
                          <i class="text-warning fa fa-star"></i>
                          <i class="text-warning fa fa-star"></i>
                          <i class="text-warning fa fa-star"></i>
                          <i class="text-muted fa fa-star"></i>
                          <i class="text-muted fa fa-star"></i>
                        </li>
                      </ul>
                      <p class="text-center mb-0">$250.00</p>
                    </div>
                  </div>
                </div>
              ))}
            </div>
            <div div="row">
              <ul class="pagination pagination-lg justify-content-end">
                <li class="page-item disabled">
                  <a
                    class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                    href="#"
                    tabindex="-1"
                  >
                    1
                  </a>
                </li>
                <li class="page-item">
                  <a
                    class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                    href="#"
                  >
                    2
                  </a>
                </li>
                <li class="page-item">
                  <a
                    class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
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
      <section class="bg-light py-5">
        <div class="container my-4">
          <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
              <h1 class="h1">Our Brands</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod Lorem ipsum dolor sit amet.
              </p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel">
              <div class="row d-flex flex-row">
                {/* <!--Controls--> */}
                <div class="col-1 align-self-center">
                  <a
                    class="h1"
                    href="#multi-item-example"
                    role="button"
                    data-bs-slide="prev"
                  >
                    <i class="text-light fas fa-chevron-left"></i>
                  </a>
                </div>
                {/* <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col"> */}
                <div
                  class="carousel slide carousel-multi-item pt-2 pt-md-0"
                  id="multi-item-example"
                  data-bs-ride="carousel"
                >
                  {/* <!--Slides--> */}
                  <div class="carousel-inner product-links-wap" role="listbox">
                    {/* <!--First slide--> */}
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                    {/* <!--End First slide-->

                                    <!--Second slide--> */}
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_04.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_01.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_02.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
                              src="assets/img/brand_03.png"
                              alt="Brand Logo"
                            />
                          </a>
                        </div>
                        <div class="col-3 p-md-5">
                          <a href="#">
                            <img
                              class="img-fluid brand-img"
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
              <div class="col-1 align-self-center">
                <a
                  class="h1"
                  href="#multi-item-example"
                  role="button"
                  data-bs-slide="next"
                >
                  <i class="text-light fas fa-chevron-right"></i>
                </a>
              </div>
              {/* <!--End Controls--> */}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
