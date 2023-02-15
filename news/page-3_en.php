<?php
/*
Template Name: Новость 3 (англ)
*/
?>

<?php
    get_header('news_en');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(61); ?>" class="language__choice language__selected_en">EN</a>
            <a href="<?php echo get_permalink(59); ?>" class="language__choice">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">AUTO NEWS</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__header">What and at what mileage to check and change in the car?</div>
            <div class="news-state__text">
                <div class="news-state__subheader">
                    For trouble-free operation of the vehicle, it is extremely not enough just to fill up the car and change the engine oil regularly. Timely replacement of consumables will allow you to move freely by car, receiving only positive emotions from the driving process.
                </div>
                
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/3/first.webp" alt="diagnostic" class="news-state__photo">
                </div>

                <p class="news-state__paragraph">
                    <span>Every year.</span> On average, a car travels 10,000 kilometers in twelve months. This, in fact, is not much, but nevertheless, every year drivers must change in their vehicle: engine oil, oil filter, air filter, cabin filter, wiper blades.
                    High-quality engine oil is necessary for the full operation of the power unit. Along with its replacement, a new filter must be installed. You can perform these works yourself, without contacting a service center.
                </p>
                <p class="news-state__paragraph">
                    When operating a vehicle with a dirty filter, fuel consumption increases significantly, which clearly does not please drivers. You also need to remember that every season you need to change the wiper blades, because otherwise, they cease to fully clean the windshield, which leads to poor visibility on the roads.
                </p>

                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/3/second.webp" alt="repair" class="news-state__photo">
                </div>

                <p class="news-state__paragraph">
                    <span>Every 2-3 years.</span> As statistics show, drivers prefer not to operate cars for a long time, reselling them. However, if the vehicle has been owned for more than two or three years, then the following should be replaced: fuel filter, spark plugs, brake pads, brake fluid.
                </p>
                <p class="news-state__paragraph">
                    How often the brake pads need to be replaced depends on how the vehicle is used. A characteristic squeal when you press the pedal indicates severe wear. In addition, if the pedal gives off in the foot, then this is also a signal for repair work.
                </p>
                <p class="news-state__paragraph">
                    You can replace the consumable parts of the car yourself. Brake fluid needs to be changed on average, every 40 thousand kilometers. The thing is that it directly affects the effectiveness of the braking procedure.
                </p>

                <div class="news-state__subheader">
                    More serious repairs should be carried out only after 100 thousand kilometers. However, it is possible to operate a car up to such an indicator on the odometer only if consumables are replaced regularly.
                </div>
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    To other news
                </div>
                <a href="<?php echo get_permalink(53); ?>" class="news-state__link">The US market is suffering from deceptions from car dealers. What are the customers complaining about?</a>
                <a href="<?php echo get_permalink(57); ?>" class="news-state__link">Another new Mitsubishi Outlander: now with a turbo engine</a>
                <a href="<?php echo get_permalink(65); ?>" class="news-state__link">Toyota slashes production plan due to microchip shortage</a>
                <a href="<?php echo get_permalink(69); ?>" class="news-state__link">In 2030, half of the new cars sold in the US will be electric</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news_en');
?>    