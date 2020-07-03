const DURATION_MOB_PAGE_ANIMATION = 300;
$(function() {

    //tabs
    $('.tabs').on('click', '.tabs-nav__item', function (e) {
        e.preventDefault();
        let data = $(this).data('page-id');
        if (data.media) {
            if (window.innerWidth <= data.media && data.id) {
                return false;
            }
        }
        let container = $(this).closest('.tabs');
        let allEl = container.find('[data-tab-id]');
        let id = $(this).data('tab-id');
        allEl.removeClass('is-active');
        container.find(`[data-tab-id=${id}]`).addClass('is-active');
    });

    $('[data-page-id]').click(function() {
        let data = $(this).data('page-id');
        if (data.media) {//если объект
            if (window.innerWidth <= data.media && data.id) {
                noScroll.disableScroll();
                $(`[data-page=${data.id}]`).addClass('is-open').fadeIn();
            }
        }else{
            if (window.innerWidth <= 575) {
                noScroll.disableScroll();
                $(`[data-page=${data}]`).addClass('is-open').fadeIn();
            }
        }
    });
    $('[data-page-close]').click(function(e) {
        let block = $('[data-page].is-open');
        if (block.length) {
            noScroll.enableScroll();
            e.preventDefault();
            block.fadeOut(DURATION_MOB_PAGE_ANIMATION, function () {
                block.removeClass('is-open').css('display', '');
            });
        }
    });

});
//pureJS polyfills IE
(function() {

    if (!Element.prototype.closest) {// проверяем поддержку closest
        Element.prototype.closest = function(css) {
            var node = this;

            while (node) {
                if (node.matches(css)) return node;
                else node = node.parentElement;
            }
            return null;
        };
    }

})();
isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
function ScrollEvent() {
    let keys = {37: 1, 38: 1, 39: 1, 40: 1};

    function preventDefault(e) {
        e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    // modern Chrome requires { passive: false } when adding event
    let supportsPassive = false;
        try {
        window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
    } catch(e) {}

    let wheelOpt = supportsPassive ? { passive: false } : false;
    let wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    // call this to Enable
    function enableScroll() {
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    ScrollEvent.enable = enableScroll;
    ScrollEvent.disable = disableScroll;
}
ScrollEvent();

const mac = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ? true : false;
const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
// let timeNow = new Date();
let video = document.getElementById('hero-video');







function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    outer.style.msOverflowStyle = "scrollbar";

    document.body.appendChild(outer);

    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = "scroll";

    // add innerdiv
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);

    var widthWithScroll = inner.offsetWidth;

    // remove divs
    outer.parentNode.removeChild(outer);
    return widthNoScroll - widthWithScroll;
}

// проверка на боковой скролл
function hasScrollbar() {
    return $(document).height() > $(window).height();
}
// var radioValue = number_format($(this).val(), 0, ',', ' ');
function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
                .toFixed(prec);
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
        .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
            .join('0');
    }
    return s.join(dec);
}

function modalOpenMac() {
    if ( mac ) {
        if ($(document).height() > $(window).height() && !$("html").hasClass("apple-fix")) {
            var scrollTop = ($('html').scrollTop()) ? $('html').scrollTop() : $('body').scrollTop(); // Works for Chrome, Firefox, IE...
            $('html').css('top',-scrollTop);
            document.documentElement.classList.add("apple-fix");
        }
    }
}

function modalCloseMac() {
    if (mac) {
        var scrollTop = parseInt($('html').css('top'));
        document.documentElement.classList.remove("apple-fix");
        $('html,body').scrollTop(-scrollTop);
    }
}

class NoScroll {
    constructor(fixedElements) {
        this.html = document.querySelector('html');
        this.body = document.body;
        this.scrollTop = 0;
        this.scrollWidth = this.getScrollWidth();
        this.fixedElements = document.querySelectorAll(fixedElements);

        this.createCss();
    }
    createCss() {
        this.css = `
            .noScroll {
                position: fixed;
                overflow: hidden;
            }
        `;
        this.head = document.head || document.getElementsByTagName('head')[0];
        this.style = document.createElement('style');
        // this.body.prepend(this.style);//not support IE
        this.body.insertBefore(this.style, this.body.childNodes[0]);
        this.style.appendChild(document.createTextNode(this.css));
    }
    getScrollWidth() {
        let outer = document.createElement("div");
        outer.style.visibility = "hidden";
        outer.style.width = "100px";
        outer.style.msOverflowStyle = "scrollbar";

        this.body.appendChild(outer);

        let widthNoScroll = outer.offsetWidth;
        outer.style.overflow = "scroll";

        let inner = document.createElement("div");
        inner.style.width = "100%";
        outer.appendChild(inner);

        let widthWithScroll = inner.offsetWidth;

        outer.parentNode.removeChild(outer);
        return widthNoScroll - widthWithScroll;
    }
    disableScroll() {
        this.scrollTop = this.html.scrollTop ? this.html.scrollTop : this.body.scrollTop;
        this.scrollWidth = this.getScrollWidth();

        this.html.classList.add('noScroll');
        this.html.style.top = -this.scrollTop+'px';
        this.html.style.marginRight = this.scrollWidth+'px';
        this.html.style.width = 'calc(100% - '+this.scrollWidth+'px';


        if (this.fixedElements[0]) {
            [].forEach.call(this.fixedElements, (el, i)=> {
                let elWidth = el.clientWidth;
                let pos = getComputedStyle(el).position;
                let cssWidth = elWidth + this.scrollWidth >= window.innerWidth ? elWidth - this.scrollWidth + 'px' : '';
                if (pos === 'fixed') {
                    el.style.width = cssWidth;
                    el.style.marginRight = this.scrollWidth+'px';
                }
            });
        }
    }
    enableScroll() {
        this.html.classList.remove('noScroll');
        this.html.style.top = '';
        this.html.style.marginRight = '';
        this.html.style.width = '';


        if (this.fixedElements[0]) {
            [].forEach.call(this.fixedElements, (el, i)=> {
                el.style.width = '';
                el.style.marginRight = '';
            });
        }
        this.html.scrollTop = this.scrollTop;
        this.scrollTop = 0;
    }
}
const noScroll = new NoScroll();