<?php
    require_once 'Mobile-Detect-2.8.15/Mobile_Detect.php';
    $detect = new Mobile_Detect;
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>cameraroll</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <svg width="100" height="100" viewbox="0 0 200 200">
                <circle cx="100" cy="100" r="80" stroke="#333" stroke-width="4"fill="#333" />
                <g fill="none" stroke="#eee" stroke-width="10" stroke-linecap="round" stroke-linejoin="round">
                <path d="M40 120 L58 80 L82 120 L100 80 L115 120 L130 80 L145 120 L160 80" />
                </g>
            </svg>
            <p>cameraroll</p>
            <p>photos by <a href='http://nathanwentworth.co'>nathan wentworth</a></p>
        </header>
        <div class='content'>
            <?php
                if ($detect->isMobile()) {
                    $img = array();
                    foreach (glob("img/IMG_*-small.jpg") as $small) {
                        $img[] = $small;
                    }
                }
                else {
                    $img = array();
                    foreach (glob("img/IMG_*-large.jpg") as $default) {
                    $img[] = $default;
                    }
                }

                $j = count($img);
                for($i = 0; $i < $j ; $i++) {
                    print '<img src="' . $img[$i] . '">';
                    print '<noscript><img src="' . $img[$i] . '"></noscript>';

                }
            ?>
        </div>
        <link href='//fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
    </body>
</html>
