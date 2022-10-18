//mostra password 

const mostraPassword = document.querySelector(".occhio");
mostraPassword.addEventListener("click", () => {
  const inputPassword = document.querySelector('[name="password"]');
  if (inputPassword.type === "text") {
    inputPassword.type = "password";
  } else inputPassword.type = "text";
});