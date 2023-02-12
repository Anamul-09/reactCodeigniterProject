import React from "react";
import { Link } from "react-router-dom";
import MainTemplate from "./MainTemplate";

export default function Header(props) {
  const { cartItems, onEmpty, itemsPrice } = props;
  return (
    <div>
      <nav
        className="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block"
        id="templatemo_nav_top"
      >
        <div className="container text-light">
          <div className="w-100 d-flex justify-content-between">
            <div>
              <i className="fa fa-envelope mx-2"></i>
              <a
                className="navbar-sm-brand text-light text-decoration-none"
                href="mailto:mdanamulislam09@gmail.com"
              >
                mdanamulislam09@gmail.com
              </a>
              <i className="fa fa-phone mx-2"></i>
              <a
                className="navbar-sm-brand text-light text-decoration-none"
                href=""
              >
                01847309892
              </a>
            </div>
            <div>
              <a
                className="text-light"
                href="https://fb.com/templatemo"
                target="_blank"
                rel="sponsored"
              >
                <i className="fab fa-facebook-f fa-sm fa-fw me-2"></i>
              </a>
              <a
                className="text-light"
                href="https://www.instagram.com/"
                target="_blank"
              >
                <i className="fab fa-instagram fa-sm fa-fw me-2"></i>
              </a>
              <a
                className="text-light"
                href="https://twitter.com/"
                target="_blank"
              >
                <i className="fab fa-twitter fa-sm fa-fw me-2"></i>
              </a>
              <a
                className="text-light"
                href="https://www.linkedin.com/"
                target="_blank"
              >
                <i className="fab fa-linkedin fa-sm fa-fw"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
      {/* <!-- Close Top Nav -->

    <!-- Header --> */}
      <nav className="navbar navbar-expand-lg navbar-light shadow">
        <div className="container d-flex justify-content-between align-items-center">
          <Link
            to=""
            className="navbar-brand text-success logo h1 align-self-center"
          >
            <img
              src="./assets/img/anam.jpg"
              style={{ height: "70px", borderRadius: "100%" }}
            />
          </Link>

          <button
            className="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#templatemo_main_nav"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>

          <div
            className="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav"
          >
            <div className="flex-fill">
              <ul className="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                <li className="nav-item">
                  <Link to="" className="nav-link">
                    Home
                  </Link>
                </li>
                <li className="nav-item">
                  <Link to="about" className="nav-link">
                    About
                  </Link>
                </li>
                <li className="nav-item">
                  <Link to="shope" className="nav-link">
                    Shope
                  </Link>
                </li>
                <li className="nav-item">
                  <Link to="contact" className="nav-link">
                    Contact
                  </Link>
                </li>
              </ul>
            </div>
            <div className="navbar align-self-center d-flex">
              <Link
                to="/cart"
                className="nav-icon position-relative text-decoration-none"
                href="#"
              >
                <i className="fa fa-fw fa-cart-arrow-down text-dark mr-3"></i>
                <span className="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                  {cartItems.length}
                </span>
                <span className="Imoney"> &#2547; {itemsPrice.toFixed(2)}</span>
              </Link>

              <a
                className="nav-icon d-none d-lg-inline admin"
                href="http://localhost:8080/admin"
                // href="http://anamshop.bdprogrammers.com/admin"
              >
                Admin
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  );
}
