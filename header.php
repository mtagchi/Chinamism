<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/scripts/emailpage.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="unselectable">
    <div class="nav-left">
      <h1 class="chinami_logo">
          <a href=<?php echo home_url( '/' ) ?>>CHINAMISM</a>
        </h1>
    </div>

    <div class="nav-right">
      <ul class="nav-list">
        <a href="/#profile" class="nav-list-item">Profile</a>
        <a href="/#skills" class="nav-list-item">Skills</a>
        <a href="/#experience" class="nav-list-item">Experience</a>
        <a href="/#contact" class="nav-list-item">Contact</a>
        <a href="schedule" class="nav-list-item">Schedule</a>
      </ul>
    </div>
  </header>