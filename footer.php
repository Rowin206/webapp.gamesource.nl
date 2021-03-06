<footer class="footer">
    <div class="mainfooter">
        <div class="mainfooter__image-container">
            <img class="mainfooter__image" src="<?php bloginfo('template_directory'); ?>/assets/img/gamesource--black.svg" alt="GameSource logo">
        </div>

        <div class="mainfooter__column-container">
            <div class="mainfooter__column">
                <h3 class="mainfooter__title">Sitemap</h3>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/nieuws">Nieuws</a>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/reviews">Reviews</a>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/previews">Previews</a>
            </div>

            <div class="mainfooter__column">
                <h3 class="mainfooter__title">Terms</h3>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/privacy-policy">Algemene voorwaarden</a>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/privacy-policy">Privacyverklaring</a>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/privacy-policy">Cookies</a>
            </div>

            <div class="mainfooter__column">
                <h3 class="mainfooter__title">Contact</h3>
                <a class="mainfooter__link" href="<?php echo get_bloginfo("url")?>/contact">Contact</a>
                <h4 class="mainfooter__subtitle mainfooter__subtitle--margin-top">E-mail:</h4>
                <a class="mainfooter__link" href="mailto:info@gamesource.nl">info@gamesource.nl</a>
                <!-- <h4 class="mainfooter__subtitle mainfooter__subtitle--margin-top">Deel nieuws met ons:</h4>
                <a href="/inform" class="mainfooter__link">Nieuws doorgeven</a> -->
            </div>

            <div class="mainfooter__column mainfooter__column--center">
                <h3 class="mainfooter__title">Social Media</h3>
                <div>
                    <a class="mainfooter__link mainfooter__social-icon" href="https://www.facebook.com/gamesource" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a class="mainfooter__link mainfooter__social-icon" href="https://www.instagram.com/gamesource" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a class="mainfooter__link mainfooter__social-icon" href="https://www.twitter.com/gamesource" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a class="mainfooter__link mainfooter__social-icon" href="https://www.pinterest.com/gamesource" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <p class="copyright-bar__text">© 2020 GameSource. Alle rechten voorbehouden.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>