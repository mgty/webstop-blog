jQuery(document).ready(function(){

	jQuery(".switcher-control").on('click', function(){
	  jQuery('.switcher').toggleClass('toggled');
	});

	jQuery(".styleswitch").on('click', function(){
	  jQuery(".styleswitch").removeClass('active');
	  jQuery(this).addClass('active');
	});
	
});

