function displaytafel()
{
    let tafelvan = document.getElementById("inputTafelVan").value
    let tafellengte = document.getElementById("inputTafelLengte").value
    let tafeltekst = "" 
    let uitkomst = 0 
    for (let teller = 1; teller <= tafellengte; teller++)
    {
        uitkomst = teller * tafelvan
        tafeltekst += teller + " x " + tafelvan + " = " + uitkomst + "<br>"
        
        if(teller % 10 == 0)
            tafeltekst += "<br>"
    }
    document.getElementById("tafel").innerHTML = tafeltekst
    document.getElementById("tafelheader").innerHTML = "Tafel van " + tafelvan
}