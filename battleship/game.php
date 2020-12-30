<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
#logo
{
background-image: url(data:image/png;base64,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);
background-size: 120px 80px;
background-position:right;
background-repeat: no-repeat;
background-origin:border-box;

width: 120px;
height: 600px;
}



#setBoard{
    background-image: url(img/water.png);
    background-repeat: repeat;
}
#playBoard{
    background-image: url(img/water.png);
    background-repeat: repeat;
}

#canvas-container {
   width: 100%;
   text-align:center;
}

canvas {
   display: inline;
}

</style>

</head>
<body style="background-color:#13284c;">
<div class="header" style="background-color: #c41230;float:top;">     
        <h1 id="title" style="color:white;text-align:center">
            <?php
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username']. " ";
                }

            ?>
            Set up your ships
        </h1>
    </div>

<div id="inst" style="font-size:27px; color: white; ">
<ul>
<li>Left click on a ship to move it </li>
                      <li>Once clicked right click to change orientaion </li>
            <li>Left click again to place ship on board </li>
                      <li>Once all ships are placed click Ready!!</li>
                      <li>If the game show u are always your turn, mean u alrealy loose
            </ul></div>


    <div id="logo" style="float:left;"></div>
    <div id="logo" style="float:right;"></div>

<section id="board">
<div id="content" style="float:center">
          
    <div id="canvas-container">
        <h1 style="color:white">Player Board</h1>
<canvas id="setBoard" width="500" height="500" ></canvas>
<br>
<br>
<p style="color:white">Game Timer</p>
<p id="timer" style="color:white"></p>
<br>
<div id="turn" style="color:white"></div>
<h1 style="color:white">Enemy Board</h1>
<canvas width="500" height="500" id="playBoard"></canvas>
<br>
<!-- <button onclick="whogoFirst()" value="Starrtgame">Check who go fist</button> -->
<button id="start" onclick="getData()" value="Startgame">Ready</button>

<script>
//////////////////////////////////////////////////Random number to decide who goes first/////////////////////////////////////
const turnNum = Math.floor((Math.random()*100)+1);
window.setupcheck = true;
//////////////////////////////////////////////////hit img//////////////////////////////////////////////////////////////////////
const hitImg = document.createElement("img");
hitImg.src = "img/pngegg.png";
let pickShip = undefined;
/////////////////////////////////////////////////miss img//////////////////////////////////////////////////////////////////////
const missImg = document.createElement("img");
missImg.src ="img/miss_image.png";

/////////////////////////////////////////button to turn some function off, like Place the boat function ////////////////////////////////////////////////
var butt = 'off';

/////////////////////////////////////////draw grid for set Board/////////////////////////////////////////////////////////////////////////
function draw(){
        var canvas = document.getElementById('setBoard');
        if(!canvas.getContext) return;
        var ctx = canvas.getContext("2d");
      
        for (let row = 0; row < 10; row += 1) {
                for (let col = 0; col < 10; col += 1) {
                    let S = row * 50;
                    let Z = col * 50;
        ctx.strokeRect(S, Z, 50, 50);  
                }
        }
    }
    /////////////////////////////////////to set up the ship's img for Vertical and horizontal and size/////////////////////////////////
    const shipName=[
    {size:2, img:"img/ppv.png", imgv:"img/pp.png"},
    {size:3, img:"img/subv.png", imgv:"img/sub.png"},
    {size:3, img:"img/disv.png", imgv:"img/dis.png"},
    {size:4, img:"img/batterv.png", imgv:"img/batter.png"},
    {size:5, img:"img/carr.png", imgv:"img/carrv.png"}];
const PB = shipName[0];
const SUP = shipName[1];
const DD = shipName[2];
const BB = shipName[3];
const CV = shipName[4];



let mouseX = 0;
let mouseY = 0;
////////////////////////////////////////////////The class of ships, inclue loction and display the img of ship//////////////////////////////////////
class ship {
    constructor(name, X, Y, direction){
        this.name = name;
        this.X =X;
        this.Y=Y;
        this.direction=direction;
        this.vx = 0;
        this.vy = 0;
        if(direction = "V"){
            this.vx = this.name.size * 50 + this.X;
            this.vy = 50 + this.Y;
        }else {
            this.vx = 50 + this.X;
            this.vy = this.name.size * 50 + this.Y;
        }
    }

