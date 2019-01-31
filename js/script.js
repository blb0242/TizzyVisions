$(document).ready(function () {

	$(".dropdown-trigger").dropdown({
		hover: true,
		coverTrigger: false
	});

	$(".dropdown-side-trigger").dropdown({
		coverTrigger: false
	});

	$('input#input_text, textarea#textarea2').characterCounter();


	$('.sidenav').sidenav({
		draggable: true // Choose whether you can drag to open on touch screens,

	});

	$('.materialboxed').materialbox();

	$('.parallax').parallax();

	$('.tooltipped').tooltip();


	$('ul li a').click(function () {
		$('li a').removeClass("active");
		$(this).addClass("active");
	});



});