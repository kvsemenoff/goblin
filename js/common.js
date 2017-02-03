

$(document).ready(function(){

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


// ==========================================
// ========== Слайдер товара ================
// ==========================================
    $('.slider_info_block').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });

 });


