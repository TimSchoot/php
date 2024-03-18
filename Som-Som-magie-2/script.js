    // alert("de knop doet het")
    // genereer 4 random nummers tussen 0 en 20
    // daarna op basis van de 4 getallen uitlaten rekenen :
    // A1= b2+C3
    // D1= B3+C2
    // D2= B3+C2
    // D3= B3+C3
    // C4= C2+C3
    // B4= B2+B3
    // deze getallen op hun plek zetten
let opl_B2 = 0;
let opl_C2 = 0;
let opl_C3 = 0;
let opl_B3 = 0;
function generateProblem(){
    //stap 1:
    opl_B2 = Math.floor(Math.random()*21);
    opl_C2 = Math.floor(Math.random()*21);
    opl_C3 = Math.floor(Math.random()*21);
    opl_B3 = Math.floor(Math.random()*21);
    //stap 2:
    let inp_A1 = opl_B2 + opl_C3;
    let inp_D1 = opl_B3 + opl_C2;
    let inp_D2 = opl_B2 + opl_C2;
    let inp_D3 = opl_B3 + opl_C3;
    let inp_C4 = opl_C2 + opl_C3;
    let inp_B4 = opl_B2 + opl_B3;
    //stap 3:
    document.getElementById("inp_A1").value = inp_A1;
    document.getElementById("inp_D1").value = inp_D1;
    document.getElementById("inp_D2").value = inp_D2;
    document.getElementById("inp_D3").value = inp_D3;
    document.getElementById("inp_C4").value = inp_C4;
    document.getElementById("inp_B4").value = inp_B4;
    console.log(opl_B2, opl_C2, opl_C3, opl_B3);
}
function checkSolution(){
    let Answer_B2 = parseInt(document.getElementById("opl_B2").value);
    let Answer_B3 = parseInt(document.getElementById("opl_B3").value);
    let Answer_C2 = parseInt(document.getElementById("opl_C2").value);
    let Answer_C3 = parseInt(document.getElementById("opl_C3").value);

    if (
        Answer_B2 === opl_B2 &&
        Answer_C2 === opl_C2 &&
        Answer_B3 === opl_B3 &&
        Answer_C3 === opl_C3
    ) {
        alert("goed gedaan!");
    } else {
        alert("fout opnieuw kanker kind");
    }
}