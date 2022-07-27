const dismiseit = (e) => {
  document.getElementById(e).classList.remove("d-block");
  document.getElementById(e).classList.add("d-none");
};

const displayit = (e) => {
  document.getElementById(e).classList.remove("d-none");
  document.getElementById(e).classList.add("d-block");
};

const __id = (e) => document.getElementById(e);

const toggledis = (a, b) => {
  dismiseit(a);
  displayit(b);
};

const btn_resp = (btn, messagge) =>
  (document.getElementById(btn).innerHTML = messagge);
const u_innerHTML = (id, messagge) =>
  (document.getElementById(id).innerHTML = messagge);

const alllogin = () => {
  event.preventDefault();
  const loginemail = __id("loginemail");
  const loginpassword = __id("loginpassword");
  const loginbtn = __id("loginbtn");

  const logindata = new FormData();

  logindata.append("loginemail", loginemail.value);
  logindata.append("loginpassword", loginpassword.value);
  logindata.append("loginbtn", loginbtn);

  const url = "./php/login_validate.php";

  const loginajax = new XMLHttpRequest();
  loginajax.onload = (res) => {
    res = loginajax.responseText;
    console.log(res);
    const result = JSON.parse(res);
    if (result) {
      if (result.result == "logged In") {
        swal({
          title: "Sucess",
          text: "You are successful logged in",
          icon: "success",
        });
        setTimeout(() => {
          window.location = "php/checkRole.php";
        }, 1500);
      } else {
        swal({
          title: "Failed",
          text: result.result,
          icon: "error",
        });
      }
    } else {
      swal({
        title: "Failed",
        text: res,
        icon: "error",
      });
    }
  };
  loginajax.open("POST", url);
  loginajax.send(logindata);
};

const checkpassword = () => {
  const onepassword = __id("onepassword");
  const twopassword = __id("twopassword");

  if (twopassword.value !== onepassword.value) {
    twopassword.style.border = "1px solid red";
    swal({
      title: "Error",
      text: "Password didn't match",
      icon: "error",
    });
  }
};

const reg_user = () => {
  event.preventDefault();
  // checkpassword();
  // alert(23)

  const password = __id("password");
  const rpassword = __id("rpassword");
  const fname = __id("firstName");
  const lname = __id("lastName");
  const email = __id("email");
  const userbutton = __id("userbutton");

  if (password.value !== rpassword.value) {
    swal({
      title: "Error",
      text: "Password didn't match",
      icon: "error",
      });
  }


  const userdata = new FormData();

  userdata.append("firstName", fname.value);
  userdata.append("lastName", lname.value);
  userdata.append("email", email.value);
  userdata.append("password", password.value);
  userdata.append("userbutton", userbutton);

  const url = "php/reg.php";
  const ajax = new XMLHttpRequest();
  ajax.onload = () => {
    console.log(ajax.responseText);
    res = JSON.parse(ajax.responseText);
    // alert(res.resp);
    if (res.resp == "registered") {
      swal({
        title: "Successful",
        text: "Your registration was successful",
        icon: "success",
      });
      setTimeout(() => {
        window.location = "php/checkRole.php";
      });
      btn_resp("userbutton", "Successfully registered");
    } else {
      swal({
        title: "Failed",
        text: res.resp,
        icon: "error",
      });
      btn_resp("userbutton", "Try again");
    }
  };
  ajax.onprogress = () => btn_resp("userbutton", "Loading...");

  ajax.open("POST", url, true);

  ajax.send(userdata);
};
