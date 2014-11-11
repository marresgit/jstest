
$(document).ready(function(){
    var haha = "men vad fan"
    var iCount = 0;
    var addDiv = "<div class='ruta1 divJS'><div class='inputBox'><input type=text class='input' id=tb value=''></div><br/><strong>MouseOverMIG!<div class='deleteS'>x</div></strong></div>";
	

 	$(".button1").click(function(){
		if (iCount <= 10) {
		iCount = iCount + 1;
		console.log(iCount);
		$("#Big").append($(addDiv));
        	   $(".divJS").each(function(i) {
               	   $(this).attr("id", (i + 1)); 
                });
		}
	});

	$(".deleteS").click(function(){
	   $(this).parent().remove();
	});
		console.log(iCount);
});


