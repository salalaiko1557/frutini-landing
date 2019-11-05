jQuery(document).ready(function(){

    function detect_active(){
        // get active
        var get_active = $("#dp-slider .dp_item:first-child").data("class");
        $("#dp-dots li").removeClass("active");
        $("#dp-dots li[data-class="+ get_active +"]").addClass("active");
      }
      $("#dp-next").click(function(){
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:first-child").hide().appendTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function (index, dp_item) {
          $(dp_item).attr('data-position', index + 1);
        });
        detect_active();
    
      });
    
      $("#dp-prev").click(function(){
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:last-child").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function (index, dp_item) {
          $(dp_item).attr('data-position', index + 1);
        });
    
        detect_active();
      });
    
      $("#dp-dots li").click(function(){
        $("#dp-dots li").removeClass("active");
        $(this).addClass("active");
        var get_slide = $(this).attr('data-class');
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function (index, dp_item) {
          $(dp_item).attr('data-position', index + 1);
        });
      });
    
    
      $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function(){
        var get_slide = $(this).attr('data-class');
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]").hide().prependTo("#dp-slider").fadeIn();
        $.each($('.dp_item'), function (index, dp_item) {
          $(dp_item).attr('data-position', index + 1);
        });
    
        detect_active();
      });

      $('.about-device-slider').slick({
        centerMode: true,
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      $('.product-device-slider').slick({

        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      $('.main-economy-content-device').slick({
        slidesToShow: 1,
        centerMode: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      $('.risks-desktop-slider').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      $('.main-risks-content-list-device-slider').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      $('.main-customers-content-device > ul').slick({
        centerMode: true,
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });

      $('.main-goods-content').slick({
        slidesToShow: 3,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });

      $('.main-goods-content-device').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        arrows: false,
      });
      
      
      
    
});