<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressAW
 */

?>

</article>
</main><!-- /.main-wrap -->

<footer>
<div class="inner">
<div class="f-pagetop-box">
<div class="sitelink-box">
<?php
wp_nav_menu( array(
'theme_location' => 'footer-menu',
'menu_id'        => 'FOOTER-MENU',
) );
?>
</div>
<div id="PAGE_TOP" class="f-pagetop-cnt">
<a href="#" class="page-top-btn"><i></i><span>PAGE TOP</span></a>
</div>
</div>
<div class="f-cnt-box">
<small>&copy; <i class="c-year">2018</i> N/NE, All rights reserved.</small>
</div>
</div><!-- /.inner -->
</footer>

</div><!-- /.wrap-all -->

<?php wp_footer(); ?>

</body>
</html>
