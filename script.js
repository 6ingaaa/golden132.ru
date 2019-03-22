
function js()
{
	// var kal = $("page").val();
	var selind = document.getElementById("page-select").options.selectedIndex;
	var val = document.getElementById("page-select").options[selind].value;

	var currentPage = getUrlParameter(window.location.href, 'page');

	if (currentPage){
		val.value=currentPage;
		allert = ("n0thing"+ val);
	}
	window.location.href = setUrlParameter(window.location.href, 'page', val)

}

$(document).ready(function(){

	$("#test").click(function(){
        $("#test").slideToggle("slow");
        $(this).toggleClass("active");
    });
 });



// $(document).ready(function() {

// 	$("#form").submit(function() {
// 		$.ajax({
// 			type: "POST",
// 			url: "mail.php",
// 			data: $(this).serialize()
// 		}).done(function() {
// 			$(this).find("input").val("");
// 			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
// 			$("#form").trigger("reset");
// 		});
// 		return false;
// 	});
	
// });