    get x(){
        return this.X;
    }
    set x(x){
        this.X =x;
        this.vx = (this.direction=="H" ? this.name.size : 1) * 50 + this.X;
    }
    get y(){
        return this.Y;
    }
    set y(y){
        this.Y = y;
        this.vy = (this.direction=="H" ? 1 : this.name.size) * 50 + this.Y;
    }
    get Direction(){
        return this.direction;
    }
    set Direction(direction){
        this.direction = direction;
        this.x = this.X;
        this.x = this.Y;
    }
    display(ctx){
        ctx.save();
        var img = document.createElement("img");
        img.src= this.name.img;
        var imgv = document.createElement("img");
        imgv.src = this.name.imgv;
        if (!img.complete || !imgv.complete) {
        window.requestAnimationFrame(displayShips);
        return;
    }

        if(this.direction == "H"){
          ctx.drawImage(img, this.X,this.Y,50*this.name.size,50)
          ctx.restore();
        }else if(this.direction == "V"){
          ctx.drawImage(imgv, this.X,this.Y,50,50*this.name.size)
          ctx.restore();
        }
    }
    describe() {
        const x = this.x / 50;
        const y = this.y / 50;
        const positions = new Array(this.name.size)
            .fill(0)
            .map((_, index) => (this.Direction=="H" ? [x + index, y] : [x, index + y]));
        return {
            positions
        };
    }
}
/////////////////////////////////////////Initial position of the ship/////////////////////////////////////////////
var ships = [
    new ship(CV, 0, 50, "H"),
    new ship(BB, 50, 100, "H"),
    new ship(SUP, 100, 150, "H"),
    new ship(DD, 100, 200, "H"),
    new ship(PB, 150, 250, "H")];

var enemyShips = [];
var playerPos;
var enemyPos;
var displaytheturn;

    whogoFirst();
    



///////////////////////////////////////////////////////////////get enemy postion////////////////////////////////////////////////////
    function getData(){
            //enemy
            var jason = JSON.stringify(ships.map((s) => s.describe()));
            var request = new XMLHttpRequest();
    
        request.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200) {
                        var tmpj = this.responseText;
                         playerPos = JSON.parse(tmpj);
                        

            }
        }
                request.open("GET", "getPlayerInfo.php?Pos=" + jason, true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                request.send();
                    // player
                var request1 = new XMLHttpRequest();
                
                    request1.onreadystatechange = function(){
                                if(this.readyState == 4 && this.status == 200) {
                                    var tmpj = this.responseText;
                                    if(tmpj == ""){
                                            alert("Enemy Position not set check the ready botton again again");
                                            return;
                                        }
                                    enemyPos = JSON.parse(tmpj);
                                    //console.log(enemyPos);
                                    var tmpD = [];
                                    var x1 = [];
                                    var x2 = [];
                                    var y1 = [];
                                    for(var i = 0; i < 5; i++){
                                        x1.push(enemyPos[i]["positions"][0][0]);
                                        //console.log(x1);
                                        x2.push(enemyPos[i]["positions"][1][0]);
                                        y1.push(enemyPos[i]["positions"][0][1]);
                                        if(x1[i] == x2[i]){
                                            tmpD.push("V");
                                        }
                                        else{
                                            tmpD.push("H");
                                        }
                                        x1[i] = x1[i]*50;
                                        y1[i] = y1[i]*50;
                                        
                                        
                                    } 
                                    enemyShips = [ 
                                            new ship(CV, x1[0], y1[0], tmpD[0]),
                                            new ship(BB, x1[1], y1[1], tmpD[1]),
                                            new ship(SUP, x1[2], y1[2], tmpD[2]),
                                            new ship(DD, x1[3], y1[3], tmpD[3]),
                                            new ship(PB, x1[4], y1[4], tmpD[4])
                                        ];
                                        //hide html elements no longer needed 
                                        
                                        hidebutton();
                                        shownames();

                                        


                    } 
            }
                request1.open("GET", "getEnemyInfo.php", true);
                request1.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                request1.send();
    } 
