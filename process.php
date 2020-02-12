<html>
<head>
<title>Arun's Crap Game</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();



	$diceA = rand ( 1 , 6 );

$diceB = rand ( 1 , 6 );


	$sum= $diceA+$diceB;

$_SESSION['final'] = $sum;
	
?>

<body>


 <script type="text/javascript">
    function showImage()
    {
      document.getElementById('roll1').style.visibility="hidden";
	  document.getElementById('dice-A').style.visibility="hidden";
      document.getElementById('dice-B').style.visibility="hidden";
	   document.getElementById("rollnext").style.visibility="visible";
      document.getElementById("gifImage1").style.visibility="visible";
		 document.getElementById("gifImage2").style.visibility="visible";

		  		 setTimeout(rolldice, 1500);



    }

	function rolldice()
  {
		  var diceA= document.getElementById("random1").value;
		  var diceB= document.getElementById("random2").value;
		  
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
	    document.getElementById('score').style.visibility="visible";
	  
	    
	   
	}

</script>

<div id="wrapper">
<div id="innerwrap">
<center>
<span class="titletext">The Game Of Craps</span>
</center>
            

            <img src="dice-5.png"  alt="Dice" class="dice" id="dice-A">
            <img src="dice-4.png"  alt="Dice" class="dice" id="dice-B">
            <img src="gif1.gif"  alt="Dice" class="dice" id="gifImage1" style="visibility:hidden">
            <img src="gif2.gif"  alt="Dice" class="dice" id="gifImage2" style="visibility:hidden">
            
            <button class="btn-roll" onclick="showImage()" id ="roll1">Roll Dice </button>
            <form method ="post" action="next.php">
            <input class="btn-roll" type="submit" id ="rollnext" style="visibility:hidden" value="Place your Bet">
            
            </form>
             
            <button class="btn-new"  value="Refresh Page" onClick="window.location.reload()">New game </button>
            <br>
  			
            <br>
               <div id ="score" style="visibility:hidden">
               <input type ="text" value="<?php echo $diceA; ?>" id = "random1" style="visibility:hidden">
               <br>
            <input type ="text" value="<?php echo $diceB ?>" id = "random2" style="visibility:hidden"> 
            <br>
             <br>
              <br>
               <br>
                <br>
                 <br> 
                 <br> 
                 <br>
                 <br>
 					<br>
                <?php
			   		if ($sum=="12"){	
					
					echo "You rolled a sum of 12"."<br>";
					echo "Sorry You Lost"."<br>";
					}
					if ($sum=="11"){	
					
					echo "The sum is Eleven"."<br>";
					echo "YOU WIN!!! Congratulations"."<br>";
					
					}
					if ($sum=="10"){	
					
					echo "You rolled a sum of 10"."<br>";
					}
					if ($sum=="9"){	
					
					echo "You rolled a sum of 9"."<br>";
					}
					if ($sum=="8"){	
					
					echo "You rolled a sum of 8"."<br>";
					}
               		if ($sum=="7"){	
					
					echo "The sum is Seven"."<br>";
					echo "YOU WIN!!! Congratulations"."<br>";
										
					}
					
					if ($sum=="6"){	
					
					echo "You rolled a sum of 6"."<br>";
					}
					if ($sum=="5"){	
					
					echo "You rolled a sum of 5"."<br>";
					
					}
					if ($sum=="4"){	
					
					echo "You rolled a sum of 4"."<br>";
					}
					if ($sum=="3"){	
					
					echo "You rolled a sum of 3"."<br>";
					echo "Sorry You Lost"."<br>";
					}if ($sum=="2"){	
					
					echo "You rolled a sum of 2"."<br>";
					echo "Sorry You Lost"."<br>";
					}
					
				?>
                
               </div>
        </div>
        </div>
        </body>
        </html>
