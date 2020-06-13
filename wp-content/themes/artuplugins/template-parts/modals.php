<?php if(is_user_logged_in()):?>
<div class="default-modal modal-change-email">
    <div class="default-modal__content"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title">Enter <span>your new email</span> </h2>
            <form class="main-form default-modal__form" name="modal-change-email-form" novalidate="novalidate">
                <div class="input-group">
                    <div class="input-group__label">New email</div>
                    <input type="text" name="new_email">
                </div>
                <div class="submit-wrapper main-form__submit-wrapper">
                    <button class="main-form__submit-btn" type="submit">Change email</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="default-modal modal-change-pass">
    <div class="default-modal__content"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title default-modal__title-chp">Enter <span>your current password</span> </h2>
            <form class="main-form default-modal__form" name="modal-change-pass-form" novalidate="novalidate">
                <div class="input-group">
                    <div class="input-group__label">Password</div>
                    <input type="text" name="current_password">
                </div>
                <div class="submit-wrapper main-form__submit-wrapper">
                    <button class="main-form__submit-btn" type="submit">Create new password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="default-modal modal-change-pass-new">
    <div class="default-modal__content"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title default-modal__title-chp">Enter <span>new password</span> </h2>
            <form class="main-form default-modal__form" name="modal-change-pass-form" novalidate="novalidate">
                <div class="input-group">
                    <div class="input-group__label">New password</div>
                    <input type="text" name="new_password">
                </div>
                <div class="input-group">
                    <div class="input-group__label">Confirm new password</div>
                    <input type="text" name="confirm new_password">
                </div>
                <div class="submit-wrapper main-form__submit-wrapper">
                    <button class="main-form__submit-btn" type="submit">Create new password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="default-modal modal-change-name">
    <div class="default-modal__content"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title">Enter <span>your name</span> </h2>
            <form class="main-form default-modal__form" name="modal-change-name-form" novalidate="novalidate">
                <div class="input-group">
                    <div class="input-group__label">Name</div>
                    <input type="text" name="new_email">
                </div>
                <div class="submit-wrapper main-form__submit-wrapper">
                    <button class="main-form__submit-btn" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="default-modal modal-act-code">
    <div class="default-modal__content"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title">Enter <span>your</span> videohive <span>activation code</span></h2>
            <form class="main-form default-modal__form" name="modal-act-code-form" novalidate="novalidate">
                <div class="input-group">
                    <div class="input-group__label">Product</div>
                    <select name="product">
                        <?php $query = new WP_Query;
                        $products = $query->query([
                            'post_type' => 'pl-product',
                            'posts_per_page'=>-1,
                        ]);
                        foreach( $products as $product ){
                            echo '<option value="'.$product->ID.'">'.$product->post_title.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <div class="input-group__label">Activation code</div>
                    <input type="text" name="act_code">
                </div>
                <div class="submit-wrapper main-form__submit-wrapper">
                    <button class="main-form__submit-btn" type="submit">Activate</button>
                </div>
                <div class="main-form__login"><a class="main-form__question" href="#">Where can I find activation code?</a></div>
            </form>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-success-activation">
    <div class="default-modal__content default-modal__content-illustration"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <div class="default-modal__illustration"><svg width="344" height="302" viewBox="0 0 344 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M151.825 301.788C231.372 301.788 295.858 237.237 295.858 157.609C295.858 77.9813 231.372 13.4303 151.825 13.4303C72.2787 13.4303 7.79333 77.9813 7.79333 157.609C7.79333 237.237 72.2787 301.788 151.825 301.788Z" fill="#051227"/>
                    <path d="M284.447 65.2553L283.684 66.0273L284.455 66.7915L285.219 66.0195L284.447 65.2553Z" fill="white"/>
                    <path d="M277.552 58.4594L276.788 59.2314L277.56 59.9956L278.323 59.2236L277.552 58.4594Z" fill="white"/>
                    <path d="M291.343 72.0511L290.58 72.8231L291.351 73.5873L292.115 72.8153L291.343 72.0511Z" fill="white"/>
                    <path d="M270.726 51.5945L269.962 52.3665L270.733 53.1307L271.497 52.3587L270.726 51.5945Z" fill="white"/>
                    <path d="M287.876 61.7689L287.113 62.5409L287.884 63.3051L288.648 62.5331L287.876 61.7689Z" fill="white"/>
                    <path d="M280.981 54.973L280.217 55.7451L280.989 56.5092L281.752 55.7372L280.981 54.973Z" fill="white"/>
                    <path d="M294.703 68.6348L293.939 69.4069L294.711 70.1711L295.474 69.399L294.703 68.6348Z" fill="white"/>
                    <path d="M274.085 48.1782L273.322 48.9502L274.093 49.7144L274.856 48.9424L274.085 48.1782Z" fill="white"/>
                    <path d="M291.236 58.3526L290.473 59.1246L291.244 59.8888L292.008 59.1168L291.236 58.3526Z" fill="white"/>
                    <path d="M284.34 51.5568L283.577 52.3289L284.348 53.0931L285.112 52.321L284.34 51.5568Z" fill="white"/>
                    <path d="M298.132 65.1484L297.368 65.9204L298.14 66.6846L298.903 65.9126L298.132 65.1484Z" fill="white"/>
                    <path d="M277.514 44.6917L276.751 45.4637L277.522 46.2279L278.286 45.4559L277.514 44.6917Z" fill="white"/>
                    <path d="M294.665 54.8662L293.902 55.6382L294.673 56.4024L295.436 55.6304L294.665 54.8662Z" fill="white"/>
                    <path d="M287.77 48.0712L287.006 48.8432L287.778 49.6074L288.541 48.8354L287.77 48.0712Z" fill="white"/>
                    <path d="M298.095 51.5194L297.331 52.2914L298.103 53.0556L298.866 52.2836L298.095 51.5194Z" fill="white"/>
                    <path d="M291.2 44.7245L290.436 45.4965L291.207 46.2607L291.971 45.4887L291.2 44.7245Z" fill="white"/>
                    <path d="M301.524 48.0329L300.761 48.8049L301.532 49.5691L302.295 48.7971L301.524 48.0329Z" fill="white"/>
                    <path d="M294.628 41.2372L293.865 42.0092L294.636 42.7734L295.4 42.0014L294.628 41.2372Z" fill="white"/>
                    <path d="M308.35 54.8989L307.587 55.671L308.358 56.4352L309.122 55.6631L308.35 54.8989Z" fill="white"/>
                    <path d="M287.733 34.4422L286.97 35.2142L287.741 35.9784L288.504 35.2064L287.733 34.4422Z" fill="white"/>
                    <path d="M304.884 44.6175L304.12 45.3895L304.892 46.1537L305.655 45.3817L304.884 44.6175Z" fill="white"/>
                    <path d="M297.988 37.8217L297.225 38.5937L297.996 39.3579L298.76 38.5859L297.988 37.8217Z" fill="white"/>
                    <path d="M311.779 51.4124L311.016 52.1844L311.787 52.9486L312.551 52.1766L311.779 51.4124Z" fill="white"/>
                    <path d="M291.162 30.9558L290.399 31.7278L291.17 32.492L291.933 31.72L291.162 30.9558Z" fill="white"/>
                    <path d="M308.313 41.1303L307.549 41.9023L308.32 42.6665L309.084 41.8945L308.313 41.1303Z" fill="white"/>
                    <path d="M301.417 34.3353L300.654 35.1074L301.425 35.8716L302.189 35.0995L301.417 34.3353Z" fill="white"/>
                    <path d="M315.139 47.9962L314.376 48.7682L315.147 49.5324L315.91 48.7604L315.139 47.9962Z" fill="white"/>
                    <path d="M294.522 27.5396L293.758 28.3116L294.529 29.0758L295.293 28.3038L294.522 27.5396Z" fill="white"/>
                    <path d="M287.93 68.6879L287.167 69.46L287.938 70.2242L288.702 69.4521L287.93 68.6879Z" fill="white"/>
                    <path d="M281.035 61.8921L280.271 62.6641L281.043 63.4283L281.806 62.6563L281.035 61.8921Z" fill="white"/>
                    <path d="M267.243 48.1619L266.479 48.9339L267.251 49.6981L268.014 48.9261L267.243 48.1619Z" fill="white"/>
                    <path d="M294.826 75.4837L294.063 76.2557L294.834 77.0199L295.597 76.2479L294.826 75.4837Z" fill="white"/>
                    <path d="M274.069 55.0278L273.306 55.7998L274.077 56.564L274.84 55.792L274.069 55.0278Z" fill="white"/>
                    <path d="M291.29 65.2717L290.527 66.0437L291.298 66.8079L292.061 66.0359L291.29 65.2717Z" fill="white"/>
                    <path d="M284.464 58.4058L283.7 59.1778L284.471 59.942L285.235 59.17L284.464 58.4058Z" fill="white"/>
                    <path d="M270.673 44.815L269.909 45.587L270.68 46.3512L271.444 45.5792L270.673 44.815Z" fill="white"/>
                    <path d="M298.186 72.0675L297.422 72.8395L298.194 73.6037L298.957 72.8317L298.186 72.0675Z" fill="white"/>
                    <path d="M277.568 51.6109L276.805 52.3829L277.576 53.1471L278.339 52.375L277.568 51.6109Z" fill="white"/>
                    <path d="M294.719 61.7852L293.956 62.5572L294.727 63.3214L295.49 62.5494L294.719 61.7852Z" fill="white"/>
                    <path d="M287.823 54.9895L287.06 55.7615L287.831 56.5257L288.595 55.7536L287.823 54.9895Z" fill="white"/>
                    <path d="M274.102 41.3286L273.338 42.1006L274.11 42.8648L274.873 42.0928L274.102 41.3286Z" fill="white"/>
                    <path d="M301.615 68.581L300.851 69.353L301.622 70.1172L302.386 69.3452L301.615 68.581Z" fill="white"/>
                    <path d="M280.928 48.1945L280.164 48.9666L280.936 49.7307L281.699 48.9587L280.928 48.1945Z" fill="white"/>
                    <path d="M291.253 51.503L290.489 52.275L291.26 53.0392L292.024 52.2672L291.253 51.503Z" fill="white"/>
                    <path d="M284.357 44.7081L283.594 45.4801L284.365 46.2443L285.128 45.4723L284.357 44.7081Z" fill="white"/>
                    <path d="M301.508 54.8825L300.745 55.6545L301.516 56.4187L302.279 55.6467L301.508 54.8825Z" fill="white"/>
                    <path d="M294.612 48.0868L293.849 48.8588L294.62 49.623L295.383 48.851L294.612 48.0868Z" fill="white"/>
                    <path d="M304.867 51.4663L304.104 52.2383L304.875 53.0025L305.639 52.2305L304.867 51.4663Z" fill="white"/>
                    <path d="M298.041 44.6004L297.278 45.3724L298.049 46.1366L298.812 45.3646L298.041 44.6004Z" fill="white"/>
                    <path d="M284.25 31.0097L283.487 31.7817L284.258 32.5459L285.021 31.7739L284.25 31.0097Z" fill="white"/>
                    <path d="M311.763 58.2621L310.999 59.0341L311.771 59.7983L312.534 59.0263L311.763 58.2621Z" fill="white"/>
                    <path d="M291.146 37.8055L290.382 38.5775L291.154 39.3417L291.917 38.5696L291.146 37.8055Z" fill="white"/>
                    <path d="M308.296 47.9799L307.533 48.7519L308.304 49.5161L309.068 48.7441L308.296 47.9799Z" fill="white"/>
                    <path d="M301.401 41.185L300.638 41.957L301.409 42.7212L302.172 41.9492L301.401 41.185Z" fill="white"/>
                    <path d="M287.679 27.5232L286.916 28.2952L287.687 29.0594L288.45 28.2874L287.679 27.5232Z" fill="white"/>
                    <path d="M315.192 54.7756L314.429 55.5476L315.2 56.3118L315.964 55.5398L315.192 54.7756Z" fill="white"/>
                    <path d="M294.575 34.319L293.811 35.091L294.583 35.8552L295.346 35.0832L294.575 34.319Z" fill="white"/>
                    <path d="M311.725 44.4935L310.962 45.2655L311.733 46.0297L312.497 45.2577L311.725 44.4935Z" fill="white"/>
                    <path d="M304.83 37.6976L304.066 38.4697L304.838 39.2339L305.601 38.4618L304.83 37.6976Z" fill="white"/>
                    <path d="M291.039 24.107L290.275 24.879L291.047 25.6432L291.81 24.8712L291.039 24.107Z" fill="white"/>
                    <path d="M318.622 51.4289L317.858 52.2009L318.63 52.9651L319.393 52.1931L318.622 51.4289Z" fill="white"/>
                    <path d="M297.934 30.9027L297.171 31.6747L297.942 32.4389L298.706 31.6669L297.934 30.9027Z" fill="white"/>
                    <path d="M134.759 260.904L0 141.809L43.7029 92.1362L131.405 169.657L296.647 0L344 46.2162L134.759 260.904Z" fill="#FF244C"/>
                    <path d="M43.2256 159.75L42.4979 160.556L43.3028 161.284L44.0306 160.478L43.2256 159.75Z" fill="white"/>
                    <path d="M36.0173 153.254L35.2896 154.06L36.0946 154.789L36.8223 153.983L36.0173 153.254Z" fill="white"/>
                    <path d="M50.4346 166.245L49.7068 167.051L50.5118 167.78L51.2395 166.974L50.4346 166.245Z" fill="white"/>
                    <path d="M28.8086 146.759L28.0809 147.565L28.8858 148.293L29.6136 147.488L28.8086 146.759Z" fill="white"/>
                    <path d="M46.4332 156.109L45.7054 156.915L46.5104 157.643L47.2382 156.837L46.4332 156.109Z" fill="white"/>
                    <path d="M39.2983 149.679L38.5706 150.485L39.3755 151.214L40.1032 150.408L39.2983 149.679Z" fill="white"/>
                    <path d="M53.6421 162.604L52.9144 163.41L53.7194 164.138L54.4471 163.332L53.6421 162.604Z" fill="white"/>
                    <path d="M32.0893 143.184L31.3616 143.99L32.1666 144.719L32.8943 143.913L32.0893 143.184Z" fill="white"/>
                    <path d="M49.7149 152.533L48.9872 153.339L49.7922 154.068L50.5199 153.262L49.7149 152.533Z" fill="white"/>
                    <path d="M42.5062 146.038L41.7784 146.844L42.5834 147.572L43.3111 146.767L42.5062 146.038Z" fill="white"/>
                    <path d="M56.8576 159.102L56.1299 159.908L56.9349 160.636L57.6626 159.83L56.8576 159.102Z" fill="white"/>
                    <path d="M35.2969 139.543L34.5692 140.349L35.3742 141.077L36.1019 140.271L35.2969 139.543Z" fill="white"/>
                    <path d="M52.9958 148.959L52.2681 149.764L53.0731 150.493L53.8008 149.687L52.9958 148.959Z" fill="white"/>
                    <path d="M45.7869 142.463L45.0591 143.269L45.8641 143.998L46.5918 143.192L45.7869 142.463Z" fill="white"/>
                    <path d="M56.1374 145.391L55.4097 146.196L56.2147 146.925L56.9424 146.119L56.1374 145.391Z" fill="white"/>
                    <path d="M48.9944 138.822L48.2667 139.628L49.0717 140.356L49.7994 139.551L48.9944 138.822Z" fill="white"/>
                    <path d="M59.4182 141.816L58.6904 142.621L59.4954 143.35L60.2231 142.544L59.4182 141.816Z" fill="white"/>
                    <path d="M52.2754 135.247L51.5477 136.053L52.3527 136.781L53.0804 135.976L52.2754 135.247Z" fill="white"/>
                    <path d="M66.6271 148.311L65.8994 149.117L66.7044 149.845L67.4321 149.039L66.6271 148.311Z" fill="white"/>
                    <path d="M45.0662 128.752L44.3384 129.558L45.1434 130.286L45.8711 129.48L45.0662 128.752Z" fill="white"/>
                    <path d="M62.6257 138.175L61.898 138.981L62.703 139.709L63.4307 138.903L62.6257 138.175Z" fill="white"/>
                    <path d="M55.5561 131.672L54.8284 132.478L55.6333 133.206L56.3611 132.401L55.5561 131.672Z" fill="white"/>
                    <path d="M69.8347 144.67L69.107 145.476L69.912 146.204L70.6397 145.398L69.8347 144.67Z" fill="white"/>
                    <path d="M48.3471 125.177L47.6194 125.983L48.4244 126.711L49.1521 125.906L48.3471 125.177Z" fill="white"/>
                    <path d="M65.9067 134.6L65.179 135.405L65.9839 136.134L66.7116 135.328L65.9067 134.6Z" fill="white"/>
                    <path d="M58.6977 128.104L57.97 128.91L58.775 129.639L59.5027 128.833L58.6977 128.104Z" fill="white"/>
                    <path d="M73.1154 141.095L72.3877 141.901L73.1927 142.629L73.9204 141.823L73.1154 141.095Z" fill="white"/>
                    <path d="M51.5547 121.536L50.827 122.342L51.6319 123.07L52.3597 122.264L51.5547 121.536Z" fill="white"/>
                    <path d="M46.7974 163.034L46.0697 163.84L46.8747 164.568L47.6024 163.762L46.7974 163.034Z" fill="white"/>
                    <path d="M39.5884 156.539L38.8607 157.345L39.6657 158.073L40.3934 157.267L39.5884 156.539Z" fill="white"/>
                    <path d="M25.2367 143.475L24.509 144.281L25.314 145.01L26.0417 144.204L25.2367 143.475Z" fill="white"/>
                    <path d="M53.9333 169.463L53.2056 170.269L54.0106 170.997L54.7383 170.192L53.9333 169.463Z" fill="white"/>
                    <path d="M32.4457 149.97L31.718 150.776L32.523 151.505L33.2507 150.699L32.4457 149.97Z" fill="white"/>
                    <path d="M50.0051 159.393L49.2773 160.199L50.0823 160.927L50.81 160.121L50.0051 159.393Z" fill="white"/>
                    <path d="M42.7961 152.898L42.0684 153.703L42.8733 154.432L43.6011 153.626L42.7961 152.898Z" fill="white"/>
                    <path d="M28.5174 139.9L27.7897 140.706L28.5947 141.434L29.3224 140.628L28.5174 139.9Z" fill="white"/>
                    <path d="M57.2141 165.888L56.4863 166.694L57.2913 167.422L58.019 166.617L57.2141 165.888Z" fill="white"/>
                    <path d="M35.7264 146.395L34.9987 147.201L35.8037 147.93L36.5314 147.124L35.7264 146.395Z" fill="white"/>
                    <path d="M53.286 155.818L52.5583 156.624L53.3633 157.352L54.091 156.546L53.286 155.818Z" fill="white"/>
                    <path d="M46.077 149.323L45.3493 150.128L46.1543 150.857L46.882 150.051L46.077 149.323Z" fill="white"/>
                    <path d="M31.7261 136.259L30.9984 137.064L31.8033 137.793L32.5311 136.987L31.7261 136.259Z" fill="white"/>
                    <path d="M60.4947 162.313L59.767 163.119L60.572 163.847L61.2997 163.042L60.4947 162.313Z" fill="white"/>
                    <path d="M38.934 142.754L38.2063 143.56L39.0113 144.289L39.739 143.483L38.934 142.754Z" fill="white"/>
                    <path d="M49.3577 145.748L48.63 146.554L49.435 147.282L50.1627 146.476L49.3577 145.748Z" fill="white"/>
                    <path d="M42.1487 139.253L41.421 140.058L42.226 140.787L42.9537 139.981L42.1487 139.253Z" fill="white"/>
                    <path d="M59.7743 148.602L59.0466 149.408L59.8516 150.136L60.5793 149.33L59.7743 148.602Z" fill="white"/>
                    <path d="M52.5663 142.106L51.8386 142.912L52.6436 143.641L53.3713 142.835L52.5663 142.106Z" fill="white"/>
                    <path d="M63.0552 145.027L62.3275 145.833L63.1325 146.561L63.8602 145.755L63.0552 145.027Z" fill="white"/>
                    <path d="M55.8473 138.531L55.1196 139.337L55.9246 140.066L56.6523 139.26L55.8473 138.531Z" fill="white"/>
                    <path d="M41.4293 125.541L40.7015 126.347L41.5065 127.075L42.2342 126.269L41.4293 125.541Z" fill="white"/>
                    <path d="M70.2643 151.522L69.5366 152.328L70.3415 153.056L71.0693 152.251L70.2643 151.522Z" fill="white"/>
                    <path d="M48.6383 132.036L47.9106 132.842L48.7156 133.57L49.4433 132.765L48.6383 132.036Z" fill="white"/>
                    <path d="M66.2638 141.385L65.5361 142.191L66.3411 142.92L67.0688 142.114L66.2638 141.385Z" fill="white"/>
                    <path d="M59.128 134.956L58.4003 135.762L59.2053 136.491L59.933 135.685L59.128 134.956Z" fill="white"/>
                    <path d="M44.7103 121.966L43.9825 122.772L44.7875 123.5L45.5152 122.694L44.7103 121.966Z" fill="white"/>
                    <path d="M73.4056 147.954L72.6779 148.76L73.4828 149.489L74.2106 148.683L73.4056 147.954Z" fill="white"/>
                    <path d="M51.9192 128.461L51.1915 129.267L51.9965 129.996L52.7242 129.19L51.9192 128.461Z" fill="white"/>
                    <path d="M69.5446 137.81L68.8168 138.616L69.6218 139.345L70.3495 138.539L69.5446 137.81Z" fill="white"/>
                    <path d="M62.3356 131.315L61.6078 132.121L62.4128 132.849L63.1405 132.044L62.3356 131.315Z" fill="white"/>
                    <path d="M47.991 118.391L47.2632 119.197L48.0682 119.925L48.7959 119.119L47.991 118.391Z" fill="white"/>
                    <path d="M76.6865 144.379L75.9588 145.185L76.7638 145.914L77.4915 145.108L76.6865 144.379Z" fill="white"/>
                    <path d="M55.1266 124.82L54.3989 125.626L55.2038 126.354L55.9316 125.548L55.1266 124.82Z" fill="white"/>
                    <path d="M278.802 41.7631L278.038 42.5352L278.81 43.2992L279.573 42.5271L278.802 41.7631Z" fill="white"/>
                    <path d="M285.592 34.86L284.828 35.6321L285.6 36.3961L286.363 35.624L285.592 34.86Z" fill="white"/>
                    <path d="M272.012 48.667L271.249 49.4391L272.02 50.2031L272.783 49.4309L272.012 48.667Z" fill="white"/>
                    <path d="M292.452 28.0257L291.689 28.7978L292.46 29.5618L293.223 28.7896L292.452 28.0257Z" fill="white"/>
                    <path d="M282.285 45.196L281.522 45.9681L282.293 46.7321L283.057 45.96L282.285 45.196Z" fill="white"/>
                    <path d="M289.075 38.2931L288.312 39.0652L289.083 39.8292L289.846 39.0571L289.075 38.2931Z" fill="white"/>
                    <path d="M275.425 52.0305L274.662 52.8026L275.433 53.5666L276.196 52.7945L275.425 52.0305Z" fill="white"/>
                    <path d="M295.865 31.3893L295.102 32.1614L295.873 32.9254L296.636 32.1533L295.865 31.3893Z" fill="white"/>
                    <path d="M285.699 48.5604L284.935 49.3325L285.707 50.0965L286.47 49.3244L285.699 48.5604Z" fill="white"/>
                    <path d="M292.488 41.6566L291.725 42.4288L292.497 43.1928L293.26 42.4206L292.488 41.6566Z" fill="white"/>
                    <path d="M278.909 55.4644L278.145 56.2365L278.917 57.0005L279.68 56.2284L278.909 55.4644Z" fill="white"/>
                    <path d="M299.348 34.8222L298.585 35.5943L299.357 36.3583L300.12 35.5861L299.348 34.8222Z" fill="white"/>
                    <path d="M289.112 52.0637L288.349 52.8359L289.121 53.5999L289.884 52.8277L289.112 52.0637Z" fill="white"/>
                    <path d="M295.903 45.1598L295.139 45.9319L295.911 46.6959L296.674 45.9238L295.903 45.1598Z" fill="white"/>
                    <path d="M292.526 55.4273L291.763 56.1994L292.534 56.9634L293.297 56.1912L292.526 55.4273Z" fill="white"/>
                    <path d="M299.316 48.5234L298.553 49.2955L299.324 50.0595L300.087 49.2874L299.316 48.5234Z" fill="white"/>
                    <path d="M296.009 58.8603L295.246 59.6324L296.017 60.3964L296.781 59.6242L296.009 58.8603Z" fill="white"/>
                    <path d="M302.799 51.9563L302.036 52.7285L302.807 53.4924L303.57 52.7203L302.799 51.9563Z" fill="white"/>
                    <path d="M289.149 65.6947L288.386 66.4668L289.158 67.2308L289.921 66.4587L289.149 65.6947Z" fill="white"/>
                    <path d="M309.589 45.0526L308.825 45.8247L309.597 46.5887L310.36 45.8166L309.589 45.0526Z" fill="white"/>
                    <path d="M299.423 62.2238L298.659 62.9959L299.431 63.7599L300.194 62.9878L299.423 62.2238Z" fill="white"/>
                    <path d="M306.212 55.3199L305.449 56.092L306.221 56.856L306.984 56.0838L306.212 55.3199Z" fill="white"/>
                    <path d="M292.633 69.1277L291.87 69.8998L292.641 70.6638L293.404 69.8917L292.633 69.1277Z" fill="white"/>
                    <path d="M313.072 48.4855L312.309 49.2576L313.08 50.0216L313.844 49.2495L313.072 48.4855Z" fill="white"/>
                    <path d="M302.906 65.6568L302.143 66.429L302.914 67.1929L303.677 66.4208L302.906 65.6568Z" fill="white"/>
                    <path d="M309.696 58.753L308.933 59.5251L309.704 60.2891L310.467 59.5169L309.696 58.753Z" fill="white"/>
                    <path d="M296.046 72.4913L295.283 73.2634L296.054 74.0273L296.817 73.2552L296.046 72.4913Z" fill="white"/>
                    <path d="M316.486 51.8491L315.722 52.6213L316.494 53.3853L317.257 52.6131L316.486 51.8491Z" fill="white"/>
                    <path d="M275.372 45.2505L274.609 46.0226L275.38 46.7866L276.143 46.0145L275.372 45.2505Z" fill="white"/>
                    <path d="M282.162 38.3466L281.399 39.1188L282.17 39.8828L282.933 39.1106L282.162 38.3466Z" fill="white"/>
                    <path d="M295.811 24.6085L295.048 25.3806L295.82 26.1446L296.583 25.3725L295.811 24.6085Z" fill="white"/>
                    <path d="M268.582 52.1544L267.819 52.9265L268.59 53.6905L269.354 52.9184L268.582 52.1544Z" fill="white"/>
                    <path d="M288.952 31.4428L288.189 32.2149L288.96 32.9789L289.723 32.2068L288.952 31.4428Z" fill="white"/>
                    <path d="M278.785 48.6141L278.022 49.3862L278.794 50.1502L279.557 49.378L278.785 48.6141Z" fill="white"/>
                    <path d="M285.646 41.7796L284.882 42.5518L285.654 43.3157L286.417 42.5436L285.646 41.7796Z" fill="white"/>
                    <path d="M299.225 27.9719L298.462 28.7441L299.233 29.5081L299.996 28.7359L299.225 27.9719Z" fill="white"/>
                    <path d="M271.996 55.518L271.232 56.2902L272.004 57.0541L272.767 56.282L271.996 55.518Z" fill="white"/>
                    <path d="M292.435 34.8758L291.672 35.6479L292.443 36.4119L293.206 35.6398L292.435 34.8758Z" fill="white"/>
                    <path d="M282.269 52.047L281.506 52.8192L282.277 53.5831L283.04 52.811L282.269 52.047Z" fill="white"/>
                    <path d="M289.059 45.1432L288.295 45.9153L289.067 46.6793L289.83 45.9072L289.059 45.1432Z" fill="white"/>
                    <path d="M302.709 31.4059L301.945 32.178L302.717 32.942L303.48 32.1699L302.709 31.4059Z" fill="white"/>
                    <path d="M275.479 58.951L274.716 59.7231L275.487 60.4871L276.25 59.715L275.479 58.951Z" fill="white"/>
                    <path d="M295.848 38.2393L295.085 39.0115L295.856 39.7755L296.62 39.0033L295.848 38.2393Z" fill="white"/>
                    <path d="M292.542 48.5762L291.779 49.3483L292.55 50.1123L293.313 49.3402L292.542 48.5762Z" fill="white"/>
                    <path d="M299.332 41.6724L298.568 42.4446L299.34 43.2086L300.103 42.4364L299.332 41.6724Z" fill="white"/>
                    <path d="M289.166 58.8437L288.402 59.6158L289.174 60.3798L289.937 59.6077L289.166 58.8437Z" fill="white"/>
                    <path d="M295.956 51.9406L295.192 52.7128L295.964 53.4767L296.727 52.7046L295.956 51.9406Z" fill="white"/>
                    <path d="M292.579 62.2072L291.816 62.9793L292.587 63.7433L293.35 62.9712L292.579 62.2072Z" fill="white"/>
                    <path d="M299.439 55.3736L298.676 56.1458L299.447 56.9097L300.21 56.1376L299.439 55.3736Z" fill="white"/>
                    <path d="M313.019 41.5659L312.255 42.338L313.027 43.102L313.79 42.3299L313.019 41.5659Z" fill="white"/>
                    <path d="M285.789 69.111L285.026 69.8831L285.797 70.6471L286.56 69.875L285.789 69.111Z" fill="white"/>
                    <path d="M306.229 48.4699L305.466 49.242L306.237 50.006L307 49.2339L306.229 48.4699Z" fill="white"/>
                    <path d="M296.063 65.6411L295.299 66.4132L296.071 67.1772L296.834 66.4051L296.063 65.6411Z" fill="white"/>
                    <path d="M302.852 58.7371L302.089 59.5093L302.861 60.2733L303.624 59.5011L302.852 58.7371Z" fill="white"/>
                    <path d="M316.502 44.9991L315.739 45.7712L316.51 46.5352L317.273 45.763L316.502 44.9991Z" fill="white"/>
                    <path d="M289.272 72.5441L288.509 73.3162L289.28 74.0802L290.044 73.3081L289.272 72.5441Z" fill="white"/>
                    <path d="M309.642 51.8334L308.879 52.6055L309.65 53.3695L310.413 52.5974L309.642 51.8334Z" fill="white"/>
                    <path d="M299.477 69.1443L298.713 69.9164L299.485 70.6804L300.248 69.9082L299.477 69.1443Z" fill="white"/>
                    <path d="M306.267 62.2405L305.503 63.0126L306.275 63.7766L307.038 63.0045L306.267 62.2405Z" fill="white"/>
                    <path d="M319.915 48.3625L319.152 49.1346L319.924 49.8986L320.687 49.1265L319.915 48.3625Z" fill="white"/>
                    <path d="M292.616 75.9778L291.853 76.7499L292.624 77.5139L293.388 76.7417L292.616 75.9778Z" fill="white"/>
                    <path d="M313.056 55.3365L312.293 56.1086L313.064 56.8726L313.827 56.1005L313.056 55.3365Z" fill="white"/>
                    <path d="M131.405 169.657L129.951 162.93L278.396 10.9615L296.647 0L131.405 169.657Z" fill="white"/>
                    <path opacity="0.2" d="M135.351 165.608L131.405 169.657L129.951 162.93L135.351 165.608Z" fill="#070707"/>
                    <path d="M43.7921 92.5195H49.8098L129.951 162.93L131.399 169.65L43.7921 92.5195Z" fill="white"/>
                </svg>
            </div>
            <h2 class="default-modal__title default-modal__title-illustration">Successfully  <span>activated!</span> </h2>
            <p class="default-modal__subtitle">Now you can use Text animantions product in Premiere Studio. No additional actions required.</p>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-success-mail-change">
    <div class="default-modal__content default-modal__content-illustration"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <div class="default-modal__illustration"><svg width="344" height="302" viewBox="0 0 344 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M151.825 301.788C231.372 301.788 295.858 237.237 295.858 157.609C295.858 77.9813 231.372 13.4303 151.825 13.4303C72.2787 13.4303 7.79333 77.9813 7.79333 157.609C7.79333 237.237 72.2787 301.788 151.825 301.788Z" fill="#051227"/>
                    <path d="M284.447 65.2553L283.684 66.0273L284.455 66.7915L285.219 66.0195L284.447 65.2553Z" fill="white"/>
                    <path d="M277.552 58.4594L276.788 59.2314L277.56 59.9956L278.323 59.2236L277.552 58.4594Z" fill="white"/>
                    <path d="M291.343 72.0511L290.58 72.8231L291.351 73.5873L292.115 72.8153L291.343 72.0511Z" fill="white"/>
                    <path d="M270.726 51.5945L269.962 52.3665L270.733 53.1307L271.497 52.3587L270.726 51.5945Z" fill="white"/>
                    <path d="M287.876 61.7689L287.113 62.5409L287.884 63.3051L288.648 62.5331L287.876 61.7689Z" fill="white"/>
                    <path d="M280.981 54.973L280.217 55.7451L280.989 56.5092L281.752 55.7372L280.981 54.973Z" fill="white"/>
                    <path d="M294.703 68.6348L293.939 69.4069L294.711 70.1711L295.474 69.399L294.703 68.6348Z" fill="white"/>
                    <path d="M274.085 48.1782L273.322 48.9502L274.093 49.7144L274.856 48.9424L274.085 48.1782Z" fill="white"/>
                    <path d="M291.236 58.3526L290.473 59.1246L291.244 59.8888L292.008 59.1168L291.236 58.3526Z" fill="white"/>
                    <path d="M284.34 51.5568L283.577 52.3289L284.348 53.0931L285.112 52.321L284.34 51.5568Z" fill="white"/>
                    <path d="M298.132 65.1484L297.368 65.9204L298.14 66.6846L298.903 65.9126L298.132 65.1484Z" fill="white"/>
                    <path d="M277.514 44.6917L276.751 45.4637L277.522 46.2279L278.286 45.4559L277.514 44.6917Z" fill="white"/>
                    <path d="M294.665 54.8662L293.902 55.6382L294.673 56.4024L295.436 55.6304L294.665 54.8662Z" fill="white"/>
                    <path d="M287.77 48.0712L287.006 48.8432L287.778 49.6074L288.541 48.8354L287.77 48.0712Z" fill="white"/>
                    <path d="M298.095 51.5194L297.331 52.2914L298.103 53.0556L298.866 52.2836L298.095 51.5194Z" fill="white"/>
                    <path d="M291.2 44.7245L290.436 45.4965L291.207 46.2607L291.971 45.4887L291.2 44.7245Z" fill="white"/>
                    <path d="M301.524 48.0329L300.761 48.8049L301.532 49.5691L302.295 48.7971L301.524 48.0329Z" fill="white"/>
                    <path d="M294.628 41.2372L293.865 42.0092L294.636 42.7734L295.4 42.0014L294.628 41.2372Z" fill="white"/>
                    <path d="M308.35 54.8989L307.587 55.671L308.358 56.4352L309.122 55.6631L308.35 54.8989Z" fill="white"/>
                    <path d="M287.733 34.4422L286.97 35.2142L287.741 35.9784L288.504 35.2064L287.733 34.4422Z" fill="white"/>
                    <path d="M304.884 44.6175L304.12 45.3895L304.892 46.1537L305.655 45.3817L304.884 44.6175Z" fill="white"/>
                    <path d="M297.988 37.8217L297.225 38.5937L297.996 39.3579L298.76 38.5859L297.988 37.8217Z" fill="white"/>
                    <path d="M311.779 51.4124L311.016 52.1844L311.787 52.9486L312.551 52.1766L311.779 51.4124Z" fill="white"/>
                    <path d="M291.162 30.9558L290.399 31.7278L291.17 32.492L291.933 31.72L291.162 30.9558Z" fill="white"/>
                    <path d="M308.313 41.1303L307.549 41.9023L308.32 42.6665L309.084 41.8945L308.313 41.1303Z" fill="white"/>
                    <path d="M301.417 34.3353L300.654 35.1074L301.425 35.8716L302.189 35.0995L301.417 34.3353Z" fill="white"/>
                    <path d="M315.139 47.9962L314.376 48.7682L315.147 49.5324L315.91 48.7604L315.139 47.9962Z" fill="white"/>
                    <path d="M294.522 27.5396L293.758 28.3116L294.529 29.0758L295.293 28.3038L294.522 27.5396Z" fill="white"/>
                    <path d="M287.93 68.6879L287.167 69.46L287.938 70.2242L288.702 69.4521L287.93 68.6879Z" fill="white"/>
                    <path d="M281.035 61.8921L280.271 62.6641L281.043 63.4283L281.806 62.6563L281.035 61.8921Z" fill="white"/>
                    <path d="M267.243 48.1619L266.479 48.9339L267.251 49.6981L268.014 48.9261L267.243 48.1619Z" fill="white"/>
                    <path d="M294.826 75.4837L294.063 76.2557L294.834 77.0199L295.597 76.2479L294.826 75.4837Z" fill="white"/>
                    <path d="M274.069 55.0278L273.306 55.7998L274.077 56.564L274.84 55.792L274.069 55.0278Z" fill="white"/>
                    <path d="M291.29 65.2717L290.527 66.0437L291.298 66.8079L292.061 66.0359L291.29 65.2717Z" fill="white"/>
                    <path d="M284.464 58.4058L283.7 59.1778L284.471 59.942L285.235 59.17L284.464 58.4058Z" fill="white"/>
                    <path d="M270.673 44.815L269.909 45.587L270.68 46.3512L271.444 45.5792L270.673 44.815Z" fill="white"/>
                    <path d="M298.186 72.0675L297.422 72.8395L298.194 73.6037L298.957 72.8317L298.186 72.0675Z" fill="white"/>
                    <path d="M277.568 51.6109L276.805 52.3829L277.576 53.1471L278.339 52.375L277.568 51.6109Z" fill="white"/>
                    <path d="M294.719 61.7852L293.956 62.5572L294.727 63.3214L295.49 62.5494L294.719 61.7852Z" fill="white"/>
                    <path d="M287.823 54.9895L287.06 55.7615L287.831 56.5257L288.595 55.7536L287.823 54.9895Z" fill="white"/>
                    <path d="M274.102 41.3286L273.338 42.1006L274.11 42.8648L274.873 42.0928L274.102 41.3286Z" fill="white"/>
                    <path d="M301.615 68.581L300.851 69.353L301.622 70.1172L302.386 69.3452L301.615 68.581Z" fill="white"/>
                    <path d="M280.928 48.1945L280.164 48.9666L280.936 49.7307L281.699 48.9587L280.928 48.1945Z" fill="white"/>
                    <path d="M291.253 51.503L290.489 52.275L291.26 53.0392L292.024 52.2672L291.253 51.503Z" fill="white"/>
                    <path d="M284.357 44.7081L283.594 45.4801L284.365 46.2443L285.128 45.4723L284.357 44.7081Z" fill="white"/>
                    <path d="M301.508 54.8825L300.745 55.6545L301.516 56.4187L302.279 55.6467L301.508 54.8825Z" fill="white"/>
                    <path d="M294.612 48.0868L293.849 48.8588L294.62 49.623L295.383 48.851L294.612 48.0868Z" fill="white"/>
                    <path d="M304.867 51.4663L304.104 52.2383L304.875 53.0025L305.639 52.2305L304.867 51.4663Z" fill="white"/>
                    <path d="M298.041 44.6004L297.278 45.3724L298.049 46.1366L298.812 45.3646L298.041 44.6004Z" fill="white"/>
                    <path d="M284.25 31.0097L283.487 31.7817L284.258 32.5459L285.021 31.7739L284.25 31.0097Z" fill="white"/>
                    <path d="M311.763 58.2621L310.999 59.0341L311.771 59.7983L312.534 59.0263L311.763 58.2621Z" fill="white"/>
                    <path d="M291.146 37.8055L290.382 38.5775L291.154 39.3417L291.917 38.5696L291.146 37.8055Z" fill="white"/>
                    <path d="M308.296 47.9799L307.533 48.7519L308.304 49.5161L309.068 48.7441L308.296 47.9799Z" fill="white"/>
                    <path d="M301.401 41.185L300.638 41.957L301.409 42.7212L302.172 41.9492L301.401 41.185Z" fill="white"/>
                    <path d="M287.679 27.5232L286.916 28.2952L287.687 29.0594L288.45 28.2874L287.679 27.5232Z" fill="white"/>
                    <path d="M315.192 54.7756L314.429 55.5476L315.2 56.3118L315.964 55.5398L315.192 54.7756Z" fill="white"/>
                    <path d="M294.575 34.319L293.811 35.091L294.583 35.8552L295.346 35.0832L294.575 34.319Z" fill="white"/>
                    <path d="M311.725 44.4935L310.962 45.2655L311.733 46.0297L312.497 45.2577L311.725 44.4935Z" fill="white"/>
                    <path d="M304.83 37.6976L304.066 38.4697L304.838 39.2339L305.601 38.4618L304.83 37.6976Z" fill="white"/>
                    <path d="M291.039 24.107L290.275 24.879L291.047 25.6432L291.81 24.8712L291.039 24.107Z" fill="white"/>
                    <path d="M318.622 51.4289L317.858 52.2009L318.63 52.9651L319.393 52.1931L318.622 51.4289Z" fill="white"/>
                    <path d="M297.934 30.9027L297.171 31.6747L297.942 32.4389L298.706 31.6669L297.934 30.9027Z" fill="white"/>
                    <path d="M134.759 260.904L0 141.809L43.7029 92.1362L131.405 169.657L296.647 0L344 46.2162L134.759 260.904Z" fill="#FF244C"/>
                    <path d="M43.2256 159.75L42.4979 160.556L43.3028 161.284L44.0306 160.478L43.2256 159.75Z" fill="white"/>
                    <path d="M36.0173 153.254L35.2896 154.06L36.0946 154.789L36.8223 153.983L36.0173 153.254Z" fill="white"/>
                    <path d="M50.4346 166.245L49.7068 167.051L50.5118 167.78L51.2395 166.974L50.4346 166.245Z" fill="white"/>
                    <path d="M28.8086 146.759L28.0809 147.565L28.8858 148.293L29.6136 147.488L28.8086 146.759Z" fill="white"/>
                    <path d="M46.4332 156.109L45.7054 156.915L46.5104 157.643L47.2382 156.837L46.4332 156.109Z" fill="white"/>
                    <path d="M39.2983 149.679L38.5706 150.485L39.3755 151.214L40.1032 150.408L39.2983 149.679Z" fill="white"/>
                    <path d="M53.6421 162.604L52.9144 163.41L53.7194 164.138L54.4471 163.332L53.6421 162.604Z" fill="white"/>
                    <path d="M32.0893 143.184L31.3616 143.99L32.1666 144.719L32.8943 143.913L32.0893 143.184Z" fill="white"/>
                    <path d="M49.7149 152.533L48.9872 153.339L49.7922 154.068L50.5199 153.262L49.7149 152.533Z" fill="white"/>
                    <path d="M42.5062 146.038L41.7784 146.844L42.5834 147.572L43.3111 146.767L42.5062 146.038Z" fill="white"/>
                    <path d="M56.8576 159.102L56.1299 159.908L56.9349 160.636L57.6626 159.83L56.8576 159.102Z" fill="white"/>
                    <path d="M35.2969 139.543L34.5692 140.349L35.3742 141.077L36.1019 140.271L35.2969 139.543Z" fill="white"/>
                    <path d="M52.9958 148.959L52.2681 149.764L53.0731 150.493L53.8008 149.687L52.9958 148.959Z" fill="white"/>
                    <path d="M45.7869 142.463L45.0591 143.269L45.8641 143.998L46.5918 143.192L45.7869 142.463Z" fill="white"/>
                    <path d="M56.1374 145.391L55.4097 146.196L56.2147 146.925L56.9424 146.119L56.1374 145.391Z" fill="white"/>
                    <path d="M48.9944 138.822L48.2667 139.628L49.0717 140.356L49.7994 139.551L48.9944 138.822Z" fill="white"/>
                    <path d="M59.4182 141.816L58.6904 142.621L59.4954 143.35L60.2231 142.544L59.4182 141.816Z" fill="white"/>
                    <path d="M52.2754 135.247L51.5477 136.053L52.3527 136.781L53.0804 135.976L52.2754 135.247Z" fill="white"/>
                    <path d="M66.6271 148.311L65.8994 149.117L66.7044 149.845L67.4321 149.039L66.6271 148.311Z" fill="white"/>
                    <path d="M45.0662 128.752L44.3384 129.558L45.1434 130.286L45.8711 129.48L45.0662 128.752Z" fill="white"/>
                    <path d="M62.6257 138.175L61.898 138.981L62.703 139.709L63.4307 138.903L62.6257 138.175Z" fill="white"/>
                    <path d="M55.5561 131.672L54.8284 132.478L55.6333 133.206L56.3611 132.401L55.5561 131.672Z" fill="white"/>
                    <path d="M69.8347 144.67L69.107 145.476L69.912 146.204L70.6397 145.398L69.8347 144.67Z" fill="white"/>
                    <path d="M48.3471 125.177L47.6194 125.983L48.4244 126.711L49.1521 125.906L48.3471 125.177Z" fill="white"/>
                    <path d="M65.9067 134.6L65.179 135.405L65.9839 136.134L66.7116 135.328L65.9067 134.6Z" fill="white"/>
                    <path d="M58.6977 128.104L57.97 128.91L58.775 129.639L59.5027 128.833L58.6977 128.104Z" fill="white"/>
                    <path d="M73.1154 141.095L72.3877 141.901L73.1927 142.629L73.9204 141.823L73.1154 141.095Z" fill="white"/>
                    <path d="M51.5547 121.536L50.827 122.342L51.6319 123.07L52.3597 122.264L51.5547 121.536Z" fill="white"/>
                    <path d="M46.7974 163.034L46.0697 163.84L46.8747 164.568L47.6024 163.762L46.7974 163.034Z" fill="white"/>
                    <path d="M39.5884 156.539L38.8607 157.345L39.6657 158.073L40.3934 157.267L39.5884 156.539Z" fill="white"/>
                    <path d="M25.2367 143.475L24.509 144.281L25.314 145.01L26.0417 144.204L25.2367 143.475Z" fill="white"/>
                    <path d="M53.9333 169.463L53.2056 170.269L54.0106 170.997L54.7383 170.192L53.9333 169.463Z" fill="white"/>
                    <path d="M32.4457 149.97L31.718 150.776L32.523 151.505L33.2507 150.699L32.4457 149.97Z" fill="white"/>
                    <path d="M50.0051 159.393L49.2773 160.199L50.0823 160.927L50.81 160.121L50.0051 159.393Z" fill="white"/>
                    <path d="M42.7961 152.898L42.0684 153.703L42.8733 154.432L43.6011 153.626L42.7961 152.898Z" fill="white"/>
                    <path d="M28.5174 139.9L27.7897 140.706L28.5947 141.434L29.3224 140.628L28.5174 139.9Z" fill="white"/>
                    <path d="M57.2141 165.888L56.4863 166.694L57.2913 167.422L58.019 166.617L57.2141 165.888Z" fill="white"/>
                    <path d="M35.7264 146.395L34.9987 147.201L35.8037 147.93L36.5314 147.124L35.7264 146.395Z" fill="white"/>
                    <path d="M53.286 155.818L52.5583 156.624L53.3633 157.352L54.091 156.546L53.286 155.818Z" fill="white"/>
                    <path d="M46.077 149.323L45.3493 150.128L46.1543 150.857L46.882 150.051L46.077 149.323Z" fill="white"/>
                    <path d="M31.7261 136.259L30.9984 137.064L31.8033 137.793L32.5311 136.987L31.7261 136.259Z" fill="white"/>
                    <path d="M60.4947 162.313L59.767 163.119L60.572 163.847L61.2997 163.042L60.4947 162.313Z" fill="white"/>
                    <path d="M38.934 142.754L38.2063 143.56L39.0113 144.289L39.739 143.483L38.934 142.754Z" fill="white"/>
                    <path d="M49.3577 145.748L48.63 146.554L49.435 147.282L50.1627 146.476L49.3577 145.748Z" fill="white"/>
                    <path d="M42.1487 139.253L41.421 140.058L42.226 140.787L42.9537 139.981L42.1487 139.253Z" fill="white"/>
                    <path d="M59.7743 148.602L59.0466 149.408L59.8516 150.136L60.5793 149.33L59.7743 148.602Z" fill="white"/>
                    <path d="M52.5663 142.106L51.8386 142.912L52.6436 143.641L53.3713 142.835L52.5663 142.106Z" fill="white"/>
                    <path d="M63.0552 145.027L62.3275 145.833L63.1325 146.561L63.8602 145.755L63.0552 145.027Z" fill="white"/>
                    <path d="M55.8473 138.531L55.1196 139.337L55.9246 140.066L56.6523 139.26L55.8473 138.531Z" fill="white"/>
                    <path d="M41.4293 125.541L40.7015 126.347L41.5065 127.075L42.2342 126.269L41.4293 125.541Z" fill="white"/>
                    <path d="M70.2643 151.522L69.5366 152.328L70.3415 153.056L71.0693 152.251L70.2643 151.522Z" fill="white"/>
                    <path d="M48.6383 132.036L47.9106 132.842L48.7156 133.57L49.4433 132.765L48.6383 132.036Z" fill="white"/>
                    <path d="M66.2638 141.385L65.5361 142.191L66.3411 142.92L67.0688 142.114L66.2638 141.385Z" fill="white"/>
                    <path d="M59.128 134.956L58.4003 135.762L59.2053 136.491L59.933 135.685L59.128 134.956Z" fill="white"/>
                    <path d="M44.7103 121.966L43.9825 122.772L44.7875 123.5L45.5152 122.694L44.7103 121.966Z" fill="white"/>
                    <path d="M73.4056 147.954L72.6779 148.76L73.4828 149.489L74.2106 148.683L73.4056 147.954Z" fill="white"/>
                    <path d="M51.9192 128.461L51.1915 129.267L51.9965 129.996L52.7242 129.19L51.9192 128.461Z" fill="white"/>
                    <path d="M69.5446 137.81L68.8168 138.616L69.6218 139.345L70.3495 138.539L69.5446 137.81Z" fill="white"/>
                    <path d="M62.3356 131.315L61.6078 132.121L62.4128 132.849L63.1405 132.044L62.3356 131.315Z" fill="white"/>
                    <path d="M47.991 118.391L47.2632 119.197L48.0682 119.925L48.7959 119.119L47.991 118.391Z" fill="white"/>
                    <path d="M76.6865 144.379L75.9588 145.185L76.7638 145.914L77.4915 145.108L76.6865 144.379Z" fill="white"/>
                    <path d="M55.1266 124.82L54.3989 125.626L55.2038 126.354L55.9316 125.548L55.1266 124.82Z" fill="white"/>
                    <path d="M278.802 41.7631L278.038 42.5352L278.81 43.2992L279.573 42.5271L278.802 41.7631Z" fill="white"/>
                    <path d="M285.592 34.86L284.828 35.6321L285.6 36.3961L286.363 35.624L285.592 34.86Z" fill="white"/>
                    <path d="M272.012 48.667L271.249 49.4391L272.02 50.2031L272.783 49.4309L272.012 48.667Z" fill="white"/>
                    <path d="M292.452 28.0257L291.689 28.7978L292.46 29.5618L293.223 28.7896L292.452 28.0257Z" fill="white"/>
                    <path d="M282.285 45.196L281.522 45.9681L282.293 46.7321L283.057 45.96L282.285 45.196Z" fill="white"/>
                    <path d="M289.075 38.2931L288.312 39.0652L289.083 39.8292L289.846 39.0571L289.075 38.2931Z" fill="white"/>
                    <path d="M275.425 52.0305L274.662 52.8026L275.433 53.5666L276.196 52.7945L275.425 52.0305Z" fill="white"/>
                    <path d="M295.865 31.3893L295.102 32.1614L295.873 32.9254L296.636 32.1533L295.865 31.3893Z" fill="white"/>
                    <path d="M285.699 48.5604L284.935 49.3325L285.707 50.0965L286.47 49.3244L285.699 48.5604Z" fill="white"/>
                    <path d="M292.488 41.6566L291.725 42.4288L292.497 43.1928L293.26 42.4206L292.488 41.6566Z" fill="white"/>
                    <path d="M278.909 55.4644L278.145 56.2365L278.917 57.0005L279.68 56.2284L278.909 55.4644Z" fill="white"/>
                    <path d="M299.348 34.8222L298.585 35.5943L299.357 36.3583L300.12 35.5861L299.348 34.8222Z" fill="white"/>
                    <path d="M289.112 52.0637L288.349 52.8359L289.121 53.5999L289.884 52.8277L289.112 52.0637Z" fill="white"/>
                    <path d="M295.903 45.1598L295.139 45.9319L295.911 46.6959L296.674 45.9238L295.903 45.1598Z" fill="white"/>
                    <path d="M292.526 55.4273L291.763 56.1994L292.534 56.9634L293.297 56.1912L292.526 55.4273Z" fill="white"/>
                    <path d="M299.316 48.5234L298.553 49.2955L299.324 50.0595L300.087 49.2874L299.316 48.5234Z" fill="white"/>
                    <path d="M296.009 58.8603L295.246 59.6324L296.017 60.3964L296.781 59.6242L296.009 58.8603Z" fill="white"/>
                    <path d="M302.799 51.9563L302.036 52.7285L302.807 53.4924L303.57 52.7203L302.799 51.9563Z" fill="white"/>
                    <path d="M289.149 65.6947L288.386 66.4668L289.158 67.2308L289.921 66.4587L289.149 65.6947Z" fill="white"/>
                    <path d="M309.589 45.0526L308.825 45.8247L309.597 46.5887L310.36 45.8166L309.589 45.0526Z" fill="white"/>
                    <path d="M299.423 62.2238L298.659 62.9959L299.431 63.7599L300.194 62.9878L299.423 62.2238Z" fill="white"/>
                    <path d="M306.212 55.3199L305.449 56.092L306.221 56.856L306.984 56.0838L306.212 55.3199Z" fill="white"/>
                    <path d="M292.633 69.1277L291.87 69.8998L292.641 70.6638L293.404 69.8917L292.633 69.1277Z" fill="white"/>
                    <path d="M313.072 48.4855L312.309 49.2576L313.08 50.0216L313.844 49.2495L313.072 48.4855Z" fill="white"/>
                    <path d="M302.906 65.6568L302.143 66.429L302.914 67.1929L303.677 66.4208L302.906 65.6568Z" fill="white"/>
                    <path d="M309.696 58.753L308.933 59.5251L309.704 60.2891L310.467 59.5169L309.696 58.753Z" fill="white"/>
                    <path d="M296.046 72.4913L295.283 73.2634L296.054 74.0273L296.817 73.2552L296.046 72.4913Z" fill="white"/>
                    <path d="M316.486 51.8491L315.722 52.6213L316.494 53.3853L317.257 52.6131L316.486 51.8491Z" fill="white"/>
                    <path d="M275.372 45.2505L274.609 46.0226L275.38 46.7866L276.143 46.0145L275.372 45.2505Z" fill="white"/>
                    <path d="M282.162 38.3466L281.399 39.1188L282.17 39.8828L282.933 39.1106L282.162 38.3466Z" fill="white"/>
                    <path d="M295.811 24.6085L295.048 25.3806L295.82 26.1446L296.583 25.3725L295.811 24.6085Z" fill="white"/>
                    <path d="M268.582 52.1544L267.819 52.9265L268.59 53.6905L269.354 52.9184L268.582 52.1544Z" fill="white"/>
                    <path d="M288.952 31.4428L288.189 32.2149L288.96 32.9789L289.723 32.2068L288.952 31.4428Z" fill="white"/>
                    <path d="M278.785 48.6141L278.022 49.3862L278.794 50.1502L279.557 49.378L278.785 48.6141Z" fill="white"/>
                    <path d="M285.646 41.7796L284.882 42.5518L285.654 43.3157L286.417 42.5436L285.646 41.7796Z" fill="white"/>
                    <path d="M299.225 27.9719L298.462 28.7441L299.233 29.5081L299.996 28.7359L299.225 27.9719Z" fill="white"/>
                    <path d="M271.996 55.518L271.232 56.2902L272.004 57.0541L272.767 56.282L271.996 55.518Z" fill="white"/>
                    <path d="M292.435 34.8758L291.672 35.6479L292.443 36.4119L293.206 35.6398L292.435 34.8758Z" fill="white"/>
                    <path d="M282.269 52.047L281.506 52.8192L282.277 53.5831L283.04 52.811L282.269 52.047Z" fill="white"/>
                    <path d="M289.059 45.1432L288.295 45.9153L289.067 46.6793L289.83 45.9072L289.059 45.1432Z" fill="white"/>
                    <path d="M302.709 31.4059L301.945 32.178L302.717 32.942L303.48 32.1699L302.709 31.4059Z" fill="white"/>
                    <path d="M275.479 58.951L274.716 59.7231L275.487 60.4871L276.25 59.715L275.479 58.951Z" fill="white"/>
                    <path d="M295.848 38.2393L295.085 39.0115L295.856 39.7755L296.62 39.0033L295.848 38.2393Z" fill="white"/>
                    <path d="M292.542 48.5762L291.779 49.3483L292.55 50.1123L293.313 49.3402L292.542 48.5762Z" fill="white"/>
                    <path d="M299.332 41.6724L298.568 42.4446L299.34 43.2086L300.103 42.4364L299.332 41.6724Z" fill="white"/>
                    <path d="M289.166 58.8437L288.402 59.6158L289.174 60.3798L289.937 59.6077L289.166 58.8437Z" fill="white"/>
                    <path d="M295.956 51.9406L295.192 52.7128L295.964 53.4767L296.727 52.7046L295.956 51.9406Z" fill="white"/>
                    <path d="M292.579 62.2072L291.816 62.9793L292.587 63.7433L293.35 62.9712L292.579 62.2072Z" fill="white"/>
                    <path d="M299.439 55.3736L298.676 56.1458L299.447 56.9097L300.21 56.1376L299.439 55.3736Z" fill="white"/>
                    <path d="M313.019 41.5659L312.255 42.338L313.027 43.102L313.79 42.3299L313.019 41.5659Z" fill="white"/>
                    <path d="M285.789 69.111L285.026 69.8831L285.797 70.6471L286.56 69.875L285.789 69.111Z" fill="white"/>
                    <path d="M306.229 48.4699L305.466 49.242L306.237 50.006L307 49.2339L306.229 48.4699Z" fill="white"/>
                    <path d="M296.063 65.6411L295.299 66.4132L296.071 67.1772L296.834 66.4051L296.063 65.6411Z" fill="white"/>
                    <path d="M302.852 58.7371L302.089 59.5093L302.861 60.2733L303.624 59.5011L302.852 58.7371Z" fill="white"/>
                    <path d="M316.502 44.9991L315.739 45.7712L316.51 46.5352L317.273 45.763L316.502 44.9991Z" fill="white"/>
                    <path d="M289.272 72.5441L288.509 73.3162L289.28 74.0802L290.044 73.3081L289.272 72.5441Z" fill="white"/>
                    <path d="M309.642 51.8334L308.879 52.6055L309.65 53.3695L310.413 52.5974L309.642 51.8334Z" fill="white"/>
                    <path d="M299.477 69.1443L298.713 69.9164L299.485 70.6804L300.248 69.9082L299.477 69.1443Z" fill="white"/>
                    <path d="M306.267 62.2405L305.503 63.0126L306.275 63.7766L307.038 63.0045L306.267 62.2405Z" fill="white"/>
                    <path d="M319.915 48.3625L319.152 49.1346L319.924 49.8986L320.687 49.1265L319.915 48.3625Z" fill="white"/>
                    <path d="M292.616 75.9778L291.853 76.7499L292.624 77.5139L293.388 76.7417L292.616 75.9778Z" fill="white"/>
                    <path d="M313.056 55.3365L312.293 56.1086L313.064 56.8726L313.827 56.1005L313.056 55.3365Z" fill="white"/>
                    <path d="M131.405 169.657L129.951 162.93L278.396 10.9615L296.647 0L131.405 169.657Z" fill="white"/>
                    <path opacity="0.2" d="M135.351 165.608L131.405 169.657L129.951 162.93L135.351 165.608Z" fill="#070707"/>
                    <path d="M43.7921 92.5195H49.8098L129.951 162.93L131.399 169.65L43.7921 92.5195Z" fill="white"/>
                </svg>
            </div>
            <h2 class="default-modal__title default-modal__title-illustration"><span>Email</span>successfully <span>changed!</span> </h2>
            <p class="default-modal__subtitle">Now use newemail@artu.studio in PremiereStudio and this site</p>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-success-password-change">
    <div class="default-modal__content default-modal__content-illustration"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <div class="default-modal__illustration"><svg width="344" height="302" viewBox="0 0 344 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M151.825 301.788C231.372 301.788 295.858 237.237 295.858 157.609C295.858 77.9813 231.372 13.4303 151.825 13.4303C72.2787 13.4303 7.79333 77.9813 7.79333 157.609C7.79333 237.237 72.2787 301.788 151.825 301.788Z" fill="#051227"/>
                    <path d="M284.447 65.2553L283.684 66.0273L284.455 66.7915L285.219 66.0195L284.447 65.2553Z" fill="white"/>
                    <path d="M277.552 58.4594L276.788 59.2314L277.56 59.9956L278.323 59.2236L277.552 58.4594Z" fill="white"/>
                    <path d="M291.343 72.0511L290.58 72.8231L291.351 73.5873L292.115 72.8153L291.343 72.0511Z" fill="white"/>
                    <path d="M270.726 51.5945L269.962 52.3665L270.733 53.1307L271.497 52.3587L270.726 51.5945Z" fill="white"/>
                    <path d="M287.876 61.7689L287.113 62.5409L287.884 63.3051L288.648 62.5331L287.876 61.7689Z" fill="white"/>
                    <path d="M280.981 54.973L280.217 55.7451L280.989 56.5092L281.752 55.7372L280.981 54.973Z" fill="white"/>
                    <path d="M294.703 68.6348L293.939 69.4069L294.711 70.1711L295.474 69.399L294.703 68.6348Z" fill="white"/>
                    <path d="M274.085 48.1782L273.322 48.9502L274.093 49.7144L274.856 48.9424L274.085 48.1782Z" fill="white"/>
                    <path d="M291.236 58.3526L290.473 59.1246L291.244 59.8888L292.008 59.1168L291.236 58.3526Z" fill="white"/>
                    <path d="M284.34 51.5568L283.577 52.3289L284.348 53.0931L285.112 52.321L284.34 51.5568Z" fill="white"/>
                    <path d="M298.132 65.1484L297.368 65.9204L298.14 66.6846L298.903 65.9126L298.132 65.1484Z" fill="white"/>
                    <path d="M277.514 44.6917L276.751 45.4637L277.522 46.2279L278.286 45.4559L277.514 44.6917Z" fill="white"/>
                    <path d="M294.665 54.8662L293.902 55.6382L294.673 56.4024L295.436 55.6304L294.665 54.8662Z" fill="white"/>
                    <path d="M287.77 48.0712L287.006 48.8432L287.778 49.6074L288.541 48.8354L287.77 48.0712Z" fill="white"/>
                    <path d="M298.095 51.5194L297.331 52.2914L298.103 53.0556L298.866 52.2836L298.095 51.5194Z" fill="white"/>
                    <path d="M291.2 44.7245L290.436 45.4965L291.207 46.2607L291.971 45.4887L291.2 44.7245Z" fill="white"/>
                    <path d="M301.524 48.0329L300.761 48.8049L301.532 49.5691L302.295 48.7971L301.524 48.0329Z" fill="white"/>
                    <path d="M294.628 41.2372L293.865 42.0092L294.636 42.7734L295.4 42.0014L294.628 41.2372Z" fill="white"/>
                    <path d="M308.35 54.8989L307.587 55.671L308.358 56.4352L309.122 55.6631L308.35 54.8989Z" fill="white"/>
                    <path d="M287.733 34.4422L286.97 35.2142L287.741 35.9784L288.504 35.2064L287.733 34.4422Z" fill="white"/>
                    <path d="M304.884 44.6175L304.12 45.3895L304.892 46.1537L305.655 45.3817L304.884 44.6175Z" fill="white"/>
                    <path d="M297.988 37.8217L297.225 38.5937L297.996 39.3579L298.76 38.5859L297.988 37.8217Z" fill="white"/>
                    <path d="M311.779 51.4124L311.016 52.1844L311.787 52.9486L312.551 52.1766L311.779 51.4124Z" fill="white"/>
                    <path d="M291.162 30.9558L290.399 31.7278L291.17 32.492L291.933 31.72L291.162 30.9558Z" fill="white"/>
                    <path d="M308.313 41.1303L307.549 41.9023L308.32 42.6665L309.084 41.8945L308.313 41.1303Z" fill="white"/>
                    <path d="M301.417 34.3353L300.654 35.1074L301.425 35.8716L302.189 35.0995L301.417 34.3353Z" fill="white"/>
                    <path d="M315.139 47.9962L314.376 48.7682L315.147 49.5324L315.91 48.7604L315.139 47.9962Z" fill="white"/>
                    <path d="M294.522 27.5396L293.758 28.3116L294.529 29.0758L295.293 28.3038L294.522 27.5396Z" fill="white"/>
                    <path d="M287.93 68.6879L287.167 69.46L287.938 70.2242L288.702 69.4521L287.93 68.6879Z" fill="white"/>
                    <path d="M281.035 61.8921L280.271 62.6641L281.043 63.4283L281.806 62.6563L281.035 61.8921Z" fill="white"/>
                    <path d="M267.243 48.1619L266.479 48.9339L267.251 49.6981L268.014 48.9261L267.243 48.1619Z" fill="white"/>
                    <path d="M294.826 75.4837L294.063 76.2557L294.834 77.0199L295.597 76.2479L294.826 75.4837Z" fill="white"/>
                    <path d="M274.069 55.0278L273.306 55.7998L274.077 56.564L274.84 55.792L274.069 55.0278Z" fill="white"/>
                    <path d="M291.29 65.2717L290.527 66.0437L291.298 66.8079L292.061 66.0359L291.29 65.2717Z" fill="white"/>
                    <path d="M284.464 58.4058L283.7 59.1778L284.471 59.942L285.235 59.17L284.464 58.4058Z" fill="white"/>
                    <path d="M270.673 44.815L269.909 45.587L270.68 46.3512L271.444 45.5792L270.673 44.815Z" fill="white"/>
                    <path d="M298.186 72.0675L297.422 72.8395L298.194 73.6037L298.957 72.8317L298.186 72.0675Z" fill="white"/>
                    <path d="M277.568 51.6109L276.805 52.3829L277.576 53.1471L278.339 52.375L277.568 51.6109Z" fill="white"/>
                    <path d="M294.719 61.7852L293.956 62.5572L294.727 63.3214L295.49 62.5494L294.719 61.7852Z" fill="white"/>
                    <path d="M287.823 54.9895L287.06 55.7615L287.831 56.5257L288.595 55.7536L287.823 54.9895Z" fill="white"/>
                    <path d="M274.102 41.3286L273.338 42.1006L274.11 42.8648L274.873 42.0928L274.102 41.3286Z" fill="white"/>
                    <path d="M301.615 68.581L300.851 69.353L301.622 70.1172L302.386 69.3452L301.615 68.581Z" fill="white"/>
                    <path d="M280.928 48.1945L280.164 48.9666L280.936 49.7307L281.699 48.9587L280.928 48.1945Z" fill="white"/>
                    <path d="M291.253 51.503L290.489 52.275L291.26 53.0392L292.024 52.2672L291.253 51.503Z" fill="white"/>
                    <path d="M284.357 44.7081L283.594 45.4801L284.365 46.2443L285.128 45.4723L284.357 44.7081Z" fill="white"/>
                    <path d="M301.508 54.8825L300.745 55.6545L301.516 56.4187L302.279 55.6467L301.508 54.8825Z" fill="white"/>
                    <path d="M294.612 48.0868L293.849 48.8588L294.62 49.623L295.383 48.851L294.612 48.0868Z" fill="white"/>
                    <path d="M304.867 51.4663L304.104 52.2383L304.875 53.0025L305.639 52.2305L304.867 51.4663Z" fill="white"/>
                    <path d="M298.041 44.6004L297.278 45.3724L298.049 46.1366L298.812 45.3646L298.041 44.6004Z" fill="white"/>
                    <path d="M284.25 31.0097L283.487 31.7817L284.258 32.5459L285.021 31.7739L284.25 31.0097Z" fill="white"/>
                    <path d="M311.763 58.2621L310.999 59.0341L311.771 59.7983L312.534 59.0263L311.763 58.2621Z" fill="white"/>
                    <path d="M291.146 37.8055L290.382 38.5775L291.154 39.3417L291.917 38.5696L291.146 37.8055Z" fill="white"/>
                    <path d="M308.296 47.9799L307.533 48.7519L308.304 49.5161L309.068 48.7441L308.296 47.9799Z" fill="white"/>
                    <path d="M301.401 41.185L300.638 41.957L301.409 42.7212L302.172 41.9492L301.401 41.185Z" fill="white"/>
                    <path d="M287.679 27.5232L286.916 28.2952L287.687 29.0594L288.45 28.2874L287.679 27.5232Z" fill="white"/>
                    <path d="M315.192 54.7756L314.429 55.5476L315.2 56.3118L315.964 55.5398L315.192 54.7756Z" fill="white"/>
                    <path d="M294.575 34.319L293.811 35.091L294.583 35.8552L295.346 35.0832L294.575 34.319Z" fill="white"/>
                    <path d="M311.725 44.4935L310.962 45.2655L311.733 46.0297L312.497 45.2577L311.725 44.4935Z" fill="white"/>
                    <path d="M304.83 37.6976L304.066 38.4697L304.838 39.2339L305.601 38.4618L304.83 37.6976Z" fill="white"/>
                    <path d="M291.039 24.107L290.275 24.879L291.047 25.6432L291.81 24.8712L291.039 24.107Z" fill="white"/>
                    <path d="M318.622 51.4289L317.858 52.2009L318.63 52.9651L319.393 52.1931L318.622 51.4289Z" fill="white"/>
                    <path d="M297.934 30.9027L297.171 31.6747L297.942 32.4389L298.706 31.6669L297.934 30.9027Z" fill="white"/>
                    <path d="M134.759 260.904L0 141.809L43.7029 92.1362L131.405 169.657L296.647 0L344 46.2162L134.759 260.904Z" fill="#FF244C"/>
                    <path d="M43.2256 159.75L42.4979 160.556L43.3028 161.284L44.0306 160.478L43.2256 159.75Z" fill="white"/>
                    <path d="M36.0173 153.254L35.2896 154.06L36.0946 154.789L36.8223 153.983L36.0173 153.254Z" fill="white"/>
                    <path d="M50.4346 166.245L49.7068 167.051L50.5118 167.78L51.2395 166.974L50.4346 166.245Z" fill="white"/>
                    <path d="M28.8086 146.759L28.0809 147.565L28.8858 148.293L29.6136 147.488L28.8086 146.759Z" fill="white"/>
                    <path d="M46.4332 156.109L45.7054 156.915L46.5104 157.643L47.2382 156.837L46.4332 156.109Z" fill="white"/>
                    <path d="M39.2983 149.679L38.5706 150.485L39.3755 151.214L40.1032 150.408L39.2983 149.679Z" fill="white"/>
                    <path d="M53.6421 162.604L52.9144 163.41L53.7194 164.138L54.4471 163.332L53.6421 162.604Z" fill="white"/>
                    <path d="M32.0893 143.184L31.3616 143.99L32.1666 144.719L32.8943 143.913L32.0893 143.184Z" fill="white"/>
                    <path d="M49.7149 152.533L48.9872 153.339L49.7922 154.068L50.5199 153.262L49.7149 152.533Z" fill="white"/>
                    <path d="M42.5062 146.038L41.7784 146.844L42.5834 147.572L43.3111 146.767L42.5062 146.038Z" fill="white"/>
                    <path d="M56.8576 159.102L56.1299 159.908L56.9349 160.636L57.6626 159.83L56.8576 159.102Z" fill="white"/>
                    <path d="M35.2969 139.543L34.5692 140.349L35.3742 141.077L36.1019 140.271L35.2969 139.543Z" fill="white"/>
                    <path d="M52.9958 148.959L52.2681 149.764L53.0731 150.493L53.8008 149.687L52.9958 148.959Z" fill="white"/>
                    <path d="M45.7869 142.463L45.0591 143.269L45.8641 143.998L46.5918 143.192L45.7869 142.463Z" fill="white"/>
                    <path d="M56.1374 145.391L55.4097 146.196L56.2147 146.925L56.9424 146.119L56.1374 145.391Z" fill="white"/>
                    <path d="M48.9944 138.822L48.2667 139.628L49.0717 140.356L49.7994 139.551L48.9944 138.822Z" fill="white"/>
                    <path d="M59.4182 141.816L58.6904 142.621L59.4954 143.35L60.2231 142.544L59.4182 141.816Z" fill="white"/>
                    <path d="M52.2754 135.247L51.5477 136.053L52.3527 136.781L53.0804 135.976L52.2754 135.247Z" fill="white"/>
                    <path d="M66.6271 148.311L65.8994 149.117L66.7044 149.845L67.4321 149.039L66.6271 148.311Z" fill="white"/>
                    <path d="M45.0662 128.752L44.3384 129.558L45.1434 130.286L45.8711 129.48L45.0662 128.752Z" fill="white"/>
                    <path d="M62.6257 138.175L61.898 138.981L62.703 139.709L63.4307 138.903L62.6257 138.175Z" fill="white"/>
                    <path d="M55.5561 131.672L54.8284 132.478L55.6333 133.206L56.3611 132.401L55.5561 131.672Z" fill="white"/>
                    <path d="M69.8347 144.67L69.107 145.476L69.912 146.204L70.6397 145.398L69.8347 144.67Z" fill="white"/>
                    <path d="M48.3471 125.177L47.6194 125.983L48.4244 126.711L49.1521 125.906L48.3471 125.177Z" fill="white"/>
                    <path d="M65.9067 134.6L65.179 135.405L65.9839 136.134L66.7116 135.328L65.9067 134.6Z" fill="white"/>
                    <path d="M58.6977 128.104L57.97 128.91L58.775 129.639L59.5027 128.833L58.6977 128.104Z" fill="white"/>
                    <path d="M73.1154 141.095L72.3877 141.901L73.1927 142.629L73.9204 141.823L73.1154 141.095Z" fill="white"/>
                    <path d="M51.5547 121.536L50.827 122.342L51.6319 123.07L52.3597 122.264L51.5547 121.536Z" fill="white"/>
                    <path d="M46.7974 163.034L46.0697 163.84L46.8747 164.568L47.6024 163.762L46.7974 163.034Z" fill="white"/>
                    <path d="M39.5884 156.539L38.8607 157.345L39.6657 158.073L40.3934 157.267L39.5884 156.539Z" fill="white"/>
                    <path d="M25.2367 143.475L24.509 144.281L25.314 145.01L26.0417 144.204L25.2367 143.475Z" fill="white"/>
                    <path d="M53.9333 169.463L53.2056 170.269L54.0106 170.997L54.7383 170.192L53.9333 169.463Z" fill="white"/>
                    <path d="M32.4457 149.97L31.718 150.776L32.523 151.505L33.2507 150.699L32.4457 149.97Z" fill="white"/>
                    <path d="M50.0051 159.393L49.2773 160.199L50.0823 160.927L50.81 160.121L50.0051 159.393Z" fill="white"/>
                    <path d="M42.7961 152.898L42.0684 153.703L42.8733 154.432L43.6011 153.626L42.7961 152.898Z" fill="white"/>
                    <path d="M28.5174 139.9L27.7897 140.706L28.5947 141.434L29.3224 140.628L28.5174 139.9Z" fill="white"/>
                    <path d="M57.2141 165.888L56.4863 166.694L57.2913 167.422L58.019 166.617L57.2141 165.888Z" fill="white"/>
                    <path d="M35.7264 146.395L34.9987 147.201L35.8037 147.93L36.5314 147.124L35.7264 146.395Z" fill="white"/>
                    <path d="M53.286 155.818L52.5583 156.624L53.3633 157.352L54.091 156.546L53.286 155.818Z" fill="white"/>
                    <path d="M46.077 149.323L45.3493 150.128L46.1543 150.857L46.882 150.051L46.077 149.323Z" fill="white"/>
                    <path d="M31.7261 136.259L30.9984 137.064L31.8033 137.793L32.5311 136.987L31.7261 136.259Z" fill="white"/>
                    <path d="M60.4947 162.313L59.767 163.119L60.572 163.847L61.2997 163.042L60.4947 162.313Z" fill="white"/>
                    <path d="M38.934 142.754L38.2063 143.56L39.0113 144.289L39.739 143.483L38.934 142.754Z" fill="white"/>
                    <path d="M49.3577 145.748L48.63 146.554L49.435 147.282L50.1627 146.476L49.3577 145.748Z" fill="white"/>
                    <path d="M42.1487 139.253L41.421 140.058L42.226 140.787L42.9537 139.981L42.1487 139.253Z" fill="white"/>
                    <path d="M59.7743 148.602L59.0466 149.408L59.8516 150.136L60.5793 149.33L59.7743 148.602Z" fill="white"/>
                    <path d="M52.5663 142.106L51.8386 142.912L52.6436 143.641L53.3713 142.835L52.5663 142.106Z" fill="white"/>
                    <path d="M63.0552 145.027L62.3275 145.833L63.1325 146.561L63.8602 145.755L63.0552 145.027Z" fill="white"/>
                    <path d="M55.8473 138.531L55.1196 139.337L55.9246 140.066L56.6523 139.26L55.8473 138.531Z" fill="white"/>
                    <path d="M41.4293 125.541L40.7015 126.347L41.5065 127.075L42.2342 126.269L41.4293 125.541Z" fill="white"/>
                    <path d="M70.2643 151.522L69.5366 152.328L70.3415 153.056L71.0693 152.251L70.2643 151.522Z" fill="white"/>
                    <path d="M48.6383 132.036L47.9106 132.842L48.7156 133.57L49.4433 132.765L48.6383 132.036Z" fill="white"/>
                    <path d="M66.2638 141.385L65.5361 142.191L66.3411 142.92L67.0688 142.114L66.2638 141.385Z" fill="white"/>
                    <path d="M59.128 134.956L58.4003 135.762L59.2053 136.491L59.933 135.685L59.128 134.956Z" fill="white"/>
                    <path d="M44.7103 121.966L43.9825 122.772L44.7875 123.5L45.5152 122.694L44.7103 121.966Z" fill="white"/>
                    <path d="M73.4056 147.954L72.6779 148.76L73.4828 149.489L74.2106 148.683L73.4056 147.954Z" fill="white"/>
                    <path d="M51.9192 128.461L51.1915 129.267L51.9965 129.996L52.7242 129.19L51.9192 128.461Z" fill="white"/>
                    <path d="M69.5446 137.81L68.8168 138.616L69.6218 139.345L70.3495 138.539L69.5446 137.81Z" fill="white"/>
                    <path d="M62.3356 131.315L61.6078 132.121L62.4128 132.849L63.1405 132.044L62.3356 131.315Z" fill="white"/>
                    <path d="M47.991 118.391L47.2632 119.197L48.0682 119.925L48.7959 119.119L47.991 118.391Z" fill="white"/>
                    <path d="M76.6865 144.379L75.9588 145.185L76.7638 145.914L77.4915 145.108L76.6865 144.379Z" fill="white"/>
                    <path d="M55.1266 124.82L54.3989 125.626L55.2038 126.354L55.9316 125.548L55.1266 124.82Z" fill="white"/>
                    <path d="M278.802 41.7631L278.038 42.5352L278.81 43.2992L279.573 42.5271L278.802 41.7631Z" fill="white"/>
                    <path d="M285.592 34.86L284.828 35.6321L285.6 36.3961L286.363 35.624L285.592 34.86Z" fill="white"/>
                    <path d="M272.012 48.667L271.249 49.4391L272.02 50.2031L272.783 49.4309L272.012 48.667Z" fill="white"/>
                    <path d="M292.452 28.0257L291.689 28.7978L292.46 29.5618L293.223 28.7896L292.452 28.0257Z" fill="white"/>
                    <path d="M282.285 45.196L281.522 45.9681L282.293 46.7321L283.057 45.96L282.285 45.196Z" fill="white"/>
                    <path d="M289.075 38.2931L288.312 39.0652L289.083 39.8292L289.846 39.0571L289.075 38.2931Z" fill="white"/>
                    <path d="M275.425 52.0305L274.662 52.8026L275.433 53.5666L276.196 52.7945L275.425 52.0305Z" fill="white"/>
                    <path d="M295.865 31.3893L295.102 32.1614L295.873 32.9254L296.636 32.1533L295.865 31.3893Z" fill="white"/>
                    <path d="M285.699 48.5604L284.935 49.3325L285.707 50.0965L286.47 49.3244L285.699 48.5604Z" fill="white"/>
                    <path d="M292.488 41.6566L291.725 42.4288L292.497 43.1928L293.26 42.4206L292.488 41.6566Z" fill="white"/>
                    <path d="M278.909 55.4644L278.145 56.2365L278.917 57.0005L279.68 56.2284L278.909 55.4644Z" fill="white"/>
                    <path d="M299.348 34.8222L298.585 35.5943L299.357 36.3583L300.12 35.5861L299.348 34.8222Z" fill="white"/>
                    <path d="M289.112 52.0637L288.349 52.8359L289.121 53.5999L289.884 52.8277L289.112 52.0637Z" fill="white"/>
                    <path d="M295.903 45.1598L295.139 45.9319L295.911 46.6959L296.674 45.9238L295.903 45.1598Z" fill="white"/>
                    <path d="M292.526 55.4273L291.763 56.1994L292.534 56.9634L293.297 56.1912L292.526 55.4273Z" fill="white"/>
                    <path d="M299.316 48.5234L298.553 49.2955L299.324 50.0595L300.087 49.2874L299.316 48.5234Z" fill="white"/>
                    <path d="M296.009 58.8603L295.246 59.6324L296.017 60.3964L296.781 59.6242L296.009 58.8603Z" fill="white"/>
                    <path d="M302.799 51.9563L302.036 52.7285L302.807 53.4924L303.57 52.7203L302.799 51.9563Z" fill="white"/>
                    <path d="M289.149 65.6947L288.386 66.4668L289.158 67.2308L289.921 66.4587L289.149 65.6947Z" fill="white"/>
                    <path d="M309.589 45.0526L308.825 45.8247L309.597 46.5887L310.36 45.8166L309.589 45.0526Z" fill="white"/>
                    <path d="M299.423 62.2238L298.659 62.9959L299.431 63.7599L300.194 62.9878L299.423 62.2238Z" fill="white"/>
                    <path d="M306.212 55.3199L305.449 56.092L306.221 56.856L306.984 56.0838L306.212 55.3199Z" fill="white"/>
                    <path d="M292.633 69.1277L291.87 69.8998L292.641 70.6638L293.404 69.8917L292.633 69.1277Z" fill="white"/>
                    <path d="M313.072 48.4855L312.309 49.2576L313.08 50.0216L313.844 49.2495L313.072 48.4855Z" fill="white"/>
                    <path d="M302.906 65.6568L302.143 66.429L302.914 67.1929L303.677 66.4208L302.906 65.6568Z" fill="white"/>
                    <path d="M309.696 58.753L308.933 59.5251L309.704 60.2891L310.467 59.5169L309.696 58.753Z" fill="white"/>
                    <path d="M296.046 72.4913L295.283 73.2634L296.054 74.0273L296.817 73.2552L296.046 72.4913Z" fill="white"/>
                    <path d="M316.486 51.8491L315.722 52.6213L316.494 53.3853L317.257 52.6131L316.486 51.8491Z" fill="white"/>
                    <path d="M275.372 45.2505L274.609 46.0226L275.38 46.7866L276.143 46.0145L275.372 45.2505Z" fill="white"/>
                    <path d="M282.162 38.3466L281.399 39.1188L282.17 39.8828L282.933 39.1106L282.162 38.3466Z" fill="white"/>
                    <path d="M295.811 24.6085L295.048 25.3806L295.82 26.1446L296.583 25.3725L295.811 24.6085Z" fill="white"/>
                    <path d="M268.582 52.1544L267.819 52.9265L268.59 53.6905L269.354 52.9184L268.582 52.1544Z" fill="white"/>
                    <path d="M288.952 31.4428L288.189 32.2149L288.96 32.9789L289.723 32.2068L288.952 31.4428Z" fill="white"/>
                    <path d="M278.785 48.6141L278.022 49.3862L278.794 50.1502L279.557 49.378L278.785 48.6141Z" fill="white"/>
                    <path d="M285.646 41.7796L284.882 42.5518L285.654 43.3157L286.417 42.5436L285.646 41.7796Z" fill="white"/>
                    <path d="M299.225 27.9719L298.462 28.7441L299.233 29.5081L299.996 28.7359L299.225 27.9719Z" fill="white"/>
                    <path d="M271.996 55.518L271.232 56.2902L272.004 57.0541L272.767 56.282L271.996 55.518Z" fill="white"/>
                    <path d="M292.435 34.8758L291.672 35.6479L292.443 36.4119L293.206 35.6398L292.435 34.8758Z" fill="white"/>
                    <path d="M282.269 52.047L281.506 52.8192L282.277 53.5831L283.04 52.811L282.269 52.047Z" fill="white"/>
                    <path d="M289.059 45.1432L288.295 45.9153L289.067 46.6793L289.83 45.9072L289.059 45.1432Z" fill="white"/>
                    <path d="M302.709 31.4059L301.945 32.178L302.717 32.942L303.48 32.1699L302.709 31.4059Z" fill="white"/>
                    <path d="M275.479 58.951L274.716 59.7231L275.487 60.4871L276.25 59.715L275.479 58.951Z" fill="white"/>
                    <path d="M295.848 38.2393L295.085 39.0115L295.856 39.7755L296.62 39.0033L295.848 38.2393Z" fill="white"/>
                    <path d="M292.542 48.5762L291.779 49.3483L292.55 50.1123L293.313 49.3402L292.542 48.5762Z" fill="white"/>
                    <path d="M299.332 41.6724L298.568 42.4446L299.34 43.2086L300.103 42.4364L299.332 41.6724Z" fill="white"/>
                    <path d="M289.166 58.8437L288.402 59.6158L289.174 60.3798L289.937 59.6077L289.166 58.8437Z" fill="white"/>
                    <path d="M295.956 51.9406L295.192 52.7128L295.964 53.4767L296.727 52.7046L295.956 51.9406Z" fill="white"/>
                    <path d="M292.579 62.2072L291.816 62.9793L292.587 63.7433L293.35 62.9712L292.579 62.2072Z" fill="white"/>
                    <path d="M299.439 55.3736L298.676 56.1458L299.447 56.9097L300.21 56.1376L299.439 55.3736Z" fill="white"/>
                    <path d="M313.019 41.5659L312.255 42.338L313.027 43.102L313.79 42.3299L313.019 41.5659Z" fill="white"/>
                    <path d="M285.789 69.111L285.026 69.8831L285.797 70.6471L286.56 69.875L285.789 69.111Z" fill="white"/>
                    <path d="M306.229 48.4699L305.466 49.242L306.237 50.006L307 49.2339L306.229 48.4699Z" fill="white"/>
                    <path d="M296.063 65.6411L295.299 66.4132L296.071 67.1772L296.834 66.4051L296.063 65.6411Z" fill="white"/>
                    <path d="M302.852 58.7371L302.089 59.5093L302.861 60.2733L303.624 59.5011L302.852 58.7371Z" fill="white"/>
                    <path d="M316.502 44.9991L315.739 45.7712L316.51 46.5352L317.273 45.763L316.502 44.9991Z" fill="white"/>
                    <path d="M289.272 72.5441L288.509 73.3162L289.28 74.0802L290.044 73.3081L289.272 72.5441Z" fill="white"/>
                    <path d="M309.642 51.8334L308.879 52.6055L309.65 53.3695L310.413 52.5974L309.642 51.8334Z" fill="white"/>
                    <path d="M299.477 69.1443L298.713 69.9164L299.485 70.6804L300.248 69.9082L299.477 69.1443Z" fill="white"/>
                    <path d="M306.267 62.2405L305.503 63.0126L306.275 63.7766L307.038 63.0045L306.267 62.2405Z" fill="white"/>
                    <path d="M319.915 48.3625L319.152 49.1346L319.924 49.8986L320.687 49.1265L319.915 48.3625Z" fill="white"/>
                    <path d="M292.616 75.9778L291.853 76.7499L292.624 77.5139L293.388 76.7417L292.616 75.9778Z" fill="white"/>
                    <path d="M313.056 55.3365L312.293 56.1086L313.064 56.8726L313.827 56.1005L313.056 55.3365Z" fill="white"/>
                    <path d="M131.405 169.657L129.951 162.93L278.396 10.9615L296.647 0L131.405 169.657Z" fill="white"/>
                    <path opacity="0.2" d="M135.351 165.608L131.405 169.657L129.951 162.93L135.351 165.608Z" fill="#070707"/>
                    <path d="M43.7921 92.5195H49.8098L129.951 162.93L131.399 169.65L43.7921 92.5195Z" fill="white"/>
                </svg>
            </div>
            <h2 class="default-modal__title default-modal__title-illustration"><span>Password</span>successfully <span>changed!</span> </h2>
            <p class="default-modal__subtitle">Now use newemail@artu.studio in PremiereStudio and this site</p>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-success-confirm-mail">
    <div class="default-modal__content default-modal__content-illustration"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <div class="default-modal__illustration default-modal__illustration-desctop"><svg width="341" height="354" viewBox="0 0 341 354" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M314 208C314 279.1 263.1 338.4 195.7 351.4C192.8 351.9 189.9 352.4 186.9 352.8C186.7 352.8 186.5 352.8 186.3 352.9C180.3 353.7 174.2 354 168 354C153.6 354 139.7 351.9 126.5 348C126 347.9 125.6 347.7 125.1 347.6C115.2 344.6 105.7 340.5 96.8 335.5C69.7 320.3 47.9 296.7 35 268.2C32.5 262.8 30.4 257.2 28.6 251.4C28.5 251.1 28.4 250.7 28.3 250.4C24.2 237 22 222.7 22 208C22 199.7 22.7 191.5 24 183.5C24.1 182.9 24.2 182.3 24.3 181.7C25.2 177 26.2 172.3 27.5 167.7C39 127.9 66.9 95 103.5 77C122.9 67.4 144.8 62 168 62C168.5 62 169.1 62 169.6 62C171.5 62 173.3 62.1 175.2 62.2C185.5 62.7 195.5 64.3 205.1 66.8C218.8 70.4 231.7 75.9 243.5 83C252.6 88.5 261.1 95 268.7 102.2C270.2 103.6 271.6 105 273 106.5C288.8 122.9 300.9 143 307.7 165.3C311.8 178.8 314 193.2 314 208Z" fill="#051227"/>
                    <path d="M314 208C314 279.1 263.1 338.4 195.7 351.4C192.8 351.9 189.9 352.4 186.9 352.8C186.7 352.8 186.5 352.8 186.3 352.9C180.3 353.7 174.2 354 168 354C153.6 354 139.7 351.9 126.5 348C126 347.9 125.6 347.7 125.1 347.6C115.2 344.6 105.7 340.5 96.8 335.5C69.7 320.3 47.9 296.7 35 268.2C32.5 262.8 30.4 257.2 28.6 251.4C28.5 251.1 28.4 250.7 28.3 250.4C24.2 237 22 222.7 22 208C22 199.7 22.7 191.5 24 183.5C24.1 182.9 24.2 182.3 24.3 181.7C25.2 177 26.2 172.3 27.5 167.7C39 127.9 66.9 95 103.5 77C122.9 67.4 144.8 62 168 62C168.5 62 169.1 62 169.6 62C171.5 62 173.3 62.1 175.2 62.2C185.5 62.7 195.5 64.3 205.1 66.8C218.8 70.4 231.7 75.9 243.5 83C252.6 88.5 261.1 95 268.7 102.2C270.2 103.6 271.6 105 273 106.5C288.8 122.9 300.9 143 307.7 165.3C311.8 178.8 314 193.2 314 208Z" fill="#051227"/>
                    <path d="M341 89.8L137.5 0L87.1 114.1L290.6 203.9L341 89.8Z" fill="#FF244C"/>
                    <path d="M232.8 55.6L87.2 114.2L290.7 204L232.8 55.6Z" fill="#FF244C"/>
                    <path opacity="0.2" d="M338.1 88.5L137.5 0L202.7 125.9L338.1 88.5Z" fill="#070707"/>
                    <path d="M338.1 88.5L137.5 0L206.8 114.5L338.1 88.5Z" fill="white"/>
                    <path d="M213.273 71.6512L212.912 72.4756L213.736 72.8367L214.097 72.0123L213.273 71.6512Z" fill="#051227"/>
                    <path d="M216.483 64.2358L216.122 65.0602L216.946 65.4213L217.308 64.5969L216.483 64.2358Z" fill="#051227"/>
                    <path d="M210.022 79.1581L209.661 79.9825L210.486 80.3436L210.847 79.5192L210.022 79.1581Z" fill="#051227"/>
                    <path d="M219.825 56.7691L219.464 57.5935L220.288 57.9546L220.649 57.1302L219.825 56.7691Z" fill="#051227"/>
                    <path d="M216.961 73.3023L216.599 74.1267L217.424 74.4878L217.785 73.6634L216.961 73.3023Z" fill="#051227"/>
                    <path d="M220.303 65.8354L219.942 66.6598L220.766 67.0209L221.127 66.1965L220.303 65.8354Z" fill="#051227"/>
                    <path d="M213.71 80.8092L213.349 81.6336L214.173 81.9947L214.534 81.1703L213.71 80.8092Z" fill="#051227"/>
                    <path d="M223.513 58.4202L223.152 59.2446L223.976 59.6057L224.337 58.7813L223.513 58.4202Z" fill="#051227"/>
                    <path d="M220.74 74.9935L220.379 75.8179L221.203 76.179L221.564 75.3546L220.74 74.9935Z" fill="#051227"/>
                    <path d="M223.99 67.4865L223.629 68.3109L224.454 68.672L224.815 67.8476L223.99 67.4865Z" fill="#051227"/>
                    <path d="M217.398 82.4603L217.037 83.2847L217.861 83.6458L218.222 82.8214L217.398 82.4603Z" fill="#051227"/>
                    <path d="M227.332 60.0198L226.971 60.8442L227.796 61.2053L228.157 60.3809L227.332 60.0198Z" fill="#051227"/>
                    <path d="M224.467 76.5521L224.106 77.3765L224.931 77.7376L225.292 76.9132L224.467 76.5521Z" fill="#051227"/>
                    <path d="M227.769 69.1769L227.408 70.0013L228.232 70.3624L228.594 69.538L227.769 69.1769Z" fill="#051227"/>
                    <path d="M228.246 78.2434L227.885 79.0677L228.71 79.4288L229.071 78.6044L228.246 78.2434Z" fill="#051227"/>
                    <path d="M231.497 70.7364L231.136 71.5608L231.96 71.9219L232.321 71.0975L231.497 70.7364Z" fill="#051227"/>
                    <path d="M231.934 79.8944L231.573 80.7188L232.398 81.0799L232.759 80.2555L231.934 79.8944Z" fill="#051227"/>
                    <path d="M235.185 72.3875L234.824 73.2119L235.648 73.573L236.009 72.7486L235.185 72.3875Z" fill="#051227"/>
                    <path d="M228.684 87.4014L228.323 88.2258L229.147 88.5869L229.508 87.7625L228.684 87.4014Z" fill="#051227"/>
                    <path d="M238.527 64.9207L238.166 65.7451L238.99 66.1062L239.351 65.2818L238.527 64.9207Z" fill="#051227"/>
                    <path d="M235.662 81.454L235.301 82.2784L236.126 82.6395L236.487 81.8151L235.662 81.454Z" fill="#051227"/>
                    <path d="M238.964 74.0787L238.603 74.9031L239.428 75.2642L239.789 74.4398L238.964 74.0787Z" fill="#051227"/>
                    <path d="M232.412 88.9608L232.051 89.7852L232.875 90.1463L233.236 89.3219L232.412 88.9608Z" fill="#051227"/>
                    <path d="M242.214 66.572L241.853 67.3964L242.678 67.7574L243.039 66.933L242.214 66.572Z" fill="#051227"/>
                    <path d="M239.442 83.1453L239.08 83.9697L239.905 84.3307L240.266 83.5063L239.442 83.1453Z" fill="#051227"/>
                    <path d="M242.692 75.6383L242.331 76.4626L243.155 76.8237L243.517 75.9993L242.692 75.6383Z" fill="#051227"/>
                    <path d="M236.099 90.6121L235.738 91.4365L236.563 91.7975L236.924 90.9731L236.099 90.6121Z" fill="#051227"/>
                    <path d="M245.902 68.223L245.541 69.0474L246.366 69.4084L246.727 68.584L245.902 68.223Z" fill="#051227"/>
                    <path d="M211.582 75.4303L211.221 76.2547L212.045 76.6158L212.406 75.7914L211.582 75.4303Z" fill="#051227"/>
                    <path d="M214.924 67.9636L214.563 68.788L215.387 69.1491L215.748 68.3247L214.924 67.9636Z" fill="#051227"/>
                    <path d="M221.384 53.0415L221.023 53.8659L221.848 54.227L222.209 53.4026L221.384 53.0415Z" fill="#051227"/>
                    <path d="M208.331 82.9372L207.97 83.7616L208.795 84.1227L209.156 83.2983L208.331 82.9372Z" fill="#051227"/>
                    <path d="M218.174 60.4567L217.813 61.2811L218.637 61.6422L218.998 60.8178L218.174 60.4567Z" fill="#051227"/>
                    <path d="M215.401 77.03L215.04 77.8544L215.865 78.2155L216.226 77.391L215.401 77.03Z" fill="#051227"/>
                    <path d="M218.612 69.6146L218.251 70.439L219.075 70.8001L219.436 69.9757L218.612 69.6146Z" fill="#051227"/>
                    <path d="M225.204 54.6409L224.843 55.4653L225.667 55.8264L226.028 55.002L225.204 54.6409Z" fill="#051227"/>
                    <path d="M212.059 84.4968L211.698 85.3212L212.523 85.6823L212.884 84.8579L212.059 84.4968Z" fill="#051227"/>
                    <path d="M221.862 62.1078L221.501 62.9323L222.325 63.2933L222.686 62.4689L221.862 62.1078Z" fill="#051227"/>
                    <path d="M219.089 78.6811L218.728 79.5055L219.552 79.8666L219.914 79.0422L219.089 78.6811Z" fill="#051227"/>
                    <path d="M222.431 71.2143L222.07 72.0387L222.894 72.3998L223.255 71.5754L222.431 71.2143Z" fill="#051227"/>
                    <path d="M228.891 56.2912L228.53 57.1156L229.354 57.4767L229.716 56.6523L228.891 56.2912Z" fill="#051227"/>
                    <path d="M215.839 86.1879L215.478 87.0123L216.302 87.3734L216.663 86.549L215.839 86.1879Z" fill="#051227"/>
                    <path d="M225.641 63.7991L225.28 64.6235L226.104 64.9846L226.466 64.1601L225.641 63.7991Z" fill="#051227"/>
                    <path d="M226.119 72.8654L225.758 73.6898L226.582 74.0509L226.943 73.2265L226.119 72.8654Z" fill="#051227"/>
                    <path d="M229.369 65.3577L229.007 66.1821L229.832 66.5432L230.193 65.7188L229.369 65.3577Z" fill="#051227"/>
                    <path d="M226.596 81.9318L226.235 82.7562L227.06 83.1173L227.421 82.2929L226.596 81.9318Z" fill="#051227"/>
                    <path d="M229.806 74.5156L229.445 75.34L230.269 75.7011L230.63 74.8767L229.806 74.5156Z" fill="#051227"/>
                    <path d="M230.283 83.582L229.922 84.4064L230.747 84.7675L231.108 83.9431L230.283 83.582Z" fill="#051227"/>
                    <path d="M233.625 76.1152L233.264 76.9396L234.089 77.3007L234.45 76.4762L233.625 76.1152Z" fill="#051227"/>
                    <path d="M240.086 61.193L239.725 62.0175L240.549 62.3785L240.911 61.5541L240.086 61.193Z" fill="#051227"/>
                    <path d="M227.033 91.0889L226.672 91.9133L227.496 92.2744L227.857 91.45L227.033 91.0889Z" fill="#051227"/>
                    <path d="M236.836 68.7001L236.474 69.5245L237.299 69.8856L237.66 69.0612L236.836 68.7001Z" fill="#051227"/>
                    <path d="M234.063 85.2733L233.702 86.0977L234.526 86.4587L234.887 85.6343L234.063 85.2733Z" fill="#051227"/>
                    <path d="M237.313 77.7664L236.952 78.5908L237.777 78.9518L238.138 78.1274L237.313 77.7664Z" fill="#051227"/>
                    <path d="M243.865 62.8843L243.504 63.7087L244.329 64.0698L244.69 63.2454L243.865 62.8843Z" fill="#051227"/>
                    <path d="M230.721 92.7401L230.36 93.5645L231.184 93.9255L231.545 93.1011L230.721 92.7401Z" fill="#051227"/>
                    <path d="M240.563 70.2596L240.202 71.084L241.027 71.4451L241.388 70.6207L240.563 70.2596Z" fill="#051227"/>
                    <path d="M237.751 86.9243L237.39 87.7487L238.214 88.1098L238.575 87.2854L237.751 86.9243Z" fill="#051227"/>
                    <path d="M241.001 79.4175L240.64 80.2419L241.464 80.603L241.825 79.7786L241.001 79.4175Z" fill="#051227"/>
                    <path d="M247.593 64.4429L247.232 65.2673L248.056 65.6284L248.417 64.804L247.593 64.4429Z" fill="#051227"/>
                    <path d="M234.54 94.3396L234.179 95.164L235.004 95.5251L235.365 94.7007L234.54 94.3396Z" fill="#051227"/>
                    <path d="M244.342 71.9498L243.981 72.7742L244.806 73.1353L245.167 72.3109L244.342 71.9498Z" fill="#051227"/>
                    <path opacity="0.2" d="M179.3 80.9L87.1 114.2L177.7 77.8L179.3 80.9Z" fill="#070707"/>
                    <path opacity="0.2" d="M251 112.5L290.7 204L254.4 111.5L251 112.5Z" fill="#070707"/>
                    <path d="M158.6 255.9L10.5 270.6L0 165.1L151.6 179.8L158.6 255.9Z" fill="#FF244C"/>
                    <path d="M87.9 182.5L10.5 270.7L158.6 256L87.9 182.5Z" fill="#FF244C"/>
                    <path opacity="0.2" d="M150 179.7L0 165.1L93.6 236.7L150 179.7Z" fill="#070707"/>
                    <path d="M150 179.7L0 165.1L92.3 228.1L150 179.7Z" fill="white"/>
                    <path d="M79 200.5L79.7 200.4L79.8 201L79.1 201.1L79 200.5Z" fill="#051227"/>
                    <path d="M78.5 194.9H79.2L79.3 195.5L78.6 195.6L78.5 194.9Z" fill="#051227"/>
                    <path d="M79.6 206L80.3 205.9V206.6L79.6 206.7V206Z" fill="#051227"/>
                    <path d="M78 189.4H78.7V190L78 190.1V189.4Z" fill="#051227"/>
                    <path d="M82.6614 200.061L81.9648 200.13L82.0239 200.727L82.7205 200.658L82.6614 200.061Z" fill="#051227"/>
                    <path d="M81.5 194.7H82.2V195.3H81.5V194.7Z" fill="#051227"/>
                    <path d="M82.5 205.6L83.2 205.5L83.3 206.2L82.6 206.3L82.5 205.6Z" fill="#051227"/>
                    <path d="M80.8999 189.3H81.5999L81.6999 189.9H80.9999L80.8999 189.3Z" fill="#051227"/>
                    <path d="M85.5601 199.759L84.8635 199.827L84.9226 200.425L85.6191 200.356L85.5601 199.759Z" fill="#051227"/>
                    <path d="M84.3999 194.5H84.9999L85.0999 195.1H84.3999V194.5Z" fill="#051227"/>
                    <path d="M85.3999 205.2H86.0999V205.8L85.4999 205.9L85.3999 205.2Z" fill="#051227"/>
                    <path d="M83.7999 189.2H84.4999V189.8H83.8999L83.7999 189.2Z" fill="#051227"/>
                    <path d="M88.2682 199.566L87.6711 199.625L87.7302 200.222L88.3273 200.163L88.2682 199.566Z" fill="#051227"/>
                    <path d="M87.2 194.3H87.8V194.9H87.2V194.3Z" fill="#051227"/>
                    <path d="M90.9652 199.265L90.3682 199.324L90.4272 199.921L91.0243 199.862L90.9652 199.265Z" fill="#051227"/>
                    <path d="M89.8999 194.2L90.4999 194.1V194.7L89.8999 194.8V194.2Z" fill="#051227"/>
                    <path d="M93 199.1L93.6 199L93.7 199.6L93.1 199.7L93 199.1Z" fill="#051227"/>
                    <path d="M92.5 194L93.1 193.9V194.5L92.5 194.6V194Z" fill="#051227"/>
                    <path d="M93.5 204.2L94.1 204.1L94.2 204.7L93.6 204.8L93.5 204.2Z" fill="#051227"/>
                    <path d="M91.8999 188.9H92.4999L92.5999 189.5H91.9999L91.8999 188.9Z" fill="#051227"/>
                    <path d="M95.5 198.8H96.1L96.2 199.3L95.6 199.4L95.5 198.8Z" fill="#051227"/>
                    <path d="M95 193.8H95.6V194.3L95.1 194.4L95 193.8Z" fill="#051227"/>
                    <path d="M96.1 203.9L96.6 203.8L96.7 204.4H96.1V203.9Z" fill="#051227"/>
                    <path d="M94.5 188.8H95.1V189.4H94.5V188.8Z" fill="#051227"/>
                    <path d="M98 198.6L98.5 198.5L98.6 199.1H98V198.6Z" fill="#051227"/>
                    <path d="M97.5 193.6H98L98.1 194.2H97.5V193.6Z" fill="#051227"/>
                    <path d="M98.5 203.5H99.1V204L98.6 204.1L98.5 203.5Z" fill="#051227"/>
                    <path d="M96.8999 188.7H97.4999V189.3H96.9999L96.8999 188.7Z" fill="#051227"/>
                    <path d="M79.2999 203.2H79.9999L80.0999 203.8L79.3999 203.9L79.2999 203.2Z" fill="#051227"/>
                    <path d="M78.7999 197.7L79.4999 197.6V198.3H78.7999V197.7Z" fill="#051227"/>
                    <path d="M77.7 186.7H78.4L78.5 187.3H77.8L77.7 186.7Z" fill="#051227"/>
                    <path d="M79.7999 208.8L80.4999 208.7L80.5999 209.4L79.8999 209.5L79.7999 208.8Z" fill="#051227"/>
                    <path d="M78.2 192.2L78.9 192.1L79 192.8H78.3L78.2 192.2Z" fill="#051227"/>
                    <path d="M82.2999 202.9L82.9999 202.8V203.4L82.2999 203.5V202.9Z" fill="#051227"/>
                    <path d="M81.7 197.4H82.4L82.5 198L81.8 198.1L81.7 197.4Z" fill="#051227"/>
                    <path d="M80.7 186.6H81.4V187.2H80.7V186.6Z" fill="#051227"/>
                    <path d="M82.7999 208.4L83.4999 208.3L83.5999 208.9L82.8999 209L82.7999 208.4Z" fill="#051227"/>
                    <path d="M81.2 192H81.9V192.6H81.3L81.2 192Z" fill="#051227"/>
                    <path d="M85.2 202.6L85.8 202.5L85.9 203.1L85.2 203.2V202.6Z" fill="#051227"/>
                    <path d="M84.6 197.2L85.3 197.1V197.8H84.7L84.6 197.2Z" fill="#051227"/>
                    <path d="M83.6 186.6H84.2L84.3 187.2H83.6V186.6Z" fill="#051227"/>
                    <path d="M85.7 207.9H86.4V208.5L85.8 208.6L85.7 207.9Z" fill="#051227"/>
                    <path d="M84.1 191.9L84.7 191.8L84.8 192.4L84.2 192.5L84.1 191.9Z" fill="#051227"/>
                    <path d="M87.3999 197L88.0999 196.9V197.5L87.4999 197.6L87.3999 197Z" fill="#051227"/>
                    <path d="M86.8999 191.7H87.4999L87.5999 192.3H86.8999V191.7Z" fill="#051227"/>
                    <path d="M90.7 201.9H91.3V202.5H90.7V201.9Z" fill="#051227"/>
                    <path d="M90.1 196.7H90.7L90.8 197.3H90.2L90.1 196.7Z" fill="#051227"/>
                    <path d="M93.2999 201.6H93.8999V202.1L93.2999 202.2V201.6Z" fill="#051227"/>
                    <path d="M92.7 196.5H93.3L93.4 197.1H92.8L92.7 196.5Z" fill="#051227"/>
                    <path d="M91.7 186.4H92.3V187H91.7V186.4Z" fill="#051227"/>
                    <path d="M93.7999 206.8L94.3999 206.7L94.4999 207.3H93.8999L93.7999 206.8Z" fill="#051227"/>
                    <path d="M92.2 191.4H92.8L92.9 192H92.3L92.2 191.4Z" fill="#051227"/>
                    <path d="M95.7999 201.3H96.3999V201.8L95.8999 201.9L95.7999 201.3Z" fill="#051227"/>
                    <path d="M95.2999 196.3H95.7999L95.8999 196.8L95.2999 196.9V196.3Z" fill="#051227"/>
                    <path d="M94.2 186.3H94.8V186.9H94.3L94.2 186.3Z" fill="#051227"/>
                    <path d="M96.2999 206.4L96.8999 206.3L96.9999 206.9L96.3999 207L96.2999 206.4Z" fill="#051227"/>
                    <path d="M94.7 191.3H95.3L95.4 191.9H94.8L94.7 191.3Z" fill="#051227"/>
                    <path d="M98.2 201.1L98.8 201L98.9 201.6H98.3L98.2 201.1Z" fill="#051227"/>
                    <path d="M97.7 196.1H98.3V196.6L97.8 196.7L97.7 196.1Z" fill="#051227"/>
                    <path d="M96.7 186.3H97.2L97.3 186.8L96.7 186.9V186.3Z" fill="#051227"/>
                    <path d="M98.7999 206L99.2999 205.9L99.3999 206.5L98.7999 206.6V206Z" fill="#051227"/>
                    <path d="M97.2 191.2H97.8V191.7L97.3 191.8L97.2 191.2Z" fill="#051227"/>
                    <path opacity="0.2" d="M63.9 214L10.5 270.6L61.7 212.3L63.9 214Z" fill="#070707"/>
                    <path opacity="0.2" d="M115.6 214.4L158.6 255.9L117.1 212.9L115.6 214.4Z" fill="#070707"/>
                    <path d="M198.6 318.8L195.8 351.3C192.9 351.8 190 352.3 187 352.7C186.8 352.7 186.6 352.7 186.4 352.8C180.4 353.6 174.3 353.9 168.1 353.9C153.7 353.9 139.8 351.8 126.6 347.9C126.1 347.8 125.7 347.6 125.2 347.5C115.3 344.5 105.8 340.4 96.8999 335.4L103.1 284.7L198.6 318.8Z" fill="#FF244C"/>
                    <path d="M187 352.8C186.8 352.8 186.6 352.8 186.3 352.9C180.3 353.7 174.2 354 168 354C153.6 354 139.7 351.9 126.5 348C126 347.9 125.6 347.7 125.1 347.6L143.8 331.4L146.1 329.4L160.8 316.6L160.9 316.5L164.7 313.2L166.9 317L167 317.1L168.2 319.3L168.4 319.8L176.5 334.3L177.8 336.6L187 352.8Z" fill="#FF244C"/>
                    <path opacity="0.2" d="M197.8 318.6L103 284.8L161.3 351.4L197.8 318.6Z" fill="#070707"/>
                    <path d="M197.8 318.6L103 284.8L161.6 345.2L197.8 318.6Z" fill="white"/>
                    <path d="M153.6 322.3L154 322.4V322.9L153.5 322.8L153.6 322.3Z" fill="#051227"/>
                    <path d="M154.2 318.1L154.6 318.3V318.8L154.1 318.6L154.2 318.1Z" fill="#051227"/>
                    <path d="M152.9 326.5L153.4 326.6L153.3 327.1L152.9 327V326.5Z" fill="#051227"/>
                    <path d="M154.8 313.9L155.3 314.1L155.2 314.6L154.7 314.4L154.8 313.9Z" fill="#051227"/>
                    <path d="M155.6 322.8L156 322.9V323.4L155.5 323.3L155.6 322.8Z" fill="#051227"/>
                    <path d="M156.2 318.7L156.7 318.8L156.6 319.3L156.1 319.2L156.2 318.7Z" fill="#051227"/>
                    <path d="M155 327L155.4 327.1V327.5L154.9 327.4L155 327Z" fill="#051227"/>
                    <path d="M156.8 314.5L157.3 314.6L157.2 315.1L156.7 315L156.8 314.5Z" fill="#051227"/>
                    <path d="M157.6 323.3L158 323.4L157.9 323.9L157.5 323.8L157.6 323.3Z" fill="#051227"/>
                    <path d="M158.2 319.2L158.6 319.3V319.8L158.1 319.7L158.2 319.2Z" fill="#051227"/>
                    <path d="M157 327.4L157.4 327.5L157.3 328L156.9 327.9L157 327.4Z" fill="#051227"/>
                    <path d="M158.8 315.1L159.3 315.2L159.2 315.7L158.7 315.6L158.8 315.1Z" fill="#051227"/>
                    <path d="M159.5 323.8L160 323.9L159.9 324.4L159.5 324.3V323.8Z" fill="#051227"/>
                    <path d="M160.1 319.7L160.6 319.9L160.5 320.3L160.1 320.2V319.7Z" fill="#051227"/>
                    <path d="M161.5 324.3L161.9 324.4L161.8 324.9L161.4 324.8L161.5 324.3Z" fill="#051227"/>
                    <path d="M162.1 320.3L162.5 320.4L162.4 320.8L162 320.7L162.1 320.3Z" fill="#051227"/>
                    <path d="M163.4 324.8L163.8 324.9L163.7 325.4L163.3 325.2L163.4 324.8Z" fill="#051227"/>
                    <path d="M164 320.8L164.4 320.9L164.3 321.3L163.9 321.2L164 320.8Z" fill="#051227"/>
                    <path d="M162.8 328.8L163.2 328.9L163.1 329.4L162.7 329.3L162.8 328.8Z" fill="#051227"/>
                    <path d="M164.6 316.7L165 316.8V317.3L164.5 317.2L164.6 316.7Z" fill="#051227"/>
                    <path d="M165.2 325.3L165.7 325.4L165.6 325.8L165.2 325.7V325.3Z" fill="#051227"/>
                    <path d="M165.9 321.3L166.3 321.4L166.2 321.8L165.8 321.7L165.9 321.3Z" fill="#051227"/>
                    <path d="M164.6 329.2L165.1 329.3L165 329.8L164.6 329.7V329.2Z" fill="#051227"/>
                    <path d="M166.5 317.2L166.9 317.4L166.8 317.8L166.4 317.7L166.5 317.2Z" fill="#051227"/>
                    <path d="M167.1 325.7L167.5 325.8L167.4 326.3L167 326.2L167.1 325.7Z" fill="#051227"/>
                    <path d="M167.7 321.8L168.1 321.9V322.3L167.6 322.2L167.7 321.8Z" fill="#051227"/>
                    <path d="M166.5 329.7L166.9 329.8L166.8 330.2L166.4 330.1L166.5 329.7Z" fill="#051227"/>
                    <path d="M168.3 317.8L168.7 317.9V318.4L168.3 318.2V317.8Z" fill="#051227"/>
                    <path d="M153.2 324.4L153.7 324.5L153.6 325L153.2 324.9V324.4Z" fill="#051227"/>
                    <path d="M153.9 320.2L154.3 320.4V320.8L153.8 320.7L153.9 320.2Z" fill="#051227"/>
                    <path d="M155.1 311.8L155.6 312L155.5 312.5L155 312.3L155.1 311.8Z" fill="#051227"/>
                    <path d="M152.6 328.6L153.1 328.7L153 329.1L152.6 329V328.6Z" fill="#051227"/>
                    <path d="M154.5 316L154.9 316.2V316.7L154.4 316.5L154.5 316Z" fill="#051227"/>
                    <path d="M155.3 324.9L155.7 325V325.5L155.2 325.4L155.3 324.9Z" fill="#051227"/>
                    <path d="M155.9 320.8L156.3 320.9V321.4L155.8 321.2L155.9 320.8Z" fill="#051227"/>
                    <path d="M157.1 312.4L157.6 312.6L157.5 313L157 312.9L157.1 312.4Z" fill="#051227"/>
                    <path d="M154.7 329L155.1 329.1V329.6L154.6 329.5L154.7 329Z" fill="#051227"/>
                    <path d="M156.5 316.6L157 316.7L156.9 317.2L156.4 317.1L156.5 316.6Z" fill="#051227"/>
                    <path d="M157.3 325.4L157.7 325.5L157.6 326L157.2 325.9L157.3 325.4Z" fill="#051227"/>
                    <path d="M157.9 321.3L158.3 321.4V321.9L157.8 321.8L157.9 321.3Z" fill="#051227"/>
                    <path d="M159.1 313L159.6 313.1L159.5 313.6L159 313.5L159.1 313Z" fill="#051227"/>
                    <path d="M156.6 329.5L157.1 329.6L157 330L156.6 329.9V329.5Z" fill="#051227"/>
                    <path d="M158.5 317.1L158.9 317.3V317.7L158.4 317.6L158.5 317.1Z" fill="#051227"/>
                    <path d="M159.8 321.8L160.3 321.9L160.2 322.4L159.8 322.3V321.8Z" fill="#051227"/>
                    <path d="M160.4 317.7L160.9 317.8L160.8 318.3L160.4 318.2V317.7Z" fill="#051227"/>
                    <path d="M161.2 326.3L161.6 326.4L161.5 326.9L161.1 326.8L161.2 326.3Z" fill="#051227"/>
                    <path d="M161.8 322.3L162.2 322.4L162.1 322.9L161.7 322.8L161.8 322.3Z" fill="#051227"/>
                    <path d="M163.1 326.8L163.5 326.9L163.4 327.4L163 327.3L163.1 326.8Z" fill="#051227"/>
                    <path d="M163.7 322.8L164.1 322.9L164 323.4L163.6 323.2L163.7 322.8Z" fill="#051227"/>
                    <path d="M164.9 314.7L165.3 314.8V315.3L164.8 315.2L164.9 314.7Z" fill="#051227"/>
                    <path d="M162.4 330.8L162.9 330.9L162.8 331.3L162.4 331.2V330.8Z" fill="#051227"/>
                    <path d="M164.3 318.7L164.7 318.9V319.3L164.2 319.2L164.3 318.7Z" fill="#051227"/>
                    <path d="M164.9 327.2L165.4 327.4L165.3 327.8L164.9 327.7V327.2Z" fill="#051227"/>
                    <path d="M165.5 323.3L166 323.4L165.9 323.8L165.5 323.7V323.3Z" fill="#051227"/>
                    <path d="M166.8 315.2L167.2 315.4L167.1 315.8L166.7 315.7L166.8 315.2Z" fill="#051227"/>
                    <path d="M164.3 331.2L164.7 331.3V331.8L164.3 331.7V331.2Z" fill="#051227"/>
                    <path d="M166.2 319.3L166.6 319.4L166.5 319.8L166.1 319.7L166.2 319.3Z" fill="#051227"/>
                    <path d="M166.8 327.7L167.2 327.8L167.1 328.3L166.7 328.2L166.8 327.7Z" fill="#051227"/>
                    <path d="M167.4 323.7L167.8 323.9L167.7 324.3L167.3 324.2L167.4 323.7Z" fill="#051227"/>
                    <path d="M168.6 315.8L169.1 315.9L169 316.4L168.6 316.2V315.8Z" fill="#051227"/>
                    <path d="M166.2 331.6L166.6 331.7L166.5 332.2L166.1 332.1L166.2 331.6Z" fill="#051227"/>
                    <path d="M168 319.8L168.4 319.9V320.3L167.9 320.2L168 319.8Z" fill="#051227"/>
                    <path opacity="0.2" d="M145 332.9L126.6 348C126.1 347.9 125.7 347.7 125.2 347.6L143.9 331.4L144.1 331.6L145 332.9Z" fill="#070707"/>
                    <path opacity="0.2" d="M186.9 352.8C186.7 352.8 186.5 352.8 186.3 352.9L176.9 337.5V337.4L177.8 336.5V336.6L186.9 352.8Z" fill="#070707"/>
                </svg>
            </div>
            <div class="default-modal__illustration default-modal__illustration-mobile"><svg width="344" height="302" viewBox="0 0 344 302" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M151.825 301.788C231.372 301.788 295.858 237.237 295.858 157.609C295.858 77.9813 231.372 13.4303 151.825 13.4303C72.2787 13.4303 7.79333 77.9813 7.79333 157.609C7.79333 237.237 72.2787 301.788 151.825 301.788Z" fill="#051227"/>
                    <path d="M284.447 65.2553L283.684 66.0273L284.455 66.7915L285.219 66.0195L284.447 65.2553Z" fill="white"/>
                    <path d="M277.552 58.4594L276.788 59.2314L277.56 59.9956L278.323 59.2236L277.552 58.4594Z" fill="white"/>
                    <path d="M291.343 72.0511L290.58 72.8231L291.351 73.5873L292.115 72.8153L291.343 72.0511Z" fill="white"/>
                    <path d="M270.726 51.5945L269.962 52.3665L270.733 53.1307L271.497 52.3587L270.726 51.5945Z" fill="white"/>
                    <path d="M287.876 61.7689L287.113 62.5409L287.884 63.3051L288.648 62.5331L287.876 61.7689Z" fill="white"/>
                    <path d="M280.981 54.973L280.217 55.7451L280.989 56.5092L281.752 55.7372L280.981 54.973Z" fill="white"/>
                    <path d="M294.703 68.6348L293.939 69.4069L294.711 70.1711L295.474 69.399L294.703 68.6348Z" fill="white"/>
                    <path d="M274.085 48.1782L273.322 48.9502L274.093 49.7144L274.856 48.9424L274.085 48.1782Z" fill="white"/>
                    <path d="M291.236 58.3526L290.473 59.1246L291.244 59.8888L292.008 59.1168L291.236 58.3526Z" fill="white"/>
                    <path d="M284.34 51.5568L283.577 52.3289L284.348 53.0931L285.112 52.321L284.34 51.5568Z" fill="white"/>
                    <path d="M298.132 65.1484L297.368 65.9204L298.14 66.6846L298.903 65.9126L298.132 65.1484Z" fill="white"/>
                    <path d="M277.514 44.6917L276.751 45.4637L277.522 46.2279L278.286 45.4559L277.514 44.6917Z" fill="white"/>
                    <path d="M294.665 54.8662L293.902 55.6382L294.673 56.4024L295.436 55.6304L294.665 54.8662Z" fill="white"/>
                    <path d="M287.77 48.0712L287.006 48.8432L287.778 49.6074L288.541 48.8354L287.77 48.0712Z" fill="white"/>
                    <path d="M298.095 51.5194L297.331 52.2914L298.103 53.0556L298.866 52.2836L298.095 51.5194Z" fill="white"/>
                    <path d="M291.2 44.7245L290.436 45.4965L291.207 46.2607L291.971 45.4887L291.2 44.7245Z" fill="white"/>
                    <path d="M301.524 48.0329L300.761 48.8049L301.532 49.5691L302.295 48.7971L301.524 48.0329Z" fill="white"/>
                    <path d="M294.628 41.2372L293.865 42.0092L294.636 42.7734L295.4 42.0014L294.628 41.2372Z" fill="white"/>
                    <path d="M308.35 54.8989L307.587 55.671L308.358 56.4352L309.122 55.6631L308.35 54.8989Z" fill="white"/>
                    <path d="M287.733 34.4422L286.97 35.2142L287.741 35.9784L288.504 35.2064L287.733 34.4422Z" fill="white"/>
                    <path d="M304.884 44.6175L304.12 45.3895L304.892 46.1537L305.655 45.3817L304.884 44.6175Z" fill="white"/>
                    <path d="M297.988 37.8217L297.225 38.5937L297.996 39.3579L298.76 38.5859L297.988 37.8217Z" fill="white"/>
                    <path d="M311.779 51.4124L311.016 52.1844L311.787 52.9486L312.551 52.1766L311.779 51.4124Z" fill="white"/>
                    <path d="M291.162 30.9558L290.399 31.7278L291.17 32.492L291.933 31.72L291.162 30.9558Z" fill="white"/>
                    <path d="M308.313 41.1303L307.549 41.9023L308.32 42.6665L309.084 41.8945L308.313 41.1303Z" fill="white"/>
                    <path d="M301.417 34.3353L300.654 35.1074L301.425 35.8716L302.189 35.0995L301.417 34.3353Z" fill="white"/>
                    <path d="M315.139 47.9962L314.376 48.7682L315.147 49.5324L315.91 48.7604L315.139 47.9962Z" fill="white"/>
                    <path d="M294.522 27.5396L293.758 28.3116L294.529 29.0758L295.293 28.3038L294.522 27.5396Z" fill="white"/>
                    <path d="M287.93 68.6879L287.167 69.46L287.938 70.2242L288.702 69.4521L287.93 68.6879Z" fill="white"/>
                    <path d="M281.035 61.8921L280.271 62.6641L281.043 63.4283L281.806 62.6563L281.035 61.8921Z" fill="white"/>
                    <path d="M267.243 48.1619L266.479 48.9339L267.251 49.6981L268.014 48.9261L267.243 48.1619Z" fill="white"/>
                    <path d="M294.826 75.4837L294.063 76.2557L294.834 77.0199L295.597 76.2479L294.826 75.4837Z" fill="white"/>
                    <path d="M274.069 55.0278L273.306 55.7998L274.077 56.564L274.84 55.792L274.069 55.0278Z" fill="white"/>
                    <path d="M291.29 65.2717L290.527 66.0437L291.298 66.8079L292.061 66.0359L291.29 65.2717Z" fill="white"/>
                    <path d="M284.464 58.4058L283.7 59.1778L284.471 59.942L285.235 59.17L284.464 58.4058Z" fill="white"/>
                    <path d="M270.673 44.815L269.909 45.587L270.68 46.3512L271.444 45.5792L270.673 44.815Z" fill="white"/>
                    <path d="M298.186 72.0675L297.422 72.8395L298.194 73.6037L298.957 72.8317L298.186 72.0675Z" fill="white"/>
                    <path d="M277.568 51.6109L276.805 52.3829L277.576 53.1471L278.339 52.375L277.568 51.6109Z" fill="white"/>
                    <path d="M294.719 61.7852L293.956 62.5572L294.727 63.3214L295.49 62.5494L294.719 61.7852Z" fill="white"/>
                    <path d="M287.823 54.9895L287.06 55.7615L287.831 56.5257L288.595 55.7536L287.823 54.9895Z" fill="white"/>
                    <path d="M274.102 41.3286L273.338 42.1006L274.11 42.8648L274.873 42.0928L274.102 41.3286Z" fill="white"/>
                    <path d="M301.615 68.581L300.851 69.353L301.622 70.1172L302.386 69.3452L301.615 68.581Z" fill="white"/>
                    <path d="M280.928 48.1945L280.164 48.9666L280.936 49.7307L281.699 48.9587L280.928 48.1945Z" fill="white"/>
                    <path d="M291.253 51.503L290.489 52.275L291.26 53.0392L292.024 52.2672L291.253 51.503Z" fill="white"/>
                    <path d="M284.357 44.7081L283.594 45.4801L284.365 46.2443L285.128 45.4723L284.357 44.7081Z" fill="white"/>
                    <path d="M301.508 54.8825L300.745 55.6545L301.516 56.4187L302.279 55.6467L301.508 54.8825Z" fill="white"/>
                    <path d="M294.612 48.0868L293.849 48.8588L294.62 49.623L295.383 48.851L294.612 48.0868Z" fill="white"/>
                    <path d="M304.867 51.4663L304.104 52.2383L304.875 53.0025L305.639 52.2305L304.867 51.4663Z" fill="white"/>
                    <path d="M298.041 44.6004L297.278 45.3724L298.049 46.1366L298.812 45.3646L298.041 44.6004Z" fill="white"/>
                    <path d="M284.25 31.0097L283.487 31.7817L284.258 32.5459L285.021 31.7739L284.25 31.0097Z" fill="white"/>
                    <path d="M311.763 58.2621L310.999 59.0341L311.771 59.7983L312.534 59.0263L311.763 58.2621Z" fill="white"/>
                    <path d="M291.146 37.8055L290.382 38.5775L291.154 39.3417L291.917 38.5696L291.146 37.8055Z" fill="white"/>
                    <path d="M308.296 47.9799L307.533 48.7519L308.304 49.5161L309.068 48.7441L308.296 47.9799Z" fill="white"/>
                    <path d="M301.401 41.185L300.638 41.957L301.409 42.7212L302.172 41.9492L301.401 41.185Z" fill="white"/>
                    <path d="M287.679 27.5232L286.916 28.2952L287.687 29.0594L288.45 28.2874L287.679 27.5232Z" fill="white"/>
                    <path d="M315.192 54.7756L314.429 55.5476L315.2 56.3118L315.964 55.5398L315.192 54.7756Z" fill="white"/>
                    <path d="M294.575 34.319L293.811 35.091L294.583 35.8552L295.346 35.0832L294.575 34.319Z" fill="white"/>
                    <path d="M311.725 44.4935L310.962 45.2655L311.733 46.0297L312.497 45.2577L311.725 44.4935Z" fill="white"/>
                    <path d="M304.83 37.6976L304.066 38.4697L304.838 39.2339L305.601 38.4618L304.83 37.6976Z" fill="white"/>
                    <path d="M291.039 24.107L290.275 24.879L291.047 25.6432L291.81 24.8712L291.039 24.107Z" fill="white"/>
                    <path d="M318.622 51.4289L317.858 52.2009L318.63 52.9651L319.393 52.1931L318.622 51.4289Z" fill="white"/>
                    <path d="M297.934 30.9027L297.171 31.6747L297.942 32.4389L298.706 31.6669L297.934 30.9027Z" fill="white"/>
                    <path d="M134.759 260.904L0 141.809L43.7029 92.1362L131.405 169.657L296.647 0L344 46.2162L134.759 260.904Z" fill="#FF244C"/>
                    <path d="M43.2256 159.75L42.4979 160.556L43.3028 161.284L44.0306 160.478L43.2256 159.75Z" fill="white"/>
                    <path d="M36.0173 153.254L35.2896 154.06L36.0946 154.789L36.8223 153.983L36.0173 153.254Z" fill="white"/>
                    <path d="M50.4346 166.245L49.7068 167.051L50.5118 167.78L51.2395 166.974L50.4346 166.245Z" fill="white"/>
                    <path d="M28.8086 146.759L28.0809 147.565L28.8858 148.293L29.6136 147.488L28.8086 146.759Z" fill="white"/>
                    <path d="M46.4332 156.109L45.7054 156.915L46.5104 157.643L47.2382 156.837L46.4332 156.109Z" fill="white"/>
                    <path d="M39.2983 149.679L38.5706 150.485L39.3755 151.214L40.1032 150.408L39.2983 149.679Z" fill="white"/>
                    <path d="M53.6421 162.604L52.9144 163.41L53.7194 164.138L54.4471 163.332L53.6421 162.604Z" fill="white"/>
                    <path d="M32.0893 143.184L31.3616 143.99L32.1666 144.719L32.8943 143.913L32.0893 143.184Z" fill="white"/>
                    <path d="M49.7149 152.533L48.9872 153.339L49.7922 154.068L50.5199 153.262L49.7149 152.533Z" fill="white"/>
                    <path d="M42.5062 146.038L41.7784 146.844L42.5834 147.572L43.3111 146.767L42.5062 146.038Z" fill="white"/>
                    <path d="M56.8576 159.102L56.1299 159.908L56.9349 160.636L57.6626 159.83L56.8576 159.102Z" fill="white"/>
                    <path d="M35.2969 139.543L34.5692 140.349L35.3742 141.077L36.1019 140.271L35.2969 139.543Z" fill="white"/>
                    <path d="M52.9958 148.959L52.2681 149.764L53.0731 150.493L53.8008 149.687L52.9958 148.959Z" fill="white"/>
                    <path d="M45.7869 142.463L45.0591 143.269L45.8641 143.998L46.5918 143.192L45.7869 142.463Z" fill="white"/>
                    <path d="M56.1374 145.391L55.4097 146.196L56.2147 146.925L56.9424 146.119L56.1374 145.391Z" fill="white"/>
                    <path d="M48.9944 138.822L48.2667 139.628L49.0717 140.356L49.7994 139.551L48.9944 138.822Z" fill="white"/>
                    <path d="M59.4182 141.816L58.6904 142.621L59.4954 143.35L60.2231 142.544L59.4182 141.816Z" fill="white"/>
                    <path d="M52.2754 135.247L51.5477 136.053L52.3527 136.781L53.0804 135.976L52.2754 135.247Z" fill="white"/>
                    <path d="M66.6271 148.311L65.8994 149.117L66.7044 149.845L67.4321 149.039L66.6271 148.311Z" fill="white"/>
                    <path d="M45.0662 128.752L44.3384 129.558L45.1434 130.286L45.8711 129.48L45.0662 128.752Z" fill="white"/>
                    <path d="M62.6257 138.175L61.898 138.981L62.703 139.709L63.4307 138.903L62.6257 138.175Z" fill="white"/>
                    <path d="M55.5561 131.672L54.8284 132.478L55.6333 133.206L56.3611 132.401L55.5561 131.672Z" fill="white"/>
                    <path d="M69.8347 144.67L69.107 145.476L69.912 146.204L70.6397 145.398L69.8347 144.67Z" fill="white"/>
                    <path d="M48.3471 125.177L47.6194 125.983L48.4244 126.711L49.1521 125.906L48.3471 125.177Z" fill="white"/>
                    <path d="M65.9067 134.6L65.179 135.405L65.9839 136.134L66.7116 135.328L65.9067 134.6Z" fill="white"/>
                    <path d="M58.6977 128.104L57.97 128.91L58.775 129.639L59.5027 128.833L58.6977 128.104Z" fill="white"/>
                    <path d="M73.1154 141.095L72.3877 141.901L73.1927 142.629L73.9204 141.823L73.1154 141.095Z" fill="white"/>
                    <path d="M51.5547 121.536L50.827 122.342L51.6319 123.07L52.3597 122.264L51.5547 121.536Z" fill="white"/>
                    <path d="M46.7974 163.034L46.0697 163.84L46.8747 164.568L47.6024 163.762L46.7974 163.034Z" fill="white"/>
                    <path d="M39.5884 156.539L38.8607 157.345L39.6657 158.073L40.3934 157.267L39.5884 156.539Z" fill="white"/>
                    <path d="M25.2367 143.475L24.509 144.281L25.314 145.01L26.0417 144.204L25.2367 143.475Z" fill="white"/>
                    <path d="M53.9333 169.463L53.2056 170.269L54.0106 170.997L54.7383 170.192L53.9333 169.463Z" fill="white"/>
                    <path d="M32.4457 149.97L31.718 150.776L32.523 151.505L33.2507 150.699L32.4457 149.97Z" fill="white"/>
                    <path d="M50.0051 159.393L49.2773 160.199L50.0823 160.927L50.81 160.121L50.0051 159.393Z" fill="white"/>
                    <path d="M42.7961 152.898L42.0684 153.703L42.8733 154.432L43.6011 153.626L42.7961 152.898Z" fill="white"/>
                    <path d="M28.5174 139.9L27.7897 140.706L28.5947 141.434L29.3224 140.628L28.5174 139.9Z" fill="white"/>
                    <path d="M57.2141 165.888L56.4863 166.694L57.2913 167.422L58.019 166.617L57.2141 165.888Z" fill="white"/>
                    <path d="M35.7264 146.395L34.9987 147.201L35.8037 147.93L36.5314 147.124L35.7264 146.395Z" fill="white"/>
                    <path d="M53.286 155.818L52.5583 156.624L53.3633 157.352L54.091 156.546L53.286 155.818Z" fill="white"/>
                    <path d="M46.077 149.323L45.3493 150.128L46.1543 150.857L46.882 150.051L46.077 149.323Z" fill="white"/>
                    <path d="M31.7261 136.259L30.9984 137.064L31.8033 137.793L32.5311 136.987L31.7261 136.259Z" fill="white"/>
                    <path d="M60.4947 162.313L59.767 163.119L60.572 163.847L61.2997 163.042L60.4947 162.313Z" fill="white"/>
                    <path d="M38.934 142.754L38.2063 143.56L39.0113 144.289L39.739 143.483L38.934 142.754Z" fill="white"/>
                    <path d="M49.3577 145.748L48.63 146.554L49.435 147.282L50.1627 146.476L49.3577 145.748Z" fill="white"/>
                    <path d="M42.1487 139.253L41.421 140.058L42.226 140.787L42.9537 139.981L42.1487 139.253Z" fill="white"/>
                    <path d="M59.7743 148.602L59.0466 149.408L59.8516 150.136L60.5793 149.33L59.7743 148.602Z" fill="white"/>
                    <path d="M52.5663 142.106L51.8386 142.912L52.6436 143.641L53.3713 142.835L52.5663 142.106Z" fill="white"/>
                    <path d="M63.0552 145.027L62.3275 145.833L63.1325 146.561L63.8602 145.755L63.0552 145.027Z" fill="white"/>
                    <path d="M55.8473 138.531L55.1196 139.337L55.9246 140.066L56.6523 139.26L55.8473 138.531Z" fill="white"/>
                    <path d="M41.4293 125.541L40.7015 126.347L41.5065 127.075L42.2342 126.269L41.4293 125.541Z" fill="white"/>
                    <path d="M70.2643 151.522L69.5366 152.328L70.3415 153.056L71.0693 152.251L70.2643 151.522Z" fill="white"/>
                    <path d="M48.6383 132.036L47.9106 132.842L48.7156 133.57L49.4433 132.765L48.6383 132.036Z" fill="white"/>
                    <path d="M66.2638 141.385L65.5361 142.191L66.3411 142.92L67.0688 142.114L66.2638 141.385Z" fill="white"/>
                    <path d="M59.128 134.956L58.4003 135.762L59.2053 136.491L59.933 135.685L59.128 134.956Z" fill="white"/>
                    <path d="M44.7103 121.966L43.9825 122.772L44.7875 123.5L45.5152 122.694L44.7103 121.966Z" fill="white"/>
                    <path d="M73.4056 147.954L72.6779 148.76L73.4828 149.489L74.2106 148.683L73.4056 147.954Z" fill="white"/>
                    <path d="M51.9192 128.461L51.1915 129.267L51.9965 129.996L52.7242 129.19L51.9192 128.461Z" fill="white"/>
                    <path d="M69.5446 137.81L68.8168 138.616L69.6218 139.345L70.3495 138.539L69.5446 137.81Z" fill="white"/>
                    <path d="M62.3356 131.315L61.6078 132.121L62.4128 132.849L63.1405 132.044L62.3356 131.315Z" fill="white"/>
                    <path d="M47.991 118.391L47.2632 119.197L48.0682 119.925L48.7959 119.119L47.991 118.391Z" fill="white"/>
                    <path d="M76.6865 144.379L75.9588 145.185L76.7638 145.914L77.4915 145.108L76.6865 144.379Z" fill="white"/>
                    <path d="M55.1266 124.82L54.3989 125.626L55.2038 126.354L55.9316 125.548L55.1266 124.82Z" fill="white"/>
                    <path d="M278.802 41.7631L278.038 42.5352L278.81 43.2992L279.573 42.5271L278.802 41.7631Z" fill="white"/>
                    <path d="M285.592 34.86L284.828 35.6321L285.6 36.3961L286.363 35.624L285.592 34.86Z" fill="white"/>
                    <path d="M272.012 48.667L271.249 49.4391L272.02 50.2031L272.783 49.4309L272.012 48.667Z" fill="white"/>
                    <path d="M292.452 28.0257L291.689 28.7978L292.46 29.5618L293.223 28.7896L292.452 28.0257Z" fill="white"/>
                    <path d="M282.285 45.196L281.522 45.9681L282.293 46.7321L283.057 45.96L282.285 45.196Z" fill="white"/>
                    <path d="M289.075 38.2931L288.312 39.0652L289.083 39.8292L289.846 39.0571L289.075 38.2931Z" fill="white"/>
                    <path d="M275.425 52.0305L274.662 52.8026L275.433 53.5666L276.196 52.7945L275.425 52.0305Z" fill="white"/>
                    <path d="M295.865 31.3893L295.102 32.1614L295.873 32.9254L296.636 32.1533L295.865 31.3893Z" fill="white"/>
                    <path d="M285.699 48.5604L284.935 49.3325L285.707 50.0965L286.47 49.3244L285.699 48.5604Z" fill="white"/>
                    <path d="M292.488 41.6566L291.725 42.4288L292.497 43.1928L293.26 42.4206L292.488 41.6566Z" fill="white"/>
                    <path d="M278.909 55.4644L278.145 56.2365L278.917 57.0005L279.68 56.2284L278.909 55.4644Z" fill="white"/>
                    <path d="M299.348 34.8222L298.585 35.5943L299.357 36.3583L300.12 35.5861L299.348 34.8222Z" fill="white"/>
                    <path d="M289.112 52.0637L288.349 52.8359L289.121 53.5999L289.884 52.8277L289.112 52.0637Z" fill="white"/>
                    <path d="M295.903 45.1598L295.139 45.9319L295.911 46.6959L296.674 45.9238L295.903 45.1598Z" fill="white"/>
                    <path d="M292.526 55.4273L291.763 56.1994L292.534 56.9634L293.297 56.1912L292.526 55.4273Z" fill="white"/>
                    <path d="M299.316 48.5234L298.553 49.2955L299.324 50.0595L300.087 49.2874L299.316 48.5234Z" fill="white"/>
                    <path d="M296.009 58.8603L295.246 59.6324L296.017 60.3964L296.781 59.6242L296.009 58.8603Z" fill="white"/>
                    <path d="M302.799 51.9563L302.036 52.7285L302.807 53.4924L303.57 52.7203L302.799 51.9563Z" fill="white"/>
                    <path d="M289.149 65.6947L288.386 66.4668L289.158 67.2308L289.921 66.4587L289.149 65.6947Z" fill="white"/>
                    <path d="M309.589 45.0526L308.825 45.8247L309.597 46.5887L310.36 45.8166L309.589 45.0526Z" fill="white"/>
                    <path d="M299.423 62.2238L298.659 62.9959L299.431 63.7599L300.194 62.9878L299.423 62.2238Z" fill="white"/>
                    <path d="M306.212 55.3199L305.449 56.092L306.221 56.856L306.984 56.0838L306.212 55.3199Z" fill="white"/>
                    <path d="M292.633 69.1277L291.87 69.8998L292.641 70.6638L293.404 69.8917L292.633 69.1277Z" fill="white"/>
                    <path d="M313.072 48.4855L312.309 49.2576L313.08 50.0216L313.844 49.2495L313.072 48.4855Z" fill="white"/>
                    <path d="M302.906 65.6568L302.143 66.429L302.914 67.1929L303.677 66.4208L302.906 65.6568Z" fill="white"/>
                    <path d="M309.696 58.753L308.933 59.5251L309.704 60.2891L310.467 59.5169L309.696 58.753Z" fill="white"/>
                    <path d="M296.046 72.4913L295.283 73.2634L296.054 74.0273L296.817 73.2552L296.046 72.4913Z" fill="white"/>
                    <path d="M316.486 51.8491L315.722 52.6213L316.494 53.3853L317.257 52.6131L316.486 51.8491Z" fill="white"/>
                    <path d="M275.372 45.2505L274.609 46.0226L275.38 46.7866L276.143 46.0145L275.372 45.2505Z" fill="white"/>
                    <path d="M282.162 38.3466L281.399 39.1188L282.17 39.8828L282.933 39.1106L282.162 38.3466Z" fill="white"/>
                    <path d="M295.811 24.6085L295.048 25.3806L295.82 26.1446L296.583 25.3725L295.811 24.6085Z" fill="white"/>
                    <path d="M268.582 52.1544L267.819 52.9265L268.59 53.6905L269.354 52.9184L268.582 52.1544Z" fill="white"/>
                    <path d="M288.952 31.4428L288.189 32.2149L288.96 32.9789L289.723 32.2068L288.952 31.4428Z" fill="white"/>
                    <path d="M278.785 48.6141L278.022 49.3862L278.794 50.1502L279.557 49.378L278.785 48.6141Z" fill="white"/>
                    <path d="M285.646 41.7796L284.882 42.5518L285.654 43.3157L286.417 42.5436L285.646 41.7796Z" fill="white"/>
                    <path d="M299.225 27.9719L298.462 28.7441L299.233 29.5081L299.996 28.7359L299.225 27.9719Z" fill="white"/>
                    <path d="M271.996 55.518L271.232 56.2902L272.004 57.0541L272.767 56.282L271.996 55.518Z" fill="white"/>
                    <path d="M292.435 34.8758L291.672 35.6479L292.443 36.4119L293.206 35.6398L292.435 34.8758Z" fill="white"/>
                    <path d="M282.269 52.047L281.506 52.8192L282.277 53.5831L283.04 52.811L282.269 52.047Z" fill="white"/>
                    <path d="M289.059 45.1432L288.295 45.9153L289.067 46.6793L289.83 45.9072L289.059 45.1432Z" fill="white"/>
                    <path d="M302.709 31.4059L301.945 32.178L302.717 32.942L303.48 32.1699L302.709 31.4059Z" fill="white"/>
                    <path d="M275.479 58.951L274.716 59.7231L275.487 60.4871L276.25 59.715L275.479 58.951Z" fill="white"/>
                    <path d="M295.848 38.2393L295.085 39.0115L295.856 39.7755L296.62 39.0033L295.848 38.2393Z" fill="white"/>
                    <path d="M292.542 48.5762L291.779 49.3483L292.55 50.1123L293.313 49.3402L292.542 48.5762Z" fill="white"/>
                    <path d="M299.332 41.6724L298.568 42.4446L299.34 43.2086L300.103 42.4364L299.332 41.6724Z" fill="white"/>
                    <path d="M289.166 58.8437L288.402 59.6158L289.174 60.3798L289.937 59.6077L289.166 58.8437Z" fill="white"/>
                    <path d="M295.956 51.9406L295.192 52.7128L295.964 53.4767L296.727 52.7046L295.956 51.9406Z" fill="white"/>
                    <path d="M292.579 62.2072L291.816 62.9793L292.587 63.7433L293.35 62.9712L292.579 62.2072Z" fill="white"/>
                    <path d="M299.439 55.3736L298.676 56.1458L299.447 56.9097L300.21 56.1376L299.439 55.3736Z" fill="white"/>
                    <path d="M313.019 41.5659L312.255 42.338L313.027 43.102L313.79 42.3299L313.019 41.5659Z" fill="white"/>
                    <path d="M285.789 69.111L285.026 69.8831L285.797 70.6471L286.56 69.875L285.789 69.111Z" fill="white"/>
                    <path d="M306.229 48.4699L305.466 49.242L306.237 50.006L307 49.2339L306.229 48.4699Z" fill="white"/>
                    <path d="M296.063 65.6411L295.299 66.4132L296.071 67.1772L296.834 66.4051L296.063 65.6411Z" fill="white"/>
                    <path d="M302.852 58.7371L302.089 59.5093L302.861 60.2733L303.624 59.5011L302.852 58.7371Z" fill="white"/>
                    <path d="M316.502 44.9991L315.739 45.7712L316.51 46.5352L317.273 45.763L316.502 44.9991Z" fill="white"/>
                    <path d="M289.272 72.5441L288.509 73.3162L289.28 74.0802L290.044 73.3081L289.272 72.5441Z" fill="white"/>
                    <path d="M309.642 51.8334L308.879 52.6055L309.65 53.3695L310.413 52.5974L309.642 51.8334Z" fill="white"/>
                    <path d="M299.477 69.1443L298.713 69.9164L299.485 70.6804L300.248 69.9082L299.477 69.1443Z" fill="white"/>
                    <path d="M306.267 62.2405L305.503 63.0126L306.275 63.7766L307.038 63.0045L306.267 62.2405Z" fill="white"/>
                    <path d="M319.915 48.3625L319.152 49.1346L319.924 49.8986L320.687 49.1265L319.915 48.3625Z" fill="white"/>
                    <path d="M292.616 75.9778L291.853 76.7499L292.624 77.5139L293.388 76.7417L292.616 75.9778Z" fill="white"/>
                    <path d="M313.056 55.3365L312.293 56.1086L313.064 56.8726L313.827 56.1005L313.056 55.3365Z" fill="white"/>
                    <path d="M131.405 169.657L129.951 162.93L278.396 10.9615L296.647 0L131.405 169.657Z" fill="white"/>
                    <path opacity="0.2" d="M135.351 165.608L131.405 169.657L129.951 162.93L135.351 165.608Z" fill="#070707"/>
                    <path d="M43.7921 92.5195H49.8098L129.951 162.93L131.399 169.65L43.7921 92.5195Z" fill="white"/>
                </svg>
            </div>
            <h2 class="default-modal__title default-modal__title-illustration">Confirm  <span>your email</span> </h2>
            <p class="default-modal__subtitle">We’ve sent confirmation link to newemail@artu.studio</p>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-ban">
    <div class="default-modal__content default-modal__content-illustration"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <div class="default-modal__illustration default-modal__illustration-banned"><svg width="381" height="299" viewBox="0 0 381 299" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M190.1 292C270.734 292 336.1 226.634 336.1 146C336.1 65.3664 270.734 0 190.1 0C109.466 0 44.1 65.3664 44.1 146C44.1 226.634 109.466 292 190.1 292Z" fill="#051227"/>
                    <path d="M310.198 57.1231L309.615 57.8093L310.301 58.3917L310.884 57.7055L310.198 57.1231Z" fill="white"/>
                    <path d="M303.973 51.8216L303.391 52.5078L304.077 53.0901L304.659 52.404L303.973 51.8216Z" fill="white"/>
                    <path d="M316.422 62.4247L315.84 63.1109L316.526 63.6933L317.109 63.0071L316.422 62.4247Z" fill="white"/>
                    <path d="M297.749 46.5209L297.166 47.207L297.852 47.7894L298.435 47.1033L297.749 46.5209Z" fill="white"/>
                    <path d="M312.816 54.049L312.234 54.7352L312.92 55.3176L313.502 54.6314L312.816 54.049Z" fill="white"/>
                    <path d="M306.591 48.7473L306.009 49.4335L306.695 50.0159L307.278 49.3297L306.591 48.7473Z" fill="white"/>
                    <path d="M319.041 59.3506L318.458 60.0367L319.144 60.6191L319.727 59.9329L319.041 59.3506Z" fill="white"/>
                    <path d="M300.367 43.4466L299.785 44.1328L300.471 44.7151L301.053 44.029L300.367 43.4466Z" fill="white"/>
                    <path d="M315.499 50.8985L314.917 51.5847L315.603 52.167L316.185 51.4809L315.499 50.8985Z" fill="white"/>
                    <path d="M309.21 45.6732L308.627 46.3594L309.313 46.9418L309.896 46.2556L309.21 45.6732Z" fill="white"/>
                    <path d="M321.648 56.1354L321.065 56.8215L321.751 57.4039L322.334 56.7177L321.648 56.1354Z" fill="white"/>
                    <path d="M302.985 40.3723L302.403 41.0585L303.089 41.6409L303.672 40.9547L302.985 40.3723Z" fill="white"/>
                    <path d="M318.117 47.8243L317.535 48.5104L318.221 49.0928L318.804 48.4066L318.117 47.8243Z" fill="white"/>
                    <path d="M311.893 42.5234L311.311 43.2096L311.997 43.792L312.579 43.1058L311.893 42.5234Z" fill="white"/>
                    <path d="M320.736 44.7501L320.153 45.4363L320.839 46.0187L321.422 45.3325L320.736 44.7501Z" fill="white"/>
                    <path d="M314.511 39.4493L313.929 40.1354L314.615 40.7178L315.198 40.0316L314.511 39.4493Z" fill="white"/>
                    <path d="M323.343 41.5349L322.76 42.2211L323.446 42.8035L324.029 42.1173L323.343 41.5349Z" fill="white"/>
                    <path d="M317.194 36.2981L316.612 36.9843L317.298 37.5666L317.88 36.8805L317.194 36.2981Z" fill="white"/>
                    <path d="M329.567 46.8365L328.985 47.5226L329.671 48.105L330.253 47.4188L329.567 46.8365Z" fill="white"/>
                    <path d="M310.905 31.0735L310.323 31.7596L311.009 32.342L311.591 31.6558L310.905 31.0735Z" fill="white"/>
                    <path d="M325.961 38.4615L325.379 39.1476L326.065 39.73L326.647 39.0438L325.961 38.4615Z" fill="white"/>
                    <path d="M319.813 33.2245L319.23 33.9107L319.917 34.4931L320.499 33.8069L319.813 33.2245Z" fill="white"/>
                    <path d="M332.186 43.7622L331.603 44.4484L332.289 45.0308L332.872 44.3446L332.186 43.7622Z" fill="white"/>
                    <path d="M313.588 27.9231L313.006 28.6092L313.692 29.1916L314.274 28.5055L313.588 27.9231Z" fill="white"/>
                    <path d="M328.579 35.3865L327.997 36.0727L328.683 36.6551L329.265 35.9689L328.579 35.3865Z" fill="white"/>
                    <path d="M322.431 30.1504L321.849 30.8365L322.535 31.4189L323.117 30.7328L322.431 30.1504Z" fill="white"/>
                    <path d="M334.869 40.6118L334.286 41.298L334.972 41.8804L335.555 41.1942L334.869 40.6118Z" fill="white"/>
                    <path d="M316.206 24.8488L315.624 25.535L316.31 26.1174L316.893 25.4312L316.206 24.8488Z" fill="white"/>
                    <path d="M313.272 59.7416L312.69 60.4277L313.376 61.0101L313.958 60.324L313.272 59.7416Z" fill="white"/>
                    <path d="M307.047 54.44L306.465 55.1262L307.151 55.7086L307.733 55.0224L307.047 54.44Z" fill="white"/>
                    <path d="M294.674 43.9024L294.092 44.5886L294.778 45.171L295.36 44.4848L294.674 43.9024Z" fill="white"/>
                    <path d="M319.497 65.0431L318.914 65.7293L319.6 66.3117L320.183 65.6255L319.497 65.0431Z" fill="white"/>
                    <path d="M300.899 49.204L300.317 49.8901L301.003 50.4725L301.585 49.7864L300.899 49.204Z" fill="white"/>
                    <path d="M315.89 56.6674L315.308 57.3536L315.994 57.936L316.576 57.2498L315.89 56.6674Z" fill="white"/>
                    <path d="M309.666 51.3659L309.083 52.052L309.769 52.6344L310.352 51.9482L309.666 51.3659Z" fill="white"/>
                    <path d="M297.293 40.8282L296.71 41.5143L297.396 42.0967L297.979 41.4106L297.293 40.8282Z" fill="white"/>
                    <path d="M322.115 61.969L321.532 62.6551L322.219 63.2375L322.801 62.5514L322.115 61.969Z" fill="white"/>
                    <path d="M303.517 46.1298L302.935 46.816L303.621 47.3984L304.203 46.7122L303.517 46.1298Z" fill="white"/>
                    <path d="M318.573 53.5168L317.991 54.203L318.677 54.7854L319.26 54.0992L318.573 53.5168Z" fill="white"/>
                    <path d="M312.349 48.2154L311.766 48.9016L312.452 49.4839L313.035 48.7978L312.349 48.2154Z" fill="white"/>
                    <path d="M299.911 37.7539L299.329 38.4401L300.015 39.0225L300.597 38.3363L299.911 37.7539Z" fill="white"/>
                    <path d="M324.798 58.8185L324.216 59.5046L324.902 60.087L325.484 59.4009L324.798 58.8185Z" fill="white"/>
                    <path d="M306.136 43.0556L305.553 43.7417L306.24 44.3241L306.822 43.638L306.136 43.0556Z" fill="white"/>
                    <path d="M314.967 45.1411L314.385 45.8273L315.071 46.4097L315.653 45.7235L314.967 45.1411Z" fill="white"/>
                    <path d="M308.819 39.9051L308.236 40.5912L308.923 41.1736L309.505 40.4875L308.819 39.9051Z" fill="white"/>
                    <path d="M323.81 47.3684L323.228 48.0546L323.914 48.637L324.496 47.9508L323.81 47.3684Z" fill="white"/>
                    <path d="M317.585 42.0669L317.003 42.753L317.689 43.3354L318.272 42.6493L317.585 42.0669Z" fill="white"/>
                    <path d="M326.493 44.2181L325.911 44.9042L326.597 45.4866L327.179 44.8004L326.493 44.2181Z" fill="white"/>
                    <path d="M320.268 38.9165L319.686 39.6027L320.372 40.1851L320.954 39.4989L320.268 38.9165Z" fill="white"/>
                    <path d="M307.831 28.455L307.248 29.1412L307.935 29.7236L308.517 29.0374L307.831 28.455Z" fill="white"/>
                    <path d="M332.718 49.5196L332.135 50.2058L332.821 50.7882L333.404 50.102L332.718 49.5196Z" fill="white"/>
                    <path d="M314.044 33.6157L313.462 34.3019L314.148 34.8843L314.73 34.1981L314.044 33.6157Z" fill="white"/>
                    <path d="M329.111 41.1438L328.529 41.83L329.215 42.4123L329.798 41.7262L329.111 41.1438Z" fill="white"/>
                    <path d="M322.887 35.8431L322.305 36.5292L322.991 37.1116L323.573 36.4254L322.887 35.8431Z" fill="white"/>
                    <path d="M310.514 25.3046L309.932 25.9907L310.618 26.5731L311.2 25.887L310.514 25.3046Z" fill="white"/>
                    <path d="M335.336 46.4453L334.754 47.1315L335.44 47.7139L336.022 47.0277L335.336 46.4453Z" fill="white"/>
                    <path d="M316.662 30.5415L316.08 31.2277L316.766 31.8101L317.349 31.1239L316.662 30.5415Z" fill="white"/>
                    <path d="M331.794 37.9934L331.212 38.6796L331.898 39.262L332.481 38.5758L331.794 37.9934Z" fill="white"/>
                    <path d="M325.505 32.7681L324.923 33.4543L325.609 34.0366L326.191 33.3505L325.505 32.7681Z" fill="white"/>
                    <path d="M313.056 22.1657L312.474 22.8518L313.16 23.4342L313.742 22.7481L313.056 22.1657Z" fill="white"/>
                    <path d="M337.943 43.2302L337.36 43.9164L338.047 44.4988L338.629 43.8126L337.943 43.2302Z" fill="white"/>
                    <path d="M319.281 27.4673L318.698 28.1535L319.384 28.7359L319.967 28.0497L319.281 27.4673Z" fill="white"/>
                    <path d="M380.2 32.3H0V207.1H380.2V32.3Z" fill="#FF244C"/>
                    <path d="M221.9 188.4L94.1 298.6L116.3 188.4H135.5L123.4 248.5L193.1 188.4H221.9Z" fill="#FF244C"/>
                    <path d="M361.3 51.1V188.4H193.1L123.4 248.5L135.5 188.4H18.8V51.1H361.3Z" fill="white"/>
                    <path d="M62.8 137.5V100.9H88.7V107.8H70.6V115.5H88.3V122.4H70.6V137.6H62.8V137.5Z" fill="#051227"/>
                    <path d="M93.2 133.6C93.2 131.2 95.2 129.1 97.6 129.1C100 129.1 102.1 131.1 102.1 133.6C102.1 136 100.1 138 97.6 138C95.1 138 93.2 136 93.2 133.6ZM94.5 125.5L93.3 100.8H101.7L100.6 125.5H94.5Z" fill="#051227"/>
                    <path d="M107.2 133.6C107.2 131.2 109.2 129.1 111.6 129.1C114 129.1 116.1 131.1 116.1 133.6C116.1 136 114.1 138 111.6 138C109.1 138 107.2 136 107.2 133.6ZM108.6 125.5L107.4 100.8H115.8L114.7 125.5H108.6Z" fill="#051227"/>
                    <path d="M120.5 119.2C120.5 107.9 129 100.2 140 100.2C148.1 100.2 152.7 104.6 155.3 109.2L148.6 112.5C147.1 109.5 143.8 107.2 140 107.2C133.4 107.2 128.5 112.3 128.5 119.2C128.5 126.1 133.3 131.2 140 131.2C143.8 131.2 147.1 128.9 148.6 125.9L155.3 129.1C152.7 133.7 148 138.1 140 138.1C129.1 138.1 120.5 130.4 120.5 119.2Z" fill="#051227"/>
                    <path d="M181.8 137.5L170.7 122.8L167.8 126.2V137.5H160V100.9H167.8V117.3L180.8 100.9H190.4L175.9 118L191.4 137.5H181.8Z" fill="#051227"/>
                    <path d="M219.3 137.5V122.5L205.2 100.9H214.1L223.2 115.6L232.2 100.9H241.1L227.1 122.5V137.5H219.3Z" fill="#051227"/>
                    <path d="M240.5 119.2C240.5 108.2 248.6 100.2 259.6 100.2C270.7 100.2 278.8 108.1 278.8 119.2C278.8 130.3 270.7 138.2 259.6 138.2C248.6 138.1 240.5 130.2 240.5 119.2ZM270.8 119.2C270.8 112.3 266.4 107.2 259.6 107.2C252.8 107.2 248.5 112.4 248.5 119.2C248.5 126 252.8 131.2 259.6 131.2C266.4 131.2 270.8 126 270.8 119.2Z" fill="#051227"/>
                    <path d="M284.3 122.8V100.8H292.2V122.6C292.2 127.7 295.2 131.2 300.8 131.2C306.4 131.2 309.4 127.7 309.4 122.6V100.8H317.4V122.8C317.4 131.9 312 138.1 300.9 138.1C289.8 138.1 284.3 131.9 284.3 122.8Z" fill="#051227"/>
                </svg>
            </div>
            <h2 class="default-modal__title default-modal__title-banned">This<span>code </span>has been <span>banned</span>  </h2>
            <p class="default-modal__subtitle">This code has been compromised</p><a class="default-modal__border-link" href="#">Go fuck yourself</a>
        </div>
    </div>
</div>
<div class="default-modal default-modal-illustration modal-fail">
    <div class="default-modal__content default-modal__content-fail"><a class="default-modal__mobile-logo" href="#">
            <svg width="92" height="20">
                <use xlink:href="#icon-mobile_logo"></use>
            </svg></a>
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <div class="default-modal__inner">
            <h2 class="default-modal__title default-modal__title-illustration">Videohive <span>cant find </span>this <span>code</span>  </h2>
            <p class="default-modal__subtitle">You may have sealed or this code does not exist.</p><a class="default-modal__border-link" href="#">Help</a>
        </div>
    </div>
</div>
<?php endif;?>