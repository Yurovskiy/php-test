<?php

    // Variables
    $desktop_content = "
    <style>
        html body {
            margin: 0;
            padding: 0;
        }
        .desktop img {
            width: 100%;
            height: 100%;
        }
    </style>
    <div class='desktop'>
        <img src='https://4kwallpaper.wiki/wp-content/uploads/2019/09/49261-1.jpg'></img>
    </div>";

    $mobile_content  = "
    <head>
        <meta charset='utf-8'>
        <title>Swiper demo</title>
        <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1'>
    
        <!-- Link Swiper's CSS -->
        <link rel='stylesheet' href='https://unpkg.com/swiper/css/swiper.min.css'>
    
        <!-- Demo styles -->
        <style>
            html, body {
                position: relative;
                height: 100%;
            }
            body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color:#000;
                margin: 0;
                padding: 0;
            }
            .swiper-container {
                width: 100%;
                height: 100%;
            }
            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
        
                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }
            .swiper-slide img {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <!-- Swiper -->
        <div class='swiper-container'>
            <div class='swiper-wrapper'>
                <div class='swiper-slide'><img src='https://idealphotography.biz/wp-content/uploads/2016/06/Best-best-wallpapers-hd-iphone-6-About-Image-Wallpapers-with-best-wallpapers-hd-iphone-6-Download-HD-Wallpaper.jpg'></img></div>
                <div class='swiper-slide'><img src='https://idealphotography.biz/wp-content/uploads/2016/06/Wonderful-best-wallpapers-hd-iphone-6-For-Your-HD-Wallpaper-with-best-wallpapers-hd-iphone-6-Download-HD-Wallpaper.jpg'></img></div>
                <div class='swiper-slide'><img src='https://idealphotography.biz/wp-content/uploads/2016/06/Awesome-best-wallpapers-hd-iphone-6-For-Wallpaper-Windows-8-with-best-wallpapers-hd-iphone-6-Download-HD-Wallpaper.jpg'></img></div>
                <div class='swiper-slide'><img src='https://idealphotography.biz/wp-content/uploads/2016/06/Wonderful-best-wallpapers-hd-iphone-6-About-Wallpaper-Windows-8-with-best-wallpapers-hd-iphone-6-Download-HD-Wallpaper.jpg'></img></div>
                <div class='swiper-slide'><img src='https://idealphotography.biz/wp-content/uploads/2016/06/Best-best-wallpapers-hd-iphone-6-For-Windows-Wallpaper-Themes-with-best-wallpapers-hd-iphone-6-Download-HD-Wallpaper.jpg'></img></div>
            </div>
            <!-- Add Pagination -->
            <div class='swiper-pagination'></div>
        </div>
    
        <!-- Swiper JS -->
        <script src='https://unpkg.com/swiper/js/swiper.min.js'></script>
    
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
                },
            });
        </script>
    </body>";

    // Check devices function
    function isMobile() { 
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    if (isMobile()) {
        echo $mobile_content;
    } else {
        echo $desktop_content;
    }

?>