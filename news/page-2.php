<?php
/*
Template Name: Новость 2
*/
?>

<?php
    get_header('news');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(57); ?>" class="language__choice">EN</a>
            <a href="<?php echo get_permalink(55); ?>" class="language__choice language__selected_ru">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">Автоновости</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__header">Ещё один новый Mitsubishi Outlander: теперь с турбомотором</div>
            <div class="news-state__text">
                <div class="news-state__subheader">
                    Кое-где кроссоверу последнего поколения также достался более крупный планшет мультимедийной системы. Новый рынок такой SUV начнет осваивать в ближайшее время.
                </div>
                
                <p class="news-state__paragraph">
                    Мировую премьеру кросс Mitsubishi Outlander четвертой генерации справил еще в начале прошлого года. Сегодня свежая модель доступна в Штатах, Японии, Австралии и некоторых странах Латинской Америки. А скоро новый SUV стартует и в Китае: там покупателям предложат машины локального производства, выпуск налажен на заводе СП Mitsubishi и GAC. Как водится, у «поднебесного» варианта оказались свои особенности.
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
                    Новый Outlander, напомним, делит «тележку» CMF-C/D с Nissan Rogue/X-Trail. Внешне предназначенный для Китая кроссовер Mitsubishi повторил глобальный SUV, размеры тоже совпадают: длина – 4710 мм, ширина – 1862 мм, высота – 1740/1745 мм (зависит от версии), колесная база равна 2706 мм. В Поднебесной для модели предусмотрены 18- или 20-дюймовые колеса.
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
                    Интерьер тоже в целом такой же, как у «мирового» Аутлендера, за исключением мультимедийной системы: китайский вариант имеет планшет диагональю 10,25 дюйма, причем на нем отсутствуют шайбы, а расположенные на корпусе экрана «горячие» клавиши сделали сенсорными (в других странах мультимедиа максимум с 9-дюймовым экраном, «крутилками» и физическими кнопками). В список оборудования еще входят проекционный дисплей (10,8 дюйма), виртуальная «приборка» (12,3 дюйма), панорамный люк в крыше и множество ассистентов. Модель доступна с семиместным салоном.
                </p>
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/2/sixth.webp" alt="outlander" class="news-state__photo">
                </div>
                <p class="news-state__paragraph">
                    Главное же отличие китайского Mitsubishi Outlander от прочих – мотор. Так, если на остальных рынках кроссовер нового поколения бывает только с «атмосферниками» (включая подзаряжаемый гибрид PHEV), то в Поднебесной модель получила бензиновую «турбочетверку» 4B40 1.5. Аналогичный двигатель предусмотрен и для младшего паркетника Eclipse Cross, но у Аутлендера он имеет довесок в виде 48-вольтового стартер-генератора, плюс увеличена отдача – 215 л.с. и 280 Нм (на местном Eclipse Cross турбодвигатель выдает 170 л.с. и 250 Нм). Турбомотор сочетается исключительно с вариатором, привод передний или полный.
                </p>
                <p class="news-state__paragraph">
                    В Китае заказы на новый Mitsubishi Outlander начнут принимать 30 сентября, в продажу кроссовер поступит до конца текущего года. Не исключено, что следом за «поднебесным» SUV модель начнут оснащать турбомотором и в остальных странах.
                </p>

                <div class="news-state__ref">
                    <div class="news-state__ref__card">
                        <?php
                            // параметры по умолчанию
                            $my_posts = get_posts( array(
                                'numberposts' => 1,
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
                                        <div class="catalog__card-more">Подробнее о комплектации</div>
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
                                                            <div class="catalog__card-price-descr">Цена<br>в ОАЭ</div>
                                                        </div>
                                                        <div class="catalog__card-price">
                                                            <div class="catalog__card-price-cost">$ <span class="cost-rf"><?php the_field('rf_cost'); ?></span></div>
                                                            <div class="catalog__card-price-descr">Цена в РФ<br>под ключ</div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                    <div class="catalog__card-call">
                                                        Стоимость авто уточняйте у менеджера
                                                    </div>
                                                    <?php
                                                }
                                            ?>

                                            <div class="catalog__card-divider"></div>
                                            <div class="catalog__card-characteristics">
                                                <div class="catalog__card-characteristics-ls"><span>Л.с:</span> <?php the_field('hp'); ?></div>
                                                <div class="catalog__card-characteristics-trans">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/catalog/cards/type_transmission.svg" alt="transmission" class="catalog__card-characteristics-img">
                                                    <div class="catalog__card-characteristics-text"><?php the_field('gearbox_type'); ?></div>
                                                </div>
                                                <div class="catalog__card-characteristics-fuel">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/catalog/cards/type_fuel.svg" alt="fuel" class="catalog__card-characteristics-img">
                                                    <div class="catalog__card-characteristics-text"><?php the_field('type_of_fuel'); ?></div>
                                                </div>
                                            </div>
                                            <a href="https://wa.me/<?php the_field('contacts_whatsapp',7); ?>" class="catalog__card__btn">Оставить заявку</a>
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
                                                    <?php the_field('first_column_char'); ?>
                                                </div>
                                                <div class="catalog__card__info-column">
                                                    <?php the_field('second_column_char'); ?>
                                                </div>
                                                <div class="catalog__card__info-column">
                                                    <?php the_field('third_column_char'); ?>
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
                        в нашем каталоге
                    </div>
                </div>
                
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    К другим новостям
                </div>
                <a href="<?php echo get_permalink(51); ?>" class="news-state__link">Рынок США страдает от обманов у автодилеров. На что жалуются покупатели?</a>
                <a href="<?php echo get_permalink(59); ?>" class="news-state__link">Что и на каком пробеге проверять и менять в автомобиле?</a>
                <a href="<?php echo get_permalink(63); ?>" class="news-state__link">Toyota снизила план производства из-за нехватки микрочипов</a>
                <a href="<?php echo get_permalink(67); ?>" class="news-state__link">В 2030 году половина продаваемых новых автомобилей в США будут электрическими</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news');
?>    