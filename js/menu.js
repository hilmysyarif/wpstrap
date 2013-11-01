$(document).ready(function(){

	// add dropdown menu bootstrap
	$('.sub-menu').parent().addClass('dropdown');
	$('.sub-menu').addClass('dropdown-menu');
	$('.dropdown').children(':first').addClass('dropdown-toggle');
	$('.dropdown').children(':first').attr('data-toggle',"dropdown");
	$('.dropdown').children(':first').append(' <b class="caret"></b>');

	$('.current-menu-item, .current_page_item, .current-menu-parent, .current_page_parent, .current_page_ancestor').addClass('active');
});