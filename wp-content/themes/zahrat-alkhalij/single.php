<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <?php while (have_posts()) : the_post(); ?>

    <!-- Single Post Hero -->
    <div class="single-hero">
        <div class="container">
            <?php $cats = get_the_category(); ?>
            <?php if ($cats) : ?>
                <span class="single-category-tag"><?php echo esc_html($cats[0]->name); ?></span>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <div class="single-meta">
                <span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/></svg>
                    <?php echo get_the_date('j F Y'); ?>
                </span>
                <span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    <?php the_author(); ?>
                </span>
            </div>
        </div>
    </div>

    <!-- Post Content -->
    <div class="post-body">
        <div class="container">
            <div class="page-content-inner">

                <article class="main-content">
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom:2rem; border-radius:12px; overflow:hidden;">
                            <?php the_post_thumbnail('large', ['style' => 'width:100%; height:auto;', 'alt' => get_the_title()]); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>

                    <!-- Tags -->
                    <?php $tags = get_the_tags(); ?>
                    <?php if ($tags) : ?>
                        <div style="margin-top:2rem; padding-top:1.5rem; border-top:2px solid var(--c-border);">
                            <strong style="color:var(--c-primary);">الوسوم: </strong>
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag)); ?>"
                                   style="display:inline-block; margin:.25rem; padding:.25rem .75rem; background:var(--c-light-bg); border-radius:var(--radius-full); font-size:.82rem; color:var(--c-text-muted);">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </article>

                <!-- Sidebar -->
                <aside class="sidebar" aria-label="الشريط الجانبي">
                    <div class="widget sidebar-call-widget">
                        <h3>تحتاج مساعدة؟</h3>
                        <p>فريق زهرة الخليج متاح لخدمتك الآن في الرياض</p>
                        <a href="tel:0558436313" class="btn btn-primary" style="width:100%; justify-content:center;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                            </svg>
                            اتصل: 0558436313
                        </a>
                    </div>
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </aside>

            </div>

            <!-- Post Navigation -->
            <nav class="post-navigation" aria-label="التنقل بين المقالات" style="margin-top:3rem; padding-top:2rem; border-top:2px solid var(--c-border); display:flex; justify-content:space-between; gap:1rem; flex-wrap:wrap;">
                <?php
                $prev = get_previous_post();
                $next = get_next_post();
                if ($prev) : ?>
                    <a href="<?php echo esc_url(get_permalink($prev)); ?>"
                       style="display:flex; align-items:center; gap:.5rem; color:var(--c-primary); font-weight:600;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
                        <?php echo esc_html(get_the_title($prev)); ?>
                    </a>
                <?php endif;
                if ($next) : ?>
                    <a href="<?php echo esc_url(get_permalink($next)); ?>"
                       style="display:flex; align-items:center; gap:.5rem; color:var(--c-primary); font-weight:600;">
                        <?php echo esc_html(get_the_title($next)); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z"/></svg>
                    </a>
                <?php endif; ?>
            </nav>

        </div>
    </div>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
