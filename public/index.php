<?php

include_once(__DIR__ . "/../vendor/autoload.php");

$site = \JPI\Site::get();
?>


<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Socials | Jahidul Pabel Islam</title>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            @font-face {
                font-family: "Cabin";
                font-style: normal;
                font-weight: 400;
                src: url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.eot?v=14"); // IE9 Compat Modes
                src: local("Cabin"),
                    local("Cabin-Regular"),
                    url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.eot?v=14#iefix") format("embedded-opentype"), // IE6-IE8
                    url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.woff2?v=14") format("woff2"), // Super Modern Browsers
                    url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.woff?v=14") format("woff"), // Modern Browsers
                    url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.ttf?v=14") format("truetype"), // Safari, Android, iOS
                    url("https://jahidulpabelislam.com/assets/webfonts/cabin-latin-regular.svg?v=14#Cabin") format("svg"); // Legacy iOS
                    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
                ;
            }

            body {
                height: 100vh;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
                text-align: center;
            }

            h1 {
                font-family: Cabin, sans-serif;
                color: <?= $site->getBrandColour(); ?>;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <h1>COMING SOON!</h1>
    </body>
</html>
