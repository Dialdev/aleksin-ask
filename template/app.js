document.addEventListener('DOMContentLoaded', function () {
    var overlay = document.querySelector('.overlay');
    var showOverlay = function () {
        overlay.style.display = 'block';
    }

    var closeOverlay = function () {
        overlay.style.display = 'none';
    }

    var menu = {
        $burger: document.querySelector('.header-burger'),
        $menu: document.querySelector('.topmenu'),
        opened: false,
        open: function () {
            if (!this.opened) {
                this.$burger.classList.toggle('header-burger_open', true);
                this.$menu.classList.toggle('topmenu_open', true);
                showOverlay();
                this.opened = true;
            }
        },
        close: function () {
            if (this.opened) {
                this.$burger.classList.toggle('header-burger_open', false);
                this.$menu.classList.toggle('topmenu_open', false);
                closeOverlay();
                this.opened = false;
            }
        },
        toggle: function () {
            if (this.opened) {
                this.close();
            } else {
                this.open();
            }
        },
        init: function () {
            var _this = this;
            this.$burger.addEventListener('click', function () {
                _this.toggle();
            });

            overlay.addEventListener('click', function () {
                _this.close();
            });
        }
    }

    menu.init();

    $('.item').each(function () {
        var sib = $(this).siblings('.item');
        // var oSib = $(this).siblings().filter(':not(.item)');
        if (sib.length > 0 && !$(this).parent().hasClass('grid-list')) {
            $(this).parent().find('.item').wrapAll('<div class="grid-list"></div>');
        }
    });

    $('table.prod, table.tabl_rask').each(function () {
        $(this).wrap('<div class="table-wrap"></div>')
    });

    $('.gallery').each(function () {
        console.log($(this), $(this).parent().hasClass('gallery'));
        if ($(this).parent().hasClass('gallery')) {
            $(this).unwrap();
        }
    });

    if (window.matchMedia('(max-width: 1024px)').matches) {
        $('.lb').fancybox()
    }
});
$(document).ready(function(){
  $(".mask_phone").inputmask("+7(999)999-99-99");
	$('.button__close').click(function(){
		$('.feedback_thank').hide();
	})
});
$(document).on('submit','#ajaxContactForm form',function(e){
        $.ajax({
            type: 'post',
            url: '/ajaxContactForm',
            data: $(this).serialize(),
            success: function(data){
                $('#ajaxContactForm form').remove();
                $('#ajaxContactForm').html(data); 
            }
        });
        e.preventDefault();
    });

var swiper = new Swiper(".mySwiper", {
 autoplay: {
   delay: 5000,
 },
	 slidesPerView: 2,
  spaceBetween: 10,
});


