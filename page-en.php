<?php
/*
Template Name: Главная (англ.)
*/
?>

<?php
    get_header('en');
?>


    <section class="promo">
        <div class="language">
            <a href="<?php echo get_permalink(38); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_home_url(); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <div class="promo__circle"></div>
            <div class="promo__wrapper">
                <div class="promo__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/promo/logo_promo.svg" alt="tim-motors" class="promo__logo">
                </div>
                <div class="promo__divider"></div>
                <h1 class="promo__header">
                    Sale and delivery of cars from UAE and Europe
                </h1>
            </div>
        </div>
        <div class="promo__search">
            <div class="promo__search__item">
                <div class="promo__search__dropdown">
                    <div class="promo__search__select selected_dropdown">Model</div>
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
                    <div class="promo__search__select selected_dropdown">Year</div>
                    <div class="dropdown__list">
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
                    </div>
                </div>
            </div>
            
            <div class="promo__search__btn">
                Search
            </div>
        </div>
    </section>

    <section class="deals">
        <div class="deals__header title title_fz42"><span>Hot</span> deals</div>
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
                    <div class="advantages__header title title_fz42">Our <span>advantages</span></div>
                    <div class="advantages__divider"></div>
                    <div class="advantages__list">
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/star_icon.svg" alt="star">
                            </div>
                            <div class="advantages__descr"><span>Distributors</span> of major<br>manufacturers</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/pos_icon.svg" alt="pos">
                            </div>
                            <div class="advantages__descr">We have <span>our own site</span> for the repair<br>and sale of cars in Dubai</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__icon">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/advantages/list_icon.svg" alt="list">
                            </div>
                            <div class="advantages__descr"><span>We control the delivery process</span><br>from loading to unloading</div>
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
            <div class="steps__subheader">How we are working?</div>
            <div class="steps__header title title_fz42">Tim Motors uses <span>5 easy steps</span></div>
            <div class="steps__wrapper">
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/phone_icon.svg" alt="phone">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Request
                        </div>
                        <div class="steps__item__text">
                            You call us or leave a request on the site and our manager will contact you.
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/edit_icon.svg" alt="edit">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Contract
                        </div>
                        <div class="steps__item__text">
                            We agree on a car, working conditions and sign an agency agreement. Full payment.
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
                            Delivery
                        </div>
                        <div class="steps__item__text">
                            Expect from 30 to 60 days (depending on the country of transit and destination).
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/key_icon.svg" alt="key">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Getting a car
                        </div>
                        <div class="steps__item__text">
                            Accept the car under the act of acceptance and transfer.
                        </div>
                    </div>
                </div>
                <div class="steps__item">
                    <div class="steps__item__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/steps/arrow_icon.svg" alt="arrow">
                    </div>
                    <div class="steps__item__descr">
                        <div class="steps__item__subheader">
                            Registration
                        </div>
                        <div class="steps__item__text">
                            Register your vehicle with an electronic vehicle passport.
                        </div>
                    </div>
                </div>
            </div>
            <div class="steps__help">
                <div class="steps__help__info">
                    <div class="steps__help__subheader">Help in choosing a car</div>
                    <div class="steps__help__text">If you decide to buy a car yourself - we are ready to assist in the selection</div>
                </div>
            </div>
        </div>
    </section>

    <section class="suggestions">
        <div class="container">
            <div class="suggestions__header title title_fz42">
                Check out our <span>best deals</span>
            </div>
            <div class="suggestions__wrapper">
                <div class="suggestions__card suggestions__card_new">
                    <div class="suggestions__card__subheader">New</div>
                    <div class="suggestions__card__descr">The current base<br>of cars in stock</div>
                    <a href="<?php echo get_permalink(40); ?>" class="suggestions__card__btn">Choose a car</a>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/auto/auto_blue.webp" alt="blue_auto" class="suggestions__card__img">
                </div>
                <div class="suggestions__card suggestions__card_bu">
                    <div class="suggestions__card__subheader">Used car</div>
                    <div class="suggestions__card__descr">Verified<br>used cars</div>
                    <a href="<?php echo get_permalink(40); ?>" class="suggestions__card__btn suggestions__card__btn_bu">Choose a car</a>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/auto/auto_grey.webp" alt="grey_auto" class="suggestions__card__img">
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="link" id="team"></div>
        <div class="container">
            <div class="team__details">
                <div class="team__details__header title title_fz42"><span>Detailing</span> center</div>
                <div class="team__details__descr">
                    We are a team of professionals who have many years of experience, which allows us to perform car repairs of any complexity. We use modern technologies and the latest materials, constantly improve the quality of our services so that our customers are always satisfied and can trust us.
                </div>
            </div>
            <div class="team__members">
                <div class="team__members__subheader">Team</div>
                <div class="team__list">
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/first.webp" alt="first"></div>
                        <div class="team__member__name">Ivan Baranov</div>
                        <div class="team__member__descr">Body builder</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/second.webp" alt="second"></div>
                        <div class="team__member__name">Igor Bodrov</div>
                        <div class="team__member__descr">Craftsman</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/third.webp" alt="third"></div>
                        <div class="team__member__name">Sergey Svistun</div>
                        <div class="team__member__descr">Auto Electrician</div>
                    </div>
                    <div class="team__member">
                        <div class="team__member__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/home/team/fourth.webp" alt="fourth"></div>
                        <div class="team__member__name">Ruslan Smirnov</div>
                        <div class="team__member__descr">Manager</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__video">
            <div id="team__video__iframe"></div>
        </div>
        <div class="team__address">
            <div class="team__address__wrapper team__address__wrapper_leftbg team__address__wrapper_eng">
                <div class="team__address__text">
                    <div class="team__address__subheader">Industrial Area - Industrial Area 4 - Sharjah</div>
                    <div class="team__address__route">Build a route</div>
                </div>
                <div class="team__address__icons">
                    <a href="<?php the_field('maps_google_link', 7); ?>" target="_blank" class="team__address__icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/team/gmaps_icon.png" alt="gmaps" class="team__address__img">
                    </a>
                    <a href="<?php the_field('maps_2gis_link', 7); ?>" target="_blank" class="team__address__icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/home/team/2gis_icon.png" alt="2gis" class="team__address__img">
                        <div class="team__address__icon__descr">2GIS</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news__wrapper">
                <div class="news__header">Auto News</div>
                <div class="news__inner">
                    <div class="news__item">
                        <div class="news__subheader">The US market is suffering from deceptions from car dealers. What are customers complaining about</div>
                        <div class="news__text">Cheating in hundreds and thousands of dollars, overpayment "for air" and price discrimination. How American sellers have become very similar to Russian ones due to the crisis</div>
                        <a href="<?php echo get_permalink(53); ?>" class="news__btn">Read</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">Another new Mitsubishi Outlander: now with a turbo engine</div>
                        <div class="news__text">In some places, the latest generation crossover also got a larger multimedia system tablet. A new market for such an SUV will begin to develop in the near future.</div>
                        <a href="<?php echo get_permalink(57); ?>" class="news__btn">Read</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">What and at what mileage to check and change in the car?</div>
                        <div class="news__text">For trouble-free operation of the vehicle, it is extremely not enough just to fill up the car and change the engine oil regularly.</div>
                        <a href="<?php echo get_permalink(61); ?>" class="news__btn">Read</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">Toyota slashes production plan due to microchip shortage</div>
                        <div class="news__text">Initially, Toyota set itself the goal of producing 900,000 vehicles in October 2022. However, the plans had to be adjusted due to the lack of microchips - in October, the concern will produce 800,000 cars.</div>
                        <a href="<?php echo get_permalink(65); ?>" class="news__btn">Read</a>
                    </div>
                    <div class="news__item">
                        <div class="news__subheader">In 2030, half of the new cars sold in the US will be electric</div>
                        <div class="news__text">BloombergNEF analysts predict that by 2030, 52% of all new passenger cars sold in the US will be electric.</div>
                        <a href="<?php echo get_permalink(69); ?>" class="news__btn">Read</a>
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
            <div class="youtube__header">Follow us on You Tube</div>
            <div class="youtube__video">
                <iframe src="https://www.youtube.com/embed/<?php the_field('id_youtube_video', 7); ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class="container">
            <div class="questions__header title title_fz42">Questions and answers</div>
            <div class="questions__list">
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">What is the price of a turnkey car</div>
                    </div>
                    <div class="questions__answer">We will take care of all the complexity and paperwork! <br><br>
                        The turnkey price is measured in US dollars, is final and includes the selection of a car, the cost of the car, all logistics, all customs fees, installation of ERA GLONASS equipment, the cost of issuing EPTS and other related fees, delivery to the buyer.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Is the car insured?</div>
                    </div>
                    <div class="questions__answer">Transportation of the car is insured absolutely at all stages until the transfer to the buyer.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Terms of delivery of the car</div>
                    </div>
                    <div class="questions__answer">Your car will be delivered within 45 to 60 days.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">What are the payment terms?</div>
                    </div>
                    <div class="questions__answer">Payment is made to the settlement account of the leasing company in rubles, or the company to the importer.</div>
                </div>
                <div class="questions__item">
                    <div class="questions__title">
                        <div class="questions__icon">
                            <span class="vertical"></span>
                            <span class="horizontal"></span>
                        </div>
                        <div class="questions__name">Conclusion of the contract</div>
                    </div>
                    <div class="questions__answer">After agreeing on the brand, model, desired configuration and payment terms, a commercial offer is prepared. <br><br>
                        With full (staged) payment:
                        A contract for the supply of a car and a specification for a specific car is concluded, the price is fixed in rubles on the date the funds are received on the supplier's settlement account.</div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer('en');
?>