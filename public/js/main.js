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
        $("body").css({"overflow" : "hidden"})
    });

    $("#close-mobile-menu").click(function() {
        $(".mobile-menu-content").removeClass("d-flex").fadeOut(500);
        $(".mobile-menu-content").addClass("d-none").fadeOut(500);
        $("#navigate-dvc").removeClass("d-none");
        $("#navigate-dvc").addClass("d-flex");
        $("body").css({"overflow" : "scroll"})
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
        $("body").css({"overflow" : "scroll"})
    });
    
    $("#readmore-article").readmore({
        speed: 250,
        collapsedHeight: 50,
        moreLink: '<a href="#" class="readmore-btn">Подробнее о нас</a>',
        lessLink: '<a href="#" class="readmore-btn">Скрыть</a>'
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
       $("body").css({"overflow-y": "hidden"});
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
        $("body").css({"overflow-y": "scroll"});
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
            required: "Введите имя и фамилию",
            maxlength: "Не более 50 символов"
          },
          mobile_number: {
            required: "Введите номер телефона. Например: 0951112233",
            minlength: "Минимум 10 чисел. Например: 0951112233",
            digits: "Введите только цифры. Например: 0951112233",
            maxlength: "Не более 12 символов. Например: 0951112233",
          },
          mobile_number_mesenger: {
            required: "Введите номер телефона. Например: 0951112233",
            minlength: "Минимум 10 чисел. Например: 0951112233",
            digits: "Введите только цифры. Например: 0951112233",
            maxlength: "Не более 12 символов. Например: 0951112233",
          },
          email: {
              required: "Введите электронный адрес. Например: example@email.com",
              email: "Введите корректый электронный адрес. Например: example@email.com",
              maxlength: "Электронный адрес должен быть не длинее 50 символов",
            },
             
        },
        submitHandler: function(form) {
         $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $('#send_form').html('Сохранение данных...');
        //   var domain = window.location.hostname;
        //   console.log(domain);
          $.ajax({
            url: '/phonedata',
            type: "POST",
            data: $('#contact_us').serialize(),
            success: function( response ) {
                $('#send_form').html('Подтвердить');
                $('#res_message').show();
                $('#res_message').html('Ваши данные успешно сохранены. С Вами свяжутся в ближайшее время');
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