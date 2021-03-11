// Add your JS customizations here

jQuery(document).ready(function ($) {
	$(".enable-related").on("click", function (e) {
		e.preventDefault();
		$("body").toggleClass("show-related");
	});
	$(".toggle-menu").on("click", function (e) {
		e.preventDefault();
		$("body").toggleClass("display-popup");
	});

	// init our homepage slider
	const homePageSlider = new Swiper("#homepageCarousel", {
		spaceBetween: 30,
		effect: "fade",
		loop: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	// $(".slider-step").on("click", function (e) {
	// 	e.preventDefault();
	// 	console.log($(this).data("index"));
	// 	homePageSlider.slideTo($(this).data("index"));
	// });

	homePageSlider.on("activeIndexChange", function () {
		console.log("slide changed");
		console.log("swiper.activeIndex", homePageSlider.activeIndex);
		var index =
			homePageSlider.activeIndex > 2
				? homePageSlider.activeIndex - 3
				: homePageSlider.activeIndex;
		console.log(index);
		$(".step").removeClass("active");
		$(".home-page-leader").find(`.step:eq(${index})`).addClass("active");
	});

	var swiper = new Swiper(".swiper-filter", {
		slidesPerView: 1,
		spaceBetween: 0,
		freeMode: true,
	});
});
