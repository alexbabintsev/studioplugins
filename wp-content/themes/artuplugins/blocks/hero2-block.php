<section class="hero-2" style="background: <?= hex2rgba(get_field('main_color'),0.9)?>;">
    <img class="hero-2__img" src="<?= get_theme_file_uri( '/img/tranim.jpg' )?>" alt="">
    <div class="container">
        <div class="hero-2-content">
            <div class="hero-2-content__left">
                <div class="hero-2-content__subtitle"> <img src="<?= get_field('subtitle_image')?>" alt="">
                    <p><?= get_field('subtitle')?></p>
                </div>
                <h1 class="hero-2-content__title"><?= get_field('title')?></h1>
                <p class="hero-2-content__text"><?= get_field('text')?></p>
                <div class="hero-2-content__links">
                    <?php $buy_link = get_field('buy_link');?>
                    <a class="btn"<?= get_field('modal')?' data-modal="'.get_field('modal').'"':''?>
                       onclick="$('.modal-buy .prod_id_input').val(<?= get_queried_object_id();?>)"
                       href="<?= $buy_link['url']?>" target="<?= $buy_link['target']?>"><?= $buy_link['title']?></a>
                    <a class="hero-2-content__video" data-nav='nav' href="#" data-href="#view-demo" data-iframe="<?= esc_attr(get_field('video_link'))?>">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2686 31.3338V18.5713C19.2686 17.7993 20.1063 17.3184 20.7729 17.7079L32.4256 24.5145C33.1081 24.9132 33.0801 25.9087 32.3763 26.2684L20.7237 32.2242C20.0583 32.5643 19.2686 32.081 19.2686 31.3338Z" fill="white"/>
                            <circle cx="25" cy="25" r="24" stroke="white" stroke-width="2"/>
                        </svg>
                        <p>watch demo</p>
                    </a>
                </div>
            </div>
            <div class="hero-2-content__right"><img src="<?= get_field('main_image')?>" alt=""></div>
        </div>
    </div>
</section>