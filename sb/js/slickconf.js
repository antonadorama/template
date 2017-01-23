$('.insights-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
  {
      breakpoint: 768,
      settings: {
        arrows: true,
        slidesToShow: 1
      }
  },
  {
      breakpoint: 1200,
      settings: {
        arrows: true,
        slidesToShow: 2
      }
  }]
});


$('.professionals-carousel').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 400000,
  responsive: [
  {
      breakpoint: 768,
      settings: {
        arrows: true,
        slidesToShow: 2
      }
  },
  {
      breakpoint: 1200,
      settings: {
        arrows: true,
        slidesToShow: 3
      }
  }]
});


$('.industries-carousel').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
  {
      breakpoint: 768,
      settings: {
        arrows: true,
        slidesToShow: 3
      }
  },
  {
      breakpoint: 1200,
      settings: {
        arrows: true,
        slidesToShow: 4
      }
  }]
});
