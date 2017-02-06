
$(document).ready(function(){


    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+50);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });

    $('.window .dd-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 

    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 

 

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="phone"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnanks(this);
                }
            });
        }
        return false;
    });
    function cleanTnanks(form){
                $('input[type="text"]').removeClass("error-input");
                $("input[type=text], textarea").val("");
                $('.window').hide();
                $('input[type="submit"]').trigger('click');
                // location = "spasibo.php";
            };


    $('.az-select').each(function(){

        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

   

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });



    let oneprice = parseFloat($(".oneprice__count").text().trim().replace(/\s+/g, '')),
        totalprice = oneprice;
    $(".totalprice__count").text(oneprice);
    $(".df-number .dfbutton").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
            

        if ($button.text() == "+") {
          var newVal = parseFloat(oldValue) + 1;
          totalprice += oneprice;
          $(".totalprice__count").text(totalprice);
      }  
      else {
     // Don't allow decrementing below zero
     if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
        totalprice -= oneprice;
        $(".totalprice__count").text(totalprice);
    } else {
        newVal = 1;
        totalprice = oneprice;
    }
}

$button.parent().find("input").val(newVal);

});


// ==========================================
// ========== Сайдбар для каталога ==========
// ==========================================

$('.sub_menu').slideUp(0);
$('.nav_item.first > .sub_menu').slideDown(0);
$('.nav_item_header').click(function(){
    if (!$(this).hasClass('active')){
        $('.nav_item_header').removeClass('active');
        $(this).addClass('active');
        $('.sub_menu').slideUp(300);
        $(this).next('.sub_menu').slideDown(300);
    } else {
        $(this).next('.sub_menu').slideUp(300);
        $(this).removeClass('active');
    }
});
    // $('.sub_menu_header').addClass('active');

    $('.sub_menu').slideUp(0);
    $('.nav_item.first > .sub_menu').slideDown(0);
    $('.nav_item_header').click(function(){
        if (!$(this).hasClass('active')){
            $('.nav_item_header').removeClass('active');
            $(this).addClass('active');
            $('.sub_menu').slideUp(300);
            $(this).next('.sub_menu').slideDown(300);
        } else {
            $(this).next('.sub_menu').slideUp(300);
            $(this).removeClass('active');
        }
    });

    $('.inner_sub_menu').slideUp(0);
    $('.sub_menu_header').click(function(){
        if (!$(this).hasClass('active')){
            $(this).addClass('active');
            $(this).next('.inner_sub_menu').slideDown(300);
        } else {
            $(this).removeClass('active');
            $(this).next('.inner_sub_menu').slideUp(300);
        }
    });





// ==========================================
// ========== Слайдер товара ================
// ==========================================
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 5,
      // slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      // centerMode: true,
      focusOnSelect: true
    });
     $(".close__btn").on("click", function(e) {
        e.preventDefault();
        $(this).closest("");
    })
     
     /* Отображение и скрытие формы доставки */
    $(".purchase__form-label .checkbox").on("click", function() {
       let _this = $(this),
           parent = _this.closest("fieldset"),
           form = parent.find(".purchase__form-fields"),
           other__forms = $(".purchase__form-fields"),
           other__fieldsets = $("fieldset"),
           activeItem = other__forms.filter(".active__field");
        activeItem.slideUp(500, function () {
            other__forms.each(function() {
                $(this).removeClass("active__field");
            })
            other__fieldsets.each(function(){
                $(this).removeClass("purchase__form-courier");
            });
            form.slideDown(500, function() {            
                form.toggleClass("active__field");
            })
  
            parent.toggleClass("purchase__form-courier");
        })

    });
   
});

$(document).ready(function(){
    $(".close__btn").on("click", function() {
       $(this).closest(".item__tr").empty();
    })
});



