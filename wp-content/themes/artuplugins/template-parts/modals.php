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
                <div class="input-group input-group-select">
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
            <div class="default-modal__illustration">
                <img src="img/modals/succact.svg" alt="">
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
                <img src="img/modals/succact.svg" alt="">
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
            <div class="default-modal__illustration">
                <img src="img/modals/succact.svg" alt="">
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
            <div class="default-modal__illustration default-modal__illustration-desctop">
                <img src="img/modals/confirm.svg" alt="">
            </div>
            <div class="default-modal__illustration default-modal__illustration-mobile">
                <img src="img/modals/succconfirm.svg" alt="">
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
            <div class="default-modal__illustration default-modal__illustration-banned">
                <img src="img/modals/ban.svg" alt="">
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
<div class="default-modal default-modal-illustration modal-video">
    <div class="default-modal__content default-modal__content-video">
        <div class="default-modal__close" data-modal-close>
            <svg width="100%" height="100%">
                <use xlink:href="#icon-close"></use>
            </svg>
        </div>
        <iframe class="youtube-player" width="100%" height="100%" data-src="https://www.youtube.com/embed/NM2wtte1JRE?enablejsapi=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

        </iframe>
    </div>
</div>