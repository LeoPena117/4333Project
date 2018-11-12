//Rename Recipe
$('RecipeName').on('click', function() {
	box = $('<input>').attr('type', 'textbox').val($(this).text())

	box.on('blur', function() {
		// make ajax call to save edit

		rid = box.parent().attr("id")
		$.ajax({url : baseurl 
			+ "/handlers/edit_recipe/" 
			+ rid + "/" 
			+ $(this).val(),
			dataType : "text"})
		.done(function() {
			// deal with error code in response
			// put back on page
			$(this).parent().text($(this).val())
		})

	})

	$(this).text("")
	$(this).append(box)
	box.select()
})
//Rename Step
$('#sortable').on('click', 'step', function() {
	console.log("Here")

	box = $('<input>').attr('type', 'textbox').val($(this).text())

	box.on('blur', function() {
		if($(this).val()!=null){
		// make ajax call to save edit
			sid = box.parent().attr("id")
			rid = $('RecipeName').attr("id")
			$.ajax({url : baseurl 
				+ "/handlers/edit_steps/" 
				+ rid + "/"
				+ sid + "/" 
				+ $(this).val(),
				dataType : "text"})
			.done(function() {
				// deal with error code in response

				// put back on page
				$(this).parent().text($(this).val())
			})
		}
})

	$(this).text("")
	$(this).append(box)
	box.select()
})

//Add Step
$('#new').on('click',function(){

	clone = $('li:last').clone();
	num = parseInt( clone.find("step").prop("id").match(/\d+/g), 10 ) +1;

	clone.find("step").text("Steparoo")
	clone.find("step").prop("id",num)
	box = $('<input>').attr('type', 'textbox').val(clone.find("step").text())

	box.on('blur', function() {
		if(box.val()!=null){

			sid = clone.find("step").attr("id")
			rid = $('RecipeName').attr("id")
			$.ajax({url : baseurl 
				+ "/handlers/add_step/" 
				+ rid + "/"
				+ sid + "/" 
				+ box.val(),
				dataType : "text"})
			.done(function() {
			
			})
		}
	})

	box.text("")
	$('.list').last().append(box)
	box.select()	
})
$( ".sortable" ).sortable({
    start: function(event, ui) {
        ui.item.startPos = ui.item.index();
    },
    stop: function(event, ui) {
       		sid1 = ui.item.startPos+1;
       		sid2 = ui.item.index()+1;
			rid = $('RecipeName').attr("id")
			$.ajax({url : baseurl 
				+ "/handlers/shuffle_steps/" 
				+ rid + "/"
				+ sid2 + "/" 
				+ sid1,
				dataType : "text"})
			.done(function() {
			
			})
    }
});
