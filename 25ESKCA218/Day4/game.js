const apple = document.getElementById("apple");
const banana = document.getElementById("banana");
const gameArea = document.getElementById("gameArea");
const score = document.getElementById("score");

let points = 0;

function randomPosition(fruit){

    let maxX = gameArea.clientWidth - 60;
    let maxY = gameArea.clientHeight - 60;

    let x = Math.random() * maxX;
    let y = Math.random() * maxY;

    fruit.style.left = x + "px";
    fruit.style.top = y + "px";
}

function moveFruits(){
    randomPosition(apple);
    randomPosition(banana);
}

apple.onclick = function(){

    points += 10;

    score.innerHTML = "Score : " + points;

    randomPosition(apple);
}

banana.onclick = function(){

    points += 5;

    score.innerHTML = "Score : " + points;

    randomPosition(banana);
}

moveFruits();

setInterval(moveFruits,800);