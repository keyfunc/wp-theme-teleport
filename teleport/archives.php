<?php /* Template Name: Archives */ ?>
<!DOCTYPE html>
<html lang="zh" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="utf-8" />
<title>Archives</title>
<meta name="keywords" content="Archives" />
<meta name="description" content="The Archives of <?php bloginfo('name'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php get_header(); ?>
<body>
<?php get_template_part('topbar'); ?>
<div id="content" class="archives wrapper clearfix" role="main">
  <section id="main" class="inner lfloat">
    <header class="pagetitle"><h1>Archives</h1></header>
    <article class="post">
    <section class="content">
      <?php tp_get_archives(); ?>
    </section>
    </article>
  </section>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