///////////////////////////////////////////////display both player names/////////////////////////////////////////////////////////
    function shownames(){
        //display who you are against
                var request = new XMLHttpRequest();
    
                request.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200) {
                        var tmp = this.responseText;
                        document.getElementById("title").innerHTML = tmp;
                    }
                }
                request.open("GET", "getName.php", true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                request.send();

    }
///////////////////////////////////////////////////Decide who goes first//////////////////////////////////////
function whogofirst(){
    var request = new XMLHttpRequest();
    
                request.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200) {
                        var tmp = this.responseText;
                        
                    }
                }
                request.open("GET", "whoFirst.php?num="+turnNum, true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                request.send();
}
whogofirst();
var turn;
///////////////////////////////////////////////////Decide who goes first//////////////////////////////////////
function whogoFirst(){
var request22 = new XMLHttpRequest();
                            request22.onreadystatechange = function(){
                                if(this.readyState == 4 && this.status == 200) {
                                        var tmpj = this.responseText;
                                        //console.log(tmpj);
                                        turn = tmpj;
                                        return turn;
                                        //alret(tmpj);
                                }
                            };request22.open("GET", "getTurn.php", true);
                            request22.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                            request22.send();
            }
                    
/////////////////////////////////////////////make readly button disappear/////////////////////////////////////////////////////
    function hidebutton(){
        //hide buttons
        if(butt = 'off'){
        butt = 'on';
        }
        else{
        butt = 'off';
        }
        var sbutton = document.getElementById("start");
        sbutton.remove();
        var inst = document.getElementById("inst");
        inst.remove();
       start();
         
        ///////////////////////////////////////////////////////////////////////////////////////////
        
    }

    //console.log(turn);

    ////////////////////////////////////////////////////////////make grid on play board///////////////////////////////////////////////////////
    function draw2(){
        var canvas = document.getElementById('playBoard');
        if(!canvas.getContext) return;
        var ctx = canvas.getContext("2d");
      //draw the lines on the canvas
        for (let row = 0; row < 10; row += 1) {
                for (let col = 0; col < 10; col += 1) {
                    let S = row * 50;
                    let Z = col * 50;
                    ctx.strokeRect(S, Z, 50, 50);  
                }
        }
    }
    
    ////////////////////////////////////////////////////////////////////display the ships/////////////////////////////////////////////////////
   function displayShips() {
    
    const board = document.getElementById('setBoard');
    const context = board.getContext('2d');
    context.clearRect(0, 0, 500, 500);
    draw();
    if (pickShip !== undefined) {
        const Z = 50 * Math.round(ships[pickShip].x / 50);
        const S = 50 * Math.round(ships[pickShip].y / 50);
    }
   
   ships.forEach((s) => s.display(context));

}

draw();  //make grid at set up board
draw2();  // make grid at enemy board
displayShips();  //display the ships

////////////////////////////////////////////////////////////to get ship's position//////////////////////////////////////////////////////////
function find_ship(x, y) {        
    let poe = undefined;
    ships.forEach((ship, index) => {
        if (ship.x <= x && ship.y <= y && ship.vx >= x && ship.vy >= y) {
            poe = index;
        }
    });
    return poe;
}



///////////////////////////////////////function that Let the mouse drag the ship to place it on the map.///////////////////////////////
function playersetup() {
       
    const game = document.getElementById("setBoard");
    game.onmousemove = function (e) {    //////////////Move the mouse     
        game.style.cursor = "default";
        const x = e.offsetX;
        const y = e.offsetY;
        const ship = find_ship(x, y);
        if (ship !== undefined) {
            game.style.cursor = "move";
        }
        if (pickShip !== undefined) {
            ships[pickShip].x = x - mouseX;
            ships[pickShip].y = y - mouseY;
            displayShips();
        }
    };
    
    game.onclick = function (e) { ///Place and pick up
        if (butt == "off"){
           //console.log(butt);
        const x = e.offsetX;
        const y = e.offsetY;
        if (pickShip !== undefined) {
            ships[pickShip].x =
                50 * Math.round(ships[pickShip].x / 50);
            ships[pickShip].y =
                50 * Math.round(ships[pickShip].y / 50);
            pickShip = undefined;
            displayShips();
            return;
        }
        pickShip = find_ship(x, y);
        if (pickShip == undefined) {
            return;
        }
        mouseX = x - ships[pickShip].x;
        mouseY = y - ships[pickShip].y;
        }
    //butt = "on";
    };
    game.oncontextmenu = function (e) {   //right click to change the direction of Vertical and horizontal
        const x = e.offsetX;
        const y = e.offsetY;
        if (pickShip !== undefined) {
            e.preventDefault();
            if(ships[pickShip].Direction == "H"){
            ships[pickShip].Direction = "V";
            }else if(ships[pickShip].Direction == "V"){
                ships[pickShip].Direction = "H"
            }
            
            [mouseX, mouseY] = [mouseY, mouseX];
            ships[pickShip].x = x - mouseX;
            ships[pickShip].y = y - mouseY;
            displayShips();
        }
    };

}
playersetup();
var PC = [];


