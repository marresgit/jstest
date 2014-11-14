
$(document).ready(function(){
    var iCount = 0;
    var addDiv = "<div class='ruta1 divJS'><div class='inputBox'><input type=text class='input' id=tb value=''></div><br/><strong><div class='deleteS'>x</div></strong></div>";
	
	$(".infoButton").click(function(){
	   $(".infoDropdown").slideToggle("slow");
	});


// Remove and add .buttonColor class to Add button
	$(".button1").mouseenter(function(){
	   $(".button1").addClass("buttonColor");
	});
	$(".button1").mouseleave(function(){
	   $(".button1").removeClass("buttonColor");
	});


// Creates max 11 div boxes and gives them a different ID number.
 	$(".button1").click(function(){
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
});


