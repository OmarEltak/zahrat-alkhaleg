<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- Archive Hero -->
    <div class="archive-hero">
        <div class="container">
            <?php the_archive_title('<h1>', '</h1>'); ?>
            <?php the_archive_description('<p>', '</p>'); ?>
            <?php if (!is_category() && !is_tag() && !is_author()) : ?>
                <p>نصائح وإرشادات متخصصة في صيانة وتركيب المكيفات</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Archive Grid -->
    <div class="archive-grid-wrap">
        <div class="container">

            <?php if (have_posts()) : ?>
                <div class="blog-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="blog-card" aria-label="<?php the_title_attribute(); ?>">
                            <div class="blog-card-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', ['loading' => 'lazy', 'alt' => get_the_title()]); ?>
                                <?php else : ?>
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="#dce8f5" aria-hidden="true"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                                <?php endif; ?>
                            </div>
                            <div class="blog-card-body">
                                <span class="blog-category">
                                    <?php $cats = get_the_category(); echo $cats ? esc_html($cats[0]->name) : 'صيانة مكيفات'; ?>
                                </span>
                                <h2 class="blog-card-title" style="font-size:1rem;">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="blog-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                <div class="blog-meta">
                                    <span><?php echo get_the_date('j F Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="read-more">اقرأ المزيد</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div style="margin-top:2.5rem; text-align:center;">
                    <?php
                    echo paginate_links([
                        'prev_text' => 'السابق',
                        'next_text' => 'التالي',
                        'type'      => 'list',
                    ]);
                    ?>
                </div>

            <?php else : ?>
                <div style="text-align:center; padding:4rem 0;">
                    <h2 style="color:var(--c-primary); margin-bottom:1rem;">لا توجد مقالات حتى الآن</h2>
                    <p style="color:var(--c-text-muted); margin-bottom:2rem;">سنضيف محتوى قريباً. تابعنا!</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">العودة للرئيسية</a>
                </div>
            <?php endif; ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>
