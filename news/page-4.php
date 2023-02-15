<?php
/*
Template Name: Новость 4
*/
?>

<?php
    get_header('news');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(65); ?>" class="language__choice">EN</a>
            <a href="<?php echo get_permalink(63); ?>" class="language__choice language__selected_ru">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">Автоновости</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__wrapper">
                <div>
                    <div class="news-state__header">Toyota снизила план производства из-за нехватки микрочипов</div>
                    <div class="news-state__text">
                        <p class="news-state__paragraph">
                            В октябре 2022 года концерн выпустит 800 тысяч автомобилей.
                        </p>
                        <p class="news-state__paragraph">
                            Изначально Toyota ставила своей задачей выпустить 900 тысяч автомобилей в октябре 2022 года. Однако планы пришлось скорректировать из-за нехватки микрочипов — в октябре концерн выпустит 800 тысяч автомобилей. В компании заявляют, что планы на ноябрь также будут снижены.
                        </p>
                        <p class="news-state__paragraph">
                            Однако дефицит микрочипов пока не сказывается на годовых задачах компании. Toyota задала планку пустить 9,7 млн машин за весь 2022 год, пишет Aussiedlerbote.
                        </p>
                        <p class="news-state__paragraph">
                            Из-за коронавирусных ограничений и дефицита микрочипов японская автомобильная промышленность переживает не лучшие времена. Honda уже объявила о сокращении объема производства машин на 40% в течение 2022 года, а в Nissan заявили, что прибыль компании в июле 2022 года снизилась на 14%.
                        </p>
                    </div>
                </div>
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/4/first.webp" alt="toyota_logo" class="news-state__photo">
                </div>
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    К другим новостям
                </div>
                <a href="<?php echo get_permalink(51); ?>" class="news-state__link">Рынок США страдает от обманов у автодилеров. На что жалуются покупатели?</a>
                <a href="<?php echo get_permalink(55); ?>" class="news-state__link">Ещё один новый Mitsubishi Outlander: теперь с турбомотором</a>
                <a href="<?php echo get_permalink(59); ?>" class="news-state__link">Что и на каком пробеге проверять и менять в автомобиле?</a>
                <a href="<?php echo get_permalink(67); ?>" class="news-state__link">В 2030 году половина продаваемых новых автомобилей в США будут электрическими</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news');
?>    