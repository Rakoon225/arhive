$(function () {
  $('.quipment-v2-card__btn--select').click(function (e) {
    e.preventDefault();
    const self = $(this);
    const name = self.siblings('.quipment-v2-card__title').text();
    const price = self.siblings('.quipment-v2-card__price').html();

    $('.quipment-v2-card__title--active').text(name);
    $('.quipment-v2-card__price--active').html(price);
  });
});
