
	jQuery(function($) {

		// nav scroll --------------------------------------------------

		$('.home .header nav a[href*="#"]').on('click',function(e) {
			e.preventDefault()
			var hr = $(this).attr('href').split('#')
			hr = '#' + hr[hr.length - 1]
			//console.log(hr)
			var target = $(hr)
			if(undefined !== target) {
				target = target.offset().top - 80
				$('html,body').animate({'scrollTop':target},1000,function() {
					$('aside .current').shuffleLetters()
				})
			}
		})

		if($('body').is('.home') && window.location.hash) {

			var h = window.location.hash
			var target = $(h)
			if(undefined !== target) {
				target = target.offset().top - 80
				$('html,body').animate({'scrollTop':target},1000,function() {
					$('aside .current').shuffleLetters()
				})
			}

		}

		// mobile menu -------------------------------------------------

		$('.open-mobile-menu').on('click',function(e) {
			e.preventDefault()
			$('.header nav').slideToggle()
			$('.connect').slideUp().removeClass('open')
		})

		// connect -----------------------------------------------------

		$('.open-connect').on('click',function(e) {
			e.preventDefault()
			$('.connect').slideToggle().toggleClass('open')
			if($('.open-mobile-menu').is(':visible')) {
				$('.header nav').slideUp()
			}
		})

		// aside title -------------------------------------------------

		if($('body').is('.home')) {

			function checkNav() {
				var sections = $($('section[id]').get().reverse())
				var st = $('html').scrollTop()
				sections.each(function() {
					var secTop = $(this).offset().top
					if(secTop <= st + 81) {
						
						/*var title = $('.header nav a[href="#' + $(this).attr('id') + '"]')
						$('aside .current').html(title.html())*/

						var title = homeBlocks[$(this).attr('id')]
						$('aside .current').html(title)

						$('.header nav a').removeClass('active')
						$('.header nav a[href="#' + $(this).attr('id') + '"]').addClass('active')
						return false;

					}
				})
			}

			checkNav()
			$(window).on('scroll',checkNav)

		}

		// fixed footer ------------------------------------------------

		function fixedFooter() {
			var fh = $('.footer').height()
			$('body').css('padding-bottom',fh)
			console.log('fixed footer')
		}

		fixedFooter()
		setTimeout(fixedFooter,1000)
		$(window).on('resize',fixedFooter)

		// swipers -----------------------------------------------------

		var swipers = []
		var i = 0

		$('.swiper.hero-swiper').each(function() {

			var s = $(this).closest('section')
			var sw = $(this)

			$(this).data('swiperNo',i)

			swipers[i++] = new Swiper($(this)[0], {
				loop: true,
				speed: sw.data('speed'),
				autoplay: { delay: sw.data('delay') }
			})

		})

		$('.swiper:not(.wide):not(.hero-swiper):not(.with-tabs').each(function() {

			var s = $(this).closest('section')
			var sw = $(this)

			$(this).data('swiperNo',i)

			swipers[i++] = new Swiper($(this)[0], {
				loop: true,
				speed: sw.data('speed'),
				autoplay: { delay: sw.data('delay') },
				navigation: { nextEl: s.find('.next')[0], prevEl: s.find('.prev')[0]  }
			})

		})

		$('.swiper.with-tabs').each(function() {

			if($(this).closest('section').find('.tab-carousel-nav').length) {

				var s = $(this).closest('section')
				var sw = $(this)

				$(this).data('swiperNo',i)

				swipers[i++] = new Swiper($(this)[0], {
					loop: true,
					speed: sw.data('speed'),
					//autoplay: { delay: sw.data('delay') },
					navigation: { nextEl: s.find('.next')[0], prevEl: s.find('.prev')[0]  },
					pagination: { el: s.find('.dots')[0], clickable: true, renderBullet: function (index, className) {
						return '<span class="' + className + '">' + (tabsForCarousel[index]) + '</span>';
						} 
					}
				})

			}

		})

		$('.swiper.wide').each(function() {

			var s = $(this).closest('section')
			var sw = $(this)

			$(this).data('swiperNo',i)

			swipers[i++] = new Swiper($(this)[0], {
				loop: false,
				spaceBetween: 18,
				slidesPerView: 'auto',
				scrollbar: { el: s.find('.swiper-scrollbar')[0], draggable: true  },
				freeMode: true,
				speed: sw.data('speed'),
				autoplay: { delay: sw.data('delay') }
			})

			/*var sl = s.find('.swiper-slide').length
			s.find('.slide-count').html(sl + '/' + sl)*/

		})

		// to top --------------------------------------------------------

		$('.totop a').on('click',function(e) {
			e.preventDefault()
			$('html,body').animate({'scrollTop':0},1000)
		})

		// parallax ------------------------------------------------------

		var rellax = new Rellax('.rellax')
		var skroll = skrollr.init()

		function deskroll() {
			if($('.open-mobile-menu').is(':visible')) {
				skroll.destroy()
			}
			else {
				skroll = skrollr.init()
			}
		}

		deskroll()
		$(window).on('resize',deskroll)

		// video ---------------------------------------------------------

		$('.play').on('click',function(e) {
			e.preventDefault()
			var ytl = $(this).attr('href')
			var ifr = '<iframe  src="' + ytl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
			$('.video-overlay .video').html(ifr)
			$('body').addClass('playing')
		})

		$('.video-overlay,.video-close').on('click',function(e) {
			e.preventDefault()
			$('body').removeClass('playing')
			setTimeout(function() {
				$('.video-overlay .video').html('')
			}, 400)
		})

		$('.video-wrap').on('click',function(e) {
			e.stopPropagation()
		})
    		
	})
