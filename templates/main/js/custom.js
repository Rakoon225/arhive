$(function () {
  if ($('.filter__radio').length) filter_form();

  $('#form-request').on('submit', function () {
    var $that = $(this),
      flag_submit = true,
      formData = new FormData($that.get(0));

    $.ajax({
      url: '/local/ajax/form_request.php',
      type: 'POST', // метод передачи данных
      dataType: 'json', // тип ожидаемых данных в ответе
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
      success: function (json) {
        if (json) {
          $($that).trigger('reset');
          $('.js-modal').fadeOut(100);
          $('#js-modal-thanks').fadeIn();
        }
      },
    });

    /*$.ajax({
			type: 'post',
			url: '/local/ajax/form_request.php',
			data: $(this_form).serialize(),
			success: function(res){
				console.log(res);

				$('#form-request').trigger('reset');
				$(this).parents('.js-modal').fadeOut();
		        $('#js-modal-thanks').fadeIn();
			}
		});*/

    return false;
  });

  $('form.callback-form').on('submit', function () {
    var this_form = $(this);
    var phone = $('input[name=phone]', this_form).val();
    var flag_submit = true;

    if (phone == '') {
      $('input[name=phone]', this_form).addClass('error');
      flag_submit = false;
    }

    if (!flag_submit) return false;

    $.ajax({
      type: 'post',
      url: '/local/ajax/form_callback.php',
      data: $(this_form).serialize(),
      success: function (res) {
        $(this_form).trigger('reset');
        $('.js-modal').fadeOut(100);
        $('.callback-success').fadeIn();
      },
    });

    return false;
  });

  if ($('.js-modal-show-product').length) product_popup();
});

function filter_form() {
  $('.filter__radio input').on('change', function () {
    $(this).parents('form.filter').submit();
  });
}

function product_popup() {
  $('.js-modal-show-product').on('click', function () {
    var parrentDiv = $(this).parents('.eq-selected');

    let currentModal = $(this).attr('href');
    let currentProduct = $(this).attr('data-id');
    let currentComplectation = $('span.eq-selected__name', parrentDiv).html();
    let currentPrice = $('p.eq-selected__price', parrentDiv).html();

    currentPrice = currentPrice.replace(/[^0-9, ]/g, '');

    $.ajax({
      type: 'post',
      url: '/local/ajax/order_product_form.php',
      data: 'product_id=' + currentProduct + '&complectation=' + currentComplectation + '&price=' + currentPrice,
      success: function (res) {
        $('form', currentModal).html(res);
        $(currentModal).fadeIn(500);
        $('.phone').mask('+7 (999) 999-99-99');

        $('body').css('overflow', 'hidden');

        $('.js-modal-close').on('click', function (e) {
          e.preventDefault();
          let modalWindow = $(this).parents('.js-modal');
          $('.js-modal').fadeOut(100);
          $('body').css('overflow', 'visible');
        });

        $('body').on('click', '.js-modal', function (e) {
          if (e.target.classList.contains('js-modal')) {
            $('.js-modal').fadeOut(100);
            $('body').css('overflow', 'visible');
          }
          e.stopPropagation();
        });
      },
    });

    return false;
  });

  $('#order_product_form').on('submit', function (e) {
    e.preventDefault();
    var $that = $(this),
      flag_submit = true,
      formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)

    $('input.required', $that).each(function () {
      var val = $(this).val();
      if (val == '') {
        $(this).addClass('error');
        flag_submit = false;
      } else {
        $(this).removeClass('error');
      }
    });

    if (!flag_submit) return false;

    $.ajax({
      url: '/local/ajax/form_product.php',
      type: 'POST', // метод передачи данных
      dataType: 'json', // тип ожидаемых данных в ответе
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
      success: function (json) {
        if (json) {
          $($that).trigger('reset');
          $('.js-modal').fadeOut(100);
          $('.callback-success').fadeIn();
        }
      },
    });

    return false;
  });
}
