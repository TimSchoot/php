let tableof = 2.5
let tabletimes = 3.3


function displayQuestion()
{
    let opgtekst = ""
    let tafeltot = document.getElementById("inputtafellengte").value
    let tafelvan = document.getElementById("inputtafelvan").value
    tableof = tafelvan
    let randomnumber = Math.floor(Math.random() * tafeltot) + 1
    tabletimes = randomnumber
    opgtekst = randomnumber + " x " +  tafelvan
    document.getElementById("inputsom").value = opgtekst
    document.getElementById("inputantwoord").value = ""
    document.getElementById("inputantwoord").focus()
}

function checkAnswer()
{
    let answer = document.getElementById("inputantwoord").value
    let correctanswer = tableof * tabletimes
    if(answer == correctanswer)
        document.getElementById("inputantwoord").classList.add("is-valid")
    else
        document.getElementById("inputantwoord").classList.add("is-invalid")
}