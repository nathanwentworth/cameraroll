<!doctype html>
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
            <p>cameraroll</p>
            <p>photos by <a href='http://nathanwentworth.co'>nathan wentworth</a></p>
            <svg width="100" height="100" viewbox="0 0 200 200">
                <circle cx="100" cy="100" r="80" stroke="#333" stroke-width="4"fill="#333" />
                <g fill="none" stroke="#eee" stroke-width="10" stroke-linecap="round" stroke-linejoin="round">
                <path d="M40 120 L58 80 L82 120 L100 80 L115 120 L130 80 L145 120 L160 80" />
                </g>
            </svg>
        </header>
        <div class='content'>
            <?php
                $files = array();
                foreach (glob("img/*.jpg") as $file) {
                    $files[] = $file;
                }
                foreach ($files as $pic) {
                    // print '<img src="' . $pic . '">';
                    print '<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="' . $pic . '">';
                }

            ?>
        </div>
<!--         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
 -->
    <script>
        function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i=0; i<imgDefer.length; i++) {
        if(imgDefer[i].getAttribute('data-src')) {
        imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
        } } }
        window.onload = init;
    </script>
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
    </body>
</html>
