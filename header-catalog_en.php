<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Car catalog | Tim Motors</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<?php
		wp_head();
	?>
</head>
<body>
    <div class="hamburger">
        <div class="spans">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="menu-mobile">
        <div class="menu-mobile__wrapper">
            <a href="<?php echo get_permalink(38); ?>" class="menu-mobile-link">Home</a>
            <div class="menu-mobile__divider"></div>
            <a href="<?php echo get_permalink(38); ?>#team" class="menu-mobile-link">Detailing center</a>
            <div class="menu-mobile__divider"></div>
            <a href="#contacts" class="menu-mobile-link">Contacts</a>
        </div>
    </div>
    <header>
        <nav>
            <div class="menu" id="up">
                <a href="<?php echo get_permalink(38); ?>" class="menu__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/menu/logo.svg" alt="logo">
                </a>
                <div class="menu__list">
                    <div class="menu__list__item">
                        <a href="<?php echo get_permalink(38); ?>" class="menu__list__link">Home</a>
                    </div>
                    <div class="menu__list__item">
                        <a href="<?php echo get_permalink(38); ?>#advantages" class="menu__list__link">About Us</a>
                    </div>
                    <div class="menu__list__item">
                        <a href="<?php echo get_permalink(38); ?>#team" class="menu__list__link">Detailing center</a>
                    </div>
                </div>
                <div class="menu__contacts">
                    <a href="https://wa.me/<?php the_field('contacts_whatsapp',7); ?>" target="_blank" class="menu__contacts__item">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8552 3.052C15.89 1.085 13.2772 0.000875 10.4939 0C4.75825 0 0.090125 4.66725 0.0875 10.4055C0.086625 12.2395 0.566125 14.0297 1.477 15.6082L0 21L5.516 19.5527C7.03587 20.3822 8.74737 20.8189 10.4886 20.8197H10.493C16.2277 20.8197 20.8967 16.1516 20.8994 10.4134C20.9011 7.6335 19.8196 5.01813 17.8552 3.052ZM10.4939 19.0619H10.4904C8.93812 19.0619 7.4165 18.6445 6.08825 17.8561L5.77237 17.6689L2.499 18.5273L3.37312 15.3352L3.1675 15.008C2.30125 13.6308 1.8445 12.0391 1.84537 10.4055C1.84712 5.63675 5.72775 1.757 10.4982 1.757C12.8082 1.757 14.98 2.65825 16.6127 4.29275C18.2455 5.92812 19.1441 8.10075 19.1432 10.4116C19.1406 15.1821 15.2609 19.0619 10.4939 19.0619ZM15.2381 12.5842C14.9782 12.4539 13.6999 11.8247 13.461 11.7381C13.223 11.6515 13.0497 11.6077 12.8756 11.8676C12.7015 12.1275 12.2045 12.7137 12.0522 12.8879C11.9009 13.0611 11.7486 13.083 11.4887 12.9526C11.2289 12.8223 10.3906 12.5484 9.3975 11.662C8.62487 10.9725 8.1025 10.1211 7.95112 9.86038C7.79975 9.59962 7.93537 9.45963 8.06487 9.33012C8.18212 9.21375 8.32475 9.0265 8.45512 8.87425C8.58637 8.72375 8.62925 8.61525 8.71675 8.44112C8.80337 8.26788 8.7605 8.11563 8.69487 7.98525C8.62925 7.85575 8.1095 6.57562 7.89337 6.055C7.6825 5.5475 7.46812 5.61662 7.308 5.60875C7.15662 5.60087 6.98337 5.6 6.80925 5.6C6.636 5.6 6.35425 5.66475 6.11625 5.9255C5.87825 6.18625 5.20625 6.81538 5.20625 8.09463C5.20625 9.37475 6.13812 10.6111 6.26762 10.7844C6.39712 10.9576 8.10075 13.5844 10.7091 14.7105C11.3295 14.9783 11.8142 15.1384 12.1914 15.2582C12.8144 15.456 13.3814 15.428 13.8294 15.3615C14.329 15.2871 15.3676 14.7324 15.5846 14.1251C15.8016 13.5179 15.8016 12.9964 15.736 12.8888C15.6713 12.7794 15.498 12.7146 15.2381 12.5842Z" fill="#3FD11B"/>
                        </svg>                            
                        <div class="menu__tel"><?php the_field('contacts_whatsapp',7); ?></div>
                    </a>
                    <a href="mailto:<?php the_field('social_mail',7); ?>" class="menu__contacts__item">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="mail_icon" d="M3.66665 3.66663H18.3333C19.3416 3.66663 20.1666 4.49163 20.1666 5.49996V16.5C20.1666 17.5083 19.3416 18.3333 18.3333 18.3333H3.66665C2.65831 18.3333 1.83331 17.5083 1.83331 16.5V5.49996C1.83331 4.49163 2.65831 3.66663 3.66665 3.66663Z" stroke="#092B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="mail_icon" d="M20.1666 5.5L11 11.9167L1.83331 5.5" stroke="#092B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        <div class="menu__mail"><?php the_field('social_mail',7); ?></div>
                    </a>
                </div>
                <div class="menu__social">
                    <a href="<?php the_field('social_youtube',7); ?>" target="_blank" class="menu__social__item">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_19_1831)" filter="url(#filter0_i_19_1831)">
                            <path d="M21.3714 5.91763C21.2478 5.47677 21.0071 5.07763 20.6748 4.76265C20.3331 4.43799 19.9143 4.20575 19.458 4.08786C17.7501 3.63769 10.9075 3.63769 10.9075 3.63769C8.05494 3.60523 5.20306 3.74798 2.36798 4.06512C1.91162 4.19172 1.49362 4.42915 1.15117 4.75629C0.814678 5.08004 0.57095 5.47928 0.44363 5.91672C0.137783 7.56437 -0.0108187 9.23736 -0.000171137 10.9131C-0.0110843 12.5874 0.137153 14.2598 0.44363 15.9095C0.568222 16.3451 0.81104 16.7426 1.14844 17.0636C1.48584 17.3846 1.90599 17.6165 2.36798 17.7393C4.09863 18.1886 10.9075 18.1886 10.9075 18.1886C13.7637 18.2211 16.6192 18.0783 19.458 17.7611C19.9143 17.6432 20.3331 17.411 20.6748 17.0863C21.0113 16.7653 21.2505 16.3661 21.3705 15.9314C21.6843 14.2843 21.8369 12.6107 21.8261 10.934C21.8497 9.25033 21.6973 7.56876 21.3714 5.91672V5.91763ZM8.73217 14.027V7.80015L14.4252 10.914L8.73217 14.027Z" fill="#F40000"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_19_1831" x="0" y="0" width="21.8263" height="22.5461" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.719779"/>
                            <feGaussianBlur stdDeviation="1.34959"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_19_1831"/>
                            </filter>
                            <clipPath id="clip0_19_1831">
                            <rect width="21.8263" height="21.8263" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>                            
                    </a>
                    <a href="<?php the_field('social_instagram',7); ?>" target="_blank" class="menu__social__item">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_19_1828)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.586 0.940552C7.62087 0.892911 7.95082 0.882324 10.587 0.882324C13.2231 0.882324 13.553 0.893793 14.587 0.940552C15.621 0.987311 16.3268 1.15229 16.9444 1.39138C17.591 1.63576 18.1777 2.01777 18.663 2.51182C19.157 2.99617 19.5381 3.58198 19.7816 4.22954C20.0216 4.84711 20.1857 5.5529 20.2334 6.58512C20.281 7.62175 20.2916 7.9517 20.2916 10.587C20.2916 13.2231 20.2801 13.553 20.2334 14.5879C20.1866 15.6201 20.0216 16.3259 19.7816 16.9435C19.5381 17.5911 19.1564 18.1779 18.663 18.663C18.1777 19.157 17.591 19.5381 16.9444 19.7816C16.3268 20.0216 15.621 20.1857 14.5888 20.2334C13.553 20.281 13.2231 20.2916 10.587 20.2916C7.95082 20.2916 7.62087 20.2801 6.586 20.2334C5.55378 20.1866 4.84799 20.0216 4.23042 19.7816C3.58279 19.5381 2.99601 19.1564 2.51094 18.663C2.01722 18.1783 1.63515 17.5918 1.39138 16.9444C1.15229 16.3268 0.988193 15.621 0.940552 14.5888C0.892911 13.5522 0.882324 13.2222 0.882324 10.587C0.882324 7.95082 0.893793 7.62087 0.940552 6.58688C0.987311 5.5529 1.15229 4.84711 1.39138 4.22954C1.63551 3.58205 2.01787 2.99556 2.51182 2.51094C2.9962 2.01733 3.58239 1.63527 4.22954 1.39138C4.84711 1.15229 5.5529 0.988193 6.58512 0.940552H6.586ZM14.5085 2.68739C13.4851 2.64063 13.1781 2.63092 10.587 2.63092C7.99582 2.63092 7.6888 2.64063 6.6654 2.68739C5.71876 2.73061 5.2053 2.88854 4.86299 3.02175C4.4104 3.1982 4.08662 3.40729 3.74695 3.74695C3.42498 4.06019 3.17719 4.44152 3.02175 4.86299C2.88854 5.2053 2.73061 5.71876 2.68739 6.6654C2.64063 7.6888 2.63092 7.99582 2.63092 10.587C2.63092 13.1781 2.64063 13.4851 2.68739 14.5085C2.73061 15.4551 2.88854 15.9686 3.02175 16.3109C3.17703 16.7317 3.42494 17.1138 3.74695 17.427C4.06015 17.749 4.44216 17.9969 4.86299 18.1522C5.2053 18.2854 5.71876 18.4433 6.6654 18.4865C7.6888 18.5333 7.99493 18.543 10.587 18.543C13.179 18.543 13.4851 18.5333 14.5085 18.4865C15.4551 18.4433 15.9686 18.2854 16.3109 18.1522C16.7635 17.9757 17.0873 17.7666 17.427 17.427C17.749 17.1138 17.9969 16.7317 18.1522 16.3109C18.2854 15.9686 18.4433 15.4551 18.4865 14.5085C18.5333 13.4851 18.543 13.1781 18.543 10.587C18.543 7.99582 18.5333 7.6888 18.4865 6.6654C18.4433 5.71876 18.2854 5.2053 18.1522 4.86299C17.9757 4.4104 17.7666 4.08662 17.427 3.74695C17.1137 3.425 16.7324 3.17721 16.3109 3.02175C15.9686 2.88854 15.4551 2.73061 14.5085 2.68739ZM9.34741 13.5786C10.0397 13.8668 10.8105 13.9057 11.5282 13.6887C12.246 13.4716 12.8661 13.0122 13.2827 12.3887C13.6993 11.7652 13.8866 11.0165 13.8125 10.2703C13.7383 9.52415 13.4075 8.82686 12.8764 8.29754C12.5378 7.95918 12.1284 7.7001 11.6777 7.53895C11.227 7.37779 10.7461 7.31858 10.2698 7.36556C9.79343 7.41254 9.33343 7.56456 8.92288 7.81066C8.51233 8.05677 8.16145 8.39083 7.89551 8.78882C7.62957 9.1868 7.45517 9.6388 7.38488 10.1123C7.31459 10.5857 7.35015 11.0689 7.48901 11.527C7.62786 11.9851 7.86655 12.4067 8.1879 12.7614C8.50924 13.1162 8.90525 13.3953 9.34741 13.5786ZM7.05976 7.05976C7.52296 6.59656 8.07285 6.22914 8.67805 5.97846C9.28325 5.72777 9.93189 5.59875 10.587 5.59875C11.242 5.59875 11.8907 5.72777 12.4959 5.97845C13.1011 6.22914 13.6509 6.59656 14.1141 7.05976C14.5773 7.52296 14.9448 8.07285 15.1954 8.67805C15.4461 9.28325 15.5752 9.93189 15.5752 10.587C15.5752 11.242 15.4461 11.8907 15.1954 12.4959C14.9448 13.1011 14.5773 13.6509 14.1141 14.1141C13.1787 15.0496 11.9099 15.5752 10.587 15.5752C9.264 15.5752 7.99523 15.0496 7.05976 14.1141C6.12429 13.1787 5.59875 11.9099 5.59875 10.587C5.59875 9.264 6.12429 7.99523 7.05976 7.05976ZM16.6815 6.34162C16.7962 6.23334 16.8881 6.10313 16.9517 5.9587C17.0153 5.81428 17.0492 5.65856 17.0515 5.50078C17.0538 5.343 17.0244 5.18637 16.9651 5.04015C16.9058 4.89393 16.8177 4.7611 16.7061 4.64952C16.5945 4.53794 16.4617 4.44988 16.3155 4.39056C16.1693 4.33124 16.0126 4.30186 15.8549 4.30416C15.6971 4.30646 15.5414 4.3404 15.3969 4.40395C15.2525 4.46751 15.1223 4.5594 15.014 4.67419C14.8034 4.89742 14.6882 5.19393 14.6926 5.50078C14.6971 5.80763 14.821 6.10066 15.038 6.31766C15.255 6.53466 15.548 6.65854 15.8549 6.66302C16.1617 6.66749 16.4582 6.5522 16.6815 6.34162Z" fill="url(#paint0_linear_19_1828)"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_19_1828" x="0" y="0" width="21.1737" height="21.872" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="0.698259"/>
                            <feGaussianBlur stdDeviation="1.30924"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_19_1828"/>
                            </filter>
                            <linearGradient id="paint0_linear_19_1828" x1="1" y1="1" x2="16" y2="20" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F12CDD"/>
                            <stop offset="0.451042" stop-color="#E62C6F"/>
                            <stop offset="1" stop-color="#FFCC6A"/>
                            </linearGradient>
                            </defs>
                        </svg>                                 
                    </a>
                </div>
            </div>
        </nav>
    </header>