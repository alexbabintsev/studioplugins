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
                <input type="hidden" name="action" value="cp_change_email"/>
                <?php wp_nonce_field('cp_change_email')?>
                <div class="input-group">
                    <div class="input-group__label">New email</div>
                    <input type="email" name="email" required>
                    <div class="error"></div>
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
                <input type="hidden" name="action" value="cp_ver_password"/>
                <?php wp_nonce_field('cp_ver_password')?>
                <div class="input-group">
                    <div class="input-group__label">Password</div>
                    <input type="password" name="current_password">
                    <div class="error"></div>
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
                <input type="hidden" name="current_password" value=""/>
                <input type="hidden" name="action" value="cp_change_password"/>
                <?php wp_nonce_field('cp_change_password')?>
                <div class="input-group">
                    <div class="input-group__label">New password</div>
                    <input type="password" name="new_password">
                    <div class="error new_password"></div>
                </div>
                <div class="input-group">
                    <div class="input-group__label">Confirm new password</div>
                    <input type="password" name="confirm_new_password">
                    <div class="error confirm_new_password"></div>
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
                <input type="hidden" name="action" value="cp_change_name"/>
                <?php wp_nonce_field('cp_change_name')?>
                <div class="input-group">
                    <div class="input-group__label">Name</div>
                    <input type="text" name="name" required>
                    <div class="error"></div>
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
            <div class="default-modal__illustration">
                <img src="<?= get_theme_file_uri( '/img/modals/succact.svg' )?>" alt="">
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
            <div class="default-modal__illustration">
                <img src="<?= get_theme_file_uri( '/img/modals/succact.svg' )?>" alt="">
            </div>
            <h2 class="default-modal__title default-modal__title-illustration"><span>Email </span>successfully <span>changed!</span> </h2>
            <p class="default-modal__subtitle">Now use <span class="fn_email">newemail@artu.studio</span> in PremiereStudio and this site</p>
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
            <div class="default-modal__illustration default-modal__illustration-desctop">
                <img src="<?= get_theme_file_uri( '/img/modals/confirm.svg' )?>" alt="">
            </div>
            <div class="default-modal__illustration default-modal__illustration-mobile">
                <img src="<?= get_theme_file_uri( '/img/modals/succconfirm.svg' )?>" alt="">
            </div>
            <h2 class="default-modal__title default-modal__title-illustration">Confirm  <span>your email</span> </h2>
            <p class="default-modal__subtitle">We’ve sent confirmation link to <span class="fn_email">newemail@artu.studio</span></p>
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
            <div class="default-modal__illustration default-modal__illustration-banned">
                <img src="<?= get_theme_file_uri( '/img/modals/ban.svg' )?>" alt="">
            </div>
            <h2 class="default-modal__title default-modal__title-banned">This <span>code </span>has been <span>banned</span>  </h2>
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
    <div class="default-modal default-modal-illustration modal-success-name-change">
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
                <div class="default-modal__illustration">
                    <img src="<?= get_theme_file_uri( '/img/modals/succact.svg' )?>" alt="">
                </div>
                <h2 class="default-modal__title default-modal__title-illustration"><span>Name </span>successfully <span>changed!</span> </h2>
            </div>
        </div>
    </div>
<?php endif;?>
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
            <div class="default-modal__illustration">
                <img src="<?= get_theme_file_uri( '/img/modals/succact.svg' )?>" alt="">
            </div>
            <h2 class="default-modal__title default-modal__title-illustration"><span>Password </span>successfully <span>changed!</span> </h2>
            <p class="default-modal__subtitle">Now use your new password in PremiereStudio and on this site</p>
        </div>
    </div>
</div>
<div class="default-modal  modal-video">
    <div class="default-modal__content default-modal__content-video">
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>

        <video poster="<?= get_theme_file_uri( '/img/main-poster.png' )?>" loop="" playsinline="" muted="" data-keepplaying="" class="main-video-modal" data-ratio="1.7777777777778"  preload="metadata" data-src="/wp-content/themes/artuplugins/video/main_video.mp4">
            <source type="video/mp4" data-src="/wp-content/themes/artuplugins/video/main_video.mp4">
        </video>
    </div>
</div>
<div class="default-modal  modal-video-2">
    <div class="default-modal__content default-modal__content-video">
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <iframe width="100%" data-src="https://www.youtube.com/embed/gtFdrLLkiOE?enablejsapi=1&amp;wmode=transparent" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
</div>
<div class="default-modal  modal-video-t">
    <div class="default-modal__content default-modal__content-video">
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <iframe width="100%" data-src="https://www.youtube.com/embed/gtFdrLLkiOE?enablejsapi=1&amp;wmode=transparent" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
</div>
