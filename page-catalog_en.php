<?php
/*
Template Name: Каталог (англ.)
*/
?>

<?php
    get_header('catalog_en');
?>


    <section class="promo promo_catalog">
        <div class="language">
            <a href="<?php echo get_permalink(40); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_permalink(36); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <div class="promo__circle"></div>
        </div>
        <div class="promo__search">
            <div class="promo__search__item">
                <div class="promo__search__dropdown">
                    <div class="promo__search__select selected_dropdown">Model</div>
                    <div class="catalog__models dropdown__list">
                        <?php
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'cars_brands',
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="catalog__models-item dropdown__item dropdown__brand" data-brand="<?php the_field('data_brand'); ?>">
                                        <?php the_title(); ?>
                                    </div>
                                <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>
            </div>
            <div class="promo__search__divider"></div>
            <div class="promo__search__item">
                <div class="promo__search__dropdown">
                    <div class="promo__search__select selected_dropdown">Year</div>
                    <div class="dropdown__list dropdown__slider">
                        <div class="filter-slider dropdown__item" id="mobile-year-range"></div>
                        <div class="catalog__filter__ranges">
                            <div class="catalog__filter-range" id="mobile-year-range-min">2005</div>
                            <div class="catalog__filter-range" id="mobile-year-range-max">2023</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo__search__divider"></div>
            <div class="promo__search__item">
                <div class="promo__search__dropdown">
                    <div class="promo__search__select selected_dropdown">Price range</div>
                    <div class="dropdown__list dropdown__slider">
                        <div class="filter-slider dropdown__item" id="mobile-cost-range"></div>
                        <div class="catalog__filter__ranges">
                            <div class="catalog__filter-range" id="mobile-cost-range-min">From $0</div>
                            <div class="catalog__filter-range" id="mobile-cost-range-max">To $1 000 000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="catalog">
        <div class="container_fluid">
            <div class="catalog__wrapper">
                <div class="catalog__filters">
                    <div class="catalog__filter">
                        <div class="catalog__filter-name">PRICE RANGE</div>
                        <div class="filter-slider" id="cost-range"></div>
                        <div class="catalog__filter__ranges">
                            <div class="catalog__filter-range" id="cost-range-min">From $0</div>
                            <div class="catalog__filter-range" id="cost-range-max">To $1 000 000</div>
                        </div>
                    </div>
                    <div class="catalog__filter">
                        <div class="catalog__filter-name">YEAR</div>
                        <div class="filter-slider" id="year-range"></div>
                        <div class="catalog__filter__ranges">
                            <div class="catalog__filter-range" id="year-range-min">2005</div>
                            <div class="catalog__filter-range" id="year-range-max">2023</div>
                        </div>
                    </div>
                    <div class="catalog__models">
                        <?php
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'cars_brands',
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="catalog__models-item" data-brand="<?php the_field('data_brand'); ?>">
                                        <?php the_title(); ?>
                                    </div>
                                <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>
                <div class="catalog__items">
                    <h1 class="catalog__items-header">
                        Searching results
                    </h1>

                    <div class="catalog__list">

                        <?php
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'car_card',
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
                                                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']?>" class="catalog__card__info-photo">
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
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer('catalog_en');
?>