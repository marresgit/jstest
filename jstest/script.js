
$(document).ready(function(){
    var iCount = 0;
    var addDiv = "<form class='forM' method='POST'><div class='ruta1 divJS'><div class='deleteS'><strong>x</strong></div><div class='inputBox'><input class='inpuT' type='text'><input class='submitThis'  type='submit'></div><strong></strong><a href='#'><div class='adressBox'></div></a></div></form>";

	
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

// Creates max 9 div boxes and gives them a different ID number.
 	$(document).on('click touchstart', '.addButton', function(){
		if (iCount <= 7) {
		iCount = iCount + 1;
		console.log(iCount);
		$("#Big").append($(addDiv));
        	   $(".divJS").each(function(i) {
               	   $(this).attr("id", (i + 1)); 
                   });
        	      $(".inpuT").each(function(i) {
               	      $(this).attr("name", "url-" + (i + 1)); 
                      });
        	         $(".submitThis").each(function(i) {
               	         $(this).attr("name", "submit" + (i + 1)); 
                         });
		}
	});


// Deletes a hole .divJS(box) with .deleteS and counts down for every click so that it follows the structure of the ADD button.
	$(document).on("click",".deleteS",function(){
	if (iCount => 7)
	   iCount = iCount - 1;
		console.log(iCount);
	   $(this).parent().remove();
	});

// Submitting every box (divJS) with saveButon
	$('.saveButton').click(function(){
		$("form").submit();
	console.log("ClickClick..:");
	});

});
