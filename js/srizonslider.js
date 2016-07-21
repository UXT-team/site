(function(srizonjq) {
	srizonjq.fn.parallaxSlider = function(options) {
		var opts = srizonjq.extend({}, srizonjq.fn.parallaxSlider.defaults, options);
		return this.each(function() {
			var $pxs_container 	= srizonjq(this),
			o 				= srizonjq.meta ? srizonjq.extend({}, opts, $pxs_container.data()) : opts;

			//the main slider
			var $pxs_slider		= srizonjq('.pxs_slider',$pxs_container),
			//the elements in the slider
			$elems			= $pxs_slider.children(),
			//total number of elements
			total_elems		= $elems.length,
			//the navigation buttons
			$pxs_next		= srizonjq('.pxs_next',$pxs_container),
			$pxs_prev		= srizonjq('.pxs_prev',$pxs_container),
			//the bg images
			$pxs_bg1		= srizonjq('.pxs_bg1',$pxs_container),
			//current image
			current			= 0,
			//the thumbs container
			$pxs_thumbnails = srizonjq('.pxs_thumbnails',$pxs_container),
			//the thumbs
			$thumbs			= $pxs_thumbnails.children(),
			//the interval for the autoplay mode
			slideshow,
			//the loading image
			$pxs_loading	= srizonjq('.pxs_loading',$pxs_container),
			$pxs_slider_wrapper = srizonjq('.pxs_slider_wrapper',$pxs_container);

			//first preload all the images
			var loaded		= 0,
			$images		= $pxs_slider_wrapper.find('img');

			$images.each(function(){
				var $img	= srizonjq(this);
				srizonjq('<img/>').load(function(){
					++loaded;
					if(loaded	== total_elems*2){
						$pxs_loading.hide();
						$pxs_slider_wrapper.show();

						//one images width (assuming all images have the same sizes)
						var one_image_w		= $pxs_slider.find('img:first').width();

						/*
						need to set width of the slider,
						of each one of its elements, and of the
						navigation buttons
						 */
						setWidths($pxs_slider,
						$elems,
						total_elems,
						$pxs_bg1,
						one_image_w,
						$pxs_next,
						$pxs_prev,o);

						/*
							set the width of the thumbs
							and spread them evenly
						 */
						$pxs_thumbnails.css({
							'width'			: one_image_w + 'px',
							'margin-left' 	: -one_image_w/2 + 'px'
						});
						var spaces	= one_image_w/(total_elems+1);
						$thumbs.each(function(i){
							var $this 	= srizonjq(this);
							var left	= spaces*(i+1) - $this.width()/2;
							$this.css('left',left+'px');

							if(o.thumbRotation){
								var angle 	= Math.floor(Math.random()*41)-20;
								$this.css({
									'-moz-transform'	: 'rotate('+ angle +'deg)',
									'-webkit-transform'	: 'rotate('+ angle +'deg)',
									'transform'			: 'rotate('+ angle +'deg)'
								});
							}
							//hovering the thumbs animates them up and down
							$this.bind('mouseenter',function(){
								srizonjq(this).stop().animate({top:'-10px'},100);
							}).bind('mouseleave',function(){
								srizonjq(this).stop().animate({top:'0px'},100);
							});
						});

						//make the first thumb be selected
						highlight($thumbs.eq(0));

						//slide when clicking the navigation buttons
						$pxs_next.bind('click',function(){
							++current;
							if(current >= total_elems)
								if(o.circular)
									current = 0;
							else{
								--current;
								return false;
							}
							highlight($thumbs.eq(current));
							slide(current,
							$pxs_slider,
							$pxs_bg1,
							o.speed,
							o.easing,
							o.easingBg,o);
						});
						$pxs_prev.bind('click',function(){
							--current;
							if(current < 0)
								if(o.circular)
									current = total_elems - 1;
							else{
								++current;
								return false;
							}
							highlight($thumbs.eq(current));
							slide(current,
							$pxs_slider,
							$pxs_bg1,
							o.speed,
							o.easing,
							o.easingBg,o);
						});

						/*
						clicking a thumb will slide to the respective image
						 */
						$thumbs.bind('click',function(){
							var $thumb	= srizonjq(this);
							highlight($thumb);
							//if autoplay interrupt when user clicks
							if(o.auto)
								clearInterval(slideshow);
							current 	= $thumb.index();
							slide(current,
							$pxs_slider,
							$pxs_bg1,
							o.speed,
							o.easing,
							o.easingBg,o);
						});



						/*
						activate the autoplay mode if
						that option was specified
						 */
						if(o.auto != 0){
							o.circular	= true;
							slideshow	= setInterval(function(){
								$pxs_next.trigger('click');
							},o.auto);
						}
					}
				}).error(function(){
					alert('Could not load some images. Check the link')
				}).attr('src',$img.attr('src'));
			});



		});
	};

	var slide			= function(current,
	$pxs_slider,
	$pxs_bg1,
	speed,
	easing,
	easingBg,o){
		var slide_to	= parseInt(-o.srzn_pxs_cont_width * current);
		$pxs_slider.stop().animate({
			left	: slide_to + 'px'
		},speed, easing);
		if(o.srzn_pxs_bg_speed !=0 ){
			$pxs_bg1.stop().animate({
				left	: slide_to/o.srzn_pxs_bg_speed + 'px'
			},speed, easingBg);
		}
	}

	var highlight		= function($elem){
		$elem.siblings().removeClass('selected');
		$elem.addClass('selected');
	}

	var setWidths		= function($pxs_slider,
	$elems,
	total_elems,
	$pxs_bg1,
	one_image_w,
	$pxs_next,
	$pxs_prev,o){
		/*
		the width of the slider is the windows width
		times the total number of elements in the slider
		 */
		var pxs_slider_w	= o.srzn_pxs_cont_width * total_elems;
		$pxs_slider.width(pxs_slider_w + 'px');
		//each element will have a width = windows width
		$elems.width(o.srzn_pxs_cont_width + 'px');
		/*
		we also set the width of each bg image div.
		The value is the same calculated for the pxs_slider
		 */
		$pxs_bg1.width(pxs_slider_w + 'px');

		/*
		both the right and left of the
		navigation next and previous buttons will be:
		windowWidth/2 - imgWidth/2 + some margin (not to touch the image borders)
		 */
		//var position_nav	= o.srzn_pxs_cont_width/2 - one_image_w/2 + 3;
		var position_nav = o.srzn_pxs_sidetobutton;
		$pxs_next.css('right', position_nav + 'px');
		$pxs_prev.css('left', position_nav + 'px');
	}

	srizonjq.fn.parallaxSlider.defaults = {
		auto			: 0,	//how many seconds to periodically slide the content.
								//If set to 0 then autoplay is turned off.
		speed			: 1000,//speed of each slide animation
		easing			: 'jswing',//easing effect for the slide animation
		easingBg		: 'jswing',//easing effect for the background animation
		circular		: false,//circular slider
		thumbRotation	: true//the thumbs will be randomly rotated
	};
	//easeInOutExpo,easeInBack
})(srizonjq);
