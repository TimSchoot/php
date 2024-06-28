let tableof = 2.5; // Initialize tableof with a default value
let tabletimes = 3.3; // Initialize tabletimes with a default value

function displayQuestion() {
    let tafeltot = parseInt(document.getElementById("inputtafellengte").value); // Parse to integer
    let tafelvan = parseFloat(document.getElementById("inputtafelvan").value); // Parse to float
    tableof = tafelvan;
    let randomnumber = Math.floor(Math.random() * tafeltot) + 1;
    tabletimes = randomnumber;
    let opgtekst = randomnumber + " x " + tafelvan;
    document.getElementById("inputsom").value = opgtekst;
    document.getElementById("inputantwoord").value = "";
    document.getElementById("inputantwoord").classList.remove("is-valid", "is-invalid"); // Remove any validation classes
    document.getElementById("inputantwoord").focus();
}

function checkAnswer() {
    let answer = parseFloat(document.getElementById("inputantwoord").value); // Parse to float
    let correctanswer = tableof * tabletimes;
    if (answer === correctanswer) {
        document.getElementById("inputantwoord").classList.add("is-valid");
        setTimeout(function() {
            document.getElementById("inputantwoord").classList.remove("is-valid");
            addToHistory(tabletimes, tableof, correctanswer); // Add to history on correct answer
            displayQuestion(); // Show the next question
        }, 2000); // Delay feedback for 2 seconds
    } else {
        document.getElementById("inputantwoord").classList.add("is-invalid");
        setTimeout(function() {
            document.getElementById("inputantwoord").classList.remove("is-invalid");
        }, 2000); // Delay feedback for 2 seconds
    }
}

function addToHistory(number, tableof, correctanswer) {
    let historyList = document.getElementById("history-list");
    let listItem = document.createElement("li");
    listItem.classList.add("list-group-item");
    listItem.textContent = number + " x " + tableof + " = " + correctanswer;
    historyList.appendChild(listItem);
}
