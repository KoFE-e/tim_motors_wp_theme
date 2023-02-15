<?php
/*
Template Name: Новость 2 (англ)
*/
?>

<?php
    get_header('news_en');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(57); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_permalink(55); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">AUTO NEWS</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__header">Another new Mitsubishi Outlander: now with a turbo engine</div>
            <div class="news-state__text">
                <div class="news-state__subheader">
                    In some places, the latest generation crossover also got a larger multimedia system tablet. A new market for such an SUV will begin to develop in the near future.
                </div>
                
                <p class="news-state__paragraph">
                    The fourth-generation Mitsubishi Outlander cross celebrated its world premiere at the beginning of last year. Today, a fresh model is available in the States, Japan, Australia and some countries in Latin America. And soon the new SUV will start in China: there, buyers will be offered locally produced cars, production has been established at the Mitsubishi and GAC joint venture plant. As usual, the "heavenly" version turned out to have its own characteristics.
                </p>
                <div class="news-state__imgwrapper">
                    <div class="news-state__img news-state__img_half">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/first.webp" alt="outlander" class="news-state__photo">
                    </div>
                    <div class="news-state__img news-state__img_half">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/second.webp" alt="outlander" class="news-state__photo">
                    </div>
                </div>
                <p class="news-state__paragraph">
                    The new Outlander, we recall, shares the CMF-C / D “trolley” with the Nissan Rogue / X-Trail. Outwardly intended for China, the Mitsubishi crossover repeated the global SUV, the dimensions are also the same: length - 4710 mm, width - 1862 mm, height - 1740/1745 mm (depending on version), wheelbase is 2706 mm. In the Celestial Empire, 18- or 20-inch wheels are provided for the model.
                </p>
                <div class="news-state__imgwrapper">
                    <div class="news-state__img news-state__img_half">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/third.webp" alt="outlander" class="news-state__photo">
                    </div>
                    <div class="news-state__img news-state__img_half">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/fourth.webp" alt="outlander" class="news-state__photo">
                    </div>
                    <div class="news-state__img news-state__img_full">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/fifth.webp" alt="outlander" class="news-state__photo">
                    </div>
                </div>
                <p class="news-state__paragraph">
                    The interior is also generally the same as that of the "world" Outlander, with the exception of the multimedia system: the Chinese version has a 10.25-inch tablet, and there are no washers on it, and the "hot" keys located on the screen case were made touch-sensitive (in other countries multimedia with a maximum of 9-inch screen, "twists" and physical buttons). The list of equipment also includes a head-up display (10.8 inches), a virtual “tidy” (12.3 inches), a panoramic sunroof and many assistants. The model is available with a seven-seat interior.
                </p>
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/sixth.webp" alt="outlander" class="news-state__photo">
                </div>
                <p class="news-state__paragraph">
                    The main difference between the Chinese Mitsubishi Outlander and others is the engine. So, if in other markets a new generation crossover happens only with “aspirated” (including a rechargeable PHEV hybrid), then in the Celestial Empire the model received a gasoline “turbo four” 4B40 1.5. A similar engine is also provided for the younger Eclipse Cross SUV, but the Outlander has a makeweight in the form of a 48-volt starter-generator, plus increased output - 215 hp. and 280 Nm (on the local Eclipse Cross, the turbo engine produces 170 hp and 250 Nm). The turbo engine is combined exclusively with a variator, front-wheel drive or all-wheel drive.
                </p>
                <p class="news-state__paragraph">
                    In China, orders for the new Mitsubishi Outlander will begin to be accepted on September 30, and the crossover will go on sale before the end of this year. It is possible that after the “celestial” SUV, the model will be equipped with a turbo engine in other countries.
                </p>
                <div class="news-state__ref">
                    <div class="news-state__ref__card">
                        <?php
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'news_car',
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="catalog__card" data-brand="<?php the_field('data_brand'); ?>">
                                        <div class="catalog__card-more">More about packaging</div>
                                        <div class="catalog__card-img">
                                            <?php
                                                $image = get_field('car_photo');
                                                    
                                                if (!empty($image)): ?>
                                                    <img 
                                                    src="<?php echo $image['url'];?>" 
                                                    alt="<?php echo $image['alt']?>"
                                                    class="catalog__card-photo"
                                                    <?php
                                                        if (get_field('photo_cover') == 'Да'){
                                                            ?>
                                                            style="width:100%;height:100%;object-fit:cover;border-radius:34px;max-width:none"
                                                            <?php
                                                        }
                                                    ?>
                                                    >
                                                <?php endif;
                                            ?>
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/catalog/cards/timmotors_logo.svg" alt="timmotors" class="catalog__card-logo">
                                        </div>
                                        <div class="catalog__card-text">
                                            <div class="catalog__card-year"><?php the_field('year'); ?></div>
                                            <div class="catalog__card-descr">
                                                <?php the_title(); ?>
                                            </div>

                                            <?php
                                                if (get_field('check_price') == 'Нет') {
                                                    ?>
                                                    <div class="catalog__card-prices">
                                                        <div class="catalog__card-price">
                                                            <div class="catalog__card-price-cost">$ <span class="cost-uae"><?php the_field('uae_cost'); ?></span></div>
                                                            <div class="catalog__card-price-descr">Price in the<br>UAE</div>
                                                        </div>
                                                        <div class="catalog__card-price">
                                                            <div class="catalog__card-price-cost">$ <span class="cost-rf"><?php the_field('rf_cost'); ?></span></div>
                                                            <div class="catalog__card-price-descr">Turnkey price<br>in Russia</div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                    <div class="catalog__card-call">
                                                        Check the cost of the car with the manager
                                                    </div>
                                                    <?php
                                                }
                                            ?>

                                            <div class="catalog__card-divider"></div>
                                            <div class="catalog__card-characteristics">
                                                <div class="catalog__card-characteristics-ls"><span>HP:</span> <?php the_field('hp'); ?></div>
                                                <div class="catalog__card-characteristics-trans">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/catalog/cards/type_transmission.svg" alt="transmission" class="catalog__card-characteristics-img">
                                                    <div class="catalog__card-characteristics-text"><?php the_field('gearbox_type_en'); ?></div>
                                                </div>
                                                <div class="catalog__card-characteristics-fuel">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/catalog/cards/type_fuel.svg" alt="fuel" class="catalog__card-characteristics-img">
                                                    <div class="catalog__card-characteristics-text"><?php the_field('type_of_fuel_en'); ?></div>
                                                </div>
                                            </div>
                                            <a href="https://wa.me/<?php the_field('contacts_whatsapp',7); ?>" class="catalog__card__btn">Submit your application</a>
                                        </div>

                                        <div class="catalog__card__info">
                                            <div class="catalog__card__info-images">
                                                <?php
                                                    $image = get_field('photo_1');
                                                        
                                                    if (!empty($image)): ?>
                                                    <a class="catalog__card__info-img" href="<?php echo $image['url'];?>">
                                                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" 
                                                        class="catalog__card__info-photo">
                                                    </a>
                                                    <?php endif;
                                                ?>
                                                <?php
                                                    $image = get_field('photo_2');
                                                        
                                                    if (!empty($image)): ?>
                                                    <a class="catalog__card__info-img" href="<?php echo $image['url'];?>">
                                                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" class="catalog__card__info-photo">
                                                    </a>
                                                    <?php endif;
                                                ?>
                                                <?php
                                                    $image = get_field('photo_3');
                                                        
                                                    if (!empty($image)): ?>
                                                    <a class="catalog__card__info-img" href="<?php echo $image['url'];?>">
                                                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" class="catalog__card__info-photo">
                                                    </a>
                                                    <?php endif;
                                                ?>
                                            </div>
                                            <div class="catalog__card__info-descr">
                                                <div class="catalog__card__info-column">
                                                    <?php the_field('first_column_char_en'); ?>
                                                </div>
                                                <div class="catalog__card__info-column">
                                                    <?php the_field('second_column_char_en'); ?>
                                                </div>
                                                <div class="catalog__card__info-column">
                                                    <?php the_field('third_column_char_en'); ?>
                                                </div>
                                            </div>
                                            <div class="catalog__card__info-close">
                                                <div class="close"></div>
                                                <div class="close"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                    </div>
                    <div class="news-state__ref__descr">
                        Mitsubishi Outlander<br>
                        in our catalog
                    </div>
                </div>
                
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    To other news
                </div>
                <a href="<?php echo get_permalink(53); ?>" class="news-state__link">The US market is suffering from deceptions from car dealers. What are the customers complaining about?</a>
                <a href="<?php echo get_permalink(61); ?>" class="news-state__link">What and at what mileage to check and change in the car?</a>
                <a href="<?php echo get_permalink(65); ?>" class="news-state__link">Toyota slashes production plan due to microchip shortage</a>
                <a href="<?php echo get_permalink(69); ?>" class="news-state__link">In 2030, half of the new cars sold in the US will be electric</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news_en');
?>    