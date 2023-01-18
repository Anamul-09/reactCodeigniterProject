import React, { useEffect } from "react";
import { Link, useNavigate, useOutletContext } from "react-router-dom";
import MainTemplate from "../MainTemplate";

function Cart(props) {
  const navigate = useNavigate();
  const [cartItems, onAdd, onRemove, onEmpty, itemsPrice] = useOutletContext();

  if (cartItems?.length === 0) {
    navigate("/shop");
  }

  useEffect(() => {
    const cont = document.getElementsByTagName("body")[0];
    cont.className =
      "page contactspg body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive";

    return () => {
      cont.className = "";
    };
  }, []);

  return (
    <>
      <div className="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
        <div className="bg_cust_1 top_panel_title_inner top_panel_inner_style_1 title_present_inner breadcrumbs_present_inner">
          <div className="content_wrap">
            <h1 className="page_title">Cart</h1>
            <div className="breadcrumbs">
              <Link className="breadcrumbs_item home" to="/">
                Home
              </Link>
              <span className="breadcrumbs_delimiter" />
              <span className="breadcrumbs_item current">Cart Page</span>
            </div>
          </div>
        </div>
      </div>
      <div className="page_content_wrap page_paddings_no">
        <div className="content_wrap">
          <div className="content">
            <article className="post_item post_item_single post_featured_default post_format_standard page type-page hentry my-3">
              <div className="shop-cart padding-tb">
                <div className="container">
                  <div className="section-wrapper">
                    <div className="cart-top">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          {cartItems.map((item) => (
                            <tr key={item.id}>
                              <td className="product-item">
                                <div className="p-thumb">
                                  <Link to={`/shop/view-product/${item.id}`}>
                                    <img
                                      src={`http://localhost:8080/${item.product_img}`}
                                      className="img-thumbnail"
                                      style={{ height: "70px" }}
                                      alt="product"
                                    />
                                  </Link>
                                </div>
                                <div className="p-content">
                                  <Link to={`/shop/view-product/${item.id}`}>
                                    {item.product_name}
                                  </Link>
                                </div>
                              </td>
                              <td>
                                Tk. {Number(item.product_price).toFixed(2)}
                              </td>
                              <td>
                                <div className="cart-plus-minus">
                                  <div
                                    role="button"
                                    onClick={() => onRemove(item)}
                                    className="dec qtybutton"
                                  >
                                    -
                                  </div>
                                  <input
                                    className="cart-plus-minus-box"
                                    type="text"
                                    name="qtybutton"
                                    value={`${item.qty}`}
                                  />
                                  <div
                                    role="button"
                                    onClick={() => onAdd(item)}
                                    className="inc qtybutton"
                                  >
                                    +
                                  </div>
                                </div>
                              </td>
                              <td>
                                Tk.{" "}
                                {Number(item.qty * item.product_price).toFixed(
                                  2
                                )}
                              </td>
                              <td>
                                <a role="button" onClick={() => onEmpty(item)}>
                                  <i className="fa fa-trash text-danger" />
                                </a>
                              </td>
                            </tr>
                          ))}
                        </tbody>
                      </table>
                    </div>
                    <div className="cart-bottom">
                      <div className="row">
                        <div className="col-6">
                          <div className="shiping-box">
                            <div className="cart-overview">
                              <h4 className="m-0">Cart Totals</h4>
                              <ul className="my-3">
                                <li>
                                  <span className="pull-left">
                                    Cart Subtotal
                                  </span>
                                  <p className="pull-right">Tk. </p>
                                </li>
                                <li>
                                  {/* <span className="pull-left">Order Total</span>
                                  <p className="pull-right">Tk. </p> */}
                                  <li>
                                    <span className="pull-left">
                                      Order Total
                                    </span>
                                    <p className="pull-right">
                                      <span className="price">
                                        {/* &#2547; {itemsPrice.toFixed(2)} */}
                                      </span>
                                    </p>
                                  </li>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div className="col-6 d-flex justify-content-end align-items-end">
                          <div className="cart-checkout-box">
                            <form className="cart-checkout">
                              <input
                                type="submit"
                                value="Proceed to Checkout"
                                style={{ width: "100%" }}
                                onClick={() => navigate("/checkout")}
                              />
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <section className="related_wrap related_wrap_empty" />
          </div>
        </div>
      </div>
    </>
  );
}

export default Cart;
