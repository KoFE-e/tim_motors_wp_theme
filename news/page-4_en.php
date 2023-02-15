<?php
/*
Template Name: Новость 4 (англ)
*/
?>

<?php
    get_header('news_en');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(65); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_permalink(63); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">AUTO NEWS</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__wrapper">
                <div>
                    <div class="news-state__header">Toyota slashes production plan due to microchip shortage</div>
                    <div class="news-state__text">
                        <p class="news-state__paragraph">
                            In October 2022, the concern will produce 800,000 vehicles.
                        </p>
                        <p class="news-state__paragraph">
                            Initially, Toyota set itself the goal of producing 900,000 vehicles in October 2022. However, the plans had to be adjusted due to the lack of microchips - in October, the concern will produce 800,000 cars. The company says plans for November will also be lowered.
                        </p>
                        <p class="news-state__paragraph">
                            However, the shortage of microchips has not yet affected the company's annual targets. Toyota has set the bar for 9.7 million vehicles in all of 2022, writes Aussiedlerbote.
                        </p>
                        <p class="news-state__paragraph">
                            Due to coronavirus restrictions and a shortage of microchips, the Japanese automotive industry is going through hard times. Honda has already announced a 40% cut in vehicle production during 2022, while Nissan said its July 2022 profit was down 14%.
                        </p>
                    </div>
                </div>
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/4/first.webp" alt="toyota_logo" class="news-state__photo">
                </div>
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    To other news
                </div>
                <a href="<?php echo get_permalink(53); ?>" class="news-state__link">The US market is suffering from deceptions from car dealers. What are the customers complaining about?</a>
                <a href="<?php echo get_permalink(57); ?>" class="news-state__link">Another new Mitsubishi Outlander: now with a turbo engine</a>
                <a href="<?php echo get_permalink(61); ?>" class="news-state__link">What and at what mileage to check and change in the car?</a>
                <a href="<?php echo get_permalink(69); ?>" class="news-state__link">In 2030, half of the new cars sold in the US will be electric</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news_en');
?>    