// TABS para AsiVaElMundial
$(document).ready(function () {
	$('ul.tabs li a:first').addClass('active');
	$('.tabs_container article').hide();
	$('.tabs_container article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.tabs_container article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});

// TABS Equipos
$(document).ready(function () {
	$('.listadoEquipos a:first').addClass('active');
	$('.imgEquipo div').hide();
	$('.imgEquipo div:first').show();

	$('.listadoEquipos a').click(function(){
		$('.listadoEquipos a').removeClass('active');
		$(this).addClass('active');
		$('.imgEquipo div').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});