////////////////timer///////////////////////////////////////////////////////////////////////////////////////////////////
var theTime;
var hour,minute,second;
  hour=minute=second=0;
  var millisecond = 0;
var int;
function start(){        // for start the timer
    int = setInterval(timer,50);
}

function timer(){
    millisecond=millisecond+50;
   if(millisecond>=1000)
   {
    millisecond=0;
    second=second+1;
   }
   if(second>=60)
   {
    second=0;
    minute=minute+1;
   }
  
   if(minute>=60)
   {
    minute=0;
    hour=hour+1;
   }
   document.getElementById('timer').innerText = toDub(hour)+':'+toDub(minute)+':'+toDub(second);
  }
  function stop()//to stop the timer and return the time
  {
   window.clearInterval(int);
    theTime = minute*60 + second;
  return theTime;
}
  function toDub(n){     //Show two digits like: 00:00:00
    return n<10?"0"+n:""+n;
  }
var gamefinish= 0;
///////////////////////////////////////////////put the enemy on the play board///////////////////////////////////////////////
function enemysetup() {          
    const game1 = document.getElementById("playBoard");
    game1.onclick = function (e) {
 
        if(butt != "off" && turn != 0){
            // MAKE TORPEDO FUNCTION
           //drawenemy();
           changeturn();
                    var x = e.offsetX;
                    var y = e.offsetY;
                    x = Math.floor(x / 50) * 50;
                    y = Math.floor(y / 50) * 50;
                    //checking for dup inputs
                        for (var j = 0; j < PC.length; j++) {
                            var enemyX = PC[j][0]*50;
                            var enemyY = PC[j][1]*50;
                            
                            if (enemyX == x && enemyY == y) {
                                alert("error you already clicked there");
                                return;
                            }
                        }
                    
                    var request1 = new XMLHttpRequest();
                        
                        request1.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200) {
                                        var tmpj = this.responseText;
                                        
                                        PC = JSON.parse(tmpj);
                                       
                                        var sumtowin = 0;
                                        //draw hits on enemy board
                                        
                                        const pcontext = game1.getContext("2d");
                                        
                                        for (var j = 0; j < PC.length; j++) {
                                            var flag = true;
                                            for (var i = 0; i < enemyPos.length; i++) {
                                                for (var k = 0; k < enemyPos[i]["positions"].length; k++) {
                                                            var enemyX = PC[j][0];
                                                            var enemyY = PC[j][1];
                                                            var playerX = enemyPos[i]["positions"][k][0];
                                                            var playerY = enemyPos[i]["positions"][k][1];
                                                            if (enemyX == playerX && enemyY == playerY) {
                                                            
                                                            pcontext.drawImage(hitImg, playerX * 50, playerY * 50,50,50);
                                                            flag = false;
                                                            sumtowin++;
                                                            }
                                                }          
                                                
                                            }
                                                if (flag){
                                                    pcontext.drawImage(missImg, enemyX * 50, enemyY * 50,50,50);
                                                } 
                                                if (sumtowin >16){
                                                    var time = stop();
                                                   // gamefinish =1;
                                                   alert("winwin");
                                                    window.location.href = "clearnTable.php?won=" + 1 + "&time=" + time + "&round=" + 1;
                                                }
                                         }
                                    }   
                                }
                            request1.open("GET", "sentHit.php?x=" + x +"&y="+ y, true);
                            request1.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                            request1.send();
        
                            var request12 = new XMLHttpRequest();
            }

        
    };

} 
///////////////////////////////////////////////////////////////Make turn change///////////////////////////////////////////////////////
function changeturn(){
    var request12 = new XMLHttpRequest();
     request12.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
                 var tmpj = this.responseText;
                    //console.log(tmpj);
                            
                     }
        }
     request12.open("GET", "changeTurn.php?da=" +turn, true);
     request12.setRequestHeader("Content-type", "application/x-www-form-urlencode");
     request12.send();
}
enemysetup();
//////////////////////////////////////////////////////////////////////////diplay the hit on the pleyer board and show u who lost////////////////////
function drawenemy(){
    if(butt != "off" && turn != 0){
    var enemyHit;
                    var request1 = new XMLHttpRequest();
                        
                        request1.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200) {
                                        var tmpj = this.responseText;
                                        
                                        enemyHit = JSON.parse(tmpj);
                                        
                                        var sumttoloose = 0;
                                        //draw hits on enemy board
                                        const pboard = document.getElementById("setBoard");
                                        const pcontext = pboard.getContext("2d");
                                        //console.log(playerPos);
                                        for (var j = 0; j < enemyHit.length; j++) {
                                            var flag = true;
                                            for (var i = 0; i < playerPos.length; i++) {
                                                for (var k = 0; k < playerPos[i]["positions"].length; k++) {
                                                            var enemyX = enemyHit[j][0];
                                                            var enemyY = enemyHit[j][1];
                                                            var playerX = playerPos[i]["positions"][k][0];
                                                            var playerY = playerPos[i]["positions"][k][1];
                                                            if (enemyX == playerX && enemyY == playerY) {
                                                            //console.log(enemyX, enemyY, playerX, playerY);
                                                            pcontext.drawImage(hitImg, playerX * 50, playerY * 50,50,50);
                                                            flag = false;
                                                            sumttoloose++;
                                                                    if ( sumttoloose > 16 ){
                                                                        alert("YOU LOST");
                                                                        var time = stop();
                                                                        
                                                                        //console.log(sumttoloose);
                                                                        window.location.href = "clearnTable.php?won=" + 0 + "&time=" + time + "&round=" + 1;
                                                                    }
                                                            }
                                                }          
                                            }
                                                if (flag){
                                                    pcontext.drawImage(missImg, enemyX * 50, enemyY * 50,50,50);
                                                } 
                                         }
                                    }   
                                }
                            request1.open("GET","getHit.php", true);
                            request1.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                            request1.send();  
                            //turnturn();
                }
            }                    
