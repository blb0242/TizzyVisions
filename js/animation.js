var logoLoad = anime.timeline();

logoLoad
	.add({
		targets: '#navLoad #navlogo',
		translateY: [-100, 0],
		direction: 'alternate'
	});


var functionBasedDuration = anime({
	targets: '#navLoad .el',
	translateY: [-100, 0],
	duration: function (el, i, l) {
		return 1000 + (i * 1000);
	}
});

var menuLoad = anime.timeline();

menuLoad
	.add({
		targets: '#navLoad #menu',
		translateX: [-500, 0],
		direction: 'alternate'
	});

var videoLoad = anime.timeline();

videoLoad
	.add({
		targets: '.container',
		translateX: [-1500, 0],
		delay: 1000,
		duration: 3000,
		easing: 'easeOutExpo',
		direction: 'alternate'
	});