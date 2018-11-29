$(".loggedin").hide();
$("#wrongPW").hide();
$("#PWMM").hide();

$("#loginbtn").on("click",function(){

	username = $("#UName").val();
	pw = $("#PW").val();
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/login",
			dataType : "text",
		data:{
        	username: username,
        	pw: pw
        }}).done(function(data){
        	console.log(data)
        	if(data!=null){
        	data=JSON.parse(data)
        	if(data.isuser==true){
        		window.location.replace(baseurl+"/handlers/senators")
        	}
        	else{
        		$("#wrongPW").show();
        	}
        }
        })
		
		return false;
})

$("#signupbtn").on("click",function(){
	$.ajax({
		url : baseurl + "/handlers/signup"
	})
        window.location.replace(baseurl+"/handlers/signup")
    	return false;
 })

$("#signupconfirm").on("click",function(){
	if($("#PW").val()!=$("#PWC").val()){
		$("#PWMM").show();
	}
	else{
	$("#PWMM").hide();
	username = $("#UName").val();
	pw = $("#PW").val();
	state=$("#State").val()
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/signupconfirm",
			dataType : "text",
		data:{
        	username: username,
        	pw: pw,
        	state: state
        }}).done(function(){ window.location.replace(baseurl+"/handlers/senators") })


	}

    	return false;
 })

$("#changeState").on('click',function(){
	$("#states").show()
})

$("#changeUName").on('click',function(){
	$("#tBox").show()
})

$("#State").change(function(){

	user = $("uid").text();
	state = $("#State").val();
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/changeState",
			dataType : "text",
		data:{
        	user: user,
        	state: state
        }}).done(function(data){
        	if(data!=null){
        	data=JSON.parse(data)
			$("state").text(data)
			$("#states").hide()
			}
		})
})

$("#tBox").on('blur', function() {

	user = $("uid").text();
	username = $("#tBox").val();
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/changeUName",
			dataType : "text",
		data:{
        	user: user,
        	username: username
        }}).done(function(data){
			if(data!=null){
        	data=JSON.parse(data)
			$("username").text(data)
			$("#tBox").hide()
			}

        })

})

$("#changePW").on('click',function(){
	$("#pBox").show()
$("#pBox").on('blur', function() {

	user = $("uid").text();
	PW = $("#pBox").val();
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/changePW",
			dataType : "text",
		data:{
        	user: user,
        	PW: PW
        }}).done(function(data){
        	alert("Password successfully changed!")
			$("#pBox").hide()
        })
	})
})

$("#getStarted").on('click',function(){
$.ajax({
		url : baseurl 
			+ "/handlers/login",
			dataType : "text"
		}).done(function(data){
			console.log(data)
		if(data)
		window.location.replace(baseurl+"/handlers/login")
		else
		window.location.replace(baseurl+"/handlers/senators")
	})
})


$('em').on('click',function(){

$(".loggedin").hide();
$("#wrongPW").hide();
$("#form").show()
return false;
})
