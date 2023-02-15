<?php
	get_header();
?>

    <section class="promo">
        <div class="language">
            <a href="<?php echo get_permalink(38); ?>" class="language__choice">EN</a>
            <a href="<?php echo get_home_url(); ?>" class="language__choice language__selected_ru">RU</a>
        </div>
        <div class="container">
            <div class="promo__circle"></div>
            <div class="promo__wrapper">
                <div class="promo__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/promo/logo_promo.svg" alt="tim-motors" class="promo__logo">
                </div>
                <div class="promo__divider"></div>
                <h1 class="promo__header">
                    Продажа и доставка автомобилей из ОАЭ и Европы
                </h1>
            </div>
        </div>
        <div class="promo__search">
            <div class="promo__search__item">
                <div class="promo__search__dropdown">
                    <div class="promo__search__select selected_dropdown">Модель</div>
                    <div class="dropdown__list">
                        <div class="dropdown__divider"></div>
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
                                    <div class="dropdown__item dropdown__brand" data-brand="<?php the_field('data_brand'); ?>">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="dropdown__divider"></div>
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
                    <div class="promo__search__select selected_dropdown">Год</div>
                    <div class="dropdown__list">
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2005</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2006</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2007</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2008</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2009</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2010</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2011</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2012</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2013</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2014</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2015</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2016</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2017</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2018</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2019</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2020</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2021</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2022</div>
                        <div class="dropdown__divider"></div>
                        <div class="dropdown__item dropdown__year">2023</div>
                        <div class="dropdown__divider"></div>
                    </div>
                </div>
            </div>
            
            <div class="promo__search__btn">
                Поиск
            </div>
        </div>
    </section>

    <section class="deals">
        <div class="deals__header title title_fz42"><span>Горячие</span> предложения</div>
        <div class="deals__inner">
			<?php
				// параметры по умолчанию
				$my_posts = get_posts( array(
					'numberposts' => -1,
					'category_name'    => 'slider_cars',
					'orderby'     => 'date',
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
						</div>
					<?php
				}

				wp_reset_postdata(); // сброс
			?>
        </div>
		<?php
			// параметры по умолчанию
			$my_posts = get_posts( array(
				'numberposts' => -1,
				'category_name'    => 'slider_cars',
				'orderby'     => 'date',
				'order'       => 'ASC',
				'post_type'   => 'post',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			) );

			global $post;

			foreach( $my_posts as $post ){
				setup_postdata( $post );
				?>
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
				<?php
			}

			wp_reset_postdata(); // сброс
		?>
    </section>

    <section class="advantages">
        <div class="link" id="advantages"></div>
        <div class="container">
            <div class="advantages__wrapper">
                <div class="advantages__descr">
                    <div class="advantages__header title title_fz42">Наши <span>преимущества</span></div>
                    <div class="advantages__divider"></div>
                    <div class="advantages__list">
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/star_icon.svg" alt="star">
                            </div>
                            <div class="advantages__descr"><span>Дистрибьюторы</span> крупных<br>производителей</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/pos_icon.svg" alt="pos">
                            </div>
                            <div class="advantages__descr">Имеем свою <span>собственную площадку</span><br>по ремонту и продаже машин в Дубае</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/list_icon.svg" alt="list">
                            </div>
                            <div class="advantages__descr"><span>Контролируем процесс</span><br>доставки от загрузки до выгрузки</div>
                        </div>
                    </div>
                </div>
                <div class="advantages__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/advantages/adv_img.webp" alt="port">
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="steps__subheader">Как мы работаем?</div>
            <div class="steps__header title title_fz42">Tim Motors использует <span>5 простых шагов</span></div>
            <div class="steps__wrapper">
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/phone_icon.svg" alt="phone">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Заявка
                        </div>
                        <div class="steps__item__text">
                            Вы звоните нам или оставляете заявку на сайте и с Вами связывается наш менеджер.
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/edit_icon.svg" alt="edit">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Договор
                        </div>
                        <div class="steps__item__text">
                            Согласовываем автомобиль, условия работы и подписываем агентский договор. Полная оплата.
                        </div>
                    </div>
                </div>
            </div>
            <div class="steps__wrapper steps__wrapper_3">
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/ship_icon.svg" alt="ship">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Доставка
                        </div>
                        <div class="steps__item__text">
                            Ожидаете от 30 до 60 дней (зависит от страны транзита и пункта назначения).
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/key_icon.svg" alt="key">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Получение автомобиля
                        </div>
                        <div class="steps__item__text">
                            Принимаете автомобиль по акту приема-передачи.
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/arrow_icon.svg" alt="arrow">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Постановка на учет
                        </div>
                        <div class="steps__item__text">
                            Ставите автомобиль на учет по электронному паспорту транспортного средства.
                        </div>
                    </div>
                </div>
            </div>
            <div class="steps__help">
                <div class="steps__help__info">
                    <div class="steps__help__subheader">Помощь в подборе авто</div>
                    <div class="steps__help__text">Если Вы решили сами купить автомобиль - мы готовы оказать помощь в подборе</div>
                </div>
            </div>
        </div>
    </section>

    <section class="suggestions">
        <div class="container">
            <div class="suggestions__header title title_fz42">
                Ознакомьтесь с нашими<br> 
                <span>лучшими предложениями</span>
            </div>
            <div class="suggestions__wrapper">
                <div class="suggestions__card suggestions__card_new">
                    <div class="suggestions__card__subheader">Новые</div>
                    <div class="suggestions__card__descr">Актуальная база<br>автомобилей в наличии</div>
                    <a href="<?php echo get_permalink(36); ?>" class="suggestions__card__btn">Выбрать машину</a>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/auto/auto_blue.webp" alt="blue_auto" class="suggestions__card__img">
                </div>
                <div class="suggestions__card suggestions__card_bu">
                    <div class="suggestions__card__subheader">Б/у</div>
                    <div class="suggestions__card__descr">Проверенные<br>автомобили с пробегом</div>
                    <a href="<?php echo get_permalink(36); ?>" class="suggestions__card__btn suggestions__card__btn_bu">Выбрать машину</a>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/auto/auto_grey.webp" alt="grey_auto" class="suggestions__card__img">
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="link" id="team"></div>
        <div class="container">
            <div class="team__details">
                <div class="team__details__header title title_fz42"><span>Детейлинг</span> центр</div>
                <div class="team__details__descr">
                    Мы команда профессионалов, которая имеет многолетний опыт, что позволяет выполнять работы по ремонту автомобилей любой сложности. Мы используем современные технологии и новейшие материалы, постоянно улучшаем качество наших услуг,  чтобы наши клиенты всегда оставались довольны и могли нам доверять.</div>
            </div>
            <div class="team__members">
                <div class="team__members__subheader">Команда</div>
                <div class="team__list">
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/first.webp" alt="first"></div>
                        <div class="team__member__name">Иван Баранов</div>
                        <div class="team__member__descr">Кузовщик</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/second.webp" alt="second"></div>
                        <div class="team__member__name">Игорь Бодров</div>
                        <div class="team__member__descr">Моляр</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/third.webp" alt="third"></div>
                        <div class="team__member__name">Сергей Свистун</div>
                        <div class="team__member__descr">Автоэлектрик</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/fourth.webp" alt="fourth"></div>
                        <div class="team__member__name">Руслан Смирнов</div>
                        <div class="team__member__descr">Управляющий</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__video">
            <div id="team__video__iframe"></div>
        </div>
        <div class="team__address">
            <div class="team__address__wrapper team__address__wrapper_leftbg">
                <div class="team__address__text">
                    <div class="team__address__subheader">Industrial Area - Industrial Area 4 - Sharjah</div>
                    <div class="team__address__route">Построить маршрут</div>
                </div>
                <div class="team__address__icons">
                    <a href="<?php the_field('maps_google_link', 7); ?>" target="_blank" class="team__address__icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/team/gmaps_icon.png" alt="gmaps" class="team__address__img">
                    </a>
                    <a href="<?php the_field('maps_2gis_link', 7); ?>" target="_blank" class="team__address__icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/team/2gis_icon.png" alt="2gis" class="team__address__img">
                        <div class="team__address__icon__descr">2ГИС</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news__wrapper">
                <div class="news__header">Автоновости</div>
                <div class="news__inner">
                    <div class="news__item">
                        <div class="news__subheader">Рынок США страдает от обманов у автодилеров. На что жалуются покупатели?</div>
                        <div class="news__text">Накрутки в сотни и тысячи долларов, переплата «за воздух» и ценовая дискриминация. Как американские продавцы из-за кризиса стали очень похожи на российских</div>
                        <a href="<?php echo get_permalink(51); ?>" class="news__btn">Читать</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">Ещё один новый Mitsubishi Outlander: теперь с турбомотором</div>
                        <div class="news__text">Кое-где кроссоверу последнего поколения также достался более крупный планшет мультимедийной системы. Новый рынок такой SUV начнет осваивать в ближайшее время.</div>
                        <a href="<?php echo get_permalink(55); ?>" class="news__btn">Читать</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">Что и на каком пробеге проверять и менять в автомобиле?</div>
                        <div class="news__text">Для беспроблемной эксплуатации транспортного средства крайне мало просто заправлять машину и регулярно менять моторное масло.</div>
                        <a href="<?php echo get_permalink(59); ?>" class="news__btn">Читать</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">Toyota снизила план производства из-за нехватки микрочипов</div>
                        <div class="news__text">Изначально Toyota ставила своей задачей выпустить 900 тысяч автомобилей в октябре 2022 года. Однако планы пришлось скорректировать из-за нехватки микрочипов — в октябре концерн выпустит 800 тысяч автомобилей.</div>
                        <a href="<?php echo get_permalink(63); ?>" class="news__btn">Читать</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">В 2030 году половина продаваемых новых автомобилей в США будут электрическими</div>
                        <div class="news__text">Аналитики BloombergNEF прогнозируют, что к 2030 году 52% всех продаваемых новых легковых автомобилей в США будут электрическими.</div>
                        <a href="<?php echo get_permalink(67); ?>" class="news__btn">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="youtube">
        <div class="container">
            <div class="youtube__img">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/youtube/youtube_logo.webp" alt="youtube">
            </div>
            <div class="youtube__header">Следите за нами на You Tube</div>
            <div class="youtube__video">
                <iframe src="https://www.youtube.com/embed/<?php the_field('id_youtube_video'); ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class="container">
            <div class="questions__header title title_fz42">Вопросы и ответы</div>
            <div class="questions__list">
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Что такое цена авто «под ключ»</div>
                    </div>
                    <div class="questions__answer">Мы возьмем все сложности и документы на себя!<br><br>
                        Цена под "ключ" измеряется в долларах США, является окончательной и включается в себя подбор авто, стоимость автомобиля, всю логистику, все таможенные сборы, установку оборудования ЭРА ГЛОНАСС, расходы на выдачу ЭПТС и прочие сопутствующие сборы, доставка до покупателя.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Страхуется ли автомобиль?</div>
                    </div>
                    <div class="questions__answer">Перевозка автомобиля страхуется абсолютно на всех этапах до передачи покупателю.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Сроки доставки автомобиля</div>
                    </div>
                    <div class="questions__answer">Ваш автомобиль будет доставлен в срок от 45 до 60 дней.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Какие условия оплаты?</div>
                    </div>
                    <div class="questions__answer">Оплата производится на расчетный счёт лизинговой компании в рублях, либо компании импортеру.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Заключение договора</div>
                    </div>
                    <div class="questions__answer">После согласования марки, модели, желаемой комплектации и условий оплаты, подготавливается коммерческое предложение.<br><br>
                        При полной (поэтапной) оплате:
                        Заключается договор поставки автомобиля и спецификация на конкретный автомобиль, цена фиксируется в рублях на дату поступления средств на расчетный счет поставщика.</div>
                </div>
            </div>
        </div>
    </section>
<?php 
	get_footer();
?>
    