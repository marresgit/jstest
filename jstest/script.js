
$(document).ready(function(){
    var iCount = 0;
    var addDiv = "<div class='ruta1 divJS'><div class='inputBox'><form><input type=text><input type='submit'></form></div><strong><div class='deleteS'>x</div></strong></div>";
	
	$(".infoButton").click(function(){
	   $(".infoDropdown").slideToggle("slow");
	});


// Remove and add .buttonColor class to Add button

	$(".addButton").mouseenter(function(){
	   $(".addButton").addClass("buttonAddcolor");
	});
	$(".addButton").mouseleave(function(){
	   $(".addButton").removeClass("buttonAddcolor");
	});
	$(".saveButton").mouseenter(function(){
	   $(".saveButton").addClass("buttonSavecolor");
	});
	$(".saveButton").mouseleave(function(){
	   $(".saveButton").removeClass("buttonSavecolor");
	});

// Creates max 11 div boxes and gives them a different ID number.
 	$(".addButton").click(function(){
		if (iCount <= 7) {
		iCount = iCount + 1;
		console.log(iCount);
		$("#Big").append($(addDiv));
        	   $(".divJS").each(function(i) {
               	   $(this).attr("id", (i + 1)); 
                });
		}
	});

// Deletes a hole .divJS(box) with .deleteS and counts down for every click so that it follows the structure of the ADD button.
	$(document).on("click",".deleteS",function(){
	if (iCount => 7)
	   iCount = iCount - 1;
		console.log(iCount);
	   $(this).parent().parent().remove();
	});

	$('.divJS').submit(function(event){
	      $(this).text('TRUE').show();
		console.log("TRUE");
		return;
	$('span').text('FALSE bro..').show();
	console.log("FALSE");
	});

});
