<div class="section-decor section-decor-product"><img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor"></div>
<section class="download-hero <?= esc_attr($block['className'])?>">
    <div class="container">
        <div class="download-hero__subtitle"><img src="<?= get_theme_file_uri( '/img/home/adobe.svg' )?>" alt="adobe">
            <p><?= get_field('subtitle');?></p>
        </div>
        <h1 class="download-hero__title"><?= get_field('title');?></h1>
        <div class="download-hero__features"><?= get_field('features');?></div>
        <div class="download-hero__link-group">
            <a href="#" class="btn btn--red download-hero__btn-demo hero-2-content__video" type="button" data-href="#view-demo" data-iframe="7TcpM8e5ugc" data-nav="nav"><span class="btn__inner">
                  <svg width="15" height="16">
                    <use xlink:href="#icon-play"></use>
                  </svg> <?= get_field('button_text');?></span></a>
            <div class="download-hero__link-group-inner">
                <div class="download-hero__link-btns-title">Available for</div>
                <?php $mac_link = get_field('mac_link');?>
                <a class="btn btn--white ap dwl_link" download data-dwl="/downloaded/" href="<?= $mac_link['url']?>" target="<?= $mac_link['target']?>"><span class="btn__inner">
                    Download for MacOS<svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7057 2.08667C12.2579 0 14.4468 0 14.4468 0C14.4468 0 14.7652 1.96628 13.2131 3.85231C11.5415 5.85872 9.67098 5.53769 9.67098 5.53769C9.67098 5.53769 9.3128 3.93256 10.7057 2.08667Z"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.87006 6.90215C10.666 6.90215 12.1784 5.77856 14.1285 5.77856C17.4716 5.77856 18.7849 8.18626 18.7849 8.18626C18.7849 8.18626 16.198 9.51049 16.198 12.7207C16.198 16.3323 19.4217 17.6164 19.4217 17.6164C19.4217 17.6164 17.193 23.9566 14.1683 23.9566C12.7754 23.9566 11.7008 22.9936 10.2282 22.9936C8.7159 22.9936 7.24335 23.9566 6.28818 23.9566C3.50228 23.9968 0 17.9775 0 13.122C0 8.34677 2.9451 5.85882 5.731 5.85882C7.52194 5.81869 8.91489 6.90215 9.87006 6.90215Z"/>
</svg></span></a>
                <?php $win_link = get_field('win_link');?>
                <a class="btn btn--white dwl_link" download data-dwl="/downloaded/" href="<?= $win_link['url']?>" target="<?= $win_link['target']?>"><span class="btn__inner">
                    Download for Windows<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.99275 0H0V8.99275H8.99275V0Z"/>
<path d="M20.5377 0H11.5449V8.99275H20.5377V0Z"/>
<path d="M8.99275 11.8369H0V20.8297H8.99275V11.8369Z"/>
<path d="M20.5377 11.8369H11.5449V20.8297H20.5377V11.8369Z"/>
</svg></span></a>
            </div>
        </div>
    </div>
</section>