$(function () {
    if (location.pathname.indexOf('amp') > 0) {
        $("#newsImg").css("display", "none")
    }
	
	$(".callback-btn").click(e => {
		$("#contact-form__wrapper").show();
	})
	
	$("#contact-form__close").click(e => {
		$("#contact-form__wrapper").hide();
	})
});


function zakaz() {
    $('.form').fadeIn();
    $('.white_block').remove();
    $('body').append('<div class="white_block"></div>');
    $('.white_block, .form .close').click(function () {
        $('.white_block, .form').fadeOut(function () {
            $('.white_block').remove();
        });
    });
}

function gallclick() {
    $('.right_bot').click();
}

function request() {
    $('.form-product-tpl').fadeIn();
    $('.white_block').remove();
    $('body').append('<div class="white_block"></div>');
    $('.white_block,.form-product-tpl .close').click(function () {
        $('.white_block,.form-product-tpl').fadeOut(function () {
            $('.white_block').remove();
        });
    });
}

function openbox(id) {
    display = document.getElementById(id).style.display;

    if (display == 'none') {
        document.getElementById(id).style.display = 'block';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}

function prod_prop() {
    var $prod_title = [],
    $prod_value = [];

    $(".production_properties").html("");

    $prod_title.push($('.prod tr:first').find('th').html());
    $('.prod tr:first').next().find('th').each(function () {
        $prod_title.push($(this).html());
    });
    $prod_title.pop();

    $(this).parent().parent().find('td').each(function () {
        $prod_value.push($(this).html());
    });
    $prod_value.pop();

    for (var i = 0; i < $prod_title.length; i++) {
        $(".production_properties").append($prod_title[i] + ": " + $prod_value[i] + "\n");
    }
    request();
}

function next() {
    if ($('.longblock').css('left') != '0px') return;
    $('.longblock').animate({ 'left': '-199px' }, 500, function () {
        $('.longblock').css('left', '0px');
        $('.longblock a:first').detach().appendTo('.longblock');
    });
}

function prev() {
    if ($('.longblock').css('left') != '0px') return;
    $('.longblock a:last').detach().prependTo('.longblock');
    $('.longblock').css('left', '-199px');
    $('.longblock').animate({ 'left': '0px' }, 500);
}

setInterval(next, 3000);

/*function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : false;
}

$(function(){
    if (getCookie('showed') == false) {
		setTimeout(function(){
			$('body').append('<div class="white_block"></div>');
			$('.white_block').fadeIn();
			$('.form_warning').fadeIn();
            var date = new Date(new Date().getTime() + 600000 * 1000);
			document.cookie = "showed=true; path=/; expires=" + date.toUTCString();
		}, 1500);
	}
});

$(function(){
  $('.form_warning .close, .white_block').click(function(){
	  $('.form_warning, .white_block').fadeOut(function(){
			$('.white_block').remove();
		});
	});
});
*/

/*window.onload= function() {
    document.getElementById('toggler').onclick = function() {
        openbox('box', this);
        return false;
    };
};
function openbox(id, toggler) {
    var div = document.getElementById(id);
    if(div.style.display == 'block') {
        div.style.display = 'none';
        toggler.innerHTML = 'Подробнее';
    }
    else {
        div.style.display = 'block';
        toggler.innerHTML = 'Свернуть';
    }
}*/


$(function () {
    $('.barrier__item').click(function () {
        $('.barrier__item').removeClass('active');
        $(this).addClass('active');
        let image = $('.barrier__content img');
        image.attr('src', $(this).data('src'));
    });

    $('.zayavka').click(function () {
        $(".production_properties").html("");
        request();
    });

    $('.otkr_blok').click(function () {
        $(".non_blok").addClass('act');
        $(".otkr_blok").addClass('act');

    });

    if ($(".form-product-tpl .errors").length > 0) {
        request();
    }
    setTimeout(function () {
        $('.thank-product-tpl, .white_block').fadeOut();
    }, 5000);

    $('.ask').click(zakaz);

    if ($(".form .errors").length > 0) {
        zakaz();
    }
    setTimeout(function () {
        $('.thank-tpl, .white_block1').fadeOut();
    }, 5000);


    if ($('.feedback_call .errors').length > 0) {
        $('.feedback_call').show();
        $('.blackblock_call').show();
    }
    if ($('.feedback_order .errors').length > 0) {
        $('.feedback_order').show();
        $('.blackblock_order').show();
    }

    $('.header__feedback').click(function () {
        $('.feedback_call').fadeIn();
        $('.blackblock_call').fadeIn();
    });

    $('.order__button,.sale-item__button, .work__button2').click(function () {
        $('.feedback_order').fadeIn();
        $('.blackblock_order').fadeIn();
    });

    $('.button__close, .blackblock').click(function () {
        $('.feedback').fadeOut();
        $('.blackblock').fadeOut();
    });

    $('#pr_arrow_left').click(function () {
        if ($('#pr_move').css('left') != '0px') return;
        $('#pr_move .block_slider_element:last').detach().prependTo('#pr_move');
        $('#pr_move').css('left', '-1000px');
        $('#pr_move').animate({ 'left': '0px' }, 1500);
    });

    $('#pr_arrow_right').click(function () {
        if ($('#pr_move').css('left') != '0px') return;
        $('#pr_move').animate({ 'left': '-1000px' }, 500, function () {
            $('#pr_move .block_slider_element:first').detach().appendTo('#pr_move');
            $('#pr_move').css('left', '0px');
        });
    });

    setInterval(gallclick1, 8000);

    function gallclick1() {
        $('#pr_arrow_right').click();
    }

    $('.partner .next').click(prev);
    $('.partner .prev').click(next);

    //prod_tabs
    $('.tab:first').addClass('active');
    $('.tab_item:first').toggle("fast");

    $('.tab').click(function () {
        obj = $(this);
        num = obj.index();
        obj_s = $('.tab_item');
        if (obj.hasClass('active')) {
            return;
        } else {
            $('.tab').removeClass('active');
            obj.addClass('active');
            obj_s.hide();
            obj_s.eq(num).toggle();
        }
    });
    //prod_tabs_end

    $('.left_bot').click(function () {
        if ($('.galery_move_bot').css('left') != '0px') return;
        width = $('.galery_move_bot .img_wrap').width();
        $('.galery_move_bot .img_wrap:last').detach().prependTo('.galery_move_bot');
        $('.galery_move_bot').css('left', -width - 30);
        $('.galery_move_bot').animate({ 'left': '0px' }, 500);
    });
    $('.right_bot').click(function () {
        if ($('.galery_move_bot').css('left') != '0px') return;
        width = $('.galery_move_bot .img_wrap').width();
        $('.galery_move_bot').animate({ 'left': -width - 30 }, 500, function () {
            $('.galery_move_bot .img_wrap:first').detach().appendTo('.galery_move_bot');
            $('.galery_move_bot').css('left', '0px');
        });
    });
    setInterval(gallclick, 4000);

    $('.prod tr').each(function () {
        if ($(this).find('th').length == 2) {
            $(this).append('<th></th>');
        } else {
            if ($(this).find('th').length > 2) {
                $(this).append('<th></th>');
            }
        }
        if ($(this).find('td').length > 0 && !$(this).hasClass('no_res')) {
            $(this).append('<td><span class="order_button">Заказать</span></td>');
        }
    });

    $('.order_button').click(prod_prop);

    // up
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('.up').fadeIn();
        } else {
            $('.up').fadeOut();
        }
    });
    $('.up').click(function () {
        $('body,html').animate({ scrollTop: 0 }, 800);
    });

    $('.non-active').click(function () {
        yaCounter27349376.reachGoal('enversion');
        console.log("enversion ok");
    });


    $('.naz_tabl').click(function () {
        // $('.naz_tabl').each(function(){
        // 	$(this).removeClass('active');
        // 	$(this).children('.niz_tabl').addClass('active');
        // 	$(this).children('.verh_tabl').removeClass('active');
        // });
        // $('.tabl_rask_blok').each(function(){
        // 	$(this).removeClass('active');
        // });
        $(this).toggleClass('active');
        $(this).next().toggleClass('active');
        $(this).children('img').toggleClass('active');
        $(this).find('.tabl_rask_blok').toggleClass('active');
    });
    var swiper = new Swiper('.gallery-production__wrapper.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1
            }
        }
    });

    if (window.matchMedia('(min-width: 1025px)').matches) {
        $('.lb').lightBox();
    }
    $(".mask_phone").inputmask("+7 (999) 999-99-99");

    /*------антиспам------*/
    $('.field-special.test').attr('value', 'test');
});
