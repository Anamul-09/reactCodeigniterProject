import React from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { useState } from "react";
import { useNavigate } from "react-router-dom";
import { Button } from "reactstrap";

export default function UserLogin() {
  const [user, setUser] = useState({ email: "", password: "" });
  const navigate = useNavigate();
  console.log(user);
  function handleChange(e) {
    setUser({ ...user, [e.target.name]: e.target.value });
  }

  function handleSubmit(e) {
    e.preventDefault();
    console.log(user);

    axios
      .post("http://localhost:8080/frontend/users/login", user)
      .then((res) => {
        // alert(res.data.msg);
        console.log(res.data);

        if (res.data.status === 200) {
          localStorage.setItem("email", res.data.email);
          localStorage.setItem("password", res.data.password);
          navigate("/orderform");
        } else {
          alert("Invalid Login");
        }
      });
  }

  return (
    <div class="container mt-3 form">
      <h2 className="text-center">Login Form</h2>
      <form onSubmit={handleSubmit} className="col-lg-8 m-auto">
        <div class="mb-3 mt-3">
          <label for="email">Email:</label>
          <input
            type="email"
            class="form-control"
            id="email"
            onChange={handleChange}
            placeholder="Enter email"
            name="email"
          />
        </div>
        <div class="mb-3">
          <label for="pwd">Password:</label>
          <input
            type="password"
            class="form-control"
            id="pwd"
            onChange={handleChange}
            placeholder="Enter password"
            name="password"
          />
        </div>

        <Button
          type="submit"
          class="btn btn-primary "
          style={{ width: "100%" }}
        >
          Submit
        </Button>
        <Link to="/UserRegistration" className="log ">
          Registration first
        </Link>
      </form>
    </div>
  );
}