/////////////////////////////////////////////////////////////////////////////// display the turn/////////////////////////////////////
            function turnturn(){
            var request13 = new XMLHttpRequest();
                        request13.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200) {
                                        var tmpj = this.responseText;
                                        turn = tmpj;
                                        //console.log(turn);
                                        if(turn == 1){
                                        displaytheturn=document.getElementById("turn").innerHTML = "<h3>Your Turn</h3></br>";
                                    }else if (turn ==0){
                                        displaytheturn=document.getElementById("turn").innerHTML = "<h3>Not your Turn</h3></br>";
                                    }
                                }
                                }
                                request13.open("GET","takeTurn.php", true);
                            request13.setRequestHeader("Content-type", "application/x-www-form-urlencode");
                            request13.send();
                            }
////////////////////////////////////////////////keep the data Synchronize//////////////////////////////////////////////////////////////////////////

// function GAMEOVER(){
//     var request13 = new XMLHttpRequest();
//                         request13.onreadystatechange = function(){
//                                     if(this.readyState == 4 && this.status == 200) {
//                                         var tmpj = this.responseText;
//                                         gamefinish = tmpj;
//                                         //console.log(turn);
                                        
//                                 }
//                                 request13.open("GET","gamefinish.php?obj="+ gamefinish, true);
//                             request13.setRequestHeader("Content-type", "application/x-www-form-urlencode");
//                             request13.send();
//                             }
//  }

var checkenemy = setInterval('drawenemy();turnturn();', 200);
// var checkenemy1 = setInterval('turnturn();', 600);
// var checkenemy2 = setInterval('turnturn();', 600);
</script>
</section>
</body>
</html>