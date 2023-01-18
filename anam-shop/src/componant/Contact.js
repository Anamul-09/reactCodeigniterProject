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
      <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
          <h1 class="h1">Contact Us</h1>
          <p>
            Proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>

      <div class="container py-5">
        <div class="row py-5">
          <form class="col-md-9 m-auto" ref={form} onSubmit={sendEmail}>
            <div class="row">
              <div class="form-group col-md-9 mb-3">
                <label for="inputname">Name</label>
                <input
                  type="text"
                  class="form-control mt-1"
                  id="name"
                  name="user_name"
                  placeholder="Enter your name"
                />
              </div>
              <div class="form-group col-md-9 mb-3">
                <label for="inputemail">Email</label>
                <input
                  type="email"
                  class="form-control mt-1"
                  id="email"
                  name="user_email"
                  placeholder="Enter your email"
                />
              </div>
            </div>
            {/* <div class="mb-3">
              <label for="inputsubject">Subject</label>
              <input
                type="text"
                class="form-control mt-1"
                id="subject"
                name="subject"
                placeholder="Subject"
              />
            </div> */}
            <div class="mb-3">
              <label for="inputmessage">Message</label>
              <textarea
                class="form-control col-md-9 mt-1"
                id="message"
                name="message"
                placeholder="Message"
                rows="8"
              ></textarea>
            </div>
            <div class="row">
              <div class="col text-end mt-2">
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
