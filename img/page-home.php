<?php
// Template Name: Home
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

  <main class="main-bg js-content">
    <div class="container destaques">
      <div>
        <h2 class="titulo"><?php the_field('titulo_destaque');?></h2>
        <ul class="lista-destaques">
          <li class="item-destaques">
            <h3><?php the_field('sub_titulo_1');?></h3>
            <p><?php the_field('descricao_1');?></p>
          </li>
          <li class="item-destaques">
            <h3><?php the_field('sub_titulo_2');?></h3>
            <p><?php the_field('descricao_2');?></p>
          </li>
          <li class="item-destaques">
            <h3><?php the_field('sub_titulo_3');?></h3>
            <p><?php the_field('descricao_3');?></p>
          </li>
          <li class="item-destaques">
            <h3><?php the_field('sub_titulo_4');?></h3>
            <p><?php the_field('descricao_4');?></p>
          </li>
        </ul>
      </div>
      <div class="div-img">
        <img src="<?php the_field('imagem_sessao_destaque');?>" alt="grafico">
      </div>
    </div>
  </main>

  <section aria-label="beneficios-de-investir" class="beneficio js-content">
    <div class="container">
      <h2 class="titulo"><?php the_field('titulo_persuasivo');?></h2>
      <div class="investir">
        <ul class="investir-lista">
          <li class="item-investir">
            <h3><?php the_field('sub_titulo_persuasivo_1');?></h3>
            <p><?php the_field('descricao_persuasiva_1');?></p>
          </li>
          <li class="item-investir">
            <h3><?php the_field('sub_titulo_persuasivo_2');?></h3>
            <p><?php the_field('descricao_persuasiva_2');?></p>
          </li>
          <li class="item-investir">
            <h3><?php the_field('sub_titulo_persuasivo_3');?></h3>
            <p><?php the_field('descricao_persuasiva_3');?></strong></p>
          </li>
          <li class="item-investir">
            <h3><?php the_field('sub_titulo_persuasivo_4');?></h3>
            <p><?php the_field('descricao_persuasiva_4');?></p>
          </li>
          <button class="button"><a href="<?php the_field('links_botoes');?>">Agendar reunião</a></button>
        </ul>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/analitcs.png" alt="redes-sociais">
      </div>
    </div>
  </section>

  <section aria-label="diferencial" class="container js-content">
    <div class="plataformas">
      <div class="plataformas-introducao">
        <h2 class="titulo"><?php the_field('titulo_diferencial');?></h2>
        <p><?php the_field('descricao_diferencial');?></p>
        <button class="button"><a href="<?php the_field('links_botoes');?>">Agendar reuniao</a></button>
      </div>
      <ul class="plataformas-lista">
        <li class="plataformas-item">
          <h3><?php the_field('sub_diferencial_1');?></h3>
          <p><?php the_field('descricao_diferencial_1');?></p>
        </li>
        <li class="plataformas-item">
          <h3><?php the_field('sub_diferencial_2');?></h3>
          <p><?php the_field('descricao_diferencial_2');?></p>
        </li>
        <li class="plataformas-item">
          <h3><?php the_field('sub_diferencial_3');?></h3>
          <p><?php the_field('descricao_diferencial_3');?></p>
        </li>
        <li class="plataformas-item">
          <h3><?php the_field('sub_diferencial_4');?></h3>
          <p><?php the_field('descricao_diferencial_4');?></p>
        </li>
        <li class="plataformas-item">
          <h3><?php the_field('sub_diferencial_5');?></h3>
          <p><?php the_field('descricao_diferencial_5');?></p>
        </li>
      </ul>
    </div>
  </section>

  <section class="sobre js-content">
  <div>
  <img src="<?php the_field('imagem_sobre');?>" alt="foto proprietario">
  </div>
  <div><?php the_field('descricao_sobre');?></p>
    </div>
  </section>

  <section aria-label="depoimentos" class="clientes-bg js-content">
    <div class="container">
      <div class="clientes">
        <h2 class="titulo"><?php the_field('titulo_depoimentos');?></h2>
      </div>
      <ul class="clientes-lista">
        <li class="clientes-item">
          <p><?php the_field('depoimento_1');?></p>
          <h4 class="nome-cliente"><?php the_field('cliente_1');?></h4>
        </li>
        <li class="clientes-item col-2">
          <p><?php the_field('depoimento_2');?></p>
          <h4 class="nome-cliente"><?php the_field('cliente_2');?>/h4>
        </li>
        <li class="clientes-item">
          <p><?php the_field('depoimento_3');?></p>
          <h4 class="nome-cliente"><?php the_field('cliente_3');?></h4>
        </li>
      </ul>
      <div class="cliente-p">
        <button class="button"><a href="<?php the_field('links_botoes');?>">Agendar reunião</a></button>
      </div>
    </div>
  </section>

  <section aria-label="Perguntas-frequentes" class="faq js-content">
    <h2 class="titulo">Perguntas frequentes</h2>
    <dl class="container faq-lista js-accordion">
      <dt>O tráfego pago funciona para meu tipo de negócio?</dt>
      <dd>Sim, nosso foco é adaptar estratégias de tráfego pago para diversos tipos de negócios. A presença online é crucial para qualquer modelo de negócio atualmente.</dd>
      <dt>Como vocês garantem resultados com os investimentos em tráfego pago?</dt>
      <dd>Nossa abordagem estratégica é personalizada para cada cliente, moldada para gerar resultados sólidos. Cada campanha é cuidadosamente planejada visando o sucesso do negócio.</dd>
      <dt>A agência tem experiência no meu nicho de mercado?</dt>
      <dd>Sim, nossa equipe é especializada em diversos nichos. Cada gestor tem experiência em segmentos específicos e personaliza estratégias de acordo com as necessidades de cada cliente.</dd>
      <dt>Quais tipos de suporte são oferecidos durante a gestão dos anúncios?</dt>
      <dd>Oferecemos relatórios regulares, chamadas estratégicas para alinhar metas e revisões constantes de desempenho. Além disso, há canais diretos de comunicação com nossos gestores.</dd>
      <dt>Qual é o tempo médio para começar a ver resultados?</dt>
      <dd>O tempo pode variar dependendo do negócio e das estratégias adotadas. Geralmente, os resultados começam a aparecer em algumas semanas, mas o sucesso a longo prazo é nosso foco.
      <dt>Quais são os benefícios específicos de anunciar em múltiplas plataformas?</dt>
      <dd>Anunciar em várias plataformas aumenta a visibilidade da marca, atinge diferentes segmentos de público e maximiza as oportunidades de conversão. Cada plataforma tem seu próprio público e benefícios únicos.</dd>
    </dl>
  </section>
<?php get_footer(); ?>
<?php endwhile; else: endif; ?>
