<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="nav-left">
      <h1 class="chinami_logo">
          <a href=<?php echo home_url( '/' ) ?>>CHINAMISM</a>
        </h1>
    </div>

    <div class="nav-right">
      <ul class="nav-list">
        <a href=<?php echo home_url( '/#profile' ) ?> class="nav-list-item">Profile</a>
        <a href=<?php echo home_url( '/#skills' ) ?> class="nav-list-item">Skills</a>
        <a href=<?php echo home_url( '/#experience' ) ?> class="nav-list-item">Experience</a>
        <a href=<?php echo home_url( '/#contact' ) ?> class="nav-list-item">Contact</a>
        <a href=<?php echo home_url( '/schedule' ) ?> class="nav-list-item">Schedule</a>
      </ul>
    </div>
  </header>
