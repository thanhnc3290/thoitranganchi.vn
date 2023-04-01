<!DOCTYPE html>
<html class="js native-share--enabled" lang="vi" dir="ltr" style="--header-height:95.19px; --scrollbar-width:17px; --announcement-bar-height:50.09px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#ffffff">

    <title>Trang Chủ</title>
    <link type="text/css" rel="stylesheet" href="./assets/css/messenger.v3.scss.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_1.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/theme.css" media="all">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_2.css">
    <link id="judgeme_widget_align_css" onload="this.media='all'" type="text/css" rel="stylesheet" href="./assets/css/align.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_3.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_4.css">
    <link rel="preload" as="font" href="./assets/fonts/98f97ed7d7fc0940.ttf" type="font/ttf" crossorigin="">
    <link rel="preload" as="font" href="./assets/fonts/f5c48067f3876e78.ttf" type="font/ttf" crossorigin="">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_5.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_6.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_7.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/index_head_css_8.css">

    <link rel="shortcut icon" href="./assets/images/Layer-0.webp">
    <link rel="apple-touch-icon" href="./assets/images/Layer-0.webp">

    <script type="text/javascript" async="" src="./assets/js/bundle.js"></script>
    <script type="text/javascript" async="" src="./assets/js/messenger.v3.min.js"></script>
    <script type="text/javascript" async="" src="./assets/js/SizingPlugin.prod.js"></script>

    
    <script>
        document.documentElement.classList.replace('no-js', 'js');
        window.themeVariables = {
            settings: {
                showPageTransition: false,
                headingApparition: "split_rotation",
                pageType: "index"
            },

            breakpoints: {
                'sm': 'screen and (min-width: 700px)',
                'md': 'screen and (min-width: 1000px)',
                'lg': 'screen and (min-width: 1150px)',
                'xl': 'screen and (min-width: 1400px)',

                'sm-max': 'screen and (max-width: 699px)',
                'md-max': 'screen and (max-width: 999px)',
                'lg-max': 'screen and (max-width: 1149px)',
                'xl-max': 'screen and (max-width: 1399px)'
            }
        }; 
    </script>
    <script type="module" src="./assets/js/vendor.min.js"></script>
    <script type="module" src="./assets/js/theme.js"></script>
    <script type="module" src="./assets/js/sections.js"></script>
    
    <noscript>
        <link rel="stylesheet" type="text/css" media="all" href="./assets/css/shopify_v2.css">
    </noscript>
    <style id="vitals-integration-styles"></style>
</head>

