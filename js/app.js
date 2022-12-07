
	jQuery(function($) {

		// nav scroll --------------------------------------------------

		$('.header nav a:not(.external)').on('click',function(e) {
			e.preventDefault()
			var target = $($(this).attr('href'))
			if(undefined !== target) {
				target = target.offset().top - 80
				$('html,body').animate({'scrollTop':target},1000,function() {
					$('aside .current').shuffleLetters()
				})
			}
		})

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

		function checkNav() {
			var sections = $($('section[id]').get().reverse())
			var st = $('html').scrollTop()
			sections.each(function() {
				var secTop = $(this).offset().top
				if(secTop <= st + 81) {
					var title = $('.header nav a[href="#' + $(this).attr('id') + '"]')
					$('aside .current').html(title.html())
					$('.header nav a').removeClass('active')
					title.addClass('active')
					return false;
				}
			})
		}

		checkNav()
		$(window).on('scroll',checkNav)

		// fixed footer ------------------------------------------------

		function fixedFooter() {
			var fh = $('.footer').height()
			$('body').css('padding-bottom',fh)
		}

		fixedFooter()
		$(window).on('resize',fixedFooter)

		// swipers -----------------------------------------------------

		var swipers = []
		var i = 0

		$('.swiper:not(.wide)').each(function() {

			var s = $(this).closest('section')

			$(this).data('swiperNo',i)

			swipers[i++] = new Swiper($(this)[0], {
				loop: true,
				speed: 1000,
				autoplay: { delay: 5000 },
				navigation: { nextEl: s.find('.next')[0], prevEl: s.find('.prev')[0]  }
			})

		})

		$('.swiper.wide').each(function() {

			var s = $(this).closest('section')

			$(this).data('swiperNo',i)

			swipers[i++] = new Swiper($(this)[0], {
				loop: false,
				spaceBetween: 18,
				slidesPerView: 'auto',
				scrollbar: { el: s.find('.swiper-scrollbar')[0], draggable: true  },
				freeMode: true,
				speed: 1000,
				autoplay: { delay: 5000 }
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
