<?php
    // Template name: Página não encontrada
    ?>

<?php get_header(); ?>

<section class="s-page-not-found">
    <div class="container">
        <h1>Ops... Você se perdeu?</h1>
        <p>Clique no botão abaixo para voltar para a home.</p>
        <a href="<?php echo get_home_url(); ?>" class="btn btn-primary">Voltar para a home</a>
    </div>
</section>

<?php get_footer(); ?>