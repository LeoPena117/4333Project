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



$('em').on('click',function(){

$(".loggedin").hide();
$("#wrongPW").hide();
$("#form").show()
return false;
})
