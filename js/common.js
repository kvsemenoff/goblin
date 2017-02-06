

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
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 
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



    $(".df-number .dfbutton").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();  

        if ($button.text() == "+") {
          var newVal = parseFloat(oldValue) + 1;
      }  
      else {
     // Don't allow decrementing below zero
     if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
    } else {
        newVal = 1;
    }
}

$button.parent().find("input").val(newVal);

});


// ==========================================
// ========== Сайдбар для каталога ==========
// ==========================================
<<<<<<< HEAD
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
=======
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
>>>>>>> 97c00d0c92fb3a1af0402b389367a8cdb95c71b4
    $('.inner_sub_menu').slideUp(0);
    $('.sub_menu_header').click(function(){
        if (!$(this).hasClass('active')){
            $(this).addClass('active');
            $(this).next('.inner_sub_menu').slideDown(300);
        } else {
            $(this).removeClass('active');
            $(this).next('.inner_sub_menu').slideUp(300);
        }
    })

<<<<<<< HEAD
});
=======

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

 });
>>>>>>> 97c00d0c92fb3a1af0402b389367a8cdb95c71b4



