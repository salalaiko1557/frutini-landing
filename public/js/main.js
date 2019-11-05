$( document ).ready(function() {
  /**
 * float menu
 */  
    $( document ).scroll(function() {
        var top = $(document).scrollTop(),
            width = $(document).width();

        if((top > 95) && (width >= 992)){
            $( "#navigate-dsktp" ).addClass('floating-header-desktop');
            $( "#navigate-dsktp-call" ).css({"display": "none"});
            $( ".main-wrapper").css({"margin-top": "50px"});
        }
        if((top < 95) && (width >= 992)){
            $( "#navigate-dsktp" ).removeClass('floating-header-desktop');
            $( "#navigate-dsktp-call" ).css({"display": "block"});
            $( ".main-wrapper").css({"margin-top": "0"});
        }
        if((top > 55) && (width < 992)){
            $( "#navigate-dvc" ).addClass('floating-header-desktop');
            $( ".main-wrapper").css({"margin-top": "55px"});
        }
        if((top < 55) && (width < 992)){
            $( "#navigate-dvc" ).removeClass('floating-header-desktop');
            $( ".main-wrapper").css({"margin-top": "0"});
        }
    });
/**
 * displayed mobile menu
 */
    $("#open-mobile-menu").click(function() {
        $(".mobile-menu-content").removeClass("d-none").fadeIn(500);
        $("#navigate-dvc").removeClass("d-flex");
        $("#navigate-dvc").addClass("d-none");
        $("body").css({"overflow": "hidden"});
        $("html").css({"overflow": "hidden"});
    });

    $("#close-mobile-menu").click(function() {
        $(".mobile-menu-content").removeClass("d-flex").fadeOut(500);
        $(".mobile-menu-content").addClass("d-none").fadeOut(500);
        $("#navigate-dvc").removeClass("d-none");
        $("#navigate-dvc").addClass("d-flex");
        $("body, html").css({"overflow-y": "scroll"});
        $("body, html").css({"overflow-x": "hidden"});
    });
/**
 * ancors
 */
    $(".main-menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $(".mobile-menu-content-items").on("click","a", function (event) {
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
        $(".mobile-menu-content").removeClass("d-flex").fadeOut(500);
        $(".mobile-menu-content").addClass("d-none").fadeOut(500);
        $("#navigate-dvc").removeClass("d-none");
        $("#navigate-dvc").addClass("d-flex");
        $("body, html").css({"overflow-y": "scroll"});
        $("body, html").css({"overflow-x": "hidden"});
    });
    
    $("#readmore-article").readmore({
        speed: 250,
        collapsedHeight: 50,
        moreLink: '<a href="#" class="readmore-btn">Детальніше про нас</a>',
        lessLink: '<a href="#" class="readmore-btn">Приховати</a>'
        });
   
    $("#navigate-dsktp-call-1, #navigate-dsktp-call-2, #navigate-dsktp-call-3, #navigate-dsktp-call-4, #navigate-dsktp-call-5").click(function() {
       $(".main-form-popup-telephone-hide-wrapper").addClass("main-form-popup-telephone-show-wrapper");
       $(".main-header").css({"filter": "blur(2px)"});
       $(".main-about").css({"filter": "blur(2px)"});
       $(".main-product").css({"filter": "blur(2px)"});
       $(".main-economy").css({"filter": "blur(2px)"});
       $(".main-risks").css({"filter": "blur(2px)"});
       $(".main-customers").css({"filter": "blur(2px)"});
       $(".main-confidence").css({"filter": "blur(2px)"});
       $(".main-contacts").css({"filter": "blur(2px)"});
       $(".main-footer-desktop").css({"filter": "blur(2px)"});
       $("body").css({"overflow": "hidden"});
       $("html").css({"overflow": "hidden"});
       
    });
       $('#phone-number').mask("0000000000" , {placeholder: "(000)000-00-00"});

       $('#close-callback-form').click(function() {
        $(".main-form-popup-telephone-hide-wrapper").removeClass("main-form-popup-telephone-show-wrapper");
        $(".main-header").css({"filter": "none"});
        $(".main-about").css({"filter": "none"});
        $(".main-product").css({"filter": "none"});
        $(".main-economy").css({"filter": "none"});
        $(".main-risks").css({"filter": "none"});
        $(".main-customers").css({"filter": "none"});
        $(".main-confidence").css({"filter": "none"});
        $(".main-contacts").css({"filter": "none"});
        $(".main-footer-desktop").css({"filter": "none"});
        $("body, html").css({"overflow-y": "scroll"});
        $("body, html").css({"overflow-x": "hidden"});
       });

     
       if ($("#contact_us").length > 0) {
        $("#contact_us").validate({
        rules: {
            name: {
                required: true,
                maxlength: 50
            },
            mobile_number_mesenger: {
                required: true,
                digits:true,
                minlength: 10,
                maxlength:12,
            },
            mobile_number: {
                required: true,
                digits:true,
                minlength: 10,
                maxlength:12,
            },
            email: {
                required: true,
                maxlength: 50,
                email: true,
            },    
        },
        messages: {
          name: {
            required: "Введіть ім'я та прізвище",
            maxlength: "Не більше 50 символів"
          },
          mobile_number: {
            required: "Введіть номер телефону. Наприклад: 0951112233",
            minlength: "Мінімум 10 чисел. Наприклад: 0951112233",
            digits: "Введіть лише цифри. Наприклад: 0951112233",
            maxlength: "Не більше 12 символів. Наприклад: 0951112233",
          },
          mobile_number_mesenger: {
            required: "Введіть номер телефону. Наприклад: 0951112233",
            minlength: "Мінімум 10 чисел. Наприклад: 0951112233",
            digits: "Введіть лише цифри. Наприклад: 0951112233",
            maxlength: "Не більше 12 символів. Наприклад: 0951112233",
          },
          email: {
            required: "Введіть електронну адресу. Наприклад: example@email.com",
            email: "Введіть коректний електронну адресу. Наприклад: example@email.com",
            maxlength: "Електронна адреса має бути не довшим 50 символів",
          }, 
        },
        submitHandler: function(form) {
         $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $('#send_form').html('Збереження даних...');

          var domain = window.location.hostname.toString();
          var url = domain + '/phonedata';
          $.ajax({
            url: "/phonedata",
            type: "POST",
            data: $('#contact_us').serialize(),
            success: function( response ) {
                $('#send_form').html('Підтвердити');
                $('#res_message').show();
                $('#res_message').html("Ваші дані успішно збережені. З Вами зв'яжуться найближчим часом");
                $('#msg_div').removeClass('d-none');
     
                document.getElementById("contact_us").reset(); 
                setTimeout(function(){
                $('#res_message').hide();
                $('#msg_div').hide();
                },10000);
            }
          });
        }
      })
    }
}); 