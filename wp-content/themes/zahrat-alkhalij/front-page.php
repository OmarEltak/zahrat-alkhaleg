<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <!-- ========================= HERO ========================= -->
    <section class="hero" aria-label="قسم الترحيب">
        <div class="hero-bg" aria-hidden="true">
            <div class="hero-orb-2"></div>
        </div>

        <div class="container">
            <div class="hero-content-grid">

                <!-- Left / Main Content -->
                <div class="hero-content">

                    <div class="hero-badge" role="status" aria-live="polite">
                        متاحون الآن للخدمة في الرياض
                    </div>

                    <h1>
                        شركة <span class="highlight">زهرة الخليج</span><br>
                        لصيانة المكيفات بالرياض
                    </h1>

                    <p class="hero-subtitle">
                        متخصصون في فك وتركيب وغسيل وصيانة جميع أنواع المكيفات — سبليت، مركزي، وكاست. تعبئة فريون وتمديد مواسير نحاس. خدمة فورية في جميع أحياء الرياض.
                    </p>

                    <div class="hero-cta-group">
                        <a href="tel:0558436313" class="btn btn-call">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                            </svg>
                            اتصل الآن: 0558436313
                        </a>
                        <a href="https://wa.me/966563098954" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.117 1.528 5.845L.057 23.5l5.797-1.522A11.942 11.942 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.878 0-3.63-.487-5.153-1.338l-.368-.217-3.84 1.007 1.028-3.748-.24-.386A9.96 9.96 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                            </svg>
                            واتساب
                        </a>
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline">
                            تعرف على خدماتنا
                        </a>
                    </div>

                    <div class="hero-trust-row" role="list" aria-label="مزايا الخدمة">
                        <div class="trust-badge" role="listitem">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            خبرة 10+ سنوات
                        </div>
                        <div class="trust-badge" role="listitem">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            ضمان على الخدمة
                        </div>
                        <div class="trust-badge" role="listitem">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            خدمة فورية
                        </div>
                        <div class="trust-badge" role="listitem">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            أسعار منافسة
                        </div>
                    </div>

                </div><!-- /hero-content -->

                <!-- Right: Floating Card (desktop) -->
                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-card">
                        <p class="hero-card-title">خدماتنا الرئيسية</p>
                        <div class="service-list-card">

                            <div class="service-item-card">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24"><path d="M22 11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3z"/></svg>
                                </div>
                                تركيب مكيفات سبليت
                            </div>

                            <div class="service-item-card">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0116 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 019.5 16 6.5 6.5 0 013 9.5 6.5 6.5 0 019.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5z"/></svg>
                                </div>
                                غسيل وتنظيف المكيفات
                            </div>

                            <div class="service-item-card">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm1 17.93V18a1 1 0 00-2 0v1.93A8.001 8.001 0 014.07 13H6a1 1 0 000-2H4.07A8.001 8.001 0 0111 4.07V6a1 1 0 002 0V4.07A8.001 8.001 0 0119.93 11H18a1 1 0 000 2h1.93A8.001 8.001 0 0113 19.93z"/></svg>
                                </div>
                                تعبئة فريون
                            </div>

                            <div class="service-item-card">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zm-.5 1.5L21 12h-4V9.5h2.5zM6 18c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm13 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg>
                                </div>
                                صيانة مركزي وكاست
                            </div>

                        </div>

                        <a href="tel:0558436313" class="hero-card-call">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                            </svg>
                            0558436313
                        </a>

                    </div><!-- .hero-card -->
                </div><!-- .hero-visual -->

            </div><!-- .hero-content-grid -->
        </div><!-- .container -->
    </section>
    <!-- /HERO -->


    <!-- ========================= STATS BAR ========================= -->
    <section class="stats-bar" aria-label="إحصائيات الشركة">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" data-count="5000" aria-label="5000+">0</div>
                    <div class="stat-label">عميل سعيد</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="10" aria-label="10+">0</div>
                    <div class="stat-label">سنوات خبرة</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="20" aria-label="20+">0</div>
                    <div class="stat-label">فني متخصص</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="100" aria-label="100%">0</div>
                    <div class="stat-label">ضمان الجودة</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /STATS BAR -->


    <!-- ========================= SERVICES ========================= -->
    <section class="services-section" id="services" aria-labelledby="services-heading">
        <div class="container">

            <div class="text-center" style="margin-bottom:1rem;">
                <span class="section-badge">خدماتنا</span>
            </div>
            <h2 class="section-title text-center" id="services-heading">
                جميع خدمات المكيفات في الرياض
            </h2>
            <p class="section-subtitle text-center">
                نقدم حلولاً شاملة لصيانة وتركيب وغسيل المكيفات بجميع أنواعها مع ضمان الجودة وسرعة التنفيذ
            </p>

            <div class="services-grid">

                <!-- Service 1 -->
                <article class="service-card" aria-label="فك وتركيب مكيفات سبليت">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M22 11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">فك وتركيب مكيفات سبليت</h3>
                        <p class="service-desc">
                            نقدم خدمة فك وتركيب مكيفات السبليت لجميع الماركات والأحجام. يتم العمل على يد فنيين معتمدين مع ضمان كامل على التركيب وعزل مواسير النحاس.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Service 2 -->
                <article class="service-card" aria-label="غسيل وتنظيف المكيفات">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0116 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 019.5 16 6.5 6.5 0 013 9.5 6.5 6.5 0 019.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">غسيل وتنظيف المكيفات</h3>
                        <p class="service-desc">
                            خدمة غسيل مكيفات سبليت بالرياض بمواد معتمدة وآمنة. تنظيف شامل للوحدة الداخلية والخارجية لضمان كفاءة التبريد وتحسين جودة الهواء.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Service 3 -->
                <article class="service-card" aria-label="تعبئة فريون المكيفات">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm1 17.93V18a1 1 0 00-2 0v1.93A8.001 8.001 0 014.07 13H6a1 1 0 000-2H4.07A8.001 8.001 0 0111 4.07V6a1 1 0 002 0V4.07A8.001 8.001 0 0119.93 11H18a1 1 0 000 2h1.93A8.001 8.001 0 0113 19.93z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">تعبئة فريون المكيفات</h3>
                        <p class="service-desc">
                            تعبئة فريون لجميع أنواع المكيفات سبليت ومركزي وكاست. نستخدم فريون أصلي معتمد مع فحص شامل للتسربات وضمان على العملية.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Service 4 -->
                <article class="service-card" aria-label="تمديد مواسير نحاس">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M16 6h-3V4h-2v2H8c-1.1 0-2 .9-2 2v3c0 1.66 1.34 3 3 3h2v4h-1c-.55 0-1 .45-1 1s.45 1 1 1h4c.55 0 1-.45 1-1s-.45-1-1-1h-1v-4h2c1.66 0 3-1.34 3-3V8c0-1.1-.9-2-2-2zm0 5H8V8h8v3z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">تمديد مواسير النحاس</h3>
                        <p class="service-desc">
                            تمديد وتوصيل مواسير النحاس للمكيفات بجميع الأقطار. نضمن التوصيل المحكم وعدم التسرب مع العزل الحراري المناسب للمواسير.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Service 5 -->
                <article class="service-card" aria-label="صيانة مكيفات مركزي">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zm-.5 1.5L21 12h-4V9.5h2.5zM6 18c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm13 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">صيانة مكيفات مركزي</h3>
                        <p class="service-desc">
                            صيانة شاملة لأنظمة التكييف المركزي للمباني التجارية والسكنية. فحص دوري، تنظيف وحدات التبريد، وإصلاح جميع الأعطال.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Service 6 -->
                <article class="service-card" aria-label="تركيب مكيفات كاست">
                    <div class="service-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg>
                    </div>
                    <div>
                        <h3 class="service-name">فك وتركيب مكيفات كاست</h3>
                        <p class="service-desc">
                            تركيب مكيفات الكاست (السقفية) للمحلات التجارية والمكاتب. فنيون متخصصون في جميع أنواع وحدات الكاست مع ضمان التركيب الصحيح.
                        </p>
                        <a href="tel:0558436313" class="service-link">
                            اتصل الآن
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                        </a>
                    </div>
                </article>

            </div><!-- .services-grid -->

        </div><!-- .container -->
    </section>
    <!-- /SERVICES -->


    <!-- ========================= WHY US ========================= -->
    <section class="why-section" id="why-us" aria-labelledby="why-heading">
        <div class="container">

            <div class="why-header text-center" style="margin-bottom:2.5rem;">
                <span class="section-badge" style="background:rgba(255,107,53,.2); border-color:rgba(255,107,53,.3);">لماذا نحن؟</span>
                <h2 class="section-title text-white" id="why-heading">
                    لماذا تختار زهرة الخليج؟
                </h2>
                <p class="section-subtitle" style="color:rgba(255,255,255,.65);">
                    نقدم خدمة احترافية بضمان كامل في جميع أحياء مدينة الرياض
                </p>
            </div>

            <div class="why-grid">

                <div class="why-card">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <h3>ضمان معتمد</h3>
                    <p>نضمن جميع أعمال الصيانة والتركيب. في حال وجود أي مشكلة بعد الخدمة، نعود مجاناً لإصلاحها.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/></svg>
                    </div>
                    <h3>خدمة فورية</h3>
                    <p>نصل إليك في أسرع وقت ممكن. فريق متاح طوال أيام الأسبوع من الساعة 7 صباحاً حتى 11 مساءً.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    </div>
                    <h3>تغطية كاملة بالرياض</h3>
                    <p>نخدم جميع أحياء الرياض بدون استثناء: العليا، الملقا، المرسلات، النسيم، الروضة، وجميع المناطق.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
                    </div>
                    <h3>أسعار منافسة وشفافة</h3>
                    <p>نقدم عروض أسعار مجانية بدون التزام. أسعارنا واضحة وشفافة بدون رسوم مخفية.</p>
                </div>

            </div><!-- .why-grid -->

        </div><!-- .container -->
    </section>
    <!-- /WHY US -->


    <!-- ========================= CTA BANNER ========================= -->
    <section class="cta-banner" aria-label="احصل على عرض سعر">
        <div class="container">
            <div class="cta-banner-content">
                <h2>احصل على عرض سعر مجاني الآن</h2>
                <p>لا تعاني من الحر — اتصل بنا الآن وسيصل فنيونا إليك في أقرب وقت. خدمة فورية في جميع أنحاء الرياض.</p>
                <a href="tel:0558436313" class="cta-phone-display" aria-label="اتصل بنا على 0558436313">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                    </svg>
                    0558436313
                </a>
            </div>
        </div>
    </section>
    <!-- /CTA BANNER -->


    <!-- ========================= BLOG PREVIEW ========================= -->
    <?php
    $recent_posts = new WP_Query([
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);
    if ($recent_posts->have_posts()) : ?>
    <section class="blog-section" aria-labelledby="blog-heading">
        <div class="container">

            <div class="text-center" style="margin-bottom:1rem;">
                <span class="section-badge">المدونة</span>
            </div>
            <h2 class="section-title text-center" id="blog-heading">
                نصائح وإرشادات المكيفات
            </h2>
            <p class="section-subtitle text-center">
                مقالات مفيدة لمساعدتك على الحفاظ على مكيفك وزيادة عمره الافتراضي
            </p>

            <div class="blog-grid">
                <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
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
                        <h3 class="blog-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="blog-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="blog-meta">
                            <span><?php echo get_the_date('j F Y'); ?></span>
                            <a href="<?php the_permalink(); ?>" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="text-center" style="margin-top:2.5rem;">
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-primary">
                    عرض جميع المقالات
                </a>
            </div>

        </div>
    </section>
    <?php endif; ?>
    <!-- /BLOG PREVIEW -->

</main>

<?php get_footer(); ?>
