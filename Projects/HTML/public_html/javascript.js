/* global deset, red */

var h1 = document.querySelector("h1");
var push = document.querySelector("#push");
barvaH1 = "black";
$deset = 0;
push.addEventListener("click", function(){
    deset++;
    if(deset === 10){
        h1.style.backgroundColor = red;
    }
    if(barvaH1 == "black"){
        h1.style.color = "yellow";
        barvaH1 = "yellow";
    }
    else if (barvaH1 == "yellow"){
        h1.style.color = "black";
        barvaH1 = "black";
    }
})