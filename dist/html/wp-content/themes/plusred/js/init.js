jQuery(document).ready(function($) {

	if (location.hash) {

		$('.darken').css( 'height','0px').hide();

	} else {

		$('.darken').css( 'height','0px').hide();

	}

	$('#blog_content').hover(function (){

		// Notes...

	});


	$(".left-arrow a,.right-arrow a,.home-arrow a").click(function(){

		$(".first_info,.first_inner").hide();
		$(".second_info,.second_inner").hide();
		$(".third_info,.third_inner").hide();
		$(".fourth_info,.fourth_inner").hide();
		$(".fifth_info,.fifth_inner").hide();
		$(".sixth_info,.sixth_inner").hide();
		$(".seventh_info,.seventh_inner").hide();
		$(".eighth_info,.eighth_inner").hide();

		$('ul#menu-custom-menu li#magic-line').remove();

		$('ul#menu-custom-menu li').removeClass('new_current_page_item');

		var link = $(this).attr('data-src');
		var dontCheck = '';

		if (link == 'power') {

			$('li#menu-item-4146').addClass('new_current_page_item');

		} else if (link == 'rescue') {

			$('li#menu-item-4155').addClass('new_current_page_item');

		} else if (link == 'power-20') {

			$('li#menu-item-4151').addClass('new_current_page_item');

		} else if (link == 'natural-power') {

			$('li#menu-item-4147').addClass('new_current_page_item');

		} else if (link == 'benefits') {

			$('li#menu-item-4167').addClass('new_current_page_item');

		} else if (link == 'about-plus-red') {

			$('li#menu-item-4149').addClass('new_current_page_item');

		} else {

			dontCheck = 'true';

		}

		$("#power_dot_1,#power_dot_2,#power_dot_3,#power_dot_4,#power_dot_5,#power_dot_6,#power_dot_7, #power_dot_8").parent("div").addClass('product_dots_off');

		$("#power_dot_1,#power_dot_2,#power_dot_3,#power_dot_4,#power_dot_5,#power_dot_6,#power_dot_7, #power_dot_8").parent("div").removeClass('product_dots_on');

		$("#rescue_dot_1,#rescue_dot_2,#rescue_dot_3,#rescue_dot_4,#rescue_dot_5,#rescue_dot_6,#rescue_dot_7, #rescue_dot_8").parent("div").addClass('product_dots_off');

		$("#rescue_dot_1,#rescue_dot_2,#rescue_dot_3,#rescue_dot_4,#rescue_dot_5,#rescue_dot_6,#rescue_dot_7, #rescue_dot_8").parent("div").removeClass('product_dots_on');

		$("#powertwenty_dot_1,#powertwenty_dot_2,#powertwenty_dot_3,#powertwenty_dot_4,#powertwenty_dot_5,#powertwenty_dot_6,#powertwenty_dot_7, #powertwenty_dot_8").parent("div").addClass('product_dots_off');

		$("#powertwenty_dot_1,#powertwenty_dot_2,#powertwenty_dot_3,#powertwenty_dot_4,#powertwenty_dot_5,#powertwenty_dot_6,#powertwenty_dot_7,#powertwenty_dot_8").parent("div").removeClass('product_dots_on');

		if (dontCheck != 'true') {

			var $el, leftPos, newWidth, $mainNav = $("#navigation ul");

			$mainNav.append("<li id='magic-line' style='margin-left:0px;'></li>");

			var $magicLine = $("#magic-line");

			startLeft = ($(".new_current_page_item a").position().left);

			startWidth = ($(".new_current_page_item a").width());

			$magicLine
				.width(startWidth)
				.css("left", startLeft)
				.css("marginLeft", "0")
				.data("origLeft", $magicLine.position().left)
				.data("origWidth", $magicLine.width());
		}

		$("#navigation ul li a").hover(function() {

			$el = $(this);

			leftPos = $el.position().left;

			newWidth = $el.parent().width();

			$magicLine.stop().animate({

				left: leftPos,
				width: newWidth
			});

		}, function() {

			$magicLine.stop().animate({

				left: $magicLine.data("origLeft"),
				width: $magicLine.data("origWidth")

			});

		});

	});

	$("#logo a").click(function(){

		$('ul#menu-custom-menu li#magic-line').remove();
		$('ul#menu-custom-menu li').removeClass('new_current_page_item');

	});

	$("#navigation a").click(function(){

		$(".product_info").show();
		$(".first_info,.first_inner").hide();
		$(".second_info,.second_inner").hide();
		$(".third_info,.third_inner").hide();
		$(".fourth_info,.fourth_inner").hide();
		$(".fifth_info,.fifth_inner").hide();
		$(".sixth_info,.sixth_inner").hide();
		$(".seventh_info,.seventh_inner").hide();
		$(".eighth_info,.eighth_inner").hide();
		$('ul#menu-custom-menu li#magic-line').remove();
		$('ul#menu-custom-menu li').removeClass('new_current_page_item');

		$(this).parent('li').addClass('new_current_page_item');

		$("#power_dot_1,#power_dot_2,#power_dot_3,#power_dot_4,#power_dot_5,#power_dot_6,#power_dot_7, #power_dot_8").parent("div").addClass('product_dots_off');
		$("#power_dot_1,#power_dot_2,#power_dot_3,#power_dot_4,#power_dot_5,#power_dot_6,#power_dot_7, #power_dot_8").parent("div").removeClass('product_dots_on');
		$("#rescue_dot_1,#rescue_dot_2,#rescue_dot_3,#rescue_dot_4,#rescue_dot_5,#rescue_dot_6,#rescue_dot_7,#rescue_dot_8").parent("div").addClass('product_dots_off');
		$("#rescue_dot_1,#rescue_dot_2,#rescue_dot_3,#rescue_dot_4,#rescue_dot_5,#rescue_dot_6,#rescue_dot_7,#rescue_dot_8").parent("div").removeClass('product_dots_on');
		$("#powertwenty_dot_1,#powertwenty_dot_2,#powertwenty_dot_3,#powertwenty_dot_4,#powertwenty_dot_5,#powertwenty_dot_6,#powertwenty_dot_7,#powertwenty_dot_8").parent("div").addClass('product_dots_off');
		$("#powertwenty_dot_1,#powertwenty_dot_2,#powertwenty_dot_3,#powertwenty_dot_4,#powertwenty_dot_5,#powertwenty_dot_6,#powertwenty_dot_7,#powertwenty_dot_8").parent("div").removeClass('product_dots_on');

		var $el, leftPos, newWidth, $mainNav = $("#navigation ul");

		$mainNav.append("<li id='magic-line' style='margin-left:0px;'></li>");

		var $magicLine = $("#magic-line");

		startLeft = ($(".new_current_page_item a").position().left);
		startWidth = ($(".new_current_page_item a").width());

		$magicLine
			.width(startWidth)
			.css("left", startLeft)
			.css("marginLeft", "0")
			.data("origLeft", $magicLine.position().left)
			.data("origWidth", $magicLine.width());

		$("#navigation ul li a").hover(function() {

			$el = $(this);

			leftPos = $el.position().left;

			newWidth = $el.parent().width();
			$magicLine.stop().animate({

				left: leftPos,
				width: newWidth

			});

		}, function() {

			$magicLine.stop().animate({

				left: $magicLine.data("origLeft"),
				width: $magicLine.data("origWidth")

			});

		});

	});

	$(".dots").click(function(){

		$(".product_info").hide();

		thisDot = this.id;
		thisName = this.name;
		thisInner = '.'+thisName+'_inner';
		thisInfo = '.'+thisName+'_info';

		if ( $("#"+thisDot).parent("div").hasClass('product_dots_off')) {

			$("#"+thisDot).parent("div").addClass('product_dots_on');

			$("#"+thisDot).parent("div").removeClass('product_dots_off');
			$(""+thisInner+"").show(100);
			$(""+thisInfo+"").show(100);

		} else {

			$("#"+thisDot).parent("div").addClass('product_dots_off');
			$("#"+thisDot).parent("div").removeClass('product_dots_on');
			$(""+thisInner+"").hide(100);
			$(""+thisInfo+"").hide(100);

		}

   });

   var hash = location.hash;

	var shopHash = '';
	var shopId = '';
	var dontCheck2 = '';

	if (hash) {

		var thisId = hash.substr(3);

		newHash = hash;

		shopId = hash.substr(1,5);

		if (hash == "#!/shop") {

			hash = "#!/buy-now"; setTimeout('2000'); location.hash = "#!/buy-now";

	  	}

		if (shopId == 'ecwid') {

			shopHash = hash;

			if (shopHash == "#ecwid:category=0&mode=category&offset=0&sort=normal") {

				hash = "#!/buy-now"; setTimeout('2000'); location.hash = "#!/buy-now";

	  		} else if (shopHash == "#ecwid:mode=cart") {

	  			hash = "#!/buy-now";  location.hash = "#!/buy-now";

			} else if (shopHash == "#ecwid:mode=orderConfirmation") {

				hash = "#!/shop"; setTimeout('10000'); location.hash = "#!/shop";

	  		} else {

				hash = "#!/shop"; location.hash = "#!/shop";
				setTimeout('2000');
				location.hash = shopHash;

			}

		}

		newTitle = $('#'+thisId+'-id').val();

		if (newTitle) {

			document.title = '+Plus Red Elixir | ' + newTitle;

		} else {

			document.title = '+Plus Red Elixir';

		}

		if (thisId == 'power') {

			$('li#menu-item-4146').addClass('new_current_page_item');

		} else if (thisId == 'rescue') {

			$('li#menu-item-4155').addClass('new_current_page_item');

		} else if (thisId == 'power-20'){

			$('li#menu-item-4151').addClass('new_current_page_item');

		} else if (thisId == 'natural-power'){

			$('li#menu-item-4147').addClass('new_current_page_item');

		} else if (thisId == 'benefits'){

			$('li#menu-item-4167').addClass('new_current_page_item');

		} else if (thisId == 'about-plus-red'){

			$('li#menu-item-4149').addClass('new_current_page_item');

		} else {

			dontCheck2 = 'true';

		}

		if ((thisId != '')&&(shopId != 'ecwid')&&(thisId != 'shop')&&(thisId != 'buy-now')&&(thisId != 'contact-us')&&(thisId != 'privacy-policy')) {

			var $el, leftPos, newWidth,

			$mainNav = $("#navigation ul");

			$mainNav.append("<li id='magic-line' class='blue'></li>");

			var $magicLine = $("#magic-line");

			startLeft = ($(".new_current_page_item a").position().left);

			startWidth = ($(".new_current_page_item a").width());

			$magicLine
				.width(startWidth)
			.css("left", startLeft)
			.data("origLeft", $magicLine.position().left)
			.data("origWidth", $magicLine.width());

			$("#navigation ul li a").hover(function() {

				$el = $(this);
				leftPos = $el.position().left;
				newWidth = $el.parent().width();
				$magicLine.stop().animate({

					left: leftPos,
					width: newWidth

				});

			}, function() {

				$magicLine.stop().animate({

					left: $magicLine.data("origLeft"),
					width: $magicLine.data("origWidth")

				});

			});

		}

	}

	var hash = location.hash;

	var shopHash = '';
	var shopId = '';
	var dontCheck2 = '';

	if (hash) {

		newHash = hash;
		shopId = hash.substr(1,5);

	} else {

		shopId = 'none';

	}

	$('#outer').scrollTo( 0 );
	$.scrollTo( 0 );
	$(window).scrollTop(0);

	$.localScroll.defaults.axis = 'xy';
	$.localScroll.hash({ target: '#content', queue:true, duration:1500, easing:'swing' });
	$.localScroll({ target: '#content', queue:true, duration:1500, hash:true, easing:'swing' });

	$(window).hashchange( function(){

		var hash = location.hash;
		shopId = hash.substr(1,5);

		if (shopId == 'ecwid') {

			shopHash = hash;

			if (shopHash == "#ecwid:category=0&mode=category&offset=0&sort=normal") {

				hash = "#!/buy-now"; setTimeout('10000'); location.hash = "#!/buy-now";

			} else if (shopHash == "#ecwid:mode=orderConfirmation") {

				hash = "#!/shop"; setTimeout('10000'); location.hash = "#!/shop";

			} else {

				location.hash = shopHash;

			}

		}

		thisId = hash.substr(3);

		if (shopId != 'ecwid') {

			if (hash == "#map_top") {

				hash = "#!/find-buy"; location.hash = "#";

			} else {

				if (shopHash != "#ecwid:category=0&mode=category&offset=0&sort=normal") {

					$.localScroll.hash({

						target: '#content', // Could be a selector or a jQuery object too.
						queue:true,
						duration:1500,
						easing:'swing',

						onBefore:function( e, anchor, $target ){

							// The 'this' is the settings object, can be modified

							test = ( hash.replace( /^#/, '' ) || 'blank' );

							test = ( test.replace( /!/, '' ) );
							test = ( test.replace( /\//, '' ) );

							tester = $('#'+test+'-id').val();

							if (tester) {

								document.title = '+Plus Red Elixir | ' + tester;

							} else {

								document.title = '+Plus Red Elixir';

							}

						},

						onAfter:function( anchor, settings ) {

							// location = '#' + ( this.id || this.name ); // The 'this' contains the scrolled element (#content)

						}

					});

				}

			}

		}

	});

	function set_title( tester ) {

		document.title = '+Plus Red Elixir | ' + tester;

	}

	function handler() {

	};

});
