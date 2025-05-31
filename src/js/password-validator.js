const seePasswordButton = document.querySelectorAll(".see-password-button");
const passwordInput = document.querySelectorAll(".password-input");
const newPasswordMessage = document.querySelector("#new-password-message");
const confirmPasswordMessage = document.querySelector("#confirm-password-message");

const flags = "gm";
const pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[!@#$%^&*()_+\\-={}\\[\\]|:;\"'<>,.?/])(?!.*\\s).{8,24}$"; // 8-24 characters, at least one uppercase letter, one lowercase letter, one number, and one special character
const regex = new RegExp(pattern, flags);

seePasswordButton.forEach((button, index) => {
  button.addEventListener("click", () => {
    if (passwordInput[index].type === "password") {
      passwordInput[index].type = "text";
      button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
    } else {
      passwordInput[index].type = "password";
      button.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
    }
  });
  }
);

//cek apakah password baru valid
passwordInput[1].addEventListener("input", function () {
  const password = passwordInput[1].value;

  if (regex.test(password)) {
    newPasswordMessage.textContent = "✅ Password valid";
    newPasswordMessage.classList.replace("text-accent1", "text-green-500");
  } else {
    newPasswordMessage.textContent = "❌ Password harus terdiri dari 8-24 karakter, termasuk huruf besar, huruf kecil, angka, dan simbol.";
    newPasswordMessage.classList.replace("text-green-500", "text-accent1");
  }
});

//cek apakah password konfirmasi valid
passwordInput[2].addEventListener("input", function () {
  const password = passwordInput[2].value;
  const passwordConfirm = passwordInput[1].value;

  if (password === passwordConfirm && regex.test(password)) {
    confirmPasswordMessage.textContent = "✅ Password cocok";
    confirmPasswordMessage.classList.replace("text-accent1", "text-green-500");
  } else {
    confirmPasswordMessage.textContent = "❌ Password tidak cocok";
    confirmPasswordMessage.classList.replace("text-green-500", "text-accent1");
  }
});