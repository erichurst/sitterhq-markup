if ( /iPad/i.test(navigator.userAgent) ) {
	jQuery("html").addClass("tablet");
} else if ( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	jQuery("html").addClass("mobile");
} else {
	jQuery("html").addClass("desktop");
}

jQuery(document).ready(function($) {

	/* init slidebars http://plugins.adchsm.me/slidebars/usage.php */
	$.slidebars();

	/* toggle .active http://www.elijahmanor.com/css-animated-hamburger-icon/ */
	$('#nav-toggle').on('click',function() {
		$(this).toggleClass('active');
	});

	/* reset navburger if user clicks */
	$(document).mouseup(function(e) {
		if ($('#nav-toggle').has(e.target).length === 0) {
			if ( $('#nav-toggle').hasClass('active') ) {
				$('#nav-toggle').removeClass('active');
			}
		}
	});

	$('.chosen-select').chosen();

});