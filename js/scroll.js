jQuery(document).ready(function($) { 
 			var controller = $.superscrollorama();
 			var scrollDuration = 600; // amount of scrolling over which the tween takes place (in pixels)
			var offset = -400;
			// individual element tweens
			
			// top blurbs hidden to prevent flash onload
			$('#about-right, #about-left, #leadership-left, #leadership-right').css('visibility', 'visible');
			
			if(Modernizr.touch){
				controller.removeTween(['#about-left', '#about-right', '#leadership-left', '#leadership-right', '#services-left', '#services-right', '#projects-left', '#projects-right']);
			} else{
			controller.addTween('#about-left', TweenMax.from( $('#about-left'), .25, {css:{opacity:0, left:'-3000px'}, ease:Quad.easeInOut}), scrollDuration, -200, false);
			
			controller.addTween('#about-right', TweenMax.from( $('#about-right'), .25, {css:{opacity:0, right:'-3000px'}, ease:Quad.easeInOut}),scrollDuration, -300, false);
				
			// Group Shot Fade to B&W
			controller.addTween('#about-right', TweenMax.from( $('#group-shot'), .25, {css:{opacity:0}, ease:Quad.easeInOut}),scrollDuration,100);
		
			// Leadership
			controller.addTween('#leadership-left', TweenMax.from( $('#leadership-left'), .25, {css:{opacity:0, left:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, offset);
			controller.addTween('#leadership-right', TweenMax.from( $('#leadership-right'), .25, {css:{opacity:0, right:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, offset);
			
			// Pat Mazen Fade-in
			controller.addTween('#leadership-right', TweenMax.from( $('#pat-mazen'), .25, {css:{opacity:0}, ease:Quad.easeInOut}), scrollDuration, offset);
			
			// Services
			controller.addTween('#services-left', TweenMax.from( $('#services-left'), .25, {css:{opacity:0, left:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, -500);
			controller.addTween('#services-right', TweenMax.from( $('#services-right'), .25, {css:{opacity:0, right:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, -500);
			controller.addTween('#services-right', TweenMax.from( $('#beams'), .25, {css:{opacity:0, left:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, offset);
			
//			controller.addTween('.services', TweenMax.from($('.services'), .25, {css:{"background-position-x":"-200px"}} ), scrollDuration, 0);
			
			// Projects
			controller.addTween('#projects-right', TweenMax.from( $('#projects-right'), .25, {css:{opacity:0, right:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, -600);
			controller.addTween('#projects-left', TweenMax.from( $('#projects-left'), .25, {css:{opacity:0, left:'-1000px'}, ease:Quad.easeInOut}), scrollDuration, -600);
			}
});
