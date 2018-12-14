// Sidebar

! function($) {
    "use strict";
    var Sidemenu = function() {
        this.$menuItem = $("#sidebar-menu a");
    };

	Sidemenu.prototype.init = function() {
		var $this = this;
		$this.$menuItem.on('click', function(e) {
		if ($(this).parent().hasClass("submenu")) {
			e.preventDefault();
		}
		if (!$(this).hasClass("subdrop")) {
			$("ul", $(this).parents("ul:first")).slideUp(350);
			$("a", $(this).parents("ul:first")).removeClass("subdrop");
			$(this).next("ul").slideDown(350);
			$(this).addClass("subdrop");
		} else if ($(this).hasClass("subdrop")) {
			$(this).removeClass("subdrop");
			$(this).next("ul").slideUp(350);
		}
	});
		$("#sidebar-menu ul li.submenu a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
	},
	$.Sidemenu = new Sidemenu;

}(window.jQuery),

$(document).ready(function() {
	
	// Sidebar overlay

	var $sidebarOverlay = $(".sidebar-overlay");
	$("#mobile_btn, .task-chat").on("click", function(e) {
		var $target = $($(this).attr("href"));
		if ($target.length) {
			$target.toggleClass("opened");
			$sidebarOverlay.toggleClass("opened");
			$("html").toggleClass("menu-opened");
			$sidebarOverlay.attr("data-reff", $(this).attr("href"));
		}
		e.preventDefault();
	});

	$sidebarOverlay.on("click", function(e) {
		var $target = $($(this).attr("data-reff"));
		if ($target.length) {
			$target.removeClass("opened");
			$("html").removeClass("menu-opened");
			$(this).removeClass("opened");
			$(".main-wrapper").removeClass("slide-nav-toggle");
		}
		e.preventDefault();
	});
	
	// Sidebar Initiate
	
	$.Sidemenu.init();
	
	// Theme Settings
	
	if($('.themes-icon').length > 0 ){
		$(".themes-icon").click(function () {
			$('.themes').toggleClass("active");
			$('.main-wrapper').removeClass('open-msg-box');
		});
	}
	
	// Select2
	
	if($('.select').length > 0 ){
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}
	
	// Modal Popup hide show

	if($('.modal').length > 0 ){
		var modalUniqueClass = ".modal";
		$('.modal').on('show.bs.modal', function(e) {
		  var $element = $(this);
		  var $uniques = $(modalUniqueClass + ':visible').not($(this));
		  if ($uniques.length) {
			$uniques.modal('hide');
			$uniques.one('hidden.bs.modal', function(e) {
			  $element.modal('show');
			});
			return false;
		  }
		});
	}
	
	// Floating Label

	if($('.floating').length > 0 ){
		$('.floating').on('focus blur', function (e) {
		$(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
		}).trigger('blur');
	}
	
	// Message Notification Slimscroll

	if($('.msg-list-scroll').length > 0 ){
		$('.msg-list-scroll').slimscroll({
			height:'100%',
			color: '#878787',
			disableFadeOut : true,
			borderRadius:0,
			size:'4px',
			alwaysVisible:false,
			touchScrollStep : 100
		});
		var h=$(window).height()-124;
		$('.msg-list-scroll').height(h);
		$('.msg-sidebar .slimScrollDiv').height(h);  
		
		$(window).resize(function(){
			var h=$(window).height()-124;
			$('.msg-list-scroll').height(h);
			$('.msg-sidebar .slimScrollDiv').height(h);
		});
	}
	
	// Sidebar Slimscroll

	if($('.slimscroll').length > 0 ){
		$('.slimscroll').slimScroll({
			height: 'auto',
			width: '100%',
			position: 'right',
			size: "7px",
			color: '#ccc',
			wheelStep: 10,
			touchScrollStep : 100
		});
		var h=$(window).height()-60;
		$('.slimscroll').height(h);
		$('.sidebar .slimScrollDiv').height(h);
		
		$(window).resize(function(){
			var h=$(window).height()-60;
			$('.slimscroll').height(h);
			$('.sidebar .slimScrollDiv').height(h);
		});
	}
	
	// Page Content Height

	if($('.page-wrapper').length > 0 ){
		var height = $(window).height();	
		$(".page-wrapper").css("min-height", height);
	}
	
	$(window).resize(function(){
		if($('.page-wrapper').length > 0 ){
			var height = $(window).height();
			$(".page-wrapper").css("min-height", height);
		}
	});
	
	// Date Time Picker
	
	if($('.datetimepicker').length > 0 ){
		$('.datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY'
		});
	}
	
	// Datatable

	if($('.datatable').length > 0 ){
		$('.datatable').DataTable({
			"bFilter": false,
		});
	}
	
	// Tooltip

	if($('[data-toggle="tooltip"]').length > 0 ){
		$('[data-toggle="tooltip"]').tooltip();
	}
	
	// Button Switch

	if($('.btn-toggle').length > 0 ){
		 $('.btn-toggle').click(function() {
			$(this).find('.btn').toggleClass('active');  
			if ($(this).find('.btn-success').size()>0) {
				$(this).find('.btn').toggleClass('btn-success');
			}
		});
	} 
	
	// Mobile Menu

	if($('.main-wrapper').length > 0 ){
	var $wrapper = $(".main-wrapper");
		$(document).on('click', '#mobile_btn', function (e) {
			$(".dropdown.open > .dropdown-toggle").dropdown("toggle");
			return false;
		});
		$(document).on('click', '#mobile_btn', function (e) {
			$wrapper.toggleClass('slide-nav-toggle');
			$('#chat_sidebar').removeClass('opened');
			return false;
		});
		$(document).on('click', '#open_msg_box', function (e) {
			$wrapper.toggleClass('open-msg-box').removeClass('');
			$('.themes').removeClass('active');
			$('.dropdown').removeClass('open');
			return false;
		});
	}
	
	// Message box remove

	if($('.dropdown-toggle').length > 0 ){
		 $('.dropdown-toggle').click(function() {
			if ($('.main-wrapper').hasClass('open-msg-box')){
				$('.main-wrapper').removeClass('open-msg-box');
			}
		});
	} 
	
	// Table Dropdown

	$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var $table = $(this),
        $dropmenu = $(e.target).find('.dropdown-menu'),
        tableOffsetHeight = $table.offset().top + $table.height(),
        menuOffsetHeight = $dropmenu.offset().top + $dropmenu.outerHeight(true);

    if (menuOffsetHeight > tableOffsetHeight)
      $table.css("padding-bottom", menuOffsetHeight - tableOffsetHeight);
	});
	$('.table-responsive').on('hide.bs.dropdown', function () {
		$(this).css("padding-bottom", 0);
	});
	
	// Custom Modal Backdrop
	
	$('a[data-toggle="modal"]').on('click',function(){
		setTimeout(function(){ if($(".modal.custom-modal").hasClass('in')){ 
		$(".modal-backdrop").addClass('custom-backdrop');
		
		} },500);
	});
	
	// Email Inbox

	if($('.clickable-row').length > 0 ){
		$(".clickable-row").click(function() {
			window.location = $(this).data("href");
		});
	}

	if($('.checkbox-all').length > 0 ){
		$('.checkbox-all').click(function () {
			$('.checkmail').click();
		});
	}
	if($('.checkmail').length > 0 ){
		$('.checkmail').each(function() {
			$(this).click(function() {
				if($(this).closest('tr').hasClass("checked")){
					$(this).closest('tr').removeClass('checked');
				} else {
					$(this).closest('tr').addClass('checked');
				}
			});
		});
	}
	if($('.mail-important').length > 0 ){
		$(".mail-important").click(function(){
			$(this).find('i.fa').toggleClass("fa-star");
			$(this).find('i.fa').toggleClass("fa-star-o");
		});
	}
	
	// Incoming call popup
	
    if ($('#incoming_call').length > 0) {
		$(window).on('load',function(){
			$('#incoming_call').modal('show');
			$("body").addClass("call-modal");
		});
    }
});