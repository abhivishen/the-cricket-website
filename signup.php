<script src="js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/signup.css" />
<div class='error' style="background:red;color:white;display:none;">username already registered</div>
<div class="a">
<form action='javscript:void(0);' id="alpha">
<input type ="text" name="Fname" id="Fname" placeholder="Coach's Name">
<input type ="text" name="Mname" id="Mname" placeholder="Captain's Name">
<input type ="text" name="Ltitle" id="Ltitle" placeholder="Team's Name">
</br>

</br>
<input type ="text" name="addr" id="addr" placeholder="enter the address of the team">
</br>
<input type ="text" name="city" id="city" placeholder="City Name">
</br>
<input type ="text" name="state" id="state" placeholder="State">
</br>
<input type ="number" name="pin" min="100000" max="999999" placeholder="PIN">
</br>
<input type = "text" name="country" id="country" placeholder="country">
</br>
<input type="text" id="user" name="user" placeholder="Enter a Username">
</br>
<input type="password" id="pass" name="pass" placeholder="Enter your Password">
</br>
<input type="password"  name="password" id="repass" placeholder="Re Enter your Password">
</br>
<div id="submit_button">Push</div>
</form>
</div>

<script type='text/javascript'>
$("#submit_button").click(function(){
	var nameA = $("#Fname").val();
	var nameB = $("#Mname").val();
	var nameC = $("#Ltitle").val();
	var Postal_code = $("#pin");
	var pass = $("#pass").val();
	var user = $("#user").val();
    if(nameA.length >2){
		if(nameB.length>2){
			if(nameC.length>2){
				if(postal_code.length>6){
					if(user.length>5){
						$("#alpha").submit(function(){
						var form_data= $("#alpha").serialize();
					$.ajax({
					url:"submit1.php",
					type:"GET",
					data:form_data,
					success: function(x){
					$("#a").html(x)
					}
				});	
			});
				
				//form submit
			}
			else{
					$(".error").html("Username is not suitable!! try another").show();	//username too small
					} 
				$(".postal_code").html("the postal code is good to go").show();
				}
				else{
					$(".error").html("postal code is not from india").show();
					//postal code too 
					}
				$(".nameC").html("title is good to go").show();
				
			}else{
				$(".error").html("title error").show();
			}
		$(".nameB").html("middle name is good to go").show();
		}else{
			$(".error").html("middle name error").show();
		}
		$(".nameA").html("first name is good to go").show();
	}
	else{
		$(".error").html("Too short name value").show(200);
	}
});
</script>
<script type='text/javascript'>
$("#user").keyup(function(){
	var username = $(this).val();
$.ajax({
							url:'internal_query.php',
							type:'GET',
							data:"user=" + username + "&trigger=username_check",
							success:function(a){
								if(a == "exist"){
									$(".error").slideDown(200).delay(2000).fadeOut(200);
								}
								else{
									
								}
							}
						});
	});
</script>
<script type='text/javascript'>
$("#alpha").submit(function(){
	var form_data= $("#alpha").serialize();
	$.ajax({
		url:"submit1.php",
		type:"GET",
		data:form_data,
		success: function(x){
			$("#a").html(x)
		}
	});	
});


</script>