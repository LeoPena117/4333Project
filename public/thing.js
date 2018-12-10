$(".loggedin").hide();
$("#wrongPW").hide();
$("#PWMM").hide();
$("#pwError").hide();
$("#usedUsername").hide();
$("#Copy").hide()
$("#emptyUsername").hide()
$("#logout").hide()
$("#EPW").hide();
$("#noUser").hide();
$(".pBox").hide()
$("#states").hide()
$(".adminStates").hide()
$("CID").hide()

$("#loginbtn").on("click",function(){

	 if($("#UName").val()==""){
		$("#emptyUsername").show();
		$("#EPW").hide();
		$("#usedUsername").hide();
	}else if($("#PW").val()==""){
		$("#EPW").show();
		$("#usedUsername").hide();
		$("#emptyUsername").hide()
	}
	else{
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
        	if(data==false)
			$("#noUser").show();
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
		}
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
		$("#EPW").hide();
		$("#usedUsername").hide();
		$("#emptyUsername").hide()
	}
	else if($("#UName").val()==""){
		$("#emptyUsername").show();
		$("#EPW").hide();
		$("#usedUsername").hide();
		$("#PWMM").hide();
	}
	else if($("#PW").val()==""||$("#PWC").val()==""){
		$("#EPW").show();
		$("#usedUsername").hide();
		$("#emptyUsername").hide()
		$("#PWMM").hide();
	}
	else{
	$("#EPW").hide();
	$("#usedUsername").hide();
	$("#emptyUsername").hide()
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
        }}).done(function(data){ 
        	console.log(data)
        	data=JSON.parse(data)
        	if(data.success==true)
        		window.location.replace(baseurl+"/handlers/senators") 
        	else
        		$("#usedUsername").show();
        })


	}

    	return false;
 })

$(".changeState").on('click',function(){
	$("#states").show()
	$(this).closest('tr').children('td.states').children('select.adminStates').show()
})

$("#changeUName").on('click',function(){
	$("#tBox").show()
})
$(".promote").on('click',function(){
	user = $(this).closest('tr').children('td.uid').text()
	$.ajax({
		method : "POST",
		url : baseurl 
			+ "/handlers/promote",
			dataType : "text",
		data:{
        	user: user
        }}).done(function(data){
        	alert("Successfully promoted")
        	location.reload()
        })


})
$("#states").change(function(){

	user = $("uid").text();
	state = $("#states").val();
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

$(".adminStates").change(function(){

	user = $(this).closest('tr').children('td.uid').text()
	state = $(this).val();
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
			location.reload()
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
        	console.log(data)
        	if(data.success==false){
        		$("#usedUsername").show();
        	}
        	else{
        		$("#usedUsername").hide();
				$("username").text(data)
				$("#tBox").hide()
				location.reload()
			}
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

$("#postBtn").click(function(){
console.log("posted")

if ($("#Comment").val()==''){
    $("#Comment").css('border-color', 'red');
}
else if($("#Comment").val()==''){
    $("#Comment").css('border-color', 'red');
}
else{
     $.ajax({
        method : "POST",
        url : baseurl 
            + "/handlers/postcomment",
            dataType : "text",
        data:{
            comment: $("#Comment").val(),
            senator: $('SenatorName').attr('id') 
        }}).done(function(data){
        	console.log(data)
            data=JSON.parse(data)
            if(data.success == true){
            $("#Comment").css('border-color', '');
            a=$("#Copy").clone(true,true).show()
            a.find("h4").text(data.user)
            a.find("#CopyComment").text(data.comment)
           	a.find("#CID").text(data.ID)
            $("#_template").append(a);
            a.insertAfter($("#_template"))
        }
    })
}

    return false;
});

$(".table").on('click','.deleteUser',function(){
 $.ajax({
        method : "POST",
        url : baseurl 
            + "/handlers/deleteUser",
            dataType : "text",
        data:{
            user: $(this).closest('tr').children('td.uid').text()  
        }}).done(function(data){
        	data=JSON.parse(data)
            if(data.success == true){
            	location.reload()
    		}
	})
})


$(".deleteComment").on('click',function(){

	comment=$(this).parent().children().eq(2).eq(0).text()
	$.ajax({
        method : "POST",
        url : baseurl 
            + "/handlers/deleteComment",
            dataType : "text",
        data:{
        	comment: comment
        }}).done(function(data){
			data=JSON.parse(data)
            if(data.success == true){
            	location.reload()
    		}
        })
})


$("#search").on('keyup', function (e) {
	senator= $("#search").val();
    if (e.keyCode == 13) {
		$.ajax({
	        method : "get",
	        url : baseurl 
	            + "/handlers/search",
	            dataType : "text",
	        data:{
	        	senator: senator
	        }}).done(function(data){
				$("html").html(data);
	        	console.log(data)
	        })
    }
});