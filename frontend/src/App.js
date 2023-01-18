import "./App.css";
import ProductList from "./components/Productlist";
import { BrowserRouter, Route, Routes } from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <div className="container">
        <Routes exact path="/" element={<ProductList />}>
          <Route index element={<ProductList />} />
        </Routes>
      </div>
    </BrowserRouter>
  );
}

export default App;