<body class=" zoom-image--enabled">
    <div class="evm-wiser-popup-mainsection"></div>
    <script>
        (function() {
            var jdgmThemeFixes = null;
            if (!jdgmThemeFixes) return;
            var thisThemeFix = jdgmThemeFixes[Shopify.theme.id];
            if (!thisThemeFix) return;

            if (thisThemeFix.html) {
                document.addEventListener("DOMContentLoaded", function() {
                    var htmlDiv = document.createElement('div');
                    htmlDiv.classList.add('jdgm-theme-fix-html');
                    htmlDiv.innerHTML = thisThemeFix.html;
                    document.body.append(htmlDiv);
                });
            };

            if (thisThemeFix.css) {
                var styleTag = document.createElement('style');
                styleTag.classList.add('jdgm-theme-fix-style');
                styleTag.innerHTML = thisThemeFix.css;
                document.head.append(styleTag);
            };

            if (thisThemeFix.js) {
                var scriptTag = document.createElement('script');
                scriptTag.classList.add('jdgm-theme-fix-script');
                scriptTag.innerHTML = thisThemeFix.js;
                document.head.append(scriptTag);
            };
        })();
    </script>

    <template id="drawer-default-template">
        <style>[hidden] {display: none !important;}</style>

        <button part="outside-close-button" is="close-button" aria-label="Đóng">
            <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
            </svg>
        </button>
        <div part="overlay"></div>
        <div part="content">
            <header part="header">
                <slot name="header"></slot>

                <button part="close-button" is="close-button" aria-label="Đóng">
                    <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                        <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
                    </svg>
                </button>
            </header>

            <div part="body">
                <slot></slot>
            </div>

            <footer part="footer">
                <slot name="footer"></slot>
            </footer>
        </div>
    </template>

    <template id="popover-default-template">
        <button part="outside-close-button" is="close-button" aria-label="Đóng">
            <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
            </svg>
        </button>

        <div part="overlay"></div>

        <div part="content">
            <header part="title">
                <slot name="title"></slot>
            </header>

            <div part="body">
                <slot></slot>
            </div>
        </div>
    </template><a href="#main" class="skip-to-content sr-only">Chuyển đến nội dung</a>
    <aside id="shopify-section-announcement-bar" class="shopify-section shopify-section--announcement-bar">
        <style> :root {--sticky-announcement-bar-enabled: 0;}</style>
        <height-observer variable="announcement-bar">
            <div class="announcement-bar bg-custom text-custom" style="--background: 0 0 0; --text-color: 255 255 255;">
                <marquee-text scrolling-speed="14" class="announcement-bar__scrolling-list" style="--marquee-animation-duration:12.294s;">
                    <span class="announcement-bar__item">
                        <p class="bold text-xs"><a href="#">Tặng quần Boxer cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                        <p class="bold text-xs"><a href="#">FREESHIP cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                    </span>
                    <span class="announcement-bar__item" aria-hidden="true">
                        <p class="bold text-xs"><a href="#">Tặng quần Boxer cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                        <p class="bold text-xs"><a href="#">FREESHIP cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                    </span>
                    <span class="announcement-bar__item" aria-hidden="true">
                        <p class="bold text-xs"><a href="#">Tặng quần Boxer cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                        <p class="bold text-xs"><a href="#">FREESHIP cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                    </span>
                    <span class="announcement-bar__item" aria-hidden="true">
                        <p class="bold text-xs"><a href="#">Tặng quần Boxer cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                        <p class="bold text-xs"><a href="#">FREESHIP cho đơn hàng từ 500K</a></p><span class="shape-circle shape--sm"></span>
                    </span>
                </marquee-text>
            </div>
        </height-observer>
    </aside>
    <header id="shopify-section-header" class="shopify-section shopify-section--header">
        <style>
            :root {
                --sticky-header-enabled: 1;
            }

            #shopify-section-header {
                --header-grid-template: "main-nav logo secondary-nav" / minmax(0, 1fr) auto minmax(0, 1fr);
                --header-padding-block: var(--spacing-4-5);
                --header-background-opacity: 0.0;
                --header-background-blur-radius: 20px;
                --header-transparent-text-color: 255 255 255;
                --header-logo-width: 100px;
                --header-logo-height: 11px;
                position: sticky;
                top: calc(var(--sticky-announcement-bar-enabled, 0) * var(--announcement-bar-height, 0px));
                z-index: 10;
            }

            @media screen and (max-width: 699px) {
                .navigation-drawer {
                    --drawer-content-max-height: calc(100vh - (var(--spacing-2) * 2));
                }
            }

            @media screen and (min-width: 700px) {
                #shopify-section-header {
                    --header-logo-width: 160px;
                    --header-logo-height: 18px;
                    --header-padding-block: var(--spacing-8-5);
                }
            }
        </style>

        <height-observer variable="header">
            <store-header class="header is-filled" sticky="">
                <div class="header__wrapper">
                    <div class="header__main-nav">
                        <div class="header__icon-list">
                            <button type="button" class="tap-area lg:hidden" aria-controls="header-sidebar-menu">
                                <span class="sr-only">Mở menu</span><svg role="presentation" stroke-width="1.5" focusable="false" width="22" height="22" class="icon icon-hamburger" viewBox="0 0 22 22">
                                    <path d="M1 5h20M1 11h20M1 17h20" stroke="currentColor" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <a href="#" class="tap-area sm:hidden" aria-controls="search-drawer">
                                <span class="sr-only">Tìm kiếm</span>
                                <svg role="presentation" stroke-width="1.5" focusable="false" width="22" height="22" class="icon icon-search" viewBox="0 0 22 22">
                                    <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>
                                    <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <nav class="header__link-list  wrap" role="navigation">
                                <ul class="contents" role="list">
                                    <li><a href="#" class="bold link-faded-reverse">New in</a></li>

                                    <li>
                                        <details class="relative" is="dropdown-disclosure" trigger="click">
                                            <summary class="text-with-icon gap-2.5 bold link-faded-reverse" data-url="#">
                                                Tất cả sản phẩm
                                                <svg role="presentation" focusable="false" width="10" height="7" class="icon icon-chevron-bottom" viewBox="0 0 10 7">
                                                    <path d="m1 1 4 4 4-4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                                </svg>
                                            </summary>

                                            <div class="dropdown-menu">
                                                <ul class="contents" role="list">
                                                    <li>
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Bộ sưu tập</span></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Tất cả sản phẩm</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </details>
                                    </li>

                                    <li>
                                        <details class="relative" is="dropdown-disclosure" trigger="click">
                                            <summary class="text-with-icon gap-2.5 bold link-faded-reverse" data-url="#">
                                                Chính sách
                                                <svg role="presentation" focusable="false" width="10" height="7" class="icon icon-chevron-bottom" viewBox="0 0 10 7">
                                                    <path d="m1 1 4 4 4-4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                                </svg>
                                            </summary>

                                            <div class="dropdown-menu" style="opacity: 0;">
                                                <ul class="contents" role="list">
                                                    <li style="opacity: 1; transform: translateY(0px);">
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Chính sách kiểm hàng</span></span>
                                                        </a>
                                                    </li>
                                                    <li style="opacity: 1; transform: translateY(0px);">
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Chính sách đổi / hoàn trả</span></span>
                                                        </a>
                                                    </li>
                                                    <li style="opacity: 1; transform: translateY(0px);">
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Chính sách bảo hành</span></span>
                                                        </a>
                                                    </li>
                                                    <li style="opacity: 1; transform: translateY(0px);">
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Chính sách bảo mật</span></span>
                                                        </a>
                                                    </li>
                                                    <li style="opacity: 1; transform: translateY(0px);">
                                                        <a href="#" class="dropdown-menu__item group">
                                                            <span><span class="reversed-link">Điều khoản sử dụng</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </details>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <h1 class="header__logo">
                        <a href="#">
                            <span class="sr-only">Polomanor</span>
                            <img 
                                src="./assets/images/logo-final.webp" alt="" 
                                srcset="
                                ./assets/images/logo-final.webp 160w, 
                                ./assets/images/logo-final.webp 320w
                                " 
                                width="2572" height="283" sizes="160px" class="header__logo-image">
                        </a>
                    </h1>

                    <div class="header__secondary-nav">
                        <div class="header__icon-list">
                            <a href="#" class="hidden tap-area sm:block" aria-controls="search-drawer">
                                <span class="sr-only">Tìm kiếm</span>
                                <svg role="presentation" stroke-width="1.5" focusable="false" width="22" height="22" class="icon icon-search" viewBox="0 0 22 22">
                                    <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>
                                    <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a href="#" class="hidden tap-area sm:block">
                                <span class="sr-only">Tài khoản</span>
                                <svg role="presentation" stroke-width="1.5" focusable="false" width="22" height="22" class="icon icon-account" viewBox="0 0 22 22">
                                    <circle cx="11" cy="7" r="4" fill="none" stroke="currentColor"></circle>
                                    <path d="M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5" fill="none" stroke="currentColor" stroke-linecap="round"></path>
                                </svg>
                            </a>
                            <a href="#" class="relative tap-area" aria-controls="cart-drawer">
                                <span class="sr-only">Giỏ hàng</span>
                                <svg role="presentation" stroke-width="1.5" focusable="false" width="22" height="22" class="icon icon-cart" viewBox="0 0 22 22">
                                    <path d="M11 7H3.577A2 2 0 0 0 1.64 9.497l2.051 8A2 2 0 0 0 5.63 19H16.37a2 2 0 0 0 1.937-1.503l2.052-8A2 2 0 0 0 18.422 7H11Zm0 0V1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="header__cart-count">
                                    <cart-count class="count-bubble opacity-0" aria-hidden="true">0</cart-count>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </store-header>
        </height-observer>
        
        <navigation-drawer mobile-opening="left" open-from="left" id="header-sidebar-menu" class="navigation-drawer drawer lg:hidden" role="dialog" aria-modal="true">
            <button is="close-button" aria-label="Đóng"><svg role="presentation" stroke-width="2" focusable="false" width="19" height="19" class="icon icon-close" viewBox="0 0 24 24">
                    <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
                </svg>
            </button>
            <div class="panel-list__wrapper">
                <div class="panel">
                    <div class="panel__wrapper">
                        <div class="panel__scroller v-stack gap-8">
                            <ul class="v-stack gap-4">
                                <li class="h3 sm:h4">
                                    <a href="#" class="group block w-full">
                                        <span><span class="reversed-link">New in</span></span>
                                    </a>
                                </li>
                                <li class="h3 sm:h4">
                                    <button class="text-with-icon w-full group justify-between" aria-expanded="false" data-panel="1-0">
                                        <span>Tất cả sản phẩm</span>
                                        <span class="circle-chevron group-hover:colors group-expanded:colors">
                                            <svg role="presentation" focusable="false" width="5" height="8" class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
                                                <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                                <li class="h3 sm:h4">
                                    <button class="text-with-icon w-full group justify-between" aria-expanded="false" data-panel="1-1">
                                        <span>Chính sách</span>
                                        <span class="circle-chevron group-hover:colors group-expanded:colors">
                                            <svg role="presentation" focusable="false" width="5" height="8" class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
                                                <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer v-stack gap-5">
                            <ul class="social-media " role="list">
                                <li>
                                    <a href="#" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR Facebook">
                                        <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-facebook" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.183 21.85v-8.868H7.2V9.526h2.983V6.982a4.17 4.17 0 0 1 4.44-4.572 22.33 22.33 0 0 1 2.667.144v3.084h-1.83a1.44 1.44 0 0 0-1.713 1.68v2.208h3.423l-.447 3.456h-2.97v8.868h-3.57Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR Instagram">
                                        <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-instagram" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.4c-2.607 0-2.934.011-3.958.058-1.022.046-1.72.209-2.33.446a4.705 4.705 0 0 0-1.7 1.107 4.706 4.706 0 0 0-1.108 1.7c-.237.611-.4 1.31-.446 2.331C2.41 9.066 2.4 9.392 2.4 12c0 2.607.011 2.934.058 3.958.046 1.022.209 1.72.446 2.33a4.706 4.706 0 0 0 1.107 1.7c.534.535 1.07.863 1.7 1.108.611.237 1.309.4 2.33.446 1.025.047 1.352.058 3.959.058s2.934-.011 3.958-.058c1.022-.046 1.72-.209 2.33-.446a4.706 4.706 0 0 0 1.7-1.107 4.706 4.706 0 0 0 1.108-1.7c.237-.611.4-1.31.446-2.33.047-1.025.058-1.352.058-3.959s-.011-2.934-.058-3.958c-.047-1.022-.209-1.72-.446-2.33a4.706 4.706 0 0 0-1.107-1.7 4.705 4.705 0 0 0-1.7-1.108c-.611-.237-1.31-.4-2.331-.446C14.934 2.41 14.608 2.4 12 2.4Zm0 1.73c2.563 0 2.867.01 3.88.056.935.042 1.443.199 1.782.33.448.174.768.382 1.104.718.336.336.544.656.718 1.104.131.338.287.847.33 1.783.046 1.012.056 1.316.056 3.879 0 2.563-.01 2.867-.056 3.88-.043.935-.199 1.444-.33 1.782a2.974 2.974 0 0 1-.719 1.104 2.974 2.974 0 0 1-1.103.718c-.339.131-.847.288-1.783.33-1.012.046-1.316.056-3.88.056-2.563 0-2.866-.01-3.878-.056-.936-.042-1.445-.199-1.783-.33a2.974 2.974 0 0 1-1.104-.718 2.974 2.974 0 0 1-.718-1.104c-.131-.338-.288-.847-.33-1.783-.047-1.012-.056-1.316-.056-3.879 0-2.563.01-2.867.056-3.88.042-.935.199-1.443.33-1.782.174-.448.382-.768.718-1.104a2.974 2.974 0 0 1 1.104-.718c.338-.131.847-.288 1.783-.33C9.133 4.14 9.437 4.13 12 4.13Zm0 11.07a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm0-8.13a4.93 4.93 0 1 0 0 9.86 4.93 4.93 0 0 0 0-9.86Zm6.276-.194a1.152 1.152 0 1 1-2.304 0 1.152 1.152 0 0 1 2.304 0Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR YouTube">
                                        <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-youtube" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.44 5.243c.929.244 1.66.963 1.909 1.876.451 1.654.451 5.106.451 5.106s0 3.452-.451 5.106a2.681 2.681 0 0 1-1.91 1.876c-1.684.443-8.439.443-8.439.443s-6.754 0-8.439-.443a2.682 2.682 0 0 1-1.91-1.876c-.45-1.654-.45-5.106-.45-5.106s0-3.452.45-5.106a2.681 2.681 0 0 1 1.91-1.876c1.685-.443 8.44-.443 8.44-.443s6.754 0 8.438.443Zm-5.004 6.982L9.792 15.36V9.091l5.646 3.134Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR TikTok">
                                        <svg role="presentation" focusable="false" width="27" height="27" class="icon icon-tiktok" viewBox="0 0 24 24">
                                            <path d="M20.027 10.168a5.125 5.125 0 0 1-4.76-2.294v7.893a5.833 5.833 0 1 1-5.834-5.834c.122 0 .241.011.361.019v2.874c-.12-.014-.237-.036-.36-.036a2.977 2.977 0 0 0 0 5.954c1.644 0 3.096-1.295 3.096-2.94L12.56 2.4h2.75a5.122 5.122 0 0 0 4.72 4.573v3.195" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer__localization-wrapper h-stack gap-6 border-t md:hidden">
                                <a href="#" class="panel-footer__account-link bold text-sm">Tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel gap-8">
                    <div class="panel__wrapper" hidden="">
                        <ul class="v-stack gap-4">
                            <li class="lg:hidden">
                                <button class="text-with-icon h6 text-subdued" data-panel="0">
                                    <svg role="presentation" focusable="false" width="7" height="10" class="icon icon-chevron-left reverse-icon" viewBox="0 0 7 10">
                                        <path d="M6 1 2 5l4 4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    Tất cả sản phẩm
                                </button>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Bộ sưu tập</span></span>
                                </a>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Tất cả sản phẩm</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel__wrapper" hidden="">
                        <ul class="v-stack gap-4">
                            <li class="lg:hidden">
                                <button class="text-with-icon h6 text-subdued" data-panel="0">
                                    <svg role="presentation" focusable="false" width="7" height="10" class="icon icon-chevron-left reverse-icon" viewBox="0 0 7 10">
                                        <path d="M6 1 2 5l4 4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    Chính sách
                                </button>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Chính sách kiểm hàng</span></span>
                                </a>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Chính sách đổi / hoàn trả</span></span>
                                </a>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Chính sách bảo hành</span></span>
                                </a>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Chính sách bảo mật</span></span>
                                </a>
                            </li>
                            <li class="h3 sm:h4">
                                <a class="group block w-full" href="#">
                                    <span><span class="reversed-link">Điều khoản sử dụng</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </navigation-drawer>
        <script>
            (() => {
                document.documentElement.style.setProperty(`--header-height`, `${document.getElementById('shopify-section-header').getBoundingClientRect().height.toFixed(1)}px`);
            })();
        </script>
    </header>
        <div id="shopify-section-cart-drawer" class="shopify-section">
            <cart-drawer class="cart-drawer drawer drawer--lg" id="cart-drawer" role="dialog" aria-modal="true">
                <button is="close-button" aria-label="Đóng">
                    <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                        <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
                    </svg>
                </button>
                <div class="empty-state align-self-center">
                    <div class="empty-state__icon-wrapper">
                        <svg role="presentation" stroke-width="1" focusable="false" width="32" height="32" class="icon icon-cart" viewBox="0 0 22 22">
                            <path d="M11 7H3.577A2 2 0 0 0 1.64 9.497l2.051 8A2 2 0 0 0 5.63 19H16.37a2 2 0 0 0 1.937-1.503l2.052-8A2 2 0 0 0 18.422 7H11Zm0 0V1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="count-bubble count-bubble--lg">0</span>
                    </div>
                    <div class="prose">
                        <p class="h5">Giỏ hàng của bạn đang trống</p>
                        <a class="button button--xl" href="#">Tiếp tục mua sắm</a>
                    </div>
                </div>
            </cart-drawer>
        </div>
        <div id="shopify-section-search-drawer" class="shopify-section">
            <search-drawer class="search-drawer  drawer drawer--lg" id="search-drawer" role="dialog" aria-modal="true">
                <form action="#" method="get" class="v-stack gap-5 sm:gap-8" role="search">
                    <div class="search-input">
                        <input type="search" name="s" placeholder="Tìm kiếm cho .." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" aria-label="Tìm kiếm">
                        <button type="reset" class="text-subdued">Xóa</button>
                        <button type="button" is="close-button">
                            <span class="sr-only">Đóng</span>
                            <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <input type="hidden" name="type" value="product">
                    <input type="hidden" name="options[prefix]" value="last">
                    <input type="hidden" name="options[unavailable_products]" value="last">
                    <predictive-search class="predictive-search" section-id="search-drawer" resources="product,article,page,collection" unavailable-products="last">
                        <div slot="results"></div>
                        <div slot="loading">
                            <div class="v-stack gap-5 sm:gap-6 ">
                                <div class="h-stack gap-4 sm:gap-5">
                                    <span class="skeleton skeleton--tab"></span>
                                    <span class="skeleton skeleton--tab"></span>
                                    <span class="skeleton skeleton--tab"></span>
                                    <span class="skeleton skeleton--tab"></span>
                                </div>
                                <div class="v-stack gap-4 sm:gap-6">
                                    <div class="h-stack align-center gap-5 sm:gap-6">
                                        <span class="skeleton skeleton--thumbnail"></span>
                                        <div class="v-stack gap-3 w-full">
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 20%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 80%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 40%"></span>
                                        </div>
                                    </div>
                                    <div class="h-stack align-center gap-5 sm:gap-6">
                                        <span class="skeleton skeleton--thumbnail"></span>
                                        <div class="v-stack gap-3 w-full">
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 20%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 80%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 40%"></span>
                                        </div>
                                    </div>
                                    <div class="h-stack align-center gap-5 sm:gap-6">
                                        <span class="skeleton skeleton--thumbnail"></span>
                                        <div class="v-stack gap-3 w-full">
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 20%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 80%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 40%"></span>
                                        </div>
                                    </div>
                                    <div class="h-stack align-center gap-5 sm:gap-6">
                                        <span class="skeleton skeleton--thumbnail"></span>
                                        <div class="v-stack gap-3 w-full">
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 20%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 80%"></span>
                                            <span class="skeleton skeleton--text" style="--skeleton-text-width: 40%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </predictive-search>
                </form>
            </search-drawer>
        </div>
    <main role="main" id="main" class="anchor">
        <section id="shopify-section-template--17140497613106__slideshow" class="shopify-section shopify-section--slideshow">
            <style>
                #shopify-section-template--17140497613106__slideshow {
                    --slideshow-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                    --slideshow-controls-background: ;
                    --slideshow-controls-color: 255 255 255;
                }

                .acm_block_slider {
                    --slideshow-slide-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                    --slideshow-slide-controls-background: ;
                    --slideshow-slide-controls-color: 255 255 255;
                }
            </style>
            
            <x-slideshow class="slideshow  slideshow--multiple-slides" style="--slideshow-controls-background: ; --slideshow-controls-color: 255 255 255;">
                <slideshow-carousel id="slideshow-template--17140497613106__slideshow" class="slideshow__carousel" reveal-on-scroll="true" selector=".slideshow__slide" transition="fade_with_text" autoplay="6" role="region" style="opacity: 1;">
                    <custom-cursor class="slideshow__cursor circle-button circle-button--lg circle-button--fill" aria-hidden="true" style="translate: -21px 47.719px;">
                        <svg role="presentation" focusable="false" width="7" height="10" class="icon icon-chevron-right" viewBox="0 0 7 10">
                            <path d="m1 9 4-4-4-4" fill="none" stroke="currentColor" stroke-width="2"></path>
                        </svg>
                        <svg class="slideshow__cursor-ring" viewBox="-28 -28 56 56" width="56" height="56" fill="none" stroke="currentColor" stroke-width="2">
                            <circle r="27" stroke-dasharray="158.33626974092556" stroke-dashoffset="158.33626974092556px" style="stroke-dasharray: 169.011px, 169.011px;"></circle>
                        </svg>
                    </custom-cursor>

                    <a href="#" class="acm_block_slider slideshow__slide is-selected" role="group" style="opacity: 1; visibility: visible; z-index: 1;">
                        <div class="content-over-media content-over-media--auto " style="--content-over-media-content-max-width: 820px; --content-over-media-overlay: 0 0 0 / 0.0">
                            <img 
                                src="./assets/images/slider_pc_1.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_pc_1.webp 200w, 
                                    ./assets/images/slider_pc_1.webp 300w, 
                                    ./assets/images/slider_pc_1.webp 400w, 
                                    ./assets/images/slider_pc_1.webp 500w, 
                                    ./assets/images/slider_pc_1.webp 600w, 
                                    ./assets/images/slider_pc_1.webp 700w, 
                                    ./assets/images/slider_pc_1.webp 800w, 
                                    ./assets/images/slider_pc_1.webp 900w, 
                                    ./assets/images/slider_pc_1.webp 1000w, 
                                    ./assets/images/slider_pc_1.webp 1200w, 
                                    ./assets/images/slider_pc_1.webp 1400w, 
                                    ./assets/images/slider_pc_1.webp 1600w, 
                                    ./assets/images/slider_pc_1.webp 1800w, 
                                    ./assets/images/slider_pc_1.webp 2000w" 
                                width="2000" 
                                height="705" 
                                loading="eager" 
                                fetchpriority="high" 
                                sizes="100vw" 
                                class="hidden sm:block" 
                                style="opacity: 1; transform: scale(1);">
                            <img 
                                src="./assets/images/slider_mobile_1.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_mobile_1.webp 200w, 
                                    ./assets/images/slider_mobile_1.webp 300w, 
                                    ./assets/images/slider_mobile_1.webp 400w, 
                                    ./assets/images/slider_mobile_1.webp 500w, 
                                    ./assets/images/slider_mobile_1.webp 600w, 
                                    ./assets/images/slider_mobile_1.webp 700w, 
                                    ./assets/images/slider_mobile_1.webp 800w, 
                                    ./assets/images/slider_mobile_1.webp 900w, 
                                    ./assets/images/slider_mobile_1.webp 1000w, 
                                    ./assets/images/slider_mobile_1.webp 1200w" 
                                width="1226" 
                                height="1521" 
                                loading="eager" 
                                fetchpriority="high" 
                                sizes="100vw" 
                                class="sm:hidden" 
                                style="opacity: 1; transform: scale(1);">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center  text-custom" style="--text-color: 255 255 255;">
                                <div class="prose"></div>
                            </div>
                        </div>
                    </a>

                    <div class="acm_block_slider slideshow__slide" role="group" style="opacity: 0; visibility: hidden; z-index: 0;">
                        <div class="content-over-media content-over-media--auto " style="--content-over-media-content-max-width: 400px; --content-over-media-overlay: 0 0 0 / 0.0">
                            <img 
                                src="./assets/images/slider_pc_2.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_pc_2.webp 200w, 
                                    ./assets/images/slider_pc_2.webp 300w, 
                                    ./assets/images/slider_pc_2.webp 400w, 
                                    ./assets/images/slider_pc_2.webp 500w, 
                                    ./assets/images/slider_pc_2.webp 600w, 
                                    ./assets/images/slider_pc_2.webp 700w, 
                                    ./assets/images/slider_pc_2.webp 800w, 
                                    ./assets/images/slider_pc_2.webp 900w, 
                                    ./assets/images/slider_pc_2.webp 1000w, 
                                    ./assets/images/slider_pc_2.webp 1200w, 
                                    ./assets/images/slider_pc_2.webp 1400w, 
                                    ./assets/images/slider_pc_2.webp 1600w, 
                                    ./assets/images/slider_pc_2.webp 1800w" 
                                width="1904" 
                                height="680" 
                                loading="eager" 
                                fetchpriority="low" 
                                sizes="100vw" 
                                class="hidden sm:block" 
                                style="opacity: 1; transform: scale(1);">
                            <img 
                                src="./assets/images/slider_mobile_2.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_mobile_2.webp, 
                                    ./assets/images/slider_mobile_2.webp, 
                                    ./assets/images/slider_mobile_2.webp, 
                                    ./assets/images/slider_mobile_2.webp, 
                                    ./assets/images/slider_mobile_2.webp, 
                                    ./assets/images/slider_mobile_2.webp"
                                width="796" 
                                height="1062" 
                                loading="eager" 
                                fetchpriority="low" 
                                sizes="100vw" 
                                class="sm:hidden" 
                                style="opacity: 1; transform: scale(1);">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center  text-custom" style="--text-color: 255 255 255;">
                                <div class="prose"></div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="acm_block_slider slideshow__slide" role="group" style="opacity: 0; visibility: hidden; z-index: 0;">
                        <div class="content-over-media content-over-media--auto " style="--content-over-media-content-max-width: 780px; --content-over-media-overlay: 0 0 0 / 0.0">
                            <img 
                                src="./assets/images/slider_pc_3.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_pc_3.webp 200w, 
                                    ./assets/images/slider_pc_3.webp 300w, 
                                    ./assets/images/slider_pc_3.webp 400w, 
                                    ./assets/images/slider_pc_3.webp 500w, 
                                    ./assets/images/slider_pc_3.webp 600w, 
                                    ./assets/images/slider_pc_3.webp 700w, 
                                    ./assets/images/slider_pc_3.webp 800w, 
                                    ./assets/images/slider_pc_3.webp 900w, 
                                    ./assets/images/slider_pc_3.webp 1000w, 
                                    ./assets/images/slider_pc_3.webp 1200w, 
                                    ./assets/images/slider_pc_3.webp 1400w, 
                                    ./assets/images/slider_pc_3.webp 1600w, 
                                    ./assets/images/slider_pc_3.webp 1800w, 
                                    ./assets/images/slider_pc_3.webp 2000w, 
                                    ./assets/images/slider_pc_3.webp 2200w, 
                                    ./assets/images/slider_pc_3.webp 2400w, 
                                    ./assets/images/slider_pc_3.webp 2600w, 
                                    ./assets/images/slider_pc_3.webp 2800w" 
                                width="2800" 
                                height="1000" 
                                loading="eager" 
                                fetchpriority="low" 
                                sizes="100vw" 
                                class="hidden sm:block" 
                                style="opacity: 1; transform: scale(1);">
                            <img 
                                src="./assets/images/slider_mobile_3.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_mobile_3.webp 200w, 
                                    ./assets/images/slider_mobile_3.webp 300w, 
                                    ./assets/images/slider_mobile_3.webp 400w, 
                                    ./assets/images/slider_mobile_3.webp 500w, 
                                    ./assets/images/slider_mobile_3.webp 600w, 
                                    ./assets/images/slider_mobile_3.webp 700w, 
                                    ./assets/images/slider_mobile_3.webp 800w, 
                                    ./assets/images/slider_mobile_3.webp 900w, 
                                    ./assets/images/slider_mobile_3.webp 1000w, 
                                    ./assets/images/slider_mobile_3.webp 1200w" 
                                width="1200" 
                                height="1600" 
                                loading="eager" 
                                fetchpriority="low" 
                                sizes="100vw" 
                                class="sm:hidden" 
                                style="opacity: 1; transform: scale(1);">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center  text-custom" style="--text-color: 255 255 255;">
                                <div class="prose"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="acm_block_slider slideshow__slide" role="group" style="opacity: 0; visibility: hidden; z-index: 0;">
                        <div class="content-over-media content-over-media--auto " style="--content-over-media-content-max-width: 780px; --content-over-media-overlay: 0 0 0 / 0.0">
                            <img 
                                src="./assets/images/slider_pc_4.webp" 
                                alt="" 
                                srcset="
                                    ./assets/images/slider_pc_4.webp 200w, 
                                    ./assets/images/slider_pc_4.webp 300w, 
                                    ./assets/images/slider_pc_4.webp 400w, 
                                    ./assets/images/slider_pc_4.webp 500w, 
                                    ./assets/images/slider_pc_4.webp 600w, 
                                    ./assets/images/slider_pc_4.webp 700w, 
                                    ./assets/images/slider_pc_4.webp 800w, 
                                    ./assets/images/slider_pc_4.webp 900w, 
                                    ./assets/images/slider_pc_4.webp 1000w, 
                                    ./assets/images/slider_pc_4.webp 1200w, 
                                    ./assets/images/slider_pc_4.webp 1400w, 
                                    ./assets/images/slider_pc_4.webp 1600w, 
                                    ./assets/images/slider_pc_4.webp 1800w, 
                                    ./assets/images/slider_pc_4.webp 2000w, 
                                    ./assets/images/slider_pc_4.webp 2200w, 
                                    ./assets/images/slider_pc_4.webp 2400w, 
                                    ./assets/images/slider_pc_4.webp 2600w, 
                                    ./assets/images/slider_pc_4.webp 2800w" 
                                    width="2800" 
                                    height="1000" 
                                    loading="eager" 
                                    fetchpriority="low" 
                                    sizes="100vw" 
                                    class="hidden sm:block" 
                                    style="opacity: 1; transform: scale(1);">
                                <img 
                                    src="./assets/images/slider_mobile_4.webp" 
                                    alt="" 
                                    srcset="
                                        ./assets/images/slider_pc_4.webp 200w, 
                                        ./assets/images/slider_pc_4.webp 300w, 
                                        ./assets/images/slider_pc_4.webp 400w, 
                                        ./assets/images/slider_pc_4.webp 500w, 
                                        ./assets/images/slider_pc_4.webp 600w, 
                                        ./assets/images/slider_pc_4.webp 700w, 
                                        ./assets/images/slider_pc_4.webp 800w, 
                                        ./assets/images/slider_pc_4.webp 900w, 
                                        ./assets/images/slider_pc_4.webp 1000w, 
                                        ./assets/images/slider_pc_4.webp 1200w" 
                                    width="1200" 
                                    height="1600" 
                                    loading="eager" 
                                    fetchpriority="low" 
                                    sizes="100vw" 
                                    class="sm:hidden" 
                                    style="opacity: 1; transform: scale(1);">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center  text-custom" style="--text-color: 255 255 255;">
                                <div class="prose"></div>
                            </div>
                        </div>
                    </a>
                    <div class="slideshow__controls" style="opacity: 1; transform: translateY(0px);">
                        <page-dots class="numbered-dots" aria-controls="slideshow-template--17140497613106__slideshow">
                            <button type="button" class="numbered-dots__item" aria-current="true">
                                <svg width="100%" height="100%" style="--percent: 0">
                                    <circle cx="50%" cy="50%" r="15"></circle>
                                    <circle cx="50%" cy="50%" r="15" style="stroke-dasharray: 93.6404px, 93.6404px;"></circle>
                                </svg>
                                <span>1</span>
                            </button>
                            
                            <button type="button" class="numbered-dots__item" aria-current="false">
                                <svg width="100%" height="100%" style="--percent: 0">
                                    <circle cx="50%" cy="50%" r="15"></circle>
                                    <circle cx="50%" cy="50%" r="15" style="stroke-dasharray: 93.6404px, 93.6404px;"></circle>
                                </svg>
                                <span>2</span>
                            </button>
                            
                            <button type="button" class="numbered-dots__item" aria-current="false">
                                <svg width="100%" height="100%" style="--percent: 0">
                                    <circle cx="50%" cy="50%" r="15"></circle>
                                    <circle cx="50%" cy="50%" r="15" style="stroke-dasharray: 93.6404px, 93.6404px;"></circle>
                                </svg>
                                <span>3</span>
                            </button>
                            
                            <button type="button" class="numbered-dots__item" aria-current="false">
                                <svg width="100%" height="100%" style="--percent: 0">
                                    <circle cx="50%" cy="50%" r="15"></circle>
                                    <circle cx="50%" cy="50%" r="15" style="stroke-dasharray: 93.6404px, 93.6404px;"></circle>
                                </svg>
                                <span>4</span>
                            </button>
                        </page-dots>
                    </div>
                </slideshow-carousel>
            </x-slideshow>
        </section>

        <section id="shopify-section-template--17140497613106__6109a793-6349-4356-bed0-a99b76fb243d" class="shopify-section shopify-section--rich-text">
            <style>
                #shopify-section-template--17140497613106__6109a793-6349-4356-bed0-a99b76fb243d {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__6109a793-6349-4356-bed0-a99b76fb243d+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__6109a793-6349-4356-bed0-a99b76fb243d {
                    --rich-text-max-width: 650px
                }
            </style>

            <div class="section section-blends section-full">
                <div class="rich-text justify-center ">
                    <div class="rich-text__wrapper">
                        <div class="prose justify-items-center text-center">
                            <p class="h1 hyphenate">Danh Mục Sản Phẩm</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="shopify-section-template--17140497613106__collection-list" class="shopify-section shopify-section--collection-list">
            <style>
                #shopify-section-template--17140497613106__collection-list {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__collection-list+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__collection-list .collection-list {
                    --collection-list-grid: auto / auto-flow 73vw;
                }

                @media screen and (min-width: 700px) {
                    #shopify-section-template--17140497613106__collection-list .collection-list {
                        --collection-list-grid: auto / auto-flow 36vw;
                    }
                }

                @media screen and (min-width: 1000px) {
                    #shopify-section-template--17140497613106__collection-list .collection-list {
                        --collection-list-grid: auto / auto-flow calc(var(--container-inner-width) / 4 - (var(--grid-gutter) / 3 * 2));
                    }
                }

                @media screen and (min-width: 1400px) {
                    #shopify-section-template--17140497613106__collection-list .collection-list {
                        --collection-list-grid: auto / auto-flow calc(var(--container-inner-width) / 4 - (var(--grid-gutter) / 4 * 3));
                    }
                }
            </style>

            <div class="section   section-blends section-full">
                <div class="section-stack">
                    <div class="floating-controls-container">
                        <scroll-carousel selector=".collection-card" id="scroll-area-template--17140497613106__collection-list" class="scroll-area bleed ">
                            <collection-list class="collection-list">
                                <a href="#" class="collection-card  shadow" reveal-js="">
                                    <div class="content-over-media group rounded-sm" style="--content-over-media-overlay: 0 0 0 / 0.3">
                                        <img 
                                            src="./assets/images/danh_muc_1.webp" 
                                            alt="" 
                                            srcset="
                                                ./assets/images/danh_muc_1.webp 200w, 
                                                ./assets/images/danh_muc_1.webp 300w, 
                                                ./assets/images/danh_muc_1.webp 400w, 
                                                ./assets/images/danh_muc_1.webp 500w, 
                                                ./assets/images/danh_muc_1.webp 600w, 
                                                ./assets/images/danh_muc_1.webp 800w, 
                                                ./assets/images/danh_muc_1.webp 1000w, 
                                                ./assets/images/danh_muc_1.webp 1200w, 
                                                ./assets/images/danh_muc_1.webp 1400w" 
                                            width="1508" 
                                            height="2000" 
                                            loading="eager" 
                                            sizes="(max-width: 699px) 73vw, 360px" 
                                            class="zoom-image">
                                        <div class="collection-card__content-wrapper text-custom place-self-center text-center" style="--text-color: 255 255 255">
                                            <div class="collection-card__content prose">
                                                <p class="h4">Polo Trơn Basic</p>
                                            </div>
                                            <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="#" class="collection-card  shadow" reveal-js="">
                                    <div class="content-over-media group rounded-sm" style="--content-over-media-overlay: 0 0 0 / 0.3">
                                        <img 
                                            src="./assets/images/danh_muc_2.webp" 
                                            alt="" 
                                            srcset="
                                                ./assets/images/danh_muc_2.webp 200w, 
                                                ./assets/images/danh_muc_2.webp 300w, 
                                                ./assets/images/danh_muc_2.webp 400w, 
                                                ./assets/images/danh_muc_2.webp 500w, 
                                                ./assets/images/danh_muc_2.webp 600w, 
                                                ./assets/images/danh_muc_2.webp 800w, 
                                                ./assets/images/danh_muc_2.webp 1000w, 
                                                ./assets/images/danh_muc_2.webp 1200w, 
                                                ./assets/images/danh_muc_2.webp 1400w"
                                            width="1508" 
                                            height="2000" 
                                            loading="eager" 
                                            sizes="(max-width: 699px) 73vw, 360px" 
                                            class="zoom-image">
                                        <div class="collection-card__content-wrapper text-custom place-self-center text-center" style="--text-color: 255 255 255">
                                            <div class="collection-card__content prose">
                                                <p class="h4">Polo Họa Tiết</p>
                                            </div>
                                            <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="#" class="collection-card  shadow" reveal-js="">
                                    <div class="content-over-media group rounded-sm" style="--content-over-media-overlay: 0 0 0 / 0.3">
                                        <img 
                                            src="./assets/images/danh_muc_3.webp" 
                                            alt="" 
                                            srcset="
                                                ./assets/images/danh_muc_3.webp 200w, 
                                                ./assets/images/danh_muc_3.webp 300w, 
                                                ./assets/images/danh_muc_3.webp 400w, 
                                                ./assets/images/danh_muc_3.webp 500w, 
                                                ./assets/images/danh_muc_3.webp 600w, 
                                                ./assets/images/danh_muc_3.webp 800w, 
                                                ./assets/images/danh_muc_3.webp 1000w, 
                                                ./assets/images/danh_muc_3.webp 1200w" 
                                            width="1206" 
                                            height="1599" 
                                            loading="lazy" 
                                            sizes="(max-width: 699px) 73vw, 360px" 
                                            class="zoom-image">
                                        <div class="collection-card__content-wrapper text-custom place-self-center text-center" style="--text-color: 255 255 255">
                                            <div class="collection-card__content prose">
                                                <p class="h4">Polo Phối</p>
                                            </div>
                                            <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="#" class="collection-card  shadow" reveal-js="">
                                    <div class="content-over-media group rounded-sm" style="--content-over-media-overlay: 0 0 0 / 0.3">
                                        <img 
                                            src="./assets/images/danh_muc_4.webp" 
                                            alt="" 
                                            srcset="
                                                ./assets/images/danh_muc_4.webp 200w, 
                                                ./assets/images/danh_muc_4.webp 300w, 
                                                ./assets/images/danh_muc_4.webp 400w, 
                                                ./assets/images/danh_muc_4.webp 500w, 
                                                ./assets/images/danh_muc_4.webp 600w, 
                                                ./assets/images/danh_muc_4.webp 800w, 
                                                ./assets/images/danh_muc_4.webp 1000w, 
                                                ./assets/images/danh_muc_4.webp 1200w, 
                                                ./assets/images/danh_muc_4.webp 1400w" 
                                            width="1508" 
                                            height="2000" 
                                            loading="lazy" 
                                            sizes="(max-width: 699px) 73vw, 360px" 
                                            class="zoom-image">
                                        <div class="collection-card__content-wrapper text-custom place-self-center text-center" style="--text-color: 255 255 255">
                                            <div class="collection-card__content prose">
                                                <p class="h4">Áo Thun</p>
                                            </div>
                                            <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </collection-list>
                        </scroll-carousel>
                        <button is="prev-button" class="circle-button circle-button--lg circle-button--fill border group" aria-controls="scroll-area-template--17140497613106__collection-list" disabled="">
                            <span class="sr-only">Trở về</span>
                            <span class="animated-arrow animated-arrow--reverse"></span>
                        </button>

                        <button is="next-button" class="circle-button circle-button--lg circle-button--fill border group" aria-controls="scroll-area-template--17140497613106__collection-list">
                            <span class="sr-only">Tiếp tục</span>
                            <span class="animated-arrow"></span>
                        </button>
                    </div>
                </div>
            </div>

        </section>

        <section id="shopify-section-template--17140497613106__featured-collection" class="shopify-section shopify-section--featured-collection">
            <style>
                #shopify-section-template--17140497613106__featured-collection {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__featured-collection+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__featured-collection .product-list {
                    --product-list-gap: var(--product-list-row-gap) var(--product-list-column-gap);
                    --product-list-items-per-row: 2;
                    --product-list-carousel-item-width: 74vw;
                    --product-list-grid: auto / auto-flow var(--product-list-carousel-item-width);
                }

                @media screen and (min-width: 700px) {
                    #shopify-section-template--17140497613106__featured-collection .product-list {
                        --product-list-gap: var(--product-list-row-gap) var(--product-list-column-gap);
                        --product-list-items-per-row: 2;
                        --product-list-carousel-item-width: 36vw;
                    }
                }

                @media screen and (min-width: 1000px) {
                    #shopify-section-template--17140497613106__featured-collection .product-list {
                        --product-list-items-per-row: 3;
                        --product-list-carousel-item-width: calc(var(--container-inner-width) / 3 - (var(--product-list-column-gap) / 3 * 2));
                    }
                }
            </style>

            <div class="section section-blends section-full text-custom" style="--text-color: 35 49 75;">
                <div class="section-stack">
                    <section-header class="section-header ">
                        <div class="prose">
                            <h2 class="h2" reveal-on-scroll="true"><split-lines>Sản Phẩm Mới</split-lines></h2>
                        </div>
                        <a href="#" class="text-with-icon group">
                            <span class="reversed-link">Xem toàn bộ sản phẩm</span>
                            <span class="circle-chevron group-hover:colors">
                                <svg role="presentation" focusable="false" width="5" height="8" class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
                                    <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                                </svg>
                            </span>
                        </a>
                    </section-header>
                    <div class="floating-controls-container">
                        <scroll-carousel selector="product-card" id="scroll-area-template--17140497613106__featured-collection" class="scroll-area bleed is-scrollable">
                            <reveal-items selector=".product-list > *">
                                <product-list class="product-list">
                                    <product-card handle="ao-polo-nam-rent" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list">
                                            <on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge>
                                        </div>
                                        <div class="product-card__figure">
                                            <a href="#">
                                                <img 
                                                    src="./assets/images/san_pham_moi_truoc_1.webp" 
                                                    alt="Áo Polo Nam Rent vải Uni phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_truoc_1.webp 200w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 300w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 400w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 500w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 600w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 700w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 800w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 1000w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 1200w, 
                                                        ./assets/images/san_pham_moi_truoc_1.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    loading="eager" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" 
                                                    class="product-card__image product-card__image--primary aspect-tall">

                                                <img 
                                                    src="./assets/images/san_pham_moi_sau_1.webp" 
                                                    alt="Áo Polo Nam Rent vải Uni phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_sau_1.webp 200w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 300w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 400w,
                                                        ./assets/images/san_pham_moi_sau_1.webp 500w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 600w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 700w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 800w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 1000w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 1200w, 
                                                        ./assets/images/san_pham_moi_sau_1.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    class="product-card__image product-card__image--secondary object-fill" 
                                                    loading="eager" 
                                                    fetchpriority="low" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))">
                                            </a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-000536732" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div>
                                                            <svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-000536732" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-000536732" header-bordered="" open-from="bottom" handle="ao-polo-nam-rent" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>

                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center">
                                                <span class="product-card__title">
                                                    <a href="#" class="bold">Áo Polo Nam Rent vải Uni phom Regular Fit</a>
                                                </span>
                                                <price-list class="price-list  justify-center">
                                                    <sale-price class="text-on-sale"><span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>
                                                    <compare-at-price class="text-subdued line-through"><span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price>
                                                </price-list>
                                            </div>
                                        </div>
                                    </product-card>
                                    
                                    <product-card handle="ao-polo-nam-blaro-mau-trang" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list">
                                            <on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge>
                                        </div>
                                        <div class="product-card__figure">
                                            <a href="#">
                                                <img 
                                                    src="./assets/images/san_pham_moi_truoc_2.webp" 
                                                    alt="Áo Polo Nam Blaro Màu Trắng vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_truoc_2.webp 200w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 300w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 400w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 500w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 600w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 700w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 800w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 1000w, 
                                                        ./assets/images/san_pham_moi_truoc_2.webp 1200w" 
                                                    width="1206" 
                                                    height="1599" 
                                                    loading="eager" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" 
                                                    class="product-card__image product-card__image--primary aspect-tall">
                                                <img 
                                                    src="./assets/images/san_pham_moi_sau_2.webp" 
                                                    alt="Áo Polo Nam Blaro Màu Trắng vải CMC phom Regular Fit"
                                                    srcset="
                                                        ./assets/images/san_pham_moi_sau_2.webp 200w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 300w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 400w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 500w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 600w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 700w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 800w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 1000w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 1200w, 
                                                        ./assets/images/san_pham_moi_sau_2.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    class="product-card__image product-card__image--secondary object-fill" 
                                                    loading="eager" 
                                                    fetchpriority="low" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))">
                                            </a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-004584006" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div>
                                                            <svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-004584006" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-004584006" header-bordered="" open-from="bottom" handle="ao-polo-nam-blaro-mau-trang" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center">
                                                <span class="product-card__title">
                                                    <a href="#" class="bold">Áo Polo Nam Blaro Màu Trắng vải CMC phom Regular Fit</a>
                                                </span>
                                                <price-list class="price-list  justify-center">
                                                    <sale-price class="text-on-sale"><span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>
                                                    <compare-at-price class="text-subdued line-through"><span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price>
                                                </price-list>
                                            </div>
                                        </div>
                                    </product-card>
                                    
                                    <product-card handle="ao-polo-nam-karlis" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="#">
                                                <img 
                                                    src="./assets/images/san_pham_moi_truoc_3.webp" 
                                                    alt="Áo Polo Nam Karlis vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_truoc_3.webp 200w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 300w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 400w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 500w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 600w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 700w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 800w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 1000w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 1200w, 
                                                        ./assets/images/san_pham_moi_truoc_3.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    loading="lazy" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" 
                                                    class="product-card__image product-card__image--primary aspect-tall">
                                                    <img 
                                                        src="./assets/images/san_pham_moi_sau_3.webp" 
                                                        alt="Áo Polo Nam Karlis vải CMC phom Regular Fit" 
                                                        srcset="
                                                            ./assets/images/san_pham_moi_sau_3.webp 200w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 300w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 400w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 500w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 600w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 700w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 800w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 1000w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 1200w, 
                                                            ./assets/images/san_pham_moi_sau_3.webp 1400w"
                                                        width="1508" 
                                                        height="2000" 
                                                        class="product-card__image product-card__image--secondary object-fill" 
                                                        loading="lazy" 
                                                        fetchpriority="low" 
                                                        sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))">
                                                </a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-008019051" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div>
                                                            <svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-008019051" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-008019051" header-bordered="" open-from="bottom" handle="ao-polo-nam-karlis" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center">
                                                <span class="product-card__title"><a href="#" class="bold">Áo Polo Nam Karlis vải CMC phom Regular Fit</a></span>
                                                <price-list class="price-list  justify-center">
                                                    <sale-price class="text-on-sale"><span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>
                                                    <compare-at-price class="text-subdued line-through"><span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price>
                                                </price-list>
                                            </div>
                                        </div>
                                    </product-card>
                                    
                                    <product-card handle="ao-polo-nam-space" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list">
                                            <on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge>
                                        </div>
                                        <div class="product-card__figure">
                                            <a href="#">
                                                <img 
                                                    src="./assets/images/san_pham_moi_truoc_4.webp" 
                                                    alt="Áo Polo Nam Space vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_truoc_4.webp 200w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 300w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 400w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 500w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 600w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 700w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 800w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 1000w, 
                                                        ./assets/images/san_pham_moi_truoc_4.webp 1200w" 
                                                    width="1206" 
                                                    height="1599" 
                                                    loading="lazy" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" 
                                                    class="product-card__image product-card__image--primary aspect-tall">
                                                <img 
                                                    src="./assets/images/san_pham_moi_sau_4.webp" 
                                                    alt="Áo Polo Nam Space vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_sau_4.webp 200w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 300w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 400w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 500w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 600w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 700w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 800w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 1000w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 1200w, 
                                                        ./assets/images/san_pham_moi_sau_4.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    class="product-card__image product-card__image--secondary object-fill" 
                                                    loading="lazy" 
                                                    fetchpriority="low" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))">
                                            </a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-011137509" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div>
                                                            <svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-011137509" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-011137509" header-bordered="" open-from="bottom" handle="ao-polo-nam-space" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center">
                                                <span class="product-card__title"><a href="#" class="bold">Áo Polo Nam Space vải CMC phom Regular Fit</a></span>
                                                <price-list class="price-list  justify-center">
                                                    <sale-price class="text-on-sale"><span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>
                                                    <compare-at-price class="text-subdued line-through"><span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price>
                                                </price-list>
                                            </div>
                                        </div>
                                    </product-card>
                                    
                                    <product-card handle="ao-polo-nam-jay" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="#">
                                                <img 
                                                    src="./assets/images/san_pham_moi_truoc_5.webp" 
                                                    alt="Áo Polo Nam Jay vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_truoc_5.webp 200w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 300w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 400w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 500w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 600w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 700w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 800w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 1000w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 1200w, 
                                                        ./assets/images/san_pham_moi_truoc_5.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    loading="lazy" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" 
                                                    class="product-card__image product-card__image--primary aspect-tall">
                                                <img 
                                                    src="./assets/images/san_pham_moi_sau_5.webp" 
                                                    alt="Áo Polo Nam Jay vải CMC phom Regular Fit" 
                                                    srcset="
                                                        ./assets/images/san_pham_moi_sau_5.webp 200w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 300w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 400w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 500w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 600w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 700w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 800w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 1000w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 1200w, 
                                                        ./assets/images/san_pham_moi_sau_5.webp 1400w" 
                                                    width="1508" 
                                                    height="2000" 
                                                    class="product-card__image product-card__image--secondary object-fill" 
                                                    loading="lazy" 
                                                    fetchpriority="low" 
                                                    sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))">
                                            </a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-014043947" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div>
                                                            <svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-014043947" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div>
                                                        <span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-014043947" header-bordered="" open-from="bottom" handle="ao-polo-nam-jay" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center">
                                                <span class="product-card__title"><a href="#" class="bold">Áo Polo Nam Jay vải CMC phom Regular Fit</a></span>
                                                <price-list class="price-list  justify-center">
                                                    <sale-price class="text-on-sale"><span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>
                                                    <compare-at-price class="text-subdued line-through"><span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price>
                                                </price-list>
                                            </div>
                                        </div>
                                    </product-card>
                                    
                                    <!-- làm đến đây -->

                                    <product-card handle="ao-polo-nam-blaro-mau-den" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-blaro-mau-den"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=1056" alt="Áo Polo Nam Blaro Màu Đen vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Blaro_050123_1.jpg?v=1673001524&amp;width=1000 1000w" width="1056" height="1401" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=1508" alt="Áo Polo Nam Blaro Màu Đen vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_26.jpg?v=1673001524&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-016712259" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-016712259" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-016712259" header-bordered="" open-from="bottom" handle="ao-polo-nam-blaro-mau-den" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-blaro-mau-den" class="bold">Áo Polo Nam Blaro Màu Đen vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-andre" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-andre"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=1440" alt="Áo Polo Nam Andre vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_311222_16.jpg?v=1673413154&amp;width=1400 1400w" width="1440" height="1910" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=1440" alt="Áo Polo Nam Andre vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_andre_5123_20.jpg?v=1673413154&amp;width=1400 1400w" width="1440" height="1910" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-019993765" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-019993765" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-019993765" header-bordered="" open-from="bottom" handle="ao-polo-nam-andre" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-andre" class="bold">Áo Polo Nam Andre vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-eric" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-eric"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=1206" alt="Áo Polo Nam Eric vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Eric_050123_1.jpg?v=1673001560&amp;width=1200 1200w" width="1206" height="1599" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=1508" alt="Áo Polo Nam Eric vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-art-work_281022_43_1.jpg?v=1673001560&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-022384715" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-022384715" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-022384715" header-bordered="" open-from="bottom" handle="ao-polo-nam-eric" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-eric" class="bold">Áo Polo Nam Eric vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-flori" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-flori"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=1508" alt="Áo Polo Nam Flori vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_281022_14_1.jpg?v=1672126645&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=1282" alt="Áo Polo Nam Flori vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Flori_261222_1.jpg?v=1672126993&amp;width=1200 1200w" width="1282" height="1700" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-025159372" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-025159372" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-025159372" header-bordered="" open-from="bottom" handle="ao-polo-nam-flori" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-flori" class="bold">Áo Polo Nam Flori vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-hudson" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-hudson"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=1508" alt="Áo Polo Nam Hudson vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_1.jpg?v=1675409165&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=1508" alt="Áo Polo Nam Hudson vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_Hudson_030223_2.jpg?v=1675409165&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-027656491" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-027656491" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-027656491" header-bordered="" open-from="bottom" handle="ao-polo-nam-hudson" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-hudson" class="bold">Áo Polo Nam Hudson vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-carlee" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-carlee"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=1508" alt="Áo Polo Nam Carlee vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_20.jpg?v=1673408271&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=1508" alt="Áo Polo Nam Carlee vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_carlee_311222_25.jpg?v=1673408271&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-030159080" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-030159080" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-030159080" header-bordered="" open-from="bottom" handle="ao-polo-nam-carlee" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-carlee" class="bold">Áo Polo Nam Carlee vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-digo" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-digo"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1508" alt="Áo Polo Nam Digo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1508" alt="Áo Polo Nam Digo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) 74vw, (max-width: 999px) 38vw, calc(min(100vw - 96px, 1440px) / 3 - (24px / 3 * 2))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-032584542" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-032584542" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-032584542" header-bordered="" open-from="bottom" handle="ao-polo-nam-digo" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-digo" class="bold">Áo Polo Nam Digo vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card></product-list>
                            </reveal-items>
                        </scroll-carousel><button is="prev-button" class="circle-button circle-button--lg circle-button--fill border group" aria-controls="scroll-area-template--17140497613106__featured-collection" disabled="">
                            <span class="sr-only">Trở về</span>
                            <span class="animated-arrow animated-arrow--reverse"></span>
                        </button>

                        <button is="next-button" class="circle-button circle-button--lg circle-button--fill border group" aria-controls="scroll-area-template--17140497613106__featured-collection">
                            <span class="sr-only">Tiếp tục</span>
                            <span class="animated-arrow"></span>
                        </button>
                    </div>
                </div>
            </div>

        </section>
        <section id="shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8" class="shopify-section shopify-section--featured-collection">
            <style>
                #shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8 {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8 .product-list {
                    --product-list-gap: var(--product-list-row-gap) var(--spacing-2);
                    --product-list-items-per-row: 2;
                    --product-list-carousel-item-width: 74vw;
                    --product-list-grid: auto / repeat(var(--product-list-items-per-row), minmax(0, 1fr));
                }

                @media screen and (min-width: 700px) {
                    #shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8 .product-list {
                        --product-list-gap: var(--product-list-row-gap) var(--product-list-column-gap);
                        --product-list-items-per-row: 2;
                        --product-list-carousel-item-width: 36vw;
                    }
                }

                @media screen and (min-width: 1000px) {
                    #shopify-section-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8 .product-list {
                        --product-list-items-per-row: 4;
                        --product-list-carousel-item-width: calc(var(--container-inner-width) / 4 - (var(--product-list-column-gap) / 4 * 3));
                    }
                }
            </style>

            <div class="section   section-blends section-full">
                <div class="section-stack">
                    <section-header class="section-header ">
                        <div class="prose">
                            <h2 class="h2" reveal-on-scroll="true"><split-lines>Tất Cả Sản Phẩm</split-lines></h2>
                        </div><a href="https://polomanor.vn/collections/all-sp" class="text-with-icon group">
                            <span class="reversed-link">Xem toàn bộ sản phẩm</span>
                            <span class="circle-chevron group-hover:colors"><svg role="presentation" focusable="false" width="5" height="8" class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
                                    <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                                </svg></span>
                        </a>
                    </section-header>
                    <div class="scrollable-with-controls"><scroll-carousel selector="product-card" id="scroll-area-template--17140497613106__e2b3dc94-4b58-444e-aca8-3641ef6502f8" class="scroll-area bleed">
                            <reveal-items selector=".product-list > *">
                                <product-list class="product-list"><product-card handle="polo-nam-basicman" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">SALE</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/polo-nam-basicman"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=1508" alt="Áo Polo Nam Basicman vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=1400 1400w" width="1508" height="2000" loading="eager" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/c14be627626b44d492ecf15f6a247217.thumbnail.0000000000.jpg?v=1672198359&amp;width=1000 1000w" width="1080" height="1350" class="product-card__image product-card__image--secondary object-fill" loading="eager" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-040399385" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-040399385" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-040399385" header-bordered="" open-from="bottom" handle="polo-nam-basicman" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/polo-nam-basicman" class="bold">Áo Polo Nam Basicman vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>Từ 199.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                            <div class="product-card__aside">
                                                <fieldset class="product-card__variant-list" data-option-position="2"><input class="sr-only" type="radio" name="swatch-041512377" id="swatch-042387172" value="Đen" checked="checked"><label class="media-swatch media-swatch--sm " for="swatch-042387172" data-option-value="">
                                                        <span class="sr-only">Đen</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=1508" alt="Áo Polo Nam Basicman vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman_201222_1.jpg?v=1672198749&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-041512377" id="swatch-042868729" value="Trắng"><label class="media-swatch media-swatch--sm " for="swatch-042868729" data-option-value="">
                                                        <span class="sr-only">Trắng</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_31_1_c8b11bad-ef6e-41fb-8d82-c3ff9802f21a.jpg?v=1676962115&amp;width=1508" alt="Áo Polo Nam Basicman vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_31_1_c8b11bad-ef6e-41fb-8d82-c3ff9802f21a.jpg?v=1676962115&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_31_1_c8b11bad-ef6e-41fb-8d82-c3ff9802f21a.jpg?v=1676962115&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-041512377" id="swatch-043265820" value="Xanh đen"><label class="media-swatch media-swatch--sm " for="swatch-043265820" data-option-value="">
                                                        <span class="sr-only">Xanh đen</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_27_1_9d343d79-5fbd-4191-b500-e2c3f44797b9.jpg?v=1676962166&amp;width=1508" alt="Áo Polo Nam Basicman vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_27_1_9d343d79-5fbd-4191-b500-e2c3f44797b9.jpg?v=1676962166&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Polo-basic-man_281022_27_1_9d343d79-5fbd-4191-b500-e2c3f44797b9.jpg?v=1676962166&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-041512377" id="swatch-043617933" value="Xanh rêu"><label class="media-swatch media-swatch--sm " for="swatch-043617933" data-option-value="">
                                                        <span class="sr-only">Xanh rêu</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman-reu_030223_1_1_9bc98044-2930-4f9c-83ea-36d72d297f97.jpg?v=1676962196&amp;width=1508" alt="Áo Polo Nam Basicman vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman-reu_030223_1_1_9bc98044-2930-4f9c-83ea-36d72d297f97.jpg?v=1676962196&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicman-reu_030223_1_1_9bc98044-2930-4f9c-83ea-36d72d297f97.jpg?v=1676962196&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><a href="https://polomanor.vn/products/polo-nam-basicman" class="media-swatch__view-more text-xs text-subdued">+4</a></fieldset>
                                            </div>
                                        </div>
                                    </product-card><product-card handle="ao-thun-nam-basicman" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 41.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-thun-nam-basicman"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=1508" alt="Áo Thun Nam Basicman vải Cotton phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=1400 1400w" width="1508" height="2000" loading="eager" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/408623b95e8341a29c92d8839fbdf02e.thumbnail.0000000000.jpg?v=1672216604&amp;width=1000 1000w" width="1080" height="1350" class="product-card__image product-card__image--secondary object-fill" loading="eager" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-046039073" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-046039073" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-046039073" header-bordered="" open-from="bottom" handle="ao-thun-nam-basicman" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-thun-nam-basicman" class="bold">Áo Thun Nam Basicman vải Cotton phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>179.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>220.000₫</compare-at-price></price-list></div>
                                            <div class="product-card__aside">
                                                <fieldset class="product-card__variant-list" data-option-position="2"><input class="sr-only" type="radio" name="swatch-046876074" id="swatch-047046797" value="Trắng" checked="checked"><label class="media-swatch media-swatch--sm " for="swatch-047046797" data-option-value="">
                                                        <span class="sr-only">Trắng</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=1508" alt="Áo Thun Nam Basicman vải Cotton phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_1_2.jpg?v=1672216538&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-046876074" id="swatch-047426462" value="Đen"><label class="media-swatch media-swatch--sm " for="swatch-047426462" data-option-value="">
                                                        <span class="sr-only">Đen</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2102_2_fad862b1-9db9-4e34-8e86-d37eabbb5d01.jpg?v=1676970671&amp;width=1508" alt="Áo Thun Nam Basicman vải Cotton phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2102_2_fad862b1-9db9-4e34-8e86-d37eabbb5d01.jpg?v=1676970671&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2102_2_fad862b1-9db9-4e34-8e86-d37eabbb5d01.jpg?v=1676970671&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-046876074" id="swatch-047890479" value="Xám đậm"><label class="media-swatch media-swatch--sm " for="swatch-047890479" data-option-value="">
                                                        <span class="sr-only">Xám đậm</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_19_1_608d17c1-c01d-4362-a8d8-aecbd25cee33.jpg?v=1676971555&amp;width=1508" alt="Áo Thun Nam Basicman vải Cotton phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_19_1_608d17c1-c01d-4362-a8d8-aecbd25cee33.jpg?v=1676971555&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_19_1_608d17c1-c01d-4362-a8d8-aecbd25cee33.jpg?v=1676971555&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-046876074" id="swatch-048227131" value="Đỏ đậm"><label class="media-swatch media-swatch--sm " for="swatch-048227131" data-option-value="">
                                                        <span class="sr-only">Đỏ đậm</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_20.jpg?v=1676970592&amp;width=1508" alt="Áo Thun Nam Basicman vải Cotton phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_20.jpg?v=1676970592&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-thun_Basicman_2112_20.jpg?v=1676970592&amp;width=120 120w" width="1508" height="2000" loading="eager" sizes="60px" class="object-cover"></label><a href="https://polomanor.vn/products/ao-thun-nam-basicman" class="media-swatch__view-more text-xs text-subdued">+1</a></fieldset>
                                            </div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-basic-vee-vải-cvc-phom-regular-fit" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-basic-vee-v%E1%BA%A3i-cvc-phom-regular-fit"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-Vee_Be_210223-_29.jpg?v=1677124430&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-050527722" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-050527722" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-050527722" header-bordered="" open-from="bottom" handle="ao-polo-nam-basic-vee-vải-cvc-phom-regular-fit" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-basic-vee-v%E1%BA%A3i-cvc-phom-regular-fit" class="bold">Áo Polo Nam Basic Vee vải CVC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                            <div class="product-card__aside">
                                                <fieldset class="product-card__variant-list" data-option-position="2"><input class="sr-only" type="radio" name="swatch-051275042" id="swatch-051430982" value="Trắng" checked="checked"><label class="media-swatch media-swatch--sm " for="swatch-051430982" data-option-value="">
                                                        <span class="sr-only">Trắng</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_10_1.jpg?v=1675307362&amp;width=120 120w" width="1508" height="2000" loading="lazy" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-051275042" id="swatch-051904951" value="Đen"><label class="media-swatch media-swatch--sm " for="swatch-051904951" data-option-value="">
                                                        <span class="sr-only">Đen</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_3_3.jpg?v=1677230285&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_3_3.jpg?v=1677230285&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_3_3.jpg?v=1677230285&amp;width=120 120w" width="1508" height="2000" loading="lazy" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-051275042" id="swatch-052297811" value="Xanh đen"><label class="media-swatch media-swatch--sm " for="swatch-052297811" data-option-value="">
                                                        <span class="sr-only">Xanh đen</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_4_3.jpg?v=1677230302&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_4_3.jpg?v=1677230302&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_4_3.jpg?v=1677230302&amp;width=120 120w" width="1508" height="2000" loading="lazy" sizes="60px" class="object-cover"></label><input class="sr-only" type="radio" name="swatch-051275042" id="swatch-052627664" value="Be"><label class="media-swatch media-swatch--sm " for="swatch-052627664" data-option-value="">
                                                        <span class="sr-only">Be</span><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_5_3.jpg?v=1677230336&amp;width=1508" alt="Áo Polo Nam Basic Vee vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_5_3.jpg?v=1677230336&amp;width=60 60w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basic-vee_071122_5_3.jpg?v=1677230336&amp;width=120 120w" width="1508" height="2000" loading="lazy" sizes="60px" class="object-cover"></label></fieldset>
                                            </div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-arlo" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-arlo"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=1206" alt="Áo Polo Nam Arlo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Arlo_151122_10.jpg?v=1672196541&amp;width=1200 1200w" width="1206" height="1599" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=1440" alt="Áo Polo Nam Arlo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_arlo_141122_13.jpg?v=1672196541&amp;width=1400 1400w" width="1440" height="1910" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-054834467" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-054834467" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-054834467" header-bordered="" open-from="bottom" handle="ao-polo-nam-arlo" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-arlo" class="bold">Áo Polo Nam Arlo vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-basicbear" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-basicbear"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=1508" alt="Áo Polo Nam BasicBear vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_20.jpg?v=1672214633&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=1508" alt="Áo Polo Nam BasicBear vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Basicbear_281022_19.jpg?v=1672214646&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-057313117" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-057313117" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-057313117" header-bordered="" open-from="bottom" handle="ao-polo-nam-basicbear" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-basicbear" class="bold">Áo Polo Nam BasicBear vải CVC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-yong" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-yong"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=1206" alt="Áo Polo Nam Yong vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_1.jpg?v=1672200869&amp;width=1200 1200w" width="1206" height="1599" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=1206" alt="Áo Polo Nam Yong vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Yong_081222_2.jpg?v=1672200869&amp;width=1200 1200w" width="1206" height="1599" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-059650583" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-059650583" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-059650583" header-bordered="" open-from="bottom" handle="ao-polo-nam-yong" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-yong" class="bold">Áo Polo Nam Yong vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-renzo" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-renzo"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=2714" alt="Áo Polo Nam Renzo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=1400 1400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=1600 1600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_4.jpg?v=1672126957&amp;width=1800 1800w" width="2714" height="3599" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=3016" alt="Áo Polo Nam Renzo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=1400 1400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=1600 1600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_renzo-_6.jpg?v=1672126957&amp;width=1800 1800w" width="3016" height="4000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-062263466" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-062263466" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-062263466" header-bordered="" open-from="bottom" handle="ao-polo-nam-renzo" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-renzo" class="bold">Áo Polo Nam Renzo vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-gonza" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-gonza"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=1440" alt="Áo Polo Nam Gonza vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_10.jpg?v=1672116410&amp;width=1400 1400w" width="1440" height="1910" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=1440" alt="Áo Polo Nam Gonza vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao_polo_gonza-_6.jpg?v=1672124612&amp;width=1400 1400w" width="1440" height="1910" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-064720925" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-064720925" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-064720925" header-bordered="" open-from="bottom" handle="ao-polo-nam-gonza" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-gonza" class="bold">Áo Polo Nam Gonza vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-mio" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-mio"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=1357" alt="Áo Polo Nam Mio vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_261122_1.jpg?v=1672213643&amp;width=1200 1200w" width="1357" height="1800" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=1508" alt="Áo Polo Nam Mio vải CVC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Mio_281122_5__jpg.jpg?v=1672213643&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-067220641" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-067220641" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-067220641" header-bordered="" open-from="bottom" handle="ao-polo-nam-mio" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-mio" class="bold">Áo Polo Nam Mio vải CVC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-dylen" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-dylen"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=1206" alt="Áo Polo Nam Dylen vải Jacquard phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_1_1.jpg?v=1672215751&amp;width=1200 1200w" width="1206" height="1599" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=1508" alt="Áo Polo Nam Dylen vải Jacquard phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Dylen_011122_2.jpg?v=1672215751&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-069661891" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-069661891" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-069661891" header-bordered="" open-from="bottom" handle="ao-polo-nam-dylen" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-dylen" class="bold">Áo Polo Nam Dylen vải Jacquard phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-ugo-mau-xanh-la" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-xanh-la"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=1508" alt="Áo Polo Nam Ugo Màu Xanh Lá vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_1.jpg?v=1672197407&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=1508" alt="Áo Polo Nam Ugo Màu Xanh Lá vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanh_121122_6.jpg?v=1672197407&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-072271676" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-072271676" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-072271676" header-bordered="" open-from="bottom" handle="ao-polo-nam-ugo-mau-xanh-la" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-xanh-la" class="bold">Áo Polo Nam Ugo Màu Xanh Lá vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-ugo-mau-den" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-den"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=1280" alt="Áo Polo Nam Ugo Màu Đen vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_8.jpg?v=1672131697&amp;width=1200 1200w" width="1280" height="1698" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=1200" alt="Áo Polo Nam Ugo Màu Đen vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoden_160722_5.jpg?v=1672131697&amp;width=1200 1200w" width="1200" height="1592" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-074889709" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-074889709" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-074889709" header-bordered="" open-from="bottom" handle="ao-polo-nam-ugo-mau-den" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-den" class="bold">Áo Polo Nam Ugo Màu Đen vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-ugo-mau-navy" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-navy"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=1200" alt="Áo Polo Nam Ugo Màu Navy vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model__7.jpg?v=1675313215&amp;width=1200 1200w" width="1200" height="1592" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=1200" alt="Áo Polo Nam Ugo Màu Navy vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Ugoxanhcoban_model_6.jpg?v=1675313215&amp;width=1200 1200w" width="1200" height="1592" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-077199410" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-077199410" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-077199410" header-bordered="" open-from="bottom" handle="ao-polo-nam-ugo-mau-navy" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-ugo-mau-navy" class="bold">Áo Polo Nam Ugo Màu Navy vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-digo" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-digo"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1508" alt="Áo Polo Nam Digo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_11.jpg?v=1676695408&amp;width=1400 1400w" width="1508" height="2000" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1508" alt="Áo Polo Nam Digo vải CMC phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Digo_121122_13.jpg?v=1676695408&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-079611599" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-079611599" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-079611599" header-bordered="" open-from="bottom" handle="ao-polo-nam-digo" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-digo" class="bold">Áo Polo Nam Digo vải CMC phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-ida" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 51.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-ida"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=1440" alt="Áo Polo Nam Ida vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_11.jpg?v=1672197869&amp;width=1400 1400w" width="1440" height="1910" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=1440" alt="Áo Polo Nam Ida vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_aopolo_ida_model_051022_12.jpg?v=1672197934&amp;width=1400 1400w" width="1440" height="1910" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-081849241" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-081849241" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-081849241" header-bordered="" open-from="bottom" handle="ao-polo-nam-ida" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-ida" class="bold">Áo Polo Nam Ida vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>299.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card><product-card handle="ao-polo-nam-kenji" class="product-card product-card--blends product-card--show-secondary-media bg-custom text-custom" style="--background: 255 255 255; --text-color: 35 49 75;">
                                        <div class="product-card__badge-list"><on-sale-badge discount-mode="saving" class="badge badge--on-sale">Tiết kiệm 30.000₫</on-sale-badge></div>
                                        <div class="product-card__figure">
                                            <a href="https://polomanor.vn/products/ao-polo-nam-kenji"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=1056" alt="Áo Polo Nam Kenji vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_1.jpg?v=1672202871&amp;width=1000 1000w" width="1056" height="1401" loading="lazy" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))" class="product-card__image product-card__image--primary aspect-tall"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=1508" alt="Áo Polo Nam Kenji vải Uni phom Regular Fit" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/products/Polomanor_ao-polo_Kenji_131122_8.jpg?v=1672202871&amp;width=1400 1400w" width="1508" height="2000" class="product-card__image product-card__image--secondary object-fill" loading="lazy" fetchpriority="low" sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 999px) calc(100vw / 3 - 64px), calc(min(100vw - 96px, 1440px) / 4 - (24px / 4 * 3))"></a>
                                            <div class="product-card__quick-buy">
                                                <div class="pointer-fine:hidden">
                                                    <button type="button" aria-controls="quick-buy-084195487" aria-expanded="false" aria-label="+ Thêm nhanh" is="custom-button" class="product-card__mobile-quick-buy-button">
                                                        <div><svg role="presentation" fill="none" stroke-width="1.5" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                                                <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg></div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="pointer-coarse:hidden">
                                                    <button type="button" class="button" aria-controls="quick-buy-084195487" aria-expanded="false" is="custom-button">
                                                        <div>+ Thêm nhanh</div><span class="button__loader">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </span>
                                                    </button>
                                                </div>

                                                <quick-buy-drawer id="quick-buy-084195487" header-bordered="" open-from="bottom" handle="ao-polo-nam-kenji" role="dialog" aria-live="polite" class="quick-buy-drawer drawer" aria-modal="true"></quick-buy-drawer>
                                            </div>
                                        </div>
                                        <div class="product-card__info product-card__info--center">
                                            <div class="v-stack gap-0.5 w-full justify-items-center"><span class="product-card__title"><a href="https://polomanor.vn/products/ao-polo-nam-kenji" class="bold">Áo Polo Nam Kenji vải Uni phom Regular Fit</a></span><price-list class="price-list  justify-center"><sale-price class="text-on-sale">
                                                        <span class="sr-only">Giá khuyến mãi</span>320.000₫</sale-price>

                                                    <compare-at-price class="text-subdued line-through">
                                                        <span class="sr-only">Giá niêm yết</span>350.000₫</compare-at-price></price-list></div>
                                        </div>
                                    </product-card></product-list>
                            </reveal-items>
                        </scroll-carousel></div>
                </div>
            </div>

        </section>
        <section id="shopify-section-template--17140497613106__impact-text" class="shopify-section shopify-section--impact-text"></section>
        <section id="shopify-section-template--17140497613106__image-with-text-overlay" class="shopify-section shopify-section--image-with-text-overlay">
            <style>
                #shopify-section-template--17140497613106__image-with-text-overlay {
                    --section-outer-spacing-block: 0;
                    --content-over-media-overlay: 0 0 0 / 0.0;
                }
            </style>

            <div class="section   section-blends section-full text-custom" style="--text-color: 255 255 255;"><image-banner reveal-on-scroll="true" class="content-over-media content-over-media--auto full-bleed  text-custom" style="--text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=4448" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=900 900w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=1400 1400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=1600 1600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=1800 1800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=2000 2000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=2200 2200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=2400 2400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=2600 2600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=2800 2800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=3000 3000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_1_1_1.jpg?v=1671680555&amp;width=3200 3200w" width="4448" height="1499" loading="lazy" sizes="100vw" class="hidden sm:block"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=4448" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=900 900w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=1400 1400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/8_2.jpg?v=1671680653&amp;width=1600 1600w" width="4448" height="4448" loading="lazy" sizes="100vw" class="sm:hidden">
                    <div class="place-self-center text-center sm:place-self-center sm:text-center">
                        <div class="prose">
                            <p class="bold">Định vị thương hiệu</p>
                            <p class="h1" reveal-on-scroll="true"><split-lines>New class of casual Polo</split-lines></p>
                            <div>
                                <p>Polomanor định vị sự khác biệt đến từ những chiếc áo Polo đời thường hằng ngày, mỗi sản phẩm mang đủ 3 yếu tố:</p>
                                <p>Dễ phối - Sang trọng - Tiện lợi</p>
                            </div>
                        </div>
                    </div>
                </image-banner>
            </div>

        </section>
        <section id="shopify-section-template--17140497613106__before-after-image" class="shopify-section shopify-section--before-after-image" style="--clip-path-offset:0px;">
            <style>
                #shopify-section-template--17140497613106__before-after-image {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__before-after-image+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__before-after-image {
                    --section-stack-intro: 50%;
                    --section-stack-main: 66.6667%;

                    --before-after-initial-drag-position: 50%;
                }
            </style>
            <div class="section   section-blends section-full">
                <div class="section-stack section-stack--center ">
                    <div class="section-stack__intro">
                        <div class="prose text-center">
                            <p>Chúng tôi - Polomanor luôn cố gắng để trở thành lựa chọn hàng đầu mỗi khi người đàn ông cần khơi dậy thần thái</p>
                            <p><strong>PHONG ĐỘ ĐÚNG LÚC</strong></p>
                        </div>
                    </div>
                    <div class="section-stack__main">
                        <div class="before-after shadow  text-custom" style="--text-color: 255 255 255;">
                            <div class="before-after__before-image  text-custom" style="--text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=1200" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_1.jpg?v=1671095787&amp;width=1200 1200w" width="1200" height="1500" loading="lazy" sizes="(max-width: 999px) 100vw, 1000px" draggable="false" class="rounded">
                                <p class="before-after__label before-after__label--left before-after__label--bottom h5">Before</p>
                            </div>

                            <div class="before-after__after-image  text-custom" style="--text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=1200" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/phong_do_dung_luc_frame_2_a6845bad-3e94-4208-9adc-1e0fc735f2b9.jpg?v=1671520788&amp;width=1200 1200w" width="1200" height="1500" loading="lazy" sizes="(max-width: 999px) 100vw, 1000px" class="object-fill rounded" draggable="false">
                                <p class="before-after__label before-after__label--right before-after__label--bottom h5">After</p>
                            </div>

                            <div class="before-after__cursor-wrapper">
                                <split-cursor class="before-after__cursor">
                                    <span class="sr-only">Kéo</span><svg role="presentation" focusable="false" width="28" height="35" class="icon icon-drag-handle" viewBox="0 0 32 40">
                                        <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16V24C32 32.8366 24.8366 40 16 40C7.16344 40 0 32.8366 0 24V16Z" fill="currentColor"></path>
                                        <path fill="rgb(var(--text-primary))" d="M11 14H13V26H11zM15 14H17V26H15zM19 14H21V26H19z"></path>
                                    </svg></split-cursor>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="shopify-section-template--17140497613106__media-grid" class="shopify-section shopify-section--media-grid">
            <style>
                #shopify-section-template--17140497613106__media-grid {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__media-grid+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__media-grid {
                    --media-grid-row-height: 150px;
                }

                @media screen and (min-width: 700px) {
                    #shopify-section-template--17140497613106__media-grid {
                        --media-grid-row-height: 290px;
                    }
                }

                #media-grid-item-1 {
                    --content-over-media-overlay: 0 0 0 /0.46;
                    --content-over-media-gap: 1rem;
                }

                @media screen and (min-width: 740px) {
                    #media-grid-item-1 {
                        --content-over-media-gap: 1.5rem;
                    }
                }

                #media-grid-item-2 {
                    --content-over-media-overlay: 0 0 0 /0.0;
                    --content-over-media-gap: 1rem;
                }

                @media screen and (min-width: 740px) {
                    #media-grid-item-2 {
                        --content-over-media-gap: 1.5rem;
                    }
                }

                #media-grid-item-3 {
                    --content-over-media-overlay: 0 0 0 /0.0;
                }

                #media-grid-29246d34-c6e0-4373-84f6-b15e57736a00 {
                    --content-over-media-overlay: 0 0 0 /0.0;
                }
            </style>
            <div class="section   section-blends section-full">
                <media-grid class="media-grid"><a class="media-grid__item shadow group" reveal-js="" style="--media-grid-column-span: 2; --media-grid-row-span: 2">
                        <div id="media-grid-item-1" class="content-over-media rounded bg-custom text-custom" style="--background: 0 0 0; --text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=752" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/your-style-left.png?v=1670840869&amp;width=700 700w" width="752" height="650" loading="lazy" sizes="(max-width: 699px) 100vw, min(780px, 50vw)" class="content-over-media__media zoom-image">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center">
                                <div class="prose">
                                    <p class="h5">
                                        Mỗi sản phẩm đến tay bạn là những chất xám và công sức của cả một tập thể phía sau
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a><a class="media-grid__item shadow group" reveal-js="" style="--media-grid-column-span: 1; --media-grid-row-span: 1">
                        <div id="media-grid-item-2" class="content-over-media rounded bg-custom text-custom" style="--background: 0 0 0; --text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=3024" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=1000 1000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=1200 1200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=1400 1400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=1600 1600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=1800 1800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=2000 2000w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=2200 2200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/IMG_97921.jpg?v=1671077698&amp;width=2400 2400w" width="3024" height="3024" loading="lazy" sizes="(max-width: 699px) 100vw, min(390px, 25vw)" class="content-over-media__media zoom-image"></div>
                    </a><a class="media-grid__item shadow group" reveal-js="" style="--media-grid-column-span: 1; --media-grid-row-span: 1">
                        <div id="media-grid-item-3" class="content-over-media rounded bg-custom text-custom" style="--background: 0 0 0; --text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=1080" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=800 800w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/alo_alo1.jpg?v=1671679448&amp;width=1000 1000w" width="1080" height="1080" loading="lazy" sizes="(max-width: 699px) 100vw, min(390px, 25vw)" class="content-over-media__media zoom-image"></div>
                    </a><a class="media-grid__item shadow group" reveal-js="" style="--media-grid-column-span: 2; --media-grid-row-span: 1">
                        <div id="media-grid-29246d34-c6e0-4373-84f6-b15e57736a00" class="content-over-media rounded bg-custom text-custom" style="--background: 0 0 0; --text-color: 255 255 255;"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=886" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=200 200w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=400 400w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=500 500w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=600 600w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=700 700w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/305285072_136619802433240_8264298626722550243_n_3472b698-1d7b-4011-9519-a548db6ebf0c.jpg?v=1671679605&amp;width=800 800w" width="886" height="500" loading="lazy" sizes="(max-width: 699px) 100vw, min(780px, 50vw)" class="content-over-media__media zoom-image"></div>
                    </a></media-grid>
            </div>

        </section>
        <section id="shopify-section-template--17140497613106__4450dd2e-a511-43ff-8cfa-214d5679d500" class="shopify-section shopify-section--multi-column">
            <style>
                #shopify-section-template--17140497613106__4450dd2e-a511-43ff-8cfa-214d5679d500 {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17140497613106__4450dd2e-a511-43ff-8cfa-214d5679d500+* {
                    --previous-section-background-hash: 0;
                }
            </style>
            <style>
                #shopify-section-template--17140497613106__4450dd2e-a511-43ff-8cfa-214d5679d500 {
                    --multi-column-grid: auto / auto-flow 73vw;
                    --multi-column-list-gap: var(--spacing-12);
                }
            </style>

            <div class="section   section-blends section-full">
                <div class="section-stack">
                    <section-header class="section-header justify-start justify-items-start text-start">
                        <div class="prose">
                            <h2 class="h2" reveal-on-scroll="true"><split-lines>Khám phá</split-lines></h2>
                        </div>
                    </section-header>
                    <div class="multi-column scroll-area bleed md:unbleed">
                        <div class="multi-column__item snap-start" style="--multi-column-item-column-count: span 4">
                            <a href="https://www.instagram.com/polomanor.vn"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/polomanor-gram-1551041818521505792_007eab80-b634-4686-9a11-de8a4883b72c.jpg?v=1671091632&amp;width=411" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/polomanor-gram-1551041818521505792_007eab80-b634-4686-9a11-de8a4883b72c.jpg?v=1671091632&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/polomanor-gram-1551041818521505792_007eab80-b634-4686-9a11-de8a4883b72c.jpg?v=1671091632&amp;width=400 400w" width="411" height="598" loading="lazy" sizes="(max-width: 699px) calc(73vw - 40px), (max-width: 999px) calc(38vw - 64px), calc(min(1440px, 100vw) / 3)" class="rounded">
                                <div class="v-stack gap-4 text-start">
                                    <p class="h3">POLO-GRAM</p>
                                    <div class="prose">
                                        <p>Nơi sự thanh lịch của những chiếc áo Polo được thể hiện qua các bức ảnh</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="multi-column__item snap-start" style="--multi-column-item-column-count: span 4">
                            <a href="https://www.tiktok.com/@polomanor.official"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/ong-chu-polo-1551042005788790784.jpg?v=1671091656&amp;width=412" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/ong-chu-polo-1551042005788790784.jpg?v=1671091656&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/ong-chu-polo-1551042005788790784.jpg?v=1671091656&amp;width=400 400w" width="412" height="598" loading="lazy" sizes="(max-width: 699px) calc(73vw - 40px), (max-width: 999px) calc(38vw - 64px), calc(min(1440px, 100vw) / 3)" class="rounded">
                                <div class="v-stack gap-4 text-start">
                                    <p class="h3">ÔNG CHÚ POLO</p>
                                    <div class="prose">
                                        <p>Những chiếc video triệu view đầy thú vị về Ông Chú Polo</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="multi-column__item snap-start" style="--multi-column-item-column-count: span 4">
                            <a href="https://www.facebook.com/groups/762790127950971"><img src="//cdn.shopify.com/s/files/1/0685/2237/7522/files/nghien-polo-1551042039641018368.jpg?v=1671091701&amp;width=411" alt="" srcset="//cdn.shopify.com/s/files/1/0685/2237/7522/files/nghien-polo-1551042039641018368.jpg?v=1671091701&amp;width=300 300w, //cdn.shopify.com/s/files/1/0685/2237/7522/files/nghien-polo-1551042039641018368.jpg?v=1671091701&amp;width=400 400w" width="411" height="598" loading="lazy" sizes="(max-width: 699px) calc(73vw - 40px), (max-width: 999px) calc(38vw - 64px), calc(min(1440px, 100vw) / 3)" class="rounded">
                                <div class="v-stack gap-4 text-start">
                                    <p class="h3">NGHIỆN POLO</p>
                                    <div class="prose">
                                        <p>Cộng đồng hơn 100.000 người đam mê những chiếc áo Polo </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="shopify-section-static-text-with-icons" class="shopify-section shopify-section--text-with-icons"></section>
    </main>
    <footer id="shopify-section-footer" class="shopify-section shopify-section--footer">
        <style>
            @media screen and (min-width: 1000px) {
                #shopify-section-footer {
                    --footer-block-list-justify-content: space-between;
                }
            }
        </style>
        <div class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer__block-list empty:hidden">
                        <div class="footer__block footer__block--menu">
                            <p class="bold">Về chúng tôi</p>
                            <ul class="v-stack gap-3" role="list">
                                <li>
                                    <a href="https://polomanor.vn/pages/ve-chung-toi" class="inline-block link-faded break-all">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="https://polomanor.vn/pages/dieu-khoan-su-dung" class="inline-block link-faded break-all">Điều khoản sử dụng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__block footer__block--menu">
                            <p class="bold">Hỗ trợ khách hàng</p>
                            <ul class="v-stack gap-3" role="list">
                                <li>
                                    <a href="https://polomanor.vn/pages/chinh-sach" class="inline-block link-faded break-all">Chính sách đổi / hoàn trả</a>
                                </li>
                                <li>
                                    <a href="https://polomanor.vn/pages/chinh-sach-bao-hanh" class="inline-block link-faded break-all">Chính sách bảo hành</a>
                                </li>
                                <li>
                                    <a href="https://polomanor.vn/pages/chinh-sach-bao-mat" class="inline-block link-faded break-all">Chính sách bảo mật</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__block footer__block--text">
                            <p class="bold">Phương thức thanh toán</p>
                            <div class="prose text-subdued">
                                <p>COD<br>ATM<br>VISA/MASTERCARD</p>
                            </div>
                        </div>
                        <div class="footer__block footer__block--text">
                            <p class="bold">Dịch vụ khách hàng</p>
                            <div class="prose text-subdued">
                                <p><a href="tel:08 77 74 7777">Mua hàng online: 08 77 74 7777<br></a><br><a href="tel:0376 201 735">Góp ý, khiếu nại: 0376 201 735</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="footer__aside empty:hidden">
                        <div class="footer__aside-top">
                            <ul class="social-media " role="list">
                                <li>
                                    <a href="https://www.facebook.com/Polomanor.official" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR Facebook"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-facebook" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.183 21.85v-8.868H7.2V9.526h2.983V6.982a4.17 4.17 0 0 1 4.44-4.572 22.33 22.33 0 0 1 2.667.144v3.084h-1.83a1.44 1.44 0 0 0-1.713 1.68v2.208h3.423l-.447 3.456h-2.97v8.868h-3.57Z" fill="currentColor"></path>
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/polomanor.vn" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR Instagram"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-instagram" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.4c-2.607 0-2.934.011-3.958.058-1.022.046-1.72.209-2.33.446a4.705 4.705 0 0 0-1.7 1.107 4.706 4.706 0 0 0-1.108 1.7c-.237.611-.4 1.31-.446 2.331C2.41 9.066 2.4 9.392 2.4 12c0 2.607.011 2.934.058 3.958.046 1.022.209 1.72.446 2.33a4.706 4.706 0 0 0 1.107 1.7c.534.535 1.07.863 1.7 1.108.611.237 1.309.4 2.33.446 1.025.047 1.352.058 3.959.058s2.934-.011 3.958-.058c1.022-.046 1.72-.209 2.33-.446a4.706 4.706 0 0 0 1.7-1.107 4.706 4.706 0 0 0 1.108-1.7c.237-.611.4-1.31.446-2.33.047-1.025.058-1.352.058-3.959s-.011-2.934-.058-3.958c-.047-1.022-.209-1.72-.446-2.33a4.706 4.706 0 0 0-1.107-1.7 4.705 4.705 0 0 0-1.7-1.108c-.611-.237-1.31-.4-2.331-.446C14.934 2.41 14.608 2.4 12 2.4Zm0 1.73c2.563 0 2.867.01 3.88.056.935.042 1.443.199 1.782.33.448.174.768.382 1.104.718.336.336.544.656.718 1.104.131.338.287.847.33 1.783.046 1.012.056 1.316.056 3.879 0 2.563-.01 2.867-.056 3.88-.043.935-.199 1.444-.33 1.782a2.974 2.974 0 0 1-.719 1.104 2.974 2.974 0 0 1-1.103.718c-.339.131-.847.288-1.783.33-1.012.046-1.316.056-3.88.056-2.563 0-2.866-.01-3.878-.056-.936-.042-1.445-.199-1.783-.33a2.974 2.974 0 0 1-1.104-.718 2.974 2.974 0 0 1-.718-1.104c-.131-.338-.288-.847-.33-1.783-.047-1.012-.056-1.316-.056-3.879 0-2.563.01-2.867.056-3.88.042-.935.199-1.443.33-1.782.174-.448.382-.768.718-1.104a2.974 2.974 0 0 1 1.104-.718c.338-.131.847-.288 1.783-.33C9.133 4.14 9.437 4.13 12 4.13Zm0 11.07a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm0-8.13a4.93 4.93 0 1 0 0 9.86 4.93 4.93 0 0 0 0-9.86Zm6.276-.194a1.152 1.152 0 1 1-2.304 0 1.152 1.152 0 0 1 2.304 0Z" fill="currentColor"></path>
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCwbTaxyQ4I0JR0oF7NJ8Ocg" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR YouTube"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-youtube" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.44 5.243c.929.244 1.66.963 1.909 1.876.451 1.654.451 5.106.451 5.106s0 3.452-.451 5.106a2.681 2.681 0 0 1-1.91 1.876c-1.684.443-8.439.443-8.439.443s-6.754 0-8.439-.443a2.682 2.682 0 0 1-1.91-1.876c-.45-1.654-.45-5.106-.45-5.106s0-3.452.45-5.106a2.681 2.681 0 0 1 1.91-1.876c1.685-.443 8.44-.443 8.44-.443s6.754 0 8.438.443Zm-5.004 6.982L9.792 15.36V9.091l5.646 3.134Z" fill="currentColor"></path>
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@polomanor.official" class="tap-area" target="_blank" rel="noopener" aria-label="Follow POLOMANOR TikTok"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-tiktok" viewBox="0 0 24 24">
                                            <path d="M20.027 10.168a5.125 5.125 0 0 1-4.76-2.294v7.893a5.833 5.833 0 1 1-5.834-5.834c.122 0 .241.011.361.019v2.874c-.12-.014-.237-.036-.36-.036a2.977 2.977 0 0 0 0 5.954c1.644 0 3.096-1.295 3.096-2.94L12.56 2.4h2.75a5.122 5.122 0 0 0 4.72 4.573v3.195" fill="currentColor"></path>
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__aside-bottom">
                            <p class="footer__copyright text-sm text-subdued">© 2023, Polomanor. Do Shopify cung cấp</p>
                            <p class="site-footer-credits">


                                <a href="http://online.gov.vn/Home/WebDetails/97426" target="_blank" rel="noopener" aria-describedby="a11y-new-window-message">
                                    <img data-swift-lazy="1" loading="lazy" style="width: 8rem; height: auto;" src="//cdn.shopify.com/s/files/1/0257/3464/3766/files/logoSaleNoti.png?v=1609831319" alt="Đã thông báo với Bộ Công Thương" title="Đã thông báo với Bộ Công Thương">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><privacy-bar class="privacy-bar" hidden="">
            <div class="privacy-bar__inner">
                <button type="button" class="privacy-bar__close" data-action="close">
                    <span class="sr-only">Đóng</span><svg role="presentation" stroke-width="2" focusable="false" width="10" height="10" class="icon icon-delete" viewBox="0 0 10 10">
                        <path d="m.757.757 8.486 8.486m-8.486 0L9.243.757" stroke="currentColor"></path>
                    </svg></button>

                <div class="v-stack gap-4">
                    <div class="v-stack gap-2">
                        <p class="bold">Cookie policy</p>
                        <div class="prose text-xs">
                            <p>We use cookies and similar technologies to provide the best experience on our website. Refer to our Privacy Policy for more information.</p>
                        </div>
                    </div>

                    <div class="h-stack gap-2">
                        <button type="button" class="button button--sm" data-action="accept">Đồng ý</button>
                        <button type="button" class="button button--sm button--subdued" data-action="decline">Từ chối</button>
                    </div>
                </div>
            </div>
        </privacy-bar>
    </footer>
    <script src="//cdn.codeblackbelt.com/js/modules/also-bought/main.min.js?shop=polomanor.myshopify.com" defer=""></script>
    <!-- PickyStory code, do not modify. Safe to remove after the app is uninstalled -->

    <!-- PickyStory code end -->
    <!-- PickyStory snippet "main_widget_script", do not modify. Safe to remove after the app is uninstalled -->

    <!-- PickyStory end snippet "main_widget_script" -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <link href="//cdn.shopify.com/s/files/1/0685/2237/7522/t/5/assets/freegifts-main.css?v=21205034438350953231675908749" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0685/2237/7522/t/5/assets/freegifts-custom.css?v=184275253361247549911675908750" rel="stylesheet" type="text/css" media="all">
    <div id="freegifts-main-popup-container" class="freegifts-main-container sca-modal-fg" data-animation="slideInOutTop"></div>
    <div class="toast" id="add-gift-success-toast"></div>

    <script src="//cdn.shopify.com/s/files/1/0685/2237/7522/t/5/assets/freegifts-offers-data.js?v=131371288687452421521675908761"></script>
    <script type="text/javascript">
        if (typeof Shopify === "undefined") window.Shopify = {};
        Shopify.cartItems = {};
        Shopify.products = {};
        Shopify.current_product = {};
        Shopify.current_collection = {};

        //cart item


        // current product or collection
        Shopify.current_product = null;


        Shopify.current_collection = null;


        //liquid code to get customer history and customer tag


        const current_template = "index";
        const pathname = window.location.pathname;
        if (current_template === "404" && pathname?.includes("-sca_clone_freegift")) {
            window.location.replace(pathname.replace("-sca_clone_freegift", ""));
        } else if (current_template === "404" && pathname?.includes("/collections/sca_fg")) {
            window.location.replace("/collections/all");
        }


        ! function() {
            Array.isArray || (Array.isArray = function(e) {
                    return "[object Array]" === Object.prototype.toString.call(e)
                }),
                "function" != typeof Object.create && (Object.create = function(e) {
                    function t() {}

                    return t.prototype = e, new t
                }),
                Object.keys || (Object.keys = function(e) {
                    var t, o = [];
                    for (t in e) Object.prototype.hasOwnProperty.call(e, t) && o.push(t);
                    return o
                }),
                String.prototype.endsWith || Object.defineProperty(String.prototype, "endsWith", {
                    value: function(e, t) {
                        var o = this.toString();
                        (void 0 === t || t > o.length) && (t = o.length), t -= e.length;
                        var r = o.indexOf(e, t);
                        return -1 !== r && r === t
                    },
                    writable: !0,
                    enumerable: !0,
                    configurable: !0
                }),
                Array.prototype.indexOf || (Array.prototype.indexOf = function(e, t) {
                    var o;
                    if (null == this) throw new TypeError('"this" is null or not defined');
                    var r = Object(this),
                        i = r.length >>> 0;
                    if (0 === i) return -1;
                    var n = +t || 0;
                    if (Math.abs(n) === 1 / 0 && (n = 0), n >= i) return -1;
                    for (o = Math.max(n >= 0 ? n : i - Math.abs(n), 0); o < i;) {
                        if (o in r && r[o] === e) return o;
                        o++
                    }
                    return -1
                }),
                Array.prototype.forEach || (Array.prototype.forEach = function(e, t) {
                    var o, r;
                    if (null == this) throw new TypeError(" this is null or not defined");
                    var i = Object(this),
                        n = i.length >>> 0;
                    if ("function" != typeof e) throw new TypeError(e + " is not a function");
                    for (arguments.length > 1 && (o = t), r = 0; r < n;) {
                        var a;
                        r in i && (a = i[r], e.call(o, a, r, i)), r++
                    }
                }),
                console = console || {}, console.log = console.log || function() {},
                "undefined" == typeof Shopify && (Shopify = {}), "function" != typeof Shopify.onError && (Shopify.onError = function() {}),
                "undefined" == typeof SECOMAPP && (SECOMAPP = {}), SECOMAPP.removeGiftsVariant = function(e) {
                    setTimeout(function() {
                        try {
                            e("select option").not(".sca-fg-cart-item select option").filter(function() {
                                var t = e(this).val(),
                                    o = e(this).text(); -
                                1 !== o.indexOf(" - ") && (o = o.slice(0, o.indexOf(" - ")));
                                var r = [];
                                return -1 !== o.indexOf(" / ") && (r = o.split(" / "), o = r[r.length - 1]), !!(void 0 !== SECOMAPP.gifts_list_avai && void 0 !== SECOMAPP.gifts_list_avai[t] || o.endsWith("% off)")) && (e(this).parent("select").find("option").not(".sca-fg-cart-item select option").filter(function() {
                                    var r = e(this).val();
                                    return e(this).text().endsWith(o) || r == t
                                }).remove(), e(".dropdown *,ul li,label,div").filter(function() {
                                    var r = e(this).html(),
                                        i = e(this).data("value");
                                    return r && r.endsWith(o) || i == t
                                }).remove(), !0)
                            })
                        } catch (e) {
                            console.log(e)
                        }
                    }, 500)
                },
                SECOMAPP.formatMoney = function(e, t) {
                    "string" == typeof e && (e = e.replace(".", ""));
                    var o = "",
                        r = "undefined" != typeof Shopify && void 0 !== Shopify.money_format ? Shopify.money_format : "{{amount}}",
                        i = /\{\{\s*(\w+)\s*\}\}/,
                        n = t || (void 0 !== this.fgsettings && "string" == typeof this.fgsettings.sca_currency_format && this.fgsettings.sca_currency_format.indexOf("amount") > -1 ? this.fgsettings.sca_currency_format : null) || r;
                    if (n.indexOf("amount_no_decimals_no_comma_separator") < 0 && n.indexOf("amount_no_comma_separator_up_cents") < 0 && n.indexOf("amount_up_cents") < 0 && "function" == typeof Shopify.formatMoney) return Shopify.formatMoney(e, n);

                    function a(e, t) {
                        return void 0 === e ? t : e
                    }

                    function s(e, t, o, r, i, n) {
                        if (t = a(t, 2), o = a(o, ","), r = a(r, "."), isNaN(e) || null == e) return 0;
                        var s = (e = (e / 100).toFixed(t)).split(".");
                        return s[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + o) + (s[1] ? i && n ? i + s[1] + n : r + s[1] : "")
                    }

                    switch (n.match(i)[1]) {
                        case "amount":
                            o = s(e, 2);
                            break;
                        case "amount_no_decimals":
                            o = s(e, 0);
                            break;
                        case "amount_with_comma_separator":
                            o = s(e, 2, ",", ".");
                            break;
                        case "amount_no_decimals_with_comma_separator":
                            o = s(e, 0, ",", ".");
                            break;
                        case "amount_no_decimals_no_comma_separator":
                            o = s(e, 0, "", "");
                            break;
                        case "amount_up_cents":
                            o = s(e, 2, ",", "", "<sup>", "</sup>");
                            break;
                        case "amount_no_comma_separator_up_cents":
                            o = s(e, 2, "", "", "<sup>", "</sup>")
                    }
                    return n.replace(i, o)
                },
                SECOMAPP.setCookie = function(e, t, o, r, i) {
                    var n = new Date;
                    n.setTime(n.getTime() + 24 * o * 60 * 60 * 1e3 + 60 * r * 1e3);
                    var a = "expires=" + n.toUTCString();
                    document.cookie = e + "=" + t + ";" + a + (i ? ";path=" + i : ";path=/")
                },
                SECOMAPP.deleteCookie = function(e, t) {
                    document.cookie = e + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; " + (t ? ";path=" + t : ";path=/")
                },
                SECOMAPP.getCookie = function(e) {
                    for (var t = e + "=", o = document.cookie.split(";"), r = 0; r < o.length; r++) {
                        for (var i = o[r];
                            " " == i.charAt(0);) i = i.substring(1);
                        if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
                    }
                    return ""
                },
                SECOMAPP.getQueryString = function() {
                    for (var e = {}, t = window.location.search.substring(1).split("&"), o = 0; o < t.length; o++) {
                        var r = t[o].split("=");
                        if (void 0 === e[r[0]]) e[r[0]] = decodeURIComponent(r[1]);
                        else if ("string" == typeof e[r[0]]) {
                            var i = [e[r[0]], decodeURIComponent(r[1])];
                            e[r[0]] = i
                        } else e[r[0]].push(decodeURIComponent(r[1]))
                    }
                    return e
                },
                SECOMAPP.freegifts_product_json = function(e) {
                    if (Array.isArray || (Array.isArray = function(e) {
                            return "[object Array]" === Object.prototype.toString.call(e)
                        }), String.prototype.endsWith || Object.defineProperty(String.prototype, "endsWith", {
                            value: function(e, t) {
                                var o = this.toString();
                                (void 0 === t || t > o.length) && (t = o.length), t -= e.length;
                                var r = o.indexOf(e, t);
                                return -1 !== r && r === t
                            }
                        }), e) {
                        if (e.options && Array.isArray(e.options))
                            for (var t = 0; t < e.options.length; t++) {
                                if (void 0 !== e.options[t] && void 0 !== e.options[t].values)
                                    if ((r = e.options[t]).values && Array.isArray(r.values))
                                        for (var o = 0; o < r.values.length; o++)(r.values[o].endsWith("(Freegifts)") || r.values[o].endsWith("% off)")) && (r.values.splice(o, 1), o--)
                            }
                        if (e.options_with_values && Array.isArray(e.options_with_values))
                            for (t = 0; t < e.options_with_values.length; t++) {
                                var r;
                                if (void 0 !== e.options_with_values[t] && void 0 !== e.options_with_values[t].values)
                                    if ((r = e.options_with_values[t]).values && Array.isArray(r.values))
                                        for (o = 0; o < r.values.length; o++)(r.values[o].title.endsWith("(Freegifts)") || r.values[o].title.endsWith("% off)")) && (r.values.splice(o, 1), o--)
                            }
                        var i = e.price,
                            n = e.price_max,
                            a = e.price_min,
                            s = e.compare_at_price,
                            c = e.compare_at_price_max,
                            f = e.compare_at_price_min;
                        if (e.variants && Array.isArray(e.variants))
                            for (var p = 0; e.variants.length, void 0 !== e.variants[p]; p++) {
                                var l = e.variants[p],
                                    u = l.option3 ? l.option3 : l.option2 ? l.option2 : l.option1 ? l.option1 : l.title ? l.title : "";
                                "undefined" != typeof SECOMAPP && void 0 !== SECOMAPP.gifts_list_avai && void 0 !== SECOMAPP.gifts_list_avai[l.id] || u.endsWith("(Freegifts)") || u.endsWith("% off)") ? (e.variants.splice(p, 1), p -= 1) : ((!n || n >= l.price) && (n = l.price, i = l.price), (!a || a <= l.price) && (a = l.price), l.compare_at_price && ((!c || c >= l.compare_at_price) && (c = l.compare_at_price, s = l.compare_at_price), (!f || f <= l.compare_at_price) && (f = l.compare_at_price)), void 0 !== l.available && 1 == l.available && (e.available = !0))
                            }
                        e.price = i, e.price_max = a == n ? null : a, e.price_min = n == a ? null : n, e.compare_at_price = s, e.compare_at_price_max = f, e.compare_at_price_min = c, e.price_varies = n < a, e.compare_at_price_varies = c < f
                    }
                    return e
                },
                SECOMAPP.fg_codes = [],
                "" !== SECOMAPP.getCookie("sca_fg_codes") && (SECOMAPP.fg_codes = JSON.parse(SECOMAPP.getCookie("sca_fg_codes")));
            var e = SECOMAPP.getQueryString();
            e.freegifts_code && -1 === SECOMAPP.fg_codes.indexOf(e.freegifts_code) && (void 0 !== SECOMAPP.activateOnlyOnePromoCode && !0 === SECOMAPP.activateOnlyOnePromoCode && (SECOMAPP.fg_codes = []), SECOMAPP.fg_codes.push(e.freegifts_code), SECOMAPP.setCookie("sca_fg_codes", JSON.stringify(SECOMAPP.fg_codes)))

        }();


        ;
        SECOMAPP.customer = {};
        SECOMAPP.customer.orders = [];
        SECOMAPP.customer.freegifts = [];;
        SECOMAPP.customer.email = null;
        SECOMAPP.customer.first_name = null;
        SECOMAPP.customer.last_name = null;
        SECOMAPP.customer.tags = null;
        SECOMAPP.customer.orders_count = null;
        SECOMAPP.customer.total_spent = null;



        // get class name config from settings_data.json
        Shopify.scaHandleConfigValue = null;
        Shopify.scaHandleConfig = {
            "sca_fg_handle_config": "sca_fg_handle_config",
            "sca_fg_cart_drawer_query": "sca_fg_cart_drawer_query",
            "sca_fg_cart_icon_query": "sca_fg_cart_icon_query",
            "sca_fg_form_checkout_wrapper_query": "sca_fg_form_checkout_wrapper_query",
            "sca_fg_form_checkbox_button_query": "sca_fg_form_checkbox_button_query",
            "sca_fg_btn_gift_thumbnail_query": "sca_fg_btn_gift_thumbnail_query",
            "sca_fg_title_product_gift_icon_query": "sca_fg_title_product_gift_icon_query",
            "sca_fg_img_collection_gift_icon_query": "sca_fg_img_collection_gift_icon_query",
            "sca_fg_main_promotion_message_query": "sca_fg_main_promotion_message_query"
        }

        //add link proxy
        SECOMAPP.freegiftProxy = "https://polomanor.vn/apps/secomapp_freegifts_get_order?ver=3.0"

        //add product


        ;

        // fg-icons

        if (typeof fgData === 'object' && fgData?.appearance?.gift_icon?.gift_icon_path) {
            fgData.appearance.gift_icon.gift_icon_path = "//cdn.shopify.com/s/files/1/0685/2237/7522/t/5/assets/icon-freegift.png?v=140721731016794124831675908747";
        }
    </script>





</body>

</html>