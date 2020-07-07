<?php



add_theme_support( 'post-thumbnails' );

//removes hardcoded image height and width
function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

add_action( 'wp_enqueue_scripts', 'my_script_holder' );

function my_script_holder() {
    wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.1, true );
    wp_enqueue_script( 'main' );
}

global $test;

foreach ($_GET as $key => $post_data) {
    if (is_array($post_data)) {
        $test = $post_data;
    } else {
        $test = $post_data;
    }
}

global $path;

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = explode("/", $actual_link);


if (isset($_POST['inform_submit'])) {
    $inform_name = $_POST['inform_name'];
    $inform_mailFrom = "info@flutcadeau.nl";
    $inform_mailSend = $_POST['inform_email'];
    $subject = 'Cadeau doorgegeven';
    $inform_store = $_POST['inform_store'];
    $inform_link = $_POST['inform_link'];
    $inform_description = $_POST['inform_description'];

    $mailTo = "info@flutcadeau.nl";
    $headers = "From: ".$inform_mailFrom;
    $txt = "Bezoeker: \n".$inform_name."\n\nBezoeker E-mail: \n".$inform_mailSend."\n\nWinkel: \n".$inform_store."\n\nLink naar winkel: \n".$inform_link."\n\nOmschrijving: \n".$inform_description;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: .");
}

define('WP_SCSS_ALWAYS_RECOMPILE', true);

//homepage url
$home = home_url();


