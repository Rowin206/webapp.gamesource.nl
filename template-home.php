<?php
/*
Template Name: Home
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Altijd het laatste gamenieuws voor ieder platform. Nieuws, reviews, previews en meer!">
    <meta name="author" content="GameSource">
    <script type="text/javascript">
        let homeUrl = '<?php echo home_url(); ?>';
        let userLoginStatus = "<?php echo $userLoginStatus ?>";
    </script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.11/css/all.css">
    <script data-ad-client="ca-pub-7226537335135722" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title>GameSource | De bron voor al jouw gamenieuws</title>
    <?php wp_head();?>
</head>

<body>

<?php get_header(); ?>

<div class="container">
    <div class="highlight">
        <div class="indicators">
            <div id="circle1" class="active-indicator"></div>
            <div id="circle2"></div>
            <div id="circle3"></div>
        </div>
        <div class="slides">
        <?php
        $args = array(
            'category_name' => 'highlight',
            'posts_per_page' => 3,
        );
        $the_highlight_query = new WP_Query( $args );
        if ( $the_highlight_query->have_posts() ) :
            while ( $the_highlight_query->have_posts() ) : $the_highlight_query->the_post();?>
                <div class="highlight-card"
                     style="background-image: linear-gradient(to left bottom, rgba(94, 191, 187, 0) 50%, rgba(94, 191, 187, 0.73)),
                             url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
                    <div class="highlight-card-content">
                        <?php the_category();?>
                        <a href="<?php echo the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_date(); ?></p>
                        </a>
                    </div>
<!--                    --><?php //the_category();?>
                </div>
            <?php  endwhile;
        endif;
        ?>
        </div>
    </div>
    <div class="content">
        <div class="content-top-row">
        <h2 id="Laatste-nieuws">Laatste nieuws</h2>
        <form action="<?php global $test ?>" method="get" id="form-submit">
            <label>Filter op:</label>
            <select name="cat-filter" id="cat-filter">
<!--                <option id="geenSelectie" value="geenSelectie"></option>-->
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<option id="'.$category->name.'" value="'.$category->name.'">'.$category->name.'</option>';
            }
            ?>
            </select>
        </form>
        </div>
        <div class="content-grid">
            <div class="content-left">
                <?php set_query_var('selectedCat', $test); ?>
                <?php get_template_part( 'template-parts/recent-articles'); ?>
            </div>
            <div class="content-right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    </div>
    <div id="cookie-message">
<!--        --><?php //get_template_part( 'template-parts/cookie-message'); ?>
    </div>
</div>
<?php get_footer();?>
</body>

<!--linear-gradient(to left bottom, rgba(94, 191, 187, 0) 60%, rgba(94, 191, 187, 0.73)),-->