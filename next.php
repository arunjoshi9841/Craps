<html>
<head>
<title>Arun's Crap Game</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
	
?>

<body >


 <script type="text/javascript">
    function showImage()
    {
	  document.getElementById('dice-A').style.visibility="hidden";
      document.getElementById('dice-B').style.visibility="hidden";
	   
      document.getElementById("gifImage1").style.visibility="visible";
		 document.getElementById("gifImage2").style.visibility="visible";

		  		 setTimeout(rolldice, 1500);



    }

	function rolldice()
  {
	  var diceA= Math.floor((Math.random() * 6) + 1);
	  var diceB=  Math.floor((Math.random() * 6) + 1);
	  var sum = diceA+diceB;
      var str1 = "dice-";
var str2 = ".png";
var imagename1 = str1.concat(diceA, str2);
var imagename2 = str1.concat(diceB, str2);


            document.getElementById("gifImage1").style.visibility="hidden";
            document.getElementById("gifImage2").style.visibility="hidden";
			  document.getElementById('dice-A').src=imagename1;
			  document.getElementById('dice-B').src=imagename2;
        document.getElementById('dice-A').style.visibility="visible";
       document.getElementById('dice-B').style.visibility="visible";
	   
	 
	 
	var bet = document.getElementById('bet').value;
			   		if (sum=="12"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 12";
					}
					if (sum=="11"){	
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 11";
					
					
					}
					if (sum=="10"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 10";
					}
					if (sum=="9"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 9";
					}
					if (sum=="8"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 8";
					}
               		if (sum=="7"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 7";
					document.getElementById("finalresult").innerHTML = "Sorry You lost!!";
					document.getElementById("roll1").style.visibility="hidden";
					}
					
					if (sum=="6"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 6";
					}
					if (sum=="5"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 5";
					}
					if (sum=="4"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 4";
					}
					if (sum=="3"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 3";
					}if (sum=="2"){	
					
					document.getElementById("sumresult").innerHTML = "You rolled a sum of 2";
					}
					document.getElementById('output1').style.visibility="visible";	
			 document.getElementById('output2').style.visibility="visible";	
				document.getElementById('sumresult').style.visibility="visible";
				if (sum==bet){	
					
					document.getElementById("finalresult").innerHTML = "You rolled Your Bet. You win!!! Congratulation";
					document.getElementById("roll1").style.visibility="hidden";
					}
					if (sum!= bet && sum!="7"){	
					document.getElementById("finalresult").innerHTML = "Roll Again";
					}
				
			 document.getElementById('finalresult').style.visibility="visible";	
			 
	   
	}
					
	   
	

</script>

<div id="wrapper">
<div id="innerwrap">
<center>
<span class="titletext">The Game Of Craps <br> You placed your bet on:<input type="text" id ="bet" value="<?php echo $_SESSION['final'] ?>" readonly maxlength="2"></span>

</center>
            

            <img src="dice-5.png"  alt="Dice" class="dice" id="dice-A">
            <img src="dice-4.png"  alt="Dice" class="dice" id="dice-B">
            <img src="gif1.gif"  alt="Dice" class="dice" id="gifImage1" style="visibility:hidden">
            <img src="gif2.gif"  alt="Dice" class="dice" id="gifImage2" style="visibility:hidden">
            
            <button class="btn-new" onclick="showImage()" id ="roll1" >Roll Dice </button>
            
               <form method ="post" action="process.php">
            <input type="submit" id ="newgame"  value="New Game">
            
            </form>
            
            <div id ="output1" style="visibility:hidden">
            <center>
  			<h3 id ="sumresult" style="visibility:hidden"> hello</h3><br>
               
                </center>
               </div> 
                 
                <div id ="output2" style="visibility:hidden">
            <center>
  			<h3 id ="finalresult" style="visibility:hidden"> hello</h3><br> 
               
                </center>
               </div>   
                       
        </div>
        </div>
        </body>
        </html>
