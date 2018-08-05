<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpressAW
 */

get_header();
?>

<?php
  while ( have_posts() ) : the_post();
    $custom_fields = get_post_custom();
    // フロントページの場合
    if ( is_front_page() && is_page() ) {
      // プロフィール
      $profile_title = $custom_fields['profileTitle'][0];
      $profile_name = $custom_fields['profileName'][0];
      $profile_age = $custom_fields['profileAge'][0];
      $profile_sex = $custom_fields['profileSex'][0];
      $certificate_name = $custom_fields['certificateName'];
      $certificate_link = $custom_fields['certificateLink'];

      // 略歴
      $biography_title = $custom_fields['biographyTitle'][0];
      $biography_text = $custom_fields['biographyText'];
    } elseif ( is_page() ) {
      // 固定ペーシの場合
      $page_title = $custom_fields['pageTitle'][0];
      $page_description = $custom_fields['pageDescription'][0];

      // 経歴ページの場合
      if(get_the_title() === 'History') {
        $history_year = $custom_fields['historyYear'];
        $history_text_01 = $custom_fields['historyText01'];
        $history_text_02 = $custom_fields['historyText02'];
        $history_text_03 = $custom_fields['historyText03'];
        $history_text_04 = $custom_fields['historyText04'];
        $history_text_05 = $custom_fields['historyText05'];
        $history_text_06 = $custom_fields['historyText06'];
        $history_text_07 = $custom_fields['historyText07'];
        $history_text_08 = $custom_fields['historyText08'];
        $history_text_09 = $custom_fields['historyText09'];
        $history_text_10 = $custom_fields['historyText10'];
        $history_text_11 = $custom_fields['historyText11'];
        $history_text_12 = $custom_fields['historyText12'];
      } elseif (get_the_title() === 'Skill') {
        // スキルページの場合
        $skill_title_front = $custom_fields['skillTitleFront'];
        $skill_text_front = $custom_fields['skillTextFront'];
        $skill_image_front = $custom_fields['skillImageFront'];
        $skill_title_adobe = $custom_fields['skillTitleAdobe'];
        $skill_text_adobe = $custom_fields['skillTextAdobe'];
        $skill_image_adobe = $custom_fields['skillImageAdobe'];
        $skill_title_server = $custom_fields['skillTitleServer'];
        $skill_text_server = $custom_fields['skillTextServer'];
        $skill_image_server = $custom_fields['skillImageServer'];
      } elseif (get_the_title() === 'Works') {
        // 実績ページの場合
        $works_contents_title_performance = $custom_fields['worksContentsTitlePerformance'][0];
        $works_contents_description_performance = $custom_fields['worksContentsDescriptionPerformance'][0];
        $works_title_performance = $custom_fields['worksTitlePerformance'];
        $works_description_performance = $custom_fields['worksDescriptionPerformance'];
        $works_link_performance = $custom_fields['worksLinkPerformance'];
        $works_image_performance = $custom_fields['worksImagePerformance'];
        $works_contents_title_hobby = $custom_fields['worksContentsTitleHobby'][0];
        $works_contents_description_hobby = $custom_fields['worksContentsDescriptionHobby'][0];
        $works_title_hobby = $custom_fields['worksTitleHobby'];
        $works_description_hobby = $custom_fields['worksDescriptionHobby'];
        $works_link_hobby = $custom_fields['worksLinkHobby'];
        $works_image_hobby = $custom_fields['worksImageHobby'];
      } elseif (get_the_title() === 'Contact') {
        // お問合わせページの場合
        $contact_form_title = $custom_fields['contactFormTitle'][0];
        $contact_form_link = $custom_fields['contactFormLink'][0];
        $sns_title = $custom_fields['snsTitle'][0];
        $sns_class = $custom_fields['snsClass'];
        $sns_link = $custom_fields['snsLink'];
      }
    } elseif ( is_home() ) {
      // ブログ一覧の場合
    } else {
      // それ以外の場合（ブログ詳細）
    }
  endwhile;
?>

<section class="main-vis-area">
<div class="ttl-box">
<?php
  // フロントページの場合
  if ( is_front_page() && is_page() ) {
  ?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/img/img_logo_main.svg" alt="After Works. N/NE's Portforio Website"></h2>
<?php
  } elseif ( is_page() ) {
  // 固定ペーシの場合
?>
<h2><?php echo $page_title; ?></h2>
<span class="sub-ttl"><?php echo $page_description; ?></span>
<?php
  }
?>
</div>
</section>

