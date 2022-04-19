<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medilink
 */

function styleandscripts() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'styleandscript');
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
</head>

<body>

<footer class="footer">
    <div class="l-footer">
        <h1>
        <img class="logo" src="http://localhost/MedilinkV4/wp-content/uploads/2022/04/logo.png" alt=""></h1>
        <p class="lp-footer">
            Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum.
        </p>
        
            <div class="imgfoot">
                <a href="#"><img class="img-footer" src="http://localhost/MedilinkV4/wp-content/uploads/2022/04/linkedin.png" alt=""></a>
                <a class="space-left" href="#"><img class="img-footer" src="http://localhost/MedilinkV4/wp-content/uploads/2022/04/facebook.png" alt=""></a>
        
            </div>
        
    </div>
        

        <ul class="r-footer">
        <li>
            <ul class="box leftbox">
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">RGPD</a></li>
            <li><a href="#">Site map</a></li>
            </ul>
        </li>

        <li>
            <ul class="box">
            <li><a href="#">A.R.C</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Equipes</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Solutions</a></li>
            </ul>
        </li>
        
        </ul>
    
    <div class="b-footer">
    <div class='line'></div>
    <p class="p-footer"> © 2022 Medi - Link</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
