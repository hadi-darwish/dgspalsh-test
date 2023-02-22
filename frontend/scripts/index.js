const first_name = document.getElementById("firstName");
const last_name = document.getElementById("lastName");
const email = document.getElementById("email");
const country = document.getElementById("country");
const subject = document.getElementById("subject");
const message = document.getElementsByTagName("textarea").item(0);
const selectedRadio = document.getElementsByName("gender");
const form = document.getElementById("contact");
const errorElement = document.getElementById("error");
const send = document.getElementById("send");
const mobile = document.getElementById("mobile");
let gender = "";
let error = "";

const checkGender = () => {
  for (const element of selectedRadio) {
    if (element.checked) {
      gender = element.value;
    }
  }
};
