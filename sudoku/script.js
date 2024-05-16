const sudokus = [
    [2,5,0,7,0,0,0,1,6,0,6,0,0,0,0,4,2,8,0,0,0,1,0,0,5,0,0,5,7,0,2,1,8,9,0,0,0,0,0,3,0,9,7,8,0,9,0,3,0,0,5,1,0,0,0,0,0,8,3,0,0,7,0,4,0,2,0,0,7,0,0,0,0,0,7,0,5,0,0,3,0],
    [0,0,9,0,0,0,0,0,8,6,0,7,4,1,0,0,5,0,0,0,2,0,5,0,0,0,7,0,9,0,1,0,7,6,0,0,0,4,0,0,9,6,3,0,0,8,6,3,0,0,4,7,0,9,5,3,6,0,0,0,0,7,0,0,0,0,7,8,0,0,3,0,0,7,0,0,0,0,0,9,2],
    [0,0,0,0,5,0,1,0,0,7,0,0,1,0,0,6,0,0,2,3,1,0,8,0,0,0,0,3,1,0,0,0,6,8,0,0,0,0,7,0,0,0,0,9,5,0,4,0,0,3,7,0,0,0,0,2,5,3,0,0,0,8,7,0,0,6,9,0,0,0,3,2,4,0,3,2,0,0,0,1,0],
    [6,0,0,5,1,8,0,0,0,4,2,1,0,0,0,0,0,0,0,8,0,0,3,0,6,9,1,0,0,0,1,0,2,7,5,8,5,1,6,0,0,0,2,0,0,0,0,0,9,5,3,0,6,0,0,0,0,0,0,0,0,1,7,3,9,8,7,0,1,0,0,6,0,5,0,8,4,6,0,2,0],
    [4,0,3,0,5,2,6,0,0,0,0,2,0,8,6,3,0,0,0,0,0,0,1,3,4,2,7,1,6,0,0,0,4,0,9,0,0,3,0,0,0,5,0,4,0,0,7,0,0,9,0,5,0,0,9,0,0,0,0,0,0,0,6,3,0,0,8,2,7,0,0,1,5,8,0,3,0,0,0,0,0],
    [0,0,2,0,0,0,4,3,8,4,3,9,0,0,5,0,0,2,8,0,0,2,0,3,0,0,5,6,0,0,9,5,0,0,0,0,5,9,4,0,0,0,8,2,0,7,0,0,0,6,4,0,9,0,0,0,0,0,0,8,1,6,0,0,4,0,0,0,0,0,0,0,2,8,0,4,0,9,3,0,0],
    [0,0,0,7,3,0,0,0,9,2,8,9,0,0,0,7,0,0,7,0,0,0,8,0,2,6,0,8,0,0,0,0,5,6,0,4,6,3,0,0,0,0,0,0,0,0,0,0,8,0,9,0,0,5,0,0,8,0,5,0,3,2,6,5,0,0,2,4,0,9,0,0,3,1,0,6,0,0,0,0,7]
];

let rij1 = [];
let rij2 = [];
let rij3 = [];
let rij4 = [];
let rij5 = [];
let rij6 = [];
let rij7 = [];
let rij8 = [];
let rij9 = [];
let kolom1 = [];
let kolom2 = [];
let kolom3 = [];
let kolom4 = [];
let kolom5 = [];
let kolom6 = [];
let kolom7 = [];
let kolom8 = [];
let kolom9 = [];
let blok1 = [];
let blok2 = [];
let blok3 = [];
let blok4 = [];
let blok5 = [];
let blok6 = [];
let blok7 = [];
let blok8 = [];
let blok9 = [];

