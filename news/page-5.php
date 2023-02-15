<?php
/*
Template Name: Новость 5
*/
?>

<?php
    get_header('news');
?>


    <section class="news-promo">
        <div class="language">
            <a href="<?php echo get_permalink(69); ?>" class="language__choice">EN</a>
            <a href="<?php echo get_permalink(67); ?>" class="language__choice language__selected_ru">RU</a>
        </div>
        <div class="container">
            <h1 class="news-promo__header">Автоновости</h1>
        </div>
    </section>

    <section class="news-state">
        <div class="container">
            <div class="news-state__header">В 2030 году половина продаваемых новых автомобилей в США будут электрическими</div>
            <div class="news-state__text">
                <p class="news-state__paragraph">
                    Рост популярности электромобилей в США будет обусловлен государственной поддержкой.
                </p>
                
                <div class="news-state__img news-state__img_full">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/states/5/first.webp" alt="electrocar" class="news-state__photo">
                </div>

                <p class="news-state__paragraph">
                    Аналитики BloombergNEF прогнозируют, что к 2030 году 52% всех продаваемых новых легковых автомобилей в США будут электрическими. К такому выводу они пришли после введения в действие закона о снижении инфляции (IRA). До этого эксперты считали, что к 2030 году 43% легковых автомобилей будут электрическими.
                </p>

                <p class="news-state__paragraph">
                    В рамках закона о снижении инфляции, выделено 374 млрд долларов (179,4 трлн тенге) на различные меры господдержки по улучшению климата. Среди них субсидии в размере 7,5 тысяч долларов (3,6 млн тенге) на покупку нового электромобиля.
                </p>
                <p class="news-state__paragraph news-state__paragraph_quote">
                    «Ожидается, что закон о снижении инфляции резко ускорит темпы перехода американцев на электромобили»,<br>— говорится в отчете BloombergNEF.
                </p>
                <p class="news-state__paragraph">
                    Напомним, что закон о снижении инфляции резко сокращает пул электромобилей, за покупку которых американцы получат субсидии. Если раньше государство поддерживало приобретение любой машины на электрическом двигателе, то сейчас — только тех, которые произведены на территории Северной Америки (США, Канада, Мексика).
                </p>
                <p class="news-state__paragraph">
                    Ассоциация автопроизводителей Европы выступила против принятия нового закона в США. В организации считают, что внедрение новых правил субсидирования никак не стимулируют к покупке электромобилей — батареи на машины с электрическими двигателями почти не выпускаются в США, поэтому компаниям придется локализовать свое производство чтобы не терять американский рынок. На это уйдет несколько лет, за которые электромобили в США могут потерять популярность. 
                </p>
            </div>
            <div class="news-state__links">
                <div class="news-state__links__subheader">
                    К другим новостям
                </div>
                <a href="<?php echo get_permalink(51); ?>" class="news-state__link">Рынок США страдает от обманов у автодилеров. На что жалуются покупатели?</a>
                <a href="<?php echo get_permalink(55); ?>" class="news-state__link">Ещё один новый Mitsubishi Outlander: теперь с турбомотором</a>
                <a href="<?php echo get_permalink(59); ?>" class="news-state__link">Что и на каком пробеге проверять и менять в автомобиле?</a>
                <a href="<?php echo get_permalink(63); ?>" class="news-state__link">Toyota снизила план производства из-за нехватки микрочипов</a>
            </div>
        </div>
    </section>
    

<?php
    get_footer('news');
?>    