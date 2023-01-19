import logo from "./logo.svg";
import "./App.css";
// import { Route, Routes } from "react-router-dom";
import { Route } from "react-router-dom";
import { Routes } from "react-router-dom";
import MainTemplate from "./componant/MainTemplate";
import Home from "./componant/Home";
import About from "./componant/About";
import Shope from "./componant/Shope";
import Contact from "./componant/Contact";
import Saree from "./componant/Shope/Saree";
import Bages from "./componant/Shope/Bages";
import Handicraft from "./componant/Shope/Handicraft";
import Cart from "./componant/Shope/Cart";
import UserLogin from "./componant/form/Userlogin";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="" element={<MainTemplate />}>
          <Route index element={<Home />} />
          <Route path="about" element={<About />} />
          <Route path="shope" element={<Shope />} />
          <Route path="contact" element={<Contact />} />
          <Route path="saree" element={<Saree />} />
          <Route path="bages" element={<Bages />} />
          <Route path="handicraft" element={<Handicraft />} />
          <Route path="/cart" element={<Cart />} />
          <Route path="/login" element={<UserLogin />} />
        </Route>
      </Routes>
    </div>
  );
}

export default App;
