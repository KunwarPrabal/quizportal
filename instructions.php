<?php
session_start();
if($_SESSION["regno"]==true && $_SESSION["Exam_id"]==true)
{
?>
<!DOCTYPE html>
<html lang="en">

<head>

<script type="text/javascript">
function toggleFullScreen() {

  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } /*else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  */
}
</script>

	<title>Student's Portal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_instruction.css">
	<link rel="stylesheet" type="text/css" href="css/main_instruction.css">
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
    <script type="text/javascript" src="jquery.fullscreen/release/jquery.fullscreen.min.js"> </script>
        <script type="text/javascript">
        $(function() {
            $('.open').click(function() {
                $('body').fullscreen();
                return false;
            });
            $('.close').click(function() {
                $.fullscreen.exit();
                return false;
            });
        });
        </script>
    
<script>

function formatTime(seconds) {
    var h = Math.floor(seconds / 3600),
        m = Math.floor(seconds / 60) % 60,
        s = seconds % 60;
    if (h < 10) h = "0" + h;
    if (m < 10) m = "0" + m;
    if (s < 10) s = "0" + s;
    return h + ":" + m + ":" + s;
}
var count = 120;//give the duration of timer here
var counter = setInterval(timer, 1000);

function timer() {
    count--;
    if (count < 0) return clearInterval(counter);
    document.getElementById('timer').innerHTML = formatTime(count);
}
function   FullScreenMode(){
        $(document).ready(function(){
 $(".nextbutton1").on("click", function() 
 {
  document.fullScreenElement && null !== document.fullScreenElement || !document.mozFullScreen && !document.webkitIsFullScreen ? document.documentElement.requestFullScreen ? document.documentElement.requestFullScreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullScreen && document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen()
 });	
});
    }  
   
function checkfullscreen()
{
	if((screen.availHeight || screen.height-30) <= window.innerHeight)
	{
	 window.open("./student_test.php","_self","detab","toolbar=0");
	}
	else
	{
	alert("Go full screen to take test");
	}
}
</script>
<style>
#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 150px;
    height: 80px;  
    	
}
</style>
</head>
<body background="images/background.jpg" onload="toggleFullScreen()">
	
	<div class="limiter" align="middle">
		<div class="container-login100">
			<div class="wrap4">
			
                <div class="logo1" align="middle">
					<img src="images/img-01.png" alt="IMG">
				</div>
				
				<div class="timeradd" id="rcorners2">
				<b>Time left</b>
			<p id="timer" class="time"></p>
			</div>
			
			
					<!--<span class="Instructions-title">
						 Instructions For The Quiz
					</span>-->
					<br>
					<div align="left">
					<ul>
					<br>
					<br>
					 <li align="center" ><u><b>INSTRUCTIONS FOR THE QUIZ </b></u></li>
					<br>
					<li>&bull; The Quiz contains <b>Multiple Choice Questions.</b></li>
					<li>&bull; Each of the Questions has only <b>one</b> correct answer.</li>
					<li>&bull; The time alloted for the Quiz is <b>20 Minutes</b>.</li>
					<li>&bull; After the alloted time all the marked questions will automatically be submitted.</li>
					<li>&bull; The marking is <b>+4 for correct answer, -1 for wrong answer and 0 for unanswered questions</b>.</li>
					<li>&bull; If any doubts regarding the question the remark can be dropped at the end of the exam.</li> 
					<li>&bull; Any form of cheating if found will be penalized.</li>
					<li align="center"><b>All the best!!</b></li>
					</ul>
					<!--<p style="font-size: 100" align="center"><b>  </b></p>-->
					
					</div>
		
					<div class="nextbutton1 ">
						<button class="next1" onclick="checkfullscreen();" >
						Enter Test
					</button>
					</div>
					<!--<div>
					<button class="login100-form-btn" >
						<a href="student.html" class="front-btn">
								Take Test
						</a>
					</button>
					</div>-->

					
				
			</div>
		</div>
	</div>
	<script>
		document.onkeydown = function(event) 
{ 
switch (event.keyCode) { 
case 116: //F5 button 
event.returnValue = false; 
event.keyCode = 0; 
return false; 
case 82: //R button 
if (event.ctrlKey) { 
event.returnValue = false; 
event.keyCode = 0; 
return false; 
} 
} 
}
document.addEventListener('contextmenu', event => event.preventDefault());
		</script>
	
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
}
else
{
header('location:./student.php');
}
?>