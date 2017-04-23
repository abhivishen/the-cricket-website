<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<html>
<!-- upper menu bar -->
<div class = "upper_console">
	<div id = "home" >Home<a href="index.php"></a></div>
	<div id="events">Events<a href="events.php"></a></div>
	<div id="teams" >Teams<a href="teams.php"></a></div>
	<div id="about_us" >About<a href="about.php"></a></div>
	<div id="signup"><a href="signup.php">Register</a></div>
	<div id="login"><a href="login.php">Login</a></div>
	
</div>
<!-- events slider -->
<div id="event_slider">
<div class='wrapper_event_slider'>
	<div class="image_box">
		<img src="../photos/banner.png">
	</div>
	<div class="image_box">
		<img src="../photos/event4.jpg">
	</div>
	<div class="image_box">
		<img src="../photos/event2.jpg">
	</div>
	<div class="image_box">
		<img src="../photos/event3.jpg">
	</div>
	</div>
	
	<div id='next'>next</div>
	<div id='prev'>prev</div>
</div>

	
	
	
<!-- organizer details.. -->
<div class="organizers">
    <div id="organizer1">
		<div class="wrapper">
			<div class='textInWrapper'>
				Shiv Kumar Mall is the former player of baba mahendranath cricket team and currently serving as the president of Vishen Cricket Association. He is also a trusty of the club and produce a huge amount of money for all the events.
			</div>
		</div>
	</div>
	<div id="organizer2">
		<div class="wrapper">
			<div class="textInWrapper">
				Jayant Mall/Rishu Mall is a player of the Baba Mahendranath Cricket Club and currently the lead organizer of all the events he also serve as the manager of the club.
			</div>
		</div>
	</div>
	<div id="organizer3">
		<div class="wrapper">
			<div class="textInWrapper">
				Amrendra Mall/Sanu Mall is an important asset to the vishen Cricket Association and also the captain of the team, he also work as a lead organizer of all the events of the club....
			</div>
		</div>
	</div>
	<div id="organizer4">
		<div class="wrapper">
			<div class="textInWrapper">
				image 4
			</div>
		</div>
	</div>
</div>
<!-- bottom text area.. -->
<div id="lower_area">I am working on this dumb project and I will make it better..</div>
</html>

<!-- javascript started.. -->

<script type= "text/javascript" >
$("#home").click(function(){
	var result= str.link()
	document.getElementById("demo").innerHTML = result;
});
//<div class="dot"><img src="../photos/dots.png"></div>
</script>

<script type="text/javascript">
/*$("#left").click(function(){
	var value = $(this).css("margin-left");
	switch(value){
		case "-2023.5px":{
			$("#left img").css("margin-left","0%");
		}
		break;
		case "-1349px":{
			$("#left img").css("margin-left","-300%");
		}
		break;
		case "-674.5px":{
			$("#left img").css("margin-left","-200%");
		}
		break;
		case "0px":{
			$(".image_box img").css("margin-left","-100%");
		}
		break;
	}*/
	
	var imageIndex=1,i;
	var totalImage=document.getElementsByClassName("image_box");
	var temp=totalImage.length;
	var nextImage = document.getElementById("next");
	var prevImage = document.getElementById("prev");
	nextImage.onclick = function(){
		for(i=0;i<temp;i++){
			imageIndex++;
		if(imageIndex>temp){imageIndex=1}
		totalImage.style.width="i*100%";
		}	
	}
</script>
