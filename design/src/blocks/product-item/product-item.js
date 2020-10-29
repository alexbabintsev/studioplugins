document.addEventListener('DOMContentLoaded', () => {
   let productItem = document.querySelectorAll('.product-item');
    productItem && productItem.forEach(function(el) {
        let video = el.querySelector('.product-item__video video');
        if (video && window.innerWidth >= 992) {
            el.addEventListener('mouseenter', function() {
                // console.log('enter');
                el.classList.add('is-video');
                video.play();
            });
            el.addEventListener('mouseleave', function() {
                // console.log('leave');
                el.classList.remove('is-video');
                video.pause();
            });
        }
    });
});