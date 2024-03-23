<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" fetchpriority="high" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap">
  <?php wp_head(); ?>
</head>

<header class="border-b">
  <div class="h-[var(--nav-height)] mx-auto max-w-[var(--nav-width)] flex items-center justify-between px-4">
    <div>
      <a href="<?php echo esc_url(home_url('/')); ?>">Logo</a>
    </div>

    <nav class="flex">
      <a class="flex items-center px-3 leading-[var(--nav-height)]" href="<?php echo esc_url(home_url()); ?>/about/">about</a>
      <a class="flex items-center px-3 leading-[var(--nav-height)]" href="<?php echo esc_url(home_url()); ?>/contact/">contact</a>
    </nav>
  </div>
</header>

<body>