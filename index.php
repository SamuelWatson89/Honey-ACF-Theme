<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
  <?php wp_head(); ?>
</head>

<body>
  <main>
    <h1>A Simple page to showcase ACF component</h1>

    <p>
      Using ACF to create a <em>Flexible Content</em> layout, for a call to action section.<br>
      This section take <br>
      This has a few options to change some basic styling:

    <ul>
      <li>Background image or solid background colour</li>
      <li>Text colour</li>
      <li>Button background and text colour</li>
      <li>Position of the content (left/center/right)</li>
    </ul>
    </p>

    <?php get_template_part( 'partials/honey-cta' ); ?>
  </main>

  <footer class="main-footer">

    <p>
      For Honey - By Sam Watson
    </p>

  </footer>
  <?php wp_footer(); ?>
</body>

</html>