let idmapping = [
    [0,0,0],
    [rij1,kolom1,blok1],[rij1,kolom2,blok1],[rij1,kolom3,blok1],[rij1,kolom4,blok2],[rij1,kolom5,blok2],[rij1,kolom6,blok2],[rij1,kolom7,blok3],[rij1,kolom8,blok3],[rij1,kolom9,blok3],
    [rij2,kolom1,blok1],[rij2,kolom2,blok1],[rij2,kolom3,blok1],[rij2,kolom4,blok2],[rij2,kolom5,blok2],[rij2,kolom6,blok2],[rij2,kolom7,blok3],[rij2,kolom8,blok3],[rij2,kolom9,blok3],
    [rij3,kolom1,blok1],[rij3,kolom2,blok1],[rij3,kolom3,blok1],[rij3,kolom4,blok2],[rij3,kolom5,blok2],[rij3,kolom6,blok2],[rij3,kolom7,blok3],[rij3,kolom8,blok3],[rij3,kolom9,blok3],
    [rij4,kolom1,blok4],[rij4,kolom2,blok4],[rij4,kolom3,blok4],[rij4,kolom4,blok5],[rij4,kolom5,blok5],[rij4,kolom6,blok5],[rij4,kolom7,blok6],[rij4,kolom8,blok6],[rij4,kolom9,blok6],
    [rij5,kolom1,blok4],[rij5,kolom2,blok4],[rij5,kolom3,blok4],[rij5,kolom4,blok5],[rij5,kolom5,blok5],[rij5,kolom6,blok5],[rij5,kolom7,blok6],[rij5,kolom8,blok6],[rij5,kolom9,blok6],
    [rij6,kolom1,blok4],[rij6,kolom2,blok4],[rij6,kolom3,blok4],[rij6,kolom4,blok5],[rij6,kolom5,blok5],[rij6,kolom6,blok5],[rij6,kolom7,blok6],[rij6,kolom8,blok6],[rij6,kolom9,blok6],
    [rij7,kolom1,blok7],[rij7,kolom2,blok7],[rij7,kolom3,blok7],[rij7,kolom4,blok8],[rij7,kolom5,blok8],[rij7,kolom6,blok8],[rij7,kolom7,blok9],[rij7,kolom8,blok9],[rij7,kolom9,blok9],
    [rij8,kolom1,blok7],[rij8,kolom2,blok7],[rij8,kolom3,blok7],[rij8,kolom4,blok8],[rij8,kolom5,blok8],[rij8,kolom6,blok8],[rij8,kolom7,blok9],[rij8,kolom8,blok9],[rij8,kolom9,blok9],
    [rij9,kolom1,blok7],[rij9,kolom2,blok7],[rij9,kolom3,blok7],[rij9,kolom4,blok8],[rij9,kolom5,blok8],[rij9,kolom6,blok8],[rij9,kolom7,blok9],[rij9,kolom8,blok9],[rij9,kolom9,blok9],
];

let activeCellId = 0;

let sudoku_string = "<ul>";
for(i=1; i<=81; i++){
    sudoku_string += `<li id="${i}" onclick="activateCell(${i})"><span></span></li>`;
}
sudoku_string += "</ul>";
document.getElementById("sudoku").innerHTML = sudoku_string;

function selectCijfer(cijfer)
{
    if (activeCellId == 0) {
        return
    }
     else {
        document.getElementById(activeId).innerText = cijfer;
        idmapping[activeId][0].push(cijfer);
        idmapping[activeId][1].push(cijfer);        
        idmapping[activeId][2].push(cijfer);        
    }
    console.log(rij1);
    console.log(kolom1);
    console.log(blok1);
}

function activateCell(id){
    if (document.getElementById(activeCellId).classList.remove("bg-primary-subtle") == true){
    } else{
    document.getElementById(activeCellId).classList.remove("bg-primary-subtle")
    activeCellId = id;
    document.getElementById(id).classList.add("bg-primary-subtle")}
}
function zetCijferinGrid(item, index)
{
    if(item == 0){
        document.getElementById(index+1).innerText = "";
        document.getElementById(index+1).classList.remove("bg-secondary-subtle");
    } else {
        document.getElementById(index+1).innerText = item;
        document.getElementById(index+1).classList.add("bg-secondary-subtle");
        idmapping[index+1][0].push(item);
        idmapping[index+1][1].push(item);
        idmapping[index+1][2].push(item);
    }
}

function newProblem()
{
    let random_nmbr = Math.floor(Math.random() * 7);
    let selected_sudoku = sudokus[random_nmbr];
    let index = 0;
    for(i = 1; i <= 81; i++){
        if(selected_sudoku[index] == 0){
            document.getElementById(i).innerText = "";
            document.getElementById(i).classList.remove("bg-secondary-subtle");

        } else {
            document.getElementById(i).innerText = selected_sudoku[index];
            document.getElementById(i).classList.add("bg-secondary-subtle");
        }
        index++;
    }
}