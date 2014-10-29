//initiating jQuery
jQuery(function($) {
	$(document).ready( function() {
		//enabling stickUp on the '.navbar-wrapper' class
		$('.myroll').stickUp({
		});
	});
});

$(function(){
	$.scrollUp({
		animation: 'fade',
		scrollImg: { active: true, type: 'background' },
	});
});

$(function(){
	$("a[data-toggle=tooltip]").tooltip();
	
	$("a[dbid]").click(function(){
		var dbid = $(this).attr("dbid");
		$.post("/index.php/site/click", {"dbid":dbid}, function(data){})
	});
	
	$("a[sendTo]").bind("click", function(){
		var t = $("a[getFrom="+$(this).attr("sendTo")+"]");
		t.click();
	});
})
