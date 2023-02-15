<?php
/*
Template Name: Новость 5 (англ)
*/
?>

<?php
    get_header('news_en');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(69); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_permalink(67); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">AUTO NEWS</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__header">In 2030, half of the new cars sold in the US will be electric</div>
            <div class="news-state__text">
                <p class="news-state__paragraph">
                    The rise in popularity of electric vehicles in the US will be driven by government support.
                </p>
                
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/5/first.webp" alt="electrocar" class="news-state__photo">
                </div>

                <p class="news-state__paragraph">
                    BloombergNEF analysts predict that by 2030, 52% of all new passenger cars sold in the US will be electric. They came to this conclusion after the introduction of the Inflation Reduction Act (IRA). Prior to this, experts believed that by 2030, 43% of passenger cars will be electric.
                </p>

                <p class="news-state__paragraph">
                    As part of the law on reducing inflation, 374 billion dollars (179.4 trillion tenge) were allocated for various state support measures to improve the climate. Among them are subsidies in the amount of 7.5 thousand dollars (3.6 million tenge) for the purchase of a new electric car.
                </p>
                <p class="news-state__paragraph news-state__paragraph_quote">
                    “The Inflation Reduction Act is expected to dramatically accelerate the pace of Americans’ transition to electric vehicles,” <br> - BloombergNEF said in a report.
                </p>
                <p class="news-state__paragraph">
                    Recall that the law to reduce inflation sharply reduces the pool of electric vehicles, for the purchase of which Americans will receive subsidies. If earlier the state supported the purchase of any car with an electric motor, now it supports only those manufactured in North America (USA, Canada, Mexico).
                </p>
                <p class="news-state__paragraph">
                    The Association of European Automobile Manufacturers opposed the adoption of the new law in the United States. The organization believes that the introduction of new subsidy rules does not in any way stimulate the purchase of electric vehicles - batteries for cars with electric motors are almost never produced in the United States, so companies will have to localize their production in order not to lose the American market. This will take several years, during which electric vehicles in the US may lose popularity.
                </p>
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    To other news
                </div>
                <a href="<?php echo get_permalink(53); ?>" class="news-state__link">The US market is suffering from deceptions from car dealers. What are the customers complaining about?</a>
                <a href="<?php echo get_permalink(57); ?>" class="news-state__link">Another new Mitsubishi Outlander: now with a turbo engine</a>
                <a href="<?php echo get_permalink(61); ?>" class="news-state__link">What and at what mileage to check and change in the car?</a>
                <a href="<?php echo get_permalink(65); ?>" class="news-state__link">Toyota slashes production plan due to microchip shortage</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news_en');
?>    