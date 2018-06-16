var psw = document.getElementById("psw")
  , confirmpsw = document.getElementById("confirmpsw");

function validatePassword(){
  if(psw.value != confirmps.value) {
    confirmpsw.setCustomValidity("Hasła nie pasują do siebie.");
  } else {
    confirmpsw.setCustomValidity('');
  }
}

psw.onchange = validatePassword;
confirmpsw.onkeyup = validatePassword;