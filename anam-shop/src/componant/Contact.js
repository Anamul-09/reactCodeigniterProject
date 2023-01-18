import React, { useRef } from "react";
import emailjs from "@emailjs/browser";

export default function Contact() {
  const form = useRef();

  const sendEmail = (e) => {
    e.preventDefault();

    emailjs
      .sendForm(
        "service_spm88db",
        "template_77uidhj",
        form.current,
        "VP2LUR0eS7WSbywEM"
      )
      .then(
        (result) => {
          console.log(result.text);
          console.log("message sent");
        },
        (error) => {
          console.log(error.text);
        }
      );
  };

  return (
    <div>
      {/* <!-- Start Content Page --> */}
      <div className="container-fluid bg-light py-5">
        <div className="col-md-6 m-auto text-center">
          <h1 className="h1">Contact Us</h1>
          <p>
            Proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>

      <div className="container py-5">
        <div className="row py-5">
          <form className="col-md-9 m-auto" ref={form} onSubmit={sendEmail}>
            <div className="row">
              <div className="form-group col-md-9 mb-3">
                <label htmlFor="inputname">Name</label>
                <input
                  type="text"
                  className="form-control mt-1"
                  id="name"
                  name="user_name"
                  placeholder="Enter your name"
                />
              </div>
              <div className="form-group col-md-9 mb-3">
                <label htmlFor="inputemail">Email</label>
                <input
                  type="email"
                  className="form-control mt-1"
                  id="email"
                  name="user_email"
                  placeholder="Enter your email"
                />
              </div>
            </div>
            {/* <div className="mb-3">
              <label for="inputsubject">Subject</label>
              <input
                type="text"
                className="form-control mt-1"
                id="subject"
                name="subject"
                placeholder="Subject"
              />
            </div> */}
            <div className="mb-3">
              <label htmlFor="inputmessage">Message</label>
              <textarea
                className="form-control col-md-9 mt-1"
                id="message"
                name="message"
                placeholder="Message"
                rows="8"
              ></textarea>
            </div>
            <div className="row">
              <div className="col text-end mt-2">
                <input type="submit" value="Send" />
              </div>
            </div>
          </form>
        </div>
      </div>
      {/* <!-- End Contact --> */}
    </div>
  );
}
