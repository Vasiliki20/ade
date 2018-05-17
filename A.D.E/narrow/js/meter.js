var strength = {
  0: "Χείριστη",
  1: "Κακή",
  2: "Αδύμανη",
  3: "Καλή",
  4: "Δυνατή"
};
var password = document.getElementById('password');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');

password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);

  // Update the password strength meter
  meter.value = result.score;

  // Update the text indicator
  if (val !== "") {
    text.innerHTML = "Ισχύς κωδικού: " + strength[result.score]; 
  } else {
    text.innerHTML = "";
  }
});