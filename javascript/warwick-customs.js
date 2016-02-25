$(document).ready(function()
{
	$("#id_sendstudentnotifications").val('0'); //set value of 'Notify student' to 'No'. Should be 'No' by default
	
	if ( $("#id_workflowstate").val()!="released" ) { // workflow isnt't Released
        hide_notify();
	}
				
	$("#id_workflowstate").change(function () {
		if ($(this).val() == "released") {
			show_notify();
		}
		else {
			hide_notify();
		}
	});
	
	function hide_notify() {
		$("#id_sendstudentnotifications").val('0') //set value of 'Notify student' to 'No'
										 .hide(); // hide 'Notify student'
		$("label[for='id_sendstudentnotifications']").hide(); //hide the associated label
	}
	
	function show_notify() {
		$("#id_sendstudentnotifications").show() //show 'Notify student'
		$("label[for='id_sendstudentnotifications']").show(); // Show the label
	}
	
	// ROLLOVER USER PROFILE BOX
	$('[data-toggle="popover"]').popover({
		trigger: 'manual',
		html: true,
		placement: 'top',
		template: '<div class="popover" onmouseover="$(this).mouseleave(function() {$(this).hide(); });"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>'
	}).mouseenter(function(e) {
		$(this).popover('show');
	}).on('mouseleave', function(e){
		var _this = this;
		setTimeout(function(){
			if(!$('.popover:hover').length){
				$(_this).popover("hide");
			}
		},100)
	});
	// END 
	
});
