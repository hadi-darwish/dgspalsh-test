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
send.onclick = () => {
  error = "";
  errorElement.style.display = "none";
  checkEmpty();
  checkEmail();
  checkMobile();
  if (error !== "") {
    errorElement.innerText = error;
    errorElement.style.display = "block";
    return false;
  }
};

form.addEventListener("submit", function (e) {
  fetch("http://localhost/dgsplash-test/backend/apis/form-handler.php", {
    method: "POST",
    body: new URLSearchParams({
      first_name: first_name.value,
      last_name: last_name.value,
      email: email.value,
      country: country.value,
      subject: subject.value,
      message: message.value,
      mobile: mobile.value,
      gender: gender,
    }),
  });
});

const checkEmpty = () => {
  if (first_name.value === "" || first_name.value == null) {
    error += "First name is required. \n";
  }
  if (last_name.value === "" || last_name.value == null) {
    error += "Last name is required. \n";
  }
  if (country.value === "" || country.value == null) {
    error += "Country is required. \n";
  }
  if (subject.value === "" || subject.value == null) {
    error += "Subject is required. \n";
  }
  if (message.value === "" || message.value == null) {
    error += "Message is required. \n";
  }
  checkGender();
  if (gender === "") {
    error += "Gender is required. \n";
  }
};

const checkEmail = () => {
  if (email.value === "" || email.value == null) {
    error += "Email is required. \n";
    return false;
  } else if (
    !/(^[\w-\.]{3,})+@(([\w-]{5,})+\.)+[\w-]{2,4}$/.test(email.value)
  ) {
    error +=
      "Please enter email with at least 3 characters before @ and 5 after!!<br>";
    return false;
  } else {
    return true;
  }
};

const checkMobile = () => {
  if (mobile.value === "" || mobile.value == null) {
    return true;
  } else if (!/^(\+961)([1-9]|70|71|76|78|79|81)\d{6}$/.test(mobile.value)) {
    error +=
      "Please enter Lebanese mobile number with country code +961 and if ur number starts with 0x enter it as +961xyyyyyy !!";
    return false;
  } else {
    return true;
  }
};

const checkGender = () => {
  for (const element of selectedRadio) {
    if (element.checked) {
      gender = element.value;
    }
  }
};
