// Show-Hidden Password
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
 });

 //Remeber Me
 var userInput = document.getElementById("username");
 var passInput = document.getElementById("password");

function IsRememberMe(e){
    if (e.checked) {
        localStorage.setItem("userInput",userInput.value);
        localStorage.setItem("passInput",passInput.value);
    } else {
        localStorage.setItem("userInput",null);
        localStorage.setItem("passInput",null);
    }
}
