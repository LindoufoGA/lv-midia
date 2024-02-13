<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="description" content="Alcance seu potencial online com a LV Mídias. Seu investimento em tráfego pago valorizado como se fosse nosso!">
  <meta name="author" content="Giovanni Lindoufo, Desenvolvedor Web">
  <meta name="keywords" content="trafego, pago, anuncios,campanha, gestor, ads, midias, lv midias">
  <meta name="robots" content="index,nofollow">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image-svg+sml">

  <?php wp_head(); ?>
</head>

<body>
  <div class="header-bg">
    <header class=" introducao container">
      <div>
        <img src="<?php the_field('logo_header');?>" alt="Logo-lv-midia">

        <h1><?php the_field('titulo_header');?></h1>
        <button class="button"><a href="<?php the_field('links_botoes');?>">Agendar reunião</a></button>
      </div>
    </header>
  </div>