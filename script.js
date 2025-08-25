
function toggleDarkMode() {
  let element = document.body;

  element.classList.toggle("dark-mode");


  let button = document.getElementById("button");
  button.classList.toggle("dark-mode");

  let button1 = document.getElementById("uhrzeit");
  button1.classList.toggle("dark-mode");

}
function alarm() {
  alert(d)
}

const d = new Date().toLocaleTimeString();
/*let time = d.getTime();*/