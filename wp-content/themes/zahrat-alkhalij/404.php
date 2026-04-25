<?php get_header(); ?>

<main id="main-content" tabindex="-1">
    <section class="error-404-section">
        <div class="container text-center">
            <div class="error-404-number" aria-hidden="true">404</div>
            <h1 style="color:var(--c-primary); margin-bottom:1rem;">الصفحة غير موجودة</h1>
            <p style="color:var(--c-text-muted); font-size:1.05rem; margin-bottom:2rem;">
                عذراً، الصفحة التي تبحث عنها غير موجودة أو تم نقلها.
            </p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">العودة للرئيسية</a>
                <a href="tel:0558436313" class="btn btn-outline" style="background:var(--c-primary); color:white; border-color:var(--c-primary);">اتصل بنا: 0558436313</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
