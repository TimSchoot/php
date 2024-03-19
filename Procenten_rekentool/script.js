const oud = document.getElementById("oud");
const nieuw = document.getElementById("nieuw");
const soort = document.getElementById("soort");
const percentage = document.getElementById("percentage");

function checkInput() {
    if (oud.value != '') {
        oud.classList.remove("is-invalid");
        oud.classList.add("is-valid");
    }
}

function solveProblem(){
    alert("Hij doet het!");
}