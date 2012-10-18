 $(function() {
	$("#side").accordion({
		navigation: true
	});
	$("#side li a").click(function() {
		$.cookie("openItem", $(this).attr("href"));
        alert("123");
        
	});
	//$("#side li a[href$='" + $.cookie("openItem") + "']").addClass("open");
});