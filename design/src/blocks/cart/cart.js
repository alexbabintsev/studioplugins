function calcCart() {
    let cartItemList = document.querySelectorAll('.cart-item'),
        totalBlock = document.querySelector('.cart__total span'),
        totalBlockOld = document.querySelector('.cart__total-old span'),
        discountBlock = document.querySelector('.cart__save-price span'),
        totalNopromoInput = document.querySelector('input[name=no-promo-price]'),
        totalPriceInput = document.querySelector('input[name=total-price]'),
        discount = +document.querySelector('.form-cart').dataset.discount;
    let total = 0;
    // Общая цена товаров
    cartItemList && cartItemList.forEach(function(el) {
        total += +el.dataset.price;
    });
    totalBlockOld.textContent = total;
    totalNopromoInput.value = total;
    // Скидка
    if (discount > 0) {
        let diff = +(total*discount/100).toFixed(2);
        total -= diff;
        discountBlock.textContent = diff;
    }
    // Записываем окончательную цену в инпут и текстовый блок
    totalBlock.textContent = total;
    totalPriceInput.value = total;
}
document.addEventListener('DOMContentLoaded', ()=> {
    if (document.querySelector('.cart')) {
        calcCart();
    }
    let cartDeleteList = document.querySelectorAll('.cart-item__delete');
    cartDeleteList && cartDeleteList.forEach(function(el) {
       el.addEventListener('click', function() {
          this.closest('.cart-item').remove();
          if (!document.querySelector('.cart-item')) {
              document.querySelector('.cart').classList.add('is-empty');
              return false;
          }
          calcCart();
       });
    });
});