<?php
  // 固定ペーシの場合
  if ( !is_front_page() && is_page() ) {
?>
<section class="breadcrumb-area">
<div class="breadcrumb-box">
<ul>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">After Works. TOP</a></li>
<li><?php echo get_the_title(); ?></li>
</ul>
</div>
</section>
<?php
  }
?>

<section class="cnt-area">
<?php
  // フロントページの場合
  if ( is_front_page() && is_page() ) {
  ?>
<div class="cnt-box index-prof">
<div class="inner">
<div class="ttl-box aw-lazy">
<h2><img data-original="<?php echo get_template_directory_uri(); ?>/img/img_logo_nine.svg" class="aw-lazy-img" alt="A W"></h2>
</div>
<div class="ttl-box aw-lazy">
<h3><span><?php echo $profile_title; ?></span></h3>
</div>
<div class="prof-box aw-lazy">
<dl>
<dt>Name</dt>
<dd><?php echo $profile_name; ?></dd>
</dl>
<dl>
<dt>Age</dt>
<dd><?php echo $profile_age; ?></dd>
</dl>
<dl>
<dt>Sex</dt>
<dd><?php echo $profile_sex; ?></dd>
</dl>
<dl>
<dt>Certificate</dt>
<dd>
<ul>
<?php
    for( $i = 0; $i < count($certificate_name); $i++){
?>
<li><a href="<?php echo $certificate_link[$i]; ?>" target="_blank"><?php echo $certificate_name[$i] ?></a></li>
<?php
    }
?>
</ul>
</dd>
</dl>
</div>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<div class="cnt-box index-biog">
<div class="inner">
<div class="ttl-box aw-lazy">
<h3><span><?php echo $biography_title; ?></span></h3>
</div>
<div class="tx-box aw-lazy">
<?php
    for( $i = 0; $i < count($biography_text); $i++){
?>
<p><?php echo $biography_text[$i]; ?></p>
<?php
    }
?>
</div>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<?php
  } elseif ( is_page() ) {
    // 固定ペーシの場合
    // 経歴ページの場合
    if(get_the_title() === 'History') {
?>
<div class="cnt-box">
<div class="inner">
<?php
      $idx_reverse = 0;
      for( $i = 0; $i < count($history_year); $i++){
?>
<div class="ttl-box<?php if($i > 0) echo ' aw-lazy'; ?>">
<h3><?php echo $history_year[$i] ?></h3>
</div>
<div class="history-box<?php if($i > 0) echo ' aw-lazy'; ?>">
<ul>
<?php
        for( $j = 0; $j < 12; $j++){
          $idx = sprintf('%02d', $j + 1);
          if(!empty(${'history_text_' . $idx}[$i])) {
?>
<li <?php if($idx_reverse % 2 === 1) echo ' class="reverse"'; ?>>
<i><?php echo $idx; ?></i>
<div class="history-cnt-box">
<?php echo ${'history_text_' . $idx}[$i]; ?>
</div>
</li>
<?php
            $idx_reverse++;
          }
?>
<?php
        }
?>
</ul>
</div><!-- /.history-box -->
<?php
      }
?>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<?php
    } elseif(get_the_title() === 'Skill') {
      // スキルページの場合
?>
<div class="cnt-box">
<div class="inner">
<div class="skill-box">
<ul>
<?php
      for( $i = 0; $i < count($skill_title_front); $i++){
?>
<li<?php if($i > 3) echo ' class="aw-lazy"'; ?>>
<div class="ttl-box">
<div class="skill-ico-box">
<img src="<?php echo wp_get_attachment_image_src($skill_image_front[$i], 'full')[0]; ?>" alt="<?php echo $skill_title_front[$i]; ?>">
</div>
<h3><?php echo $skill_title_front[$i]; ?></h3>
</div>
<div class="tx-box">
<p><?php echo $skill_text_front[$i]; ?></p>
</div>
</li>
<?php
      }
?>
</ul>
</div><!-- /.skill-box -->
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<div class="cnt-box">
<div class="inner">
<div class="skill-box">
<ul>
<?php
      for( $i = 0; $i < count($skill_title_adobe); $i++){
?>
<li class="aw-lazy">
<div class="ttl-box">
<div class="skill-ico-box">
<img src="<?php echo wp_get_attachment_image_src($skill_image_adobe[$i], 'full')[0]; ?>" alt="<?php echo $skill_title_adobe[$i]; ?>">
</div>
<h3><?php echo $skill_title_adobe[$i]; ?></h3>
</div>
<div class="tx-box">
<p><?php echo $skill_text_adobe[$i]; ?></p>
</div>
</li>
<?php
      }
?>
</ul>
</div><!-- /.skill-box -->
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<div class="cnt-box">
<div class="inner">
<div class="skill-box">
<ul>
<?php
      for( $i = 0; $i < count($skill_title_server); $i++){
?>
<li class="aw-lazy">
<div class="ttl-box">
<div class="skill-ico-box">
<img src="<?php echo wp_get_attachment_image_src($skill_image_server[$i], 'full')[0]; ?>" alt="<?php echo $skill_title_server[$i]; ?>">
</div>
<h3><?php echo $skill_title_server[$i]; ?></h3>
</div>
<div class="tx-box">
<p><?php echo $skill_text_server[$i]; ?></p>
</div>
</li>
<?php
      }
?>
</ul>
</div><!-- /.skill-box -->
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<?php
    } elseif(get_the_title() === 'Works') {
      // 実績ページの場合
?>
<div class="cnt-box">
<div class="inner">
<div class="ttl-box">
<h3><span><?php echo $works_contents_title_performance; ?></span></h3>
</div>
<div class="tx-box">
<p><?php echo $works_contents_description_performance; ?></p>
</div>
<div class="works-box">
<ul>
<?php
      for( $i = 0; $i < count($works_title_performance); $i++) {
?>
<li<?php if($i > 0) echo ' class="aw-lazy"'; ?>>
<div class="works-img-box"><img src="<?php echo wp_get_attachment_image_src($works_image_performance[$i], 'full')[0]; ?>" alt="<?php echo $works_title_performance[$i]; ?>"></div>
<div class="works-desc-box">
<div class="ttl-box">
<h4><?php echo $works_title_performance[$i]; ?></h4>
</div>
<div class="tx-box">
<p><?php echo $works_description_performance[$i]; ?></p>
</div>
<div class="btn-box">
<a href="<?php echo $works_link_performance[$i]; ?>" target="_blank" class="ghost-btn">制作物はこちら</a>
</div>
</div>
</li>
<?php
      }
?>
</ul>
</div><!-- /.works-box -->
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<div class="cnt-box">
<div class="inner">
<div class="ttl-box">
<h3><span><?php echo $works_contents_title_hobby; ?></span></h3>
</div>
<div class="tx-box">
<p><?php echo $works_contents_description_hobby; ?></p>
</div>
<div class="works-box">
<ul>
<?php
      for( $i = 0; $i < count($works_title_hobby); $i++) {
?>
<li class="aw-lazy">
<div class="works-img-box"><img src="<?php echo wp_get_attachment_image_src($works_image_hobby[$i], 'full')[0]; ?>" alt="<?php echo $works_title_hobby[$i]; ?>"></div>
<div class="works-desc-box">
<div class="ttl-box">
<h4><?php echo $works_title_hobby[$i]; ?></h4>
</div>
<div class="tx-box">
<p><?php echo $works_description_hobby[$i]; ?></p>
</div>
<div class="btn-box">
<a href="<?php echo $works_link_hobby[$i]; ?>" target="_blank" class="ghost-btn">制作物はこちら</a>
</div>
</div>
</li>
<?php
      }
?>
</ul>
</div><!-- /.works-box -->
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<?php
    } elseif(get_the_title() === 'Contact') {
      // お問合せページの場合
?>
<div class="cnt-box">
<div class="inner">
<div class="ttl-box">
<h3><span><?php echo $contact_form_title; ?></span></h3>
</div>
<div class="btn-box">
<div class="icon-box">
<i class="icon-mail"></i>
</div>
<a href="<?php echo $contact_form_link; ?>" target="_blank" class="square-btn mail">お問合せはこちらから</a>
</div>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<div class="cnt-box">
<div class="inner">
<div class="ttl-box">
<h3><span><?php echo $sns_title; ?></span></h3>
</div>
<div class="sns-list-box">
<ul>
<?php
    for( $i = 0; $i < count($sns_link); $i++){
?>
<li class="aw-lazy"><a href="<?php echo $sns_link[$i] ?>" target="_blank" <?php echo 'class=' . $sns_class[$i] ?>><i <?php echo 'class=icon-' . $sns_class[$i] ?>></i></a></li>
<?php
    }
?>
</ul>
</div>
</div><!-- /.inner -->
</div><!-- /.cnt-box -->
<?php
    }
  }
?>
</section>

<?php
get_sidebar();
get_footer();
?>