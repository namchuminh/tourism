

const passFieldNew = document.querySelector(".login-box .user-box.pass input,.login-box .user-box.pass.again input" );
const showBtn = document.querySelector("span i");
showBtn.onclick = () => {
  if (passFieldNew.type === "password") {
    passFieldNew.type = "text";
    showBtn.classList.add("hide-btn");
  } else {
    passFieldNew.type = "password";
    showBtn.classList.remove("hide-btn");
  }
};
