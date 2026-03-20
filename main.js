let regid = document.getElementById("register-form");
let logid = document.getElementById("login-form")

function showFormreg() {
    regid.classList.add("active");
    logid.classList.remove("active");
}

function showFormlog() {
    logid.classList.add("active");
    regid.classList.remove("active");
}