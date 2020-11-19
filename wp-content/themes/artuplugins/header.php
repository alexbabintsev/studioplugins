<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_theme_file_uri( '/favicon/apple-touch-icon.png' )?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_theme_file_uri( '/favicon/favicon-32x32.png' )?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_theme_file_uri( '/favicon/favicon-16x16.png' )?>">
    <link rel="manifest" href="<?= get_theme_file_uri( '/favicon/site.webmanifest' )?>">
    <link rel="mask-icon" href="<?= get_theme_file_uri( '/favicon/safari-pinned-tab.svg' )?>" color="#5bbad5">
    <link rel="shortcut icon" href="<?= get_theme_file_uri( '/favicon/favicon.ico' )?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= get_theme_file_uri( '/favicon/browserconfig.xml' )?>">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(67870531, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/67870531" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B50G2N0PKF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B50G2N0PKF');
    </script>
</head>
<body class="<?=is_front_page()?'body-home-page':''?> <?=is_singular('pl_product')?'is_pl_product '.get_field('body_css',get_queried_object_id()):''?> <?= is_page()?get_field('body_html_class',get_queried_object_id()):''?>">
<div class="wrapper">
    <header class="header">
        <div class="container header__container">
            <div class="header__left">
                <a class="header__logo" href="<?= home_url( '/' ) ?>">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else:?>
                    <svg class="header__logo-svg" width="143" height="32" viewBox="0 0 143 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="header__logo-path1" d="M27.3715 9.16765C27.5711 9.37028 27.6885 9.64193 27.7005 9.92863C27.7124 10.2153 27.6179 10.4961 27.4359 10.7152C27.4063 10.7517 27.3747 10.7882 27.3441 10.8225C27.166 11.0307 27.0121 11.2099 27.0121 11.3848C27.0121 11.6188 27.2914 11.7937 27.6625 11.7937H30.8155C30.9081 11.794 30.9969 11.8317 31.0623 11.8985C31.1277 11.9653 31.1644 12.0557 31.1644 12.15V15.3599C31.1644 15.7141 31.3173 15.9856 31.5249 16.0178C31.539 16.0189 31.5531 16.0189 31.5671 16.0178C31.6363 16.0153 31.7037 15.995 31.7632 15.9588C31.891 15.8788 32.0104 15.7857 32.1195 15.6808C32.1543 15.6497 32.1901 15.6175 32.2249 15.5874C32.2597 15.5574 32.2744 15.5467 32.2997 15.5273L32.3155 15.5177C32.3366 15.5027 32.3588 15.4887 32.3809 15.4748L32.3988 15.4651C32.4206 15.4522 32.4427 15.4404 32.4652 15.4297L32.4831 15.4211L32.538 15.3975C32.8132 15.3122 33.1074 15.3144 33.3813 15.4039L33.395 15.4104C33.4203 15.4211 33.4456 15.4329 33.4698 15.4458L33.4983 15.4619L33.5626 15.5016L33.5826 15.5145C33.6415 15.5554 33.6965 15.6018 33.7471 15.6529C33.7734 15.6797 33.7977 15.7076 33.8219 15.7366C33.8669 15.7923 33.9064 15.8523 33.94 15.9158L33.9505 15.9362C33.9621 15.9598 33.9727 15.9824 33.9832 16.007C33.9938 16.0317 33.9906 16.0242 33.9948 16.0339C34.0069 16.0641 34.0175 16.0949 34.0264 16.1262V16.1444C34.0338 16.1702 34.0401 16.197 34.0454 16.2228C34.0507 16.2485 34.0507 16.2464 34.0528 16.2582L34.0623 16.3269V16.3601C34.0623 16.3945 34.0675 16.4277 34.0675 16.4674C34.0677 16.6856 34.0066 16.8993 33.8914 17.0832C33.7762 17.2672 33.6117 17.4138 33.4173 17.5057C33.223 17.5977 33.0069 17.6311 32.7945 17.6021C32.5821 17.5731 32.3822 17.4829 32.2186 17.3421L32.1131 17.2498C32.0625 17.2036 32.013 17.1607 31.9645 17.1199C31.8211 16.9997 31.6894 16.9117 31.5608 16.9117C31.5196 16.9124 31.479 16.9215 31.4413 16.9385C31.4036 16.9554 31.3697 16.9799 31.3415 17.0105C31.2127 17.1676 31.1472 17.3685 31.1581 17.5728V20.7827C31.1559 20.8763 31.1185 20.9656 31.0536 21.0319C30.9886 21.0982 30.9011 21.1366 30.8091 21.139H27.6625C27.462 21.1278 27.2647 21.1941 27.1101 21.3247C27.0798 21.3532 27.0554 21.3877 27.0386 21.426C27.0217 21.4644 27.0127 21.5059 27.0121 21.5479C27.0121 21.7228 27.166 21.9021 27.3441 22.1102L27.4359 22.2176C27.6072 22.4241 27.7012 22.6856 27.7015 22.9559C27.7007 23.2497 27.5889 23.532 27.3894 23.7443C27.1898 23.9565 26.9178 24.0826 26.6295 24.0964C26.3412 24.1102 26.0587 24.0106 25.8405 23.8183C25.6223 23.626 25.4851 23.3557 25.4572 23.0632C25.4553 23.0275 25.4553 22.9917 25.4572 22.9559C25.4571 22.6857 25.5508 22.4242 25.7218 22.2176L25.8146 22.1102C25.9917 21.9021 26.1456 21.7228 26.1456 21.5479C26.1471 21.5329 26.1471 21.5178 26.1456 21.5028C26.1461 21.4978 26.1461 21.4928 26.1456 21.4878C26.1436 21.4784 26.1411 21.4691 26.1382 21.4599C26.1382 21.4524 26.1382 21.4459 26.1308 21.4395C26.1234 21.4331 26.1255 21.4256 26.1224 21.4191C26.1192 21.4127 26.1129 21.4019 26.1076 21.3934L26.1013 21.3826C26.0942 21.3718 26.0864 21.3614 26.0781 21.3515C26.0355 21.3025 25.984 21.2624 25.9263 21.2335L25.9042 21.2249C25.8873 21.2163 25.8683 21.2088 25.8493 21.2013L25.8262 21.1916C25.7987 21.183 25.7692 21.1744 25.7397 21.168H25.7239C25.6923 21.1616 25.6596 21.1562 25.6259 21.1519H25.6122C25.5774 21.1519 25.5426 21.1519 25.5067 21.1519H22.338C22.2451 21.1519 22.1561 21.1144 22.0905 21.0475C22.0248 20.9807 21.988 20.8901 21.988 20.7956V17.5718C21.98 17.4486 22.0134 17.3263 22.0829 17.2251C22.0881 17.2197 22.0923 17.2176 22.0923 17.2155C22.1577 17.224 22.338 17.3829 22.4455 17.4784L22.5509 17.575C22.7584 17.7536 23.0118 17.8681 23.2811 17.9049C23.5504 17.9418 23.8245 17.8995 24.071 17.783C24.3175 17.6666 24.5261 17.4808 24.6723 17.2476C24.8185 17.0144 24.8962 16.7436 24.8962 16.4669C24.8962 16.1903 24.8185 15.9194 24.6723 15.6862C24.5261 15.453 24.3175 15.2672 24.071 15.1508C23.8245 15.0343 23.5504 14.992 23.2811 15.0289C23.0118 15.0658 22.7584 15.1802 22.5509 15.3588L22.4455 15.4544C22.3401 15.552 22.1535 15.7141 22.0955 15.7184C22.0649 15.7055 21.9901 15.581 21.9901 15.361V12.1511C21.9922 12.0573 22.0298 11.9679 22.095 11.9016C22.1601 11.8352 22.2479 11.797 22.3401 11.7948H25.493C25.6936 11.8061 25.8909 11.7398 26.0454 11.6091C26.0754 11.5804 26.0995 11.5459 26.1161 11.5075C26.1328 11.4692 26.1417 11.4278 26.1424 11.3859C26.1424 11.211 25.9885 11.0318 25.8103 10.8236L25.7186 10.7163C25.533 10.4904 25.4399 10.2003 25.4589 9.90639C25.4778 9.61247 25.6073 9.33729 25.8204 9.13804C26.0335 8.9388 26.3138 8.83081 26.6031 8.83652C26.8923 8.84223 27.1683 8.96121 27.3737 9.16872L27.3715 9.16765Z" fill="#F732A2"/>
                        <path class="header__logo-path2" d="M20.1706 5.84843H15.0115C14.6321 5.84843 14.2947 5.73467 14.1071 5.54365C14.0578 5.49686 14.0183 5.44043 13.9909 5.37773C13.9636 5.31503 13.949 5.24736 13.9479 5.17876C13.9479 4.8933 14.1998 4.59924 14.4908 4.25904L14.6415 4.0809C14.8681 3.80787 15.0133 3.47459 15.06 3.12035C15.1067 2.7661 15.053 2.40564 14.9051 2.08145C14.7573 1.75727 14.5215 1.48285 14.2256 1.29056C13.9296 1.09826 13.5859 0.996094 13.2348 0.996094C12.8837 0.996094 12.5399 1.09826 12.244 1.29056C11.948 1.48285 11.7122 1.75727 11.5644 2.08145C11.4166 2.40564 11.3628 2.7661 11.4095 3.12035C11.4562 3.47459 11.6014 3.80787 11.828 4.0809L11.9787 4.25904C12.2697 4.59924 12.5206 4.8933 12.5206 5.17876C12.5206 5.38696 12.3846 5.57584 12.1464 5.69818C11.9307 5.80095 11.695 5.85233 11.4569 5.84843H6.2979C6.14609 5.84843 6.0005 5.90983 5.89315 6.01911C5.7858 6.1284 5.7255 6.27662 5.7255 6.43117V11.6898C5.72908 11.9296 5.68124 12.1673 5.58529 12.3863C5.42717 12.7222 5.20369 12.7715 5.08562 12.7715C4.81787 12.7715 4.54168 12.5247 4.22122 12.235L4.0262 12.0622C3.75801 11.8315 3.43064 11.6837 3.08268 11.6361C2.73471 11.5886 2.38065 11.6433 2.06221 11.7938C1.74377 11.9443 1.47422 12.1844 1.28534 12.4856C1.09645 12.7869 0.996094 13.1369 0.996094 13.4943C0.996094 13.8518 1.09645 14.2017 1.28534 14.503C1.47422 14.8043 1.74377 15.0443 2.06221 15.1949C2.38065 15.3454 2.73471 15.4001 3.08268 15.3525C3.43064 15.305 3.75801 15.1572 4.0262 14.9265L4.22122 14.7537C4.53746 14.4682 4.81787 14.2171 5.08562 14.2171C5.15 14.219 5.21337 14.2339 5.27202 14.2609C5.33067 14.288 5.38342 14.3268 5.42717 14.3749C5.61165 14.5627 5.72233 14.9115 5.72233 15.3021V20.5553C5.72583 20.709 5.7874 20.8553 5.89423 20.9638C6.00105 21.0724 6.14489 21.1348 6.29579 21.1381H11.4569C11.8101 21.1381 12.0104 21.0093 12.0315 20.9578C12.0251 20.8634 11.7637 20.5575 11.6098 20.3761C11.5581 20.315 11.5044 20.2538 11.4548 20.1926C11.3001 20.0057 11.1742 19.7958 11.0817 19.5702C10.8845 19.0872 10.8845 18.2394 11.0817 17.7554C11.2208 17.4131 11.4367 17.1086 11.7122 16.8664C11.9876 16.6243 12.3149 16.4511 12.6678 16.3608C13.0208 16.2704 13.3896 16.2655 13.7448 16.3463C14.0999 16.4271 14.4316 16.5914 14.7132 16.826C14.7723 16.8754 14.8302 16.9334 14.885 16.9849C15.2987 17.4048 15.5421 17.9678 15.5671 18.5619C15.5921 19.1561 15.3968 19.7382 15.02 20.1926C14.9694 20.2538 14.9146 20.315 14.865 20.3761C14.7111 20.5553 14.455 20.8548 14.4434 20.9642C14.4434 20.9642 14.4497 20.9707 14.4581 20.9803C14.533 21.0565 14.7396 21.1381 15.0158 21.1381H20.1811C20.2563 21.1381 20.3307 21.123 20.4002 21.0937C20.4696 21.0644 20.5327 21.0215 20.5859 20.9674C20.639 20.9133 20.6812 20.8491 20.71 20.7784C20.7387 20.7077 20.7535 20.6319 20.7535 20.5553V6.43117C20.75 6.2759 20.6871 6.12817 20.5782 6.01936C20.4694 5.91054 20.3231 5.84923 20.1706 5.84843Z" fill="#FFD81A"/>
                        <path class="header__logo-path3" d="M22.4151 24.9168C22.6774 24.9167 22.9313 25.011 23.1319 25.1829L23.2173 25.258C23.3027 25.3342 23.445 25.4609 23.4946 25.463C23.5549 25.3841 23.5832 25.2846 23.5736 25.1851V22.6781C23.572 22.6051 23.5429 22.5355 23.4923 22.4837C23.4416 22.432 23.3734 22.4021 23.3017 22.4001H16.6911C16.6188 22.4001 16.5495 22.4293 16.4984 22.4812C16.4472 22.5331 16.4183 22.6035 16.418 22.677V25.1711C16.4114 25.2672 16.4375 25.3627 16.4918 25.4415C16.4945 25.4447 16.4977 25.4472 16.5013 25.4491C16.6019 25.395 16.6939 25.3259 16.7743 25.2441L16.8597 25.169C17.0214 25.0297 17.2188 24.9405 17.4287 24.9118C17.6386 24.8831 17.8521 24.9161 18.0442 25.0069C18.2362 25.0977 18.3988 25.2426 18.5126 25.4244C18.6264 25.6062 18.6868 25.8173 18.6866 26.0329V26.0415C18.6865 26.2569 18.6261 26.4679 18.5122 26.6496C18.3984 26.8313 18.236 26.9761 18.044 27.0669C17.8521 27.1578 17.6387 27.191 17.4289 27.1625C17.2191 27.1341 17.0216 27.0453 16.8597 26.9064L16.7743 26.8313C16.6889 26.7551 16.5466 26.6285 16.4971 26.6263C16.4363 26.705 16.4079 26.8047 16.418 26.9043V29.407C16.4196 29.4802 16.4489 29.5499 16.4998 29.6017C16.5506 29.6535 16.6191 29.6833 16.6911 29.6849H19.1493C19.3059 29.6762 19.4598 29.7279 19.5805 29.8298C19.6039 29.8522 19.6227 29.8791 19.6357 29.9089C19.6488 29.9388 19.6558 29.971 19.6564 30.0037C19.6564 30.1399 19.5362 30.2795 19.3971 30.4426L19.3254 30.5263C19.1837 30.6974 19.1102 30.9164 19.1196 31.14C19.129 31.3636 19.2205 31.5755 19.376 31.7336C19.4987 31.8584 19.655 31.9434 19.8252 31.9777C19.9953 32.0121 20.1716 31.9943 20.3319 31.9267C20.4921 31.859 20.629 31.7445 20.7253 31.5976C20.8216 31.4508 20.873 31.2781 20.8729 31.1015C20.8713 30.8905 20.7967 30.6868 20.6621 30.5263L20.5904 30.4426C20.4512 30.2795 20.3321 30.1399 20.3321 30.0037C20.3358 29.9494 20.3544 29.8973 20.386 29.8535C20.4175 29.8096 20.4606 29.7757 20.5103 29.7558C20.6128 29.707 20.725 29.6828 20.8381 29.6849H23.2974C23.3697 29.6846 23.4389 29.6552 23.4898 29.6031C23.5408 29.551 23.5694 29.4805 23.5694 29.407V26.9097C23.5762 26.8135 23.5501 26.718 23.4956 26.6392L23.4861 26.6306C23.3853 26.6847 23.2933 26.7542 23.2131 26.8367L23.1277 26.9118C22.9912 27.0293 22.8288 27.1115 22.6543 27.1515C22.4799 27.1914 22.2985 27.1879 22.1257 27.1412C21.9529 27.0946 21.7937 27.0062 21.6616 26.8835C21.5295 26.7608 21.4285 26.6074 21.3671 26.4365C21.3056 26.2655 21.2856 26.082 21.3088 25.9015C21.3319 25.721 21.3975 25.5489 21.5 25.3997C21.6024 25.2505 21.7388 25.1287 21.8973 25.0446C22.0559 24.9606 22.2321 24.9167 22.4109 24.9168H22.4151Z" fill="#8572B3"/>
                        <path class="header__logo-letter" d="M141.773 14.7655C141.53 14.7657 141.292 14.6926 141.09 14.5553C140.888 14.418 140.73 14.2227 140.637 13.9942C140.544 13.7657 140.52 13.5142 140.567 13.2716C140.614 13.029 140.731 12.8061 140.903 12.6312C141.075 12.4563 141.294 12.3372 141.532 12.289C141.771 12.2408 142.018 12.2656 142.242 12.3604C142.467 12.4552 142.658 12.6156 142.793 12.8213C142.928 13.0271 143 13.269 143 13.5163C142.999 13.8475 142.87 14.1649 142.64 14.399C142.41 14.6332 142.098 14.765 141.773 14.7655ZM141.773 12.4957C141.574 12.4955 141.38 12.5552 141.215 12.6672C141.05 12.7792 140.922 12.9386 140.846 13.125C140.77 13.3115 140.75 13.5167 140.788 13.7148C140.827 13.9128 140.922 14.0948 141.062 14.2376C141.202 14.3805 141.381 14.4778 141.576 14.5173C141.77 14.5567 141.972 14.5366 142.155 14.4594C142.338 14.3821 142.495 14.2513 142.605 14.0835C142.715 13.9156 142.774 13.7182 142.774 13.5163C142.774 13.246 142.668 12.9869 142.48 12.7957C142.293 12.6044 142.038 12.4966 141.773 12.4957Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M142.046 12.94C142.089 12.9586 142.128 12.9877 142.158 13.0247C142.183 13.0571 142.203 13.0933 142.218 13.1321C142.233 13.1728 142.241 13.2161 142.24 13.2598C142.24 13.3193 142.225 13.3779 142.198 13.4304C142.167 13.4874 142.116 13.5298 142.055 13.5485C142.104 13.5659 142.146 13.6 142.172 13.645C142.199 13.7041 142.211 13.769 142.207 13.8339V13.9155C142.206 13.9535 142.208 13.9916 142.213 14.0292C142.216 14.0434 142.221 14.0568 142.229 14.0687C142.237 14.0805 142.248 14.0905 142.26 14.0979V14.129H141.985C141.977 14.1011 141.971 14.0797 141.968 14.0636C141.962 14.0282 141.958 13.9923 141.957 13.9563V13.8489C141.963 13.7942 141.949 13.7393 141.917 13.6944C141.877 13.6638 141.826 13.65 141.776 13.6558H141.533V14.1323H141.289V12.9121H141.859C141.923 12.9099 141.986 12.9193 142.046 12.94ZM141.532 13.1203V13.4422H141.799C141.84 13.4442 141.881 13.4373 141.919 13.4218C141.943 13.4091 141.963 13.3893 141.976 13.3649C141.988 13.3406 141.993 13.3129 141.99 13.2855C141.993 13.2566 141.989 13.2273 141.977 13.201C141.965 13.1746 141.945 13.1522 141.922 13.1363C141.885 13.1205 141.846 13.1135 141.807 13.116L141.532 13.1203Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M47.5356 19.7872C46.4481 19.5858 45.3798 19.2889 44.3426 18.8996C43.4415 18.5677 42.5971 18.0941 41.84 17.4959C41.1581 16.9537 40.598 16.269 40.1977 15.488C39.8048 14.7189 39.6084 13.8246 39.6084 12.805C39.5951 11.8253 39.8119 10.8565 40.2409 9.97933C40.6573 9.13928 41.2339 8.39211 41.937 7.78145C42.666 7.15361 43.5026 6.66826 44.4048 6.34982C45.3455 6.01085 46.3364 5.83914 47.3343 5.8422C48.0445 5.84185 48.7528 5.9163 49.4479 6.06435C50.1263 6.206 50.7866 6.426 51.416 6.72007C52.0238 7.00415 52.5912 7.37056 53.1026 7.80935C53.6007 8.23402 54.0239 8.74214 54.3539 9.31181C54.4623 9.48554 54.5297 9.6824 54.5511 9.88704C54.5692 10.0788 54.5567 10.2724 54.5142 10.4601C54.4722 10.644 54.4051 10.821 54.3149 10.986C54.2327 11.1412 54.1259 11.2815 53.9987 11.4013C53.8576 11.543 53.6912 11.656 53.5085 11.734C53.313 11.8211 53.1046 11.8741 52.8918 11.8907C52.6665 11.9088 52.4399 11.8904 52.2203 11.8359C51.9809 11.7756 51.7538 11.6724 51.5499 11.5312C51.2231 11.245 50.9146 10.9985 50.6243 10.7917C50.3398 10.586 50.0357 10.4099 49.7167 10.2659C49.3887 10.1198 49.0447 10.0142 48.6921 9.95143C48.2696 9.87965 47.8417 9.84589 47.4134 9.85055C46.8985 9.84655 46.3856 9.9148 45.8891 10.0534C45.4493 10.1735 45.0346 10.3738 44.6652 10.6447C44.3314 10.8896 44.0529 11.2043 43.8482 11.5676C43.6465 11.9342 43.5432 12.3484 43.5488 12.7685C43.5488 13.2858 43.682 13.7104 43.9484 14.0424C44.2508 14.4034 44.6291 14.6906 45.0552 14.8827C45.5872 15.1319 46.1433 15.324 46.7145 15.4558C47.347 15.6096 48.0336 15.7667 48.7743 15.9269C49.6159 16.1471 50.4429 16.4213 51.2505 16.7479C52.0223 17.0582 52.744 17.4848 53.3915 18.0132C54.0201 18.5302 54.536 19.175 54.9063 19.9063C55.2865 20.6525 55.4769 21.5422 55.4777 22.5753C55.4864 23.5724 55.27 24.5583 54.8452 25.4568C54.4245 26.3391 53.8354 27.1271 53.1121 27.7749C52.3513 28.4516 51.4709 28.9746 50.5179 29.316C49.4857 29.6913 48.3966 29.8784 47.3006 29.8687C46.4099 29.8732 45.523 29.7518 44.6652 29.5081C43.8625 29.2824 43.0913 28.9535 42.3703 28.5293C41.6989 28.137 41.0865 27.6483 40.5519 27.0784C40.0558 26.5541 39.6455 25.9523 39.3364 25.2958C39.1897 25.0154 39.1 24.7077 39.0729 24.3911C39.0519 24.1282 39.0861 23.8637 39.173 23.6152C39.2551 23.3858 39.3813 23.1753 39.5441 22.996C39.7037 22.8224 39.8908 22.6773 40.0975 22.5667C40.5944 22.2963 41.0572 22.2376 41.4858 22.3907C41.9145 22.5438 42.3531 22.9166 42.8014 23.509C43.2907 24.2436 43.9514 24.8431 44.7242 25.254C45.4973 25.6661 46.4042 25.8721 47.445 25.8721C47.9506 25.873 48.4541 25.8047 48.9419 25.6693C49.4097 25.5438 49.8541 25.3412 50.2575 25.0694C50.6321 24.8179 50.9503 24.4888 51.1915 24.1035C51.4309 23.7101 51.5539 23.2548 51.5457 22.7921C51.5457 22.2512 51.4248 21.8112 51.183 21.4721C50.9367 21.1294 50.6169 20.8482 50.248 20.65C49.8424 20.4258 49.4111 20.2535 48.964 20.137C48.484 20.0147 48.0079 19.8981 47.5356 19.7872Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M62.1756 12.4724H68.489C68.7518 12.4719 69.0116 12.5286 69.2511 12.6387C69.7285 12.8546 70.1101 13.2431 70.3221 13.7291C70.4304 13.9725 70.4861 14.2367 70.4855 14.5039C70.487 14.7679 70.4342 15.0293 70.3306 15.2713C70.2321 15.5068 70.0888 15.7202 69.9089 15.8991C69.7256 16.0803 69.5112 16.2258 69.2764 16.3284C69.0295 16.4337 68.7641 16.487 68.4963 16.485H62.1756V21.1577C62.1717 21.7899 62.2985 22.4159 62.5477 22.995C62.9173 23.8534 63.5258 24.5828 64.298 25.0932C65.0702 25.6036 65.9723 25.8725 66.893 25.8668C67.4406 25.8722 67.9854 25.7881 68.5069 25.6178C69.0172 25.4435 69.4867 25.1636 69.8857 24.7958C70.0099 24.6813 70.1401 24.5739 70.2758 24.4738C70.4128 24.3762 70.5625 24.2986 70.7206 24.2431C71.0241 24.1316 71.3497 24.0966 71.6694 24.1411C72.0185 24.1963 72.3421 24.361 72.5949 24.6123C72.8035 24.8078 72.9623 25.0519 73.0577 25.3238C73.1473 25.5906 73.1831 25.8731 73.1631 26.1544C73.1442 26.4454 73.0728 26.7302 72.9523 26.9947C72.831 27.2667 72.6584 27.5118 72.4442 27.7159C71.7275 28.4219 70.8756 28.9699 69.9416 29.3257C68.9663 29.6939 67.9332 29.878 66.893 29.8687C65.7372 29.8774 64.592 29.6448 63.5281 29.1851C62.5044 28.7453 61.5717 28.1124 60.7789 27.3199C59.9879 26.5248 59.3564 25.5808 58.9193 24.5404C58.4631 23.4588 58.232 22.2928 58.2405 21.1158V9.26359C58.2375 8.99571 58.287 8.72991 58.3861 8.48173C58.4852 8.23355 58.6319 8.00795 58.8175 7.81812C59.0032 7.62829 59.2242 7.47803 59.4675 7.37611C59.7109 7.27419 59.9718 7.22267 60.2349 7.22454C60.4938 7.22317 60.7501 7.27653 60.9876 7.38122C61.2191 7.4813 61.4287 7.62721 61.6043 7.81049C61.7829 7.99658 61.9259 8.21495 62.0259 8.45441C62.1293 8.70585 62.1817 8.97598 62.1798 9.24856L62.1756 12.4724Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M79.1738 21.356C79.1693 21.9611 79.2836 22.5609 79.5101 23.1203C79.7244 23.6539 80.0384 24.1401 80.4346 24.552C80.8448 24.9708 81.3328 25.3024 81.8701 25.5274C82.4075 25.7523 82.9834 25.8662 83.5644 25.8623C84.146 25.8727 84.7224 25.7498 85.251 25.5028C85.7364 25.2721 86.1677 24.9384 86.516 24.5241C86.8689 24.096 87.1396 23.6041 87.314 23.0742C87.5043 22.5033 87.5994 21.9041 87.5955 21.3013V14.4673C87.5947 14.1998 87.65 13.9353 87.7578 13.6914C87.8631 13.4512 88.0143 13.2349 88.2027 13.055C88.3905 12.874 88.6087 12.7286 88.8468 12.6257C89.0876 12.5207 89.347 12.467 89.6089 12.4679C89.8679 12.4665 90.1243 12.5203 90.3616 12.6257C90.5923 12.7271 90.8017 12.8728 90.9783 13.055C91.1554 13.2366 91.2942 13.4532 91.3862 13.6914C91.4832 13.9381 91.5326 14.2015 91.5317 14.4673V21.2455C91.539 22.3872 91.3392 23.5205 90.9424 24.5885C90.5704 25.6 90.0131 26.5305 89.3001 27.3304C88.573 28.1402 87.6863 28.7847 86.698 29.222C85.7097 29.6594 84.642 29.8796 83.5644 29.8685C82.4447 29.8772 81.3356 29.6477 80.3081 29.1946C79.3218 28.7599 78.427 28.1357 77.6727 27.3562C76.9175 26.5734 76.3141 25.6526 75.8943 24.6421C75.4576 23.5968 75.2355 22.4716 75.2418 21.3356V14.4673C75.2424 13.9383 75.4477 13.4309 75.8132 13.055C75.9897 12.8728 76.1991 12.7271 76.4299 12.6257C76.6724 12.5215 76.933 12.4679 77.1962 12.4679C77.4595 12.4679 77.7201 12.5215 77.9626 12.6257C78.1982 12.7268 78.4128 12.8725 78.5951 13.055C78.7765 13.2359 78.9199 13.4524 79.0168 13.6914C79.1189 13.9368 79.1713 14.2007 79.1707 14.4673L79.1738 21.356Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M111.231 21.0426V21.1349C111.221 21.9187 111.111 22.6978 110.904 23.4529C110.703 24.1852 110.407 24.8869 110.024 25.5392C108.869 27.5031 107.018 28.9409 104.853 29.5561C102.984 30.0797 100.997 29.9466 99.2112 29.1784C98.1871 28.7316 97.2567 28.0889 96.4704 27.2853C95.6851 26.4768 95.0574 25.5242 94.6204 24.4778C94.1716 23.3934 93.9404 22.2285 93.9404 21.0517C93.9404 19.8749 94.1716 18.71 94.6204 17.6255C95.4955 15.5175 97.1414 13.8385 99.2102 12.9432C101.067 12.1441 103.141 12.0332 105.07 12.6299C105.855 12.8789 106.603 13.236 107.292 13.6913V7.92933C107.29 7.64843 107.339 7.36954 107.438 7.10727C107.531 6.861 107.669 6.63514 107.846 6.44189C108.019 6.25276 108.229 6.10191 108.463 5.99867C108.712 5.89157 108.981 5.83822 109.252 5.84198C109.52 5.84012 109.785 5.89341 110.032 5.99867C110.269 6.10064 110.482 6.25158 110.658 6.44189C110.837 6.636 110.98 6.86142 111.08 7.10727C111.185 7.36803 111.238 7.64753 111.235 7.92933L111.231 21.0426ZM107.293 21.0608C107.297 20.4165 107.171 19.7782 106.921 19.186C106.683 18.6155 106.338 18.0978 105.905 17.662C105.474 17.2299 104.968 16.8825 104.412 16.6371C103.833 16.3871 103.209 16.2583 102.58 16.2583C101.95 16.2583 101.327 16.3871 100.747 16.6371C100.189 16.8816 99.6807 17.2291 99.2471 17.662C98.815 18.0968 98.4724 18.6149 98.2393 19.186C97.996 19.7798 97.8726 20.4174 97.8767 21.0608C97.8738 21.6979 97.9971 22.329 98.2393 22.9163C98.4725 23.4879 98.8114 24.0086 99.2376 24.4499C99.6657 24.8906 100.174 25.242 100.734 25.4845C101.316 25.7381 101.943 25.8667 102.576 25.8622C103.207 25.8677 103.833 25.739 104.412 25.4845C105.543 24.9886 106.442 24.069 106.925 22.9163C107.172 22.3303 107.297 21.6986 107.293 21.0608Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M115.13 8.39099C115.128 8.09256 115.187 7.797 115.303 7.52278C115.521 6.99312 115.935 6.57188 116.455 6.34979C116.719 6.23419 117.002 6.17456 117.289 6.17456C117.576 6.17456 117.86 6.23419 118.124 6.34979C118.383 6.46276 118.619 6.62236 118.823 6.82092C119.028 7.02555 119.19 7.26991 119.301 7.53958C119.411 7.80925 119.468 8.09875 119.467 8.39099C119.468 8.68037 119.409 8.96674 119.294 9.23129C119.183 9.49106 119.022 9.7262 118.823 9.9235C118.62 10.1228 118.383 10.2824 118.124 10.3946C117.86 10.5107 117.576 10.5706 117.289 10.5706C117.002 10.5706 116.718 10.5107 116.455 10.3946C116.198 10.2842 115.963 10.1242 115.766 9.9235C115.57 9.72441 115.413 9.48958 115.303 9.23129C115.188 8.96674 115.129 8.68037 115.13 8.39099ZM119.266 27.6546C119.269 27.9242 119.217 28.1913 119.113 28.4391C119.013 28.6738 118.869 28.8869 118.691 29.067C118.415 29.3473 118.063 29.5377 117.68 29.6141C117.298 29.6906 116.901 29.6495 116.541 29.4962C116.306 29.3945 116.092 29.2489 115.909 29.067C115.723 28.8842 115.575 28.6646 115.476 28.4218C115.376 28.1789 115.326 27.9179 115.329 27.6546V14.4674C115.328 14.2028 115.383 13.9412 115.493 13.7011C115.599 13.4637 115.746 13.2477 115.928 13.0636C116.114 12.8748 116.334 12.7254 116.577 12.6239C116.82 12.5224 117.08 12.4709 117.343 12.4723C117.602 12.4709 117.858 12.5246 118.095 12.6301C118.327 12.7301 118.536 12.8761 118.712 13.0593C119.07 13.4351 119.269 13.9393 119.265 14.4631L119.266 27.6546Z" fill="#231F20"/>
                        <path class="header__logo-letter" d="M122.188 21.0609C122.179 19.8825 122.414 18.7154 122.877 17.6353C123.322 16.5911 123.956 15.6416 124.746 14.8364C125.537 14.0331 126.471 13.3906 127.499 12.9433C128.561 12.4865 129.702 12.2511 130.855 12.2511C132.008 12.2511 133.149 12.4865 134.211 12.9433C135.236 13.3899 136.166 14.0325 136.952 14.8364C137.734 15.643 138.359 16.5921 138.796 17.6342C139.245 18.7168 139.477 19.8802 139.477 21.0555C139.477 22.2309 139.245 23.3942 138.796 24.4768C138.359 25.5232 137.731 26.4758 136.946 27.2843C136.16 28.0882 135.229 28.7309 134.205 29.1774C133.143 29.6342 132.002 29.8696 130.849 29.8696C129.696 29.8696 128.554 29.6342 127.492 29.1774C125.418 28.2712 123.766 26.5884 122.876 24.4768C122.416 23.3994 122.181 22.2359 122.188 21.0609ZM126.124 21.0609C126.121 21.6989 126.248 22.3306 126.496 22.9164C126.978 24.0695 127.878 24.9892 129.009 25.4846C129.587 25.7387 130.211 25.8674 130.841 25.8623C131.474 25.8666 132.101 25.738 132.683 25.4846C133.243 25.2418 133.751 24.8904 134.179 24.45C134.605 24.0087 134.944 23.488 135.177 22.9164C135.419 22.329 135.543 21.6979 135.54 21.0609C135.544 20.4175 135.42 19.7799 135.177 19.186C134.945 18.6167 134.606 18.099 134.179 17.6621C133.748 17.2271 133.241 16.8793 132.683 16.6372C132.103 16.3872 131.48 16.2584 130.85 16.2584C130.221 16.2584 129.597 16.3872 129.018 16.6372C128.458 16.8805 127.947 17.2281 127.512 17.6621C127.079 18.0979 126.734 18.6156 126.496 19.186C126.248 19.7786 126.123 20.4168 126.128 21.0609H126.124Z" fill="#231F20"/>
                    </svg>
                    <?php endif; ?>
                </a>
            </div>
            <div class="header__right">
                <div class="header__nav">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'heder',
                        'container'=>false,
                        'depth'=>1,
                        'walker'          =>new artu_head_nav_menu_walker(),
                        'items_wrap'=>'%3$s',
                    ]);?>
                </div>
                <div class="header__login">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'login',
                        'container'=>false,
                        'depth'=>1,
                        'walker'          =>new artu_head_nav_menu_walker(),
                        'items_wrap'=>'%3$s',
                    ]);?>
                </div>
            </div>
            <div class="burger"><span class="burger__1"></span><span class="burger__2"></span></div>
        </div>
    </header>