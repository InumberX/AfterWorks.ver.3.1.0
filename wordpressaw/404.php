<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpressAW
 */

get_header();
?>
<section  class="cnt-area error">
<div class="cnt-box">
<div class="inner">
<div class="ttl-box">
<h2>404<small>PAGE&ensp;NOT&ensp;FOUND</small></h2>
</div>
<div class="tx-box">
<h3>お探しのページが見つかりません</h3>
<p>お探しのページは削除されたか、<br class="sp-obj">一時的にご利用できない可能性があります。<br>お探しのページのURLが<br class="sp-obj">正しいかどうかご確認ください。</p>
</div>
<div class="btn-box">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="df-btn">TOPに戻る</a>
</div>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
</section>
<?php
get_footer();
