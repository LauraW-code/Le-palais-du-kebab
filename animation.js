var tl = new TimelineMax({ repeat: -1, repeatDelay: 1 });

TweenLite.set('.food', { display: 'block' })
tl.staggerFrom('.food', 1, { y: -150, ease: Power3.easeOut }, 1);