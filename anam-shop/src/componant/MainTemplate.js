import React, { useState } from "react";
import Footer from "./Footer";
import Header from "./Header";
import { Outlet } from "react-router-dom";
import useLocalStorage from "../hooks/useLocalStorage";

export default function MainTemplate() {
  const [cartItems, setCartItems] = useLocalStorage("cartitems", []);

  // Add items to cart
  const onAdd = (product) => {
    const exists = cartItems.find((x) => x.id === product.id);
    if (exists) {
      setCartItems(
        cartItems.map((x) =>
          x.id === product.id ? { ...exists, qty: exists.qty + 1 } : x
        )
      );
    } else {
      setCartItems([...cartItems, { ...product, qty: 1 }]);
    }
  };

  // Method for reducing items
  const onRemove = (product) => {
    const exist = cartItems.find((x) => x.id === product.id);
    if (exist.qty === 1) {
      setCartItems(cartItems.filter((x) => x.id !== product.id));
    } else {
      setCartItems(
        cartItems.map((x) =>
          x.id === product.id ? { ...exist, qty: exist.qty - 1 } : x
        )
      );
    }
  };

  // Method for removing items
  const onEmpty = (product) => {
    const exist = cartItems.find((x) => x.id === product.id);
    if (exist) {
      setCartItems(cartItems.filter((x) => x.id !== product.id));
    }
  };

  // Calculate total price
  const itemsPrice = cartItems.reduce((a, c) => a + c.product_price * c.qty, 0);

  return (
    <div>
      <Header cartItems={cartItems} onEmpty={onEmpty} itemsPrice={itemsPrice} />
      <Outlet context={[cartItems, onAdd, onRemove, onEmpty]} />
      <Footer />
    </div>
  );
}
