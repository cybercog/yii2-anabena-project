<?php
use yii\helpers\Html;
use app\web\themes\anabena\IndexAsset;
use yii\web\View;
use bariew\pageModule\widgets\MainMenu;

/**
 * @var View $this
 * @var string $content
 */
IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
  <head>
    <?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

      <header class="header clearfix">
        <div class="header_logo"></div>
        <ul class="language_site">
          <li class="language_site-item active"><a href="">Ru</a></li>
          <li class="language_site-item"><a href="">En</a></li>
        </ul>
        <nav class="nav nav--header">
            <?= MainMenu::widget([
                'options' => ['class' => 'nav_list'],
                'itemOptions' => ['class' => 'nav_item']
            ]) ; ?>
        </nav>
      </header><!-- .header-->

      <div class="middle clearfix">

        <div class="container">
          <main class="content">

            <div class="content_item clearfix">
              <section class="info_about">
                <header class="info_about_heading">
                  <h2>
                    <span class="title">CRM</span>
                    <span class="sub-title">Система управления</span>
                  </h2>
                </header>
                <div class="info_about_body clearfix">
                  <img src="img/img1.jpg" alt="">

                  <div class="people developer--people">
                    <figure class="people_img developer--people_img">
                      <img src="img/dev_img.jpg" alt=""/>
                    </figure>
                    <div class="developer--people_body">
                      <div class="people_name">
                        Разработчик Павел Бариев
                      </div>
                      <div class="developer--people_text">
                        Я попытался создать сверхудобную и кодо-правильную систему, делал для народа России и стран.
                      </div>
                      <div class="read_all">
                        <a href="">Можно не читать далее</a>
                      </div>
                    </div>
                  </div>

                </div>
              </section>
            </div>

            <div class="content_item clearfix">
              <section class="info_about info_about--x2">
                <header class="info_about_heading">  
                  <h2>
                    <span class="title">Web</span>
                    <span class="sub-title">Сайт посвящен все американцам живущим в России</span>
                  </h2>
                </header>
                <div class="info_about_body clearfix">
                  <img src="img/img2.jpg" alt="">
                </div>
              </section>

              <section class="info_about info_about--x2">
                <header class="info_about_heading">  
                  <h2>
                    <span class="title">App</span>
                    <span class="sub-title">Приложение а так то, адаптивный сайт</span>
                  </h2>
                </header>
                <div class="info_about_body clearfix">
                  <img src="img/img3.jpg" alt="">
                </div>
              </section>
            </div>

            <div class="content_item clearfix">
              <section class="info_about info_about--review info_about--x2">
                <header class="info_about_heading">
                  <h2>
                    <span class="title">Отзывы</span>
                    <span class="sub-title">Наших клиентов</span>
                  </h2>
                </header>
                <div class="info_about_body clearfix">
                  
                  <div id="slider_reviews">

                    <div class="people review--people">
                      <figure class="people_img">
                        <img src="img/people.jpg" alt=""/>
                      </figure>
                      <div class="review--people_text">
                        Мне очень понравилось работать с командой разработчиков из Anabena. Все выполненно в сроки и по разумным ценам.
                      </div>
                    </div>

                    <div class="people review--people">
                      <figure class="people_img">
                        <img src="img/people.jpg" alt=""/>
                      </figure>
                      <div class="review--people_text">
                        Мне очень понравилось работать с командой разработчиков из Anabena. Все выполненно в сроки и по разумным ценам.
                      </div>
                    </div>

                  </div>

                  <div class="arrows">
                    <span class="arrow arrow_prev"></span>
                    <span class="arrow arrow_next"></span>
                  </div>

                  <div class="write_review">
                    <span class="icon-plus"></span>
                    Написать отзыв
                  </div>
                  

                </div>
              </section>
              <section class="info_about info_about--x2">
                <header class="info_about_heading">
                  <h2>
                    <span class="title">Блог</span>
                    <span class="sub-title">Первопроходцы нашей первой CRM. С чего все начналось</span>
                  </h2>
                </header>
                <div class="info_about_body clearfix">
                  <img src="img/img4.jpg" alt="">
                  <div class="discuss">
                    <span class="icon-plus"></span>
                    Обсудить
                  </div>
                </div>
              </section>
            </div>

            <div class="content_item clearfix">
              <section class="info_about">
                <header class="info_about_heading">
                  <h2>
                    <span class="title">Мы</span>
                    <span class="sub-title">Кто создает</span>
                  </h2>
                </header>

                <div class="info_about_body clearfix peoples">

                  <div class="people">
                    <figure class="people_img">
                      <img src="img/people.jpg" alt=""/>
                    </figure>
                    <div class="people_name">
                      Константин Константинопольский
                    </div>
                    <div class="people_position">
                        Programmer-Drummer
                    </div>
                    <ul class="social_networks social_networks--people">
                      <li class="social_networks-item fb"><a href="">f</a></li>
                      <li class="social_networks-item gm"><a href="">g</a></li>
                    </ul>
                  </div>

                  <div class="people">
                    <figure class="people_img">
                      <img src="img/people.jpg" alt=""/>
                    </figure>
                    <div class="people_name">
                      Константин Константинопольский
                    </div>
                    <div class="people_position">
                        Programmer-Drummer
                    </div>
                    <ul class="social_networks social_networks--people">
                      <li class="social_networks-item fb"><a href="">f</a></li>
                      <li class="social_networks-item gm"><a href="">g</a></li>
                    </ul>
                  </div>

                  <div class="people">
                    <figure class="people_img">
                      <img src="img/people.jpg" alt=""/>
                    </figure>
                    <div class="people_name">
                      Константин Константинопольский
                    </div>
                    <div class="people_position">
                        Programmer-Drummer
                    </div>
                    <ul class="social_networks social_networks--people">
                      <li class="social_networks-item fb"><a href="">f</a></li>
                      <li class="social_networks-item gm"><a href="">g</a></li>
                    </ul>
                  </div>

                  <div class="people">
                    <figure class="people_img">
                      <img src="img/people.jpg" alt=""/>
                    </figure>
                    <div class="people_name">
                      Константин Константинопольский
                    </div>
                    <div class="people_position">
                        Programmer-Drummer
                    </div>
                    <ul class="social_networks social_networks--people">
                      <li class="social_networks-item fb"><a href="">f</a></li>
                      <li class="social_networks-item gm"><a href="">g</a></li>
                    </ul>
                  </div>
                </div>

              </section>
            </div>

          </main><!-- .content -->
        </div><!-- .container-->

      </div><!-- .middle-->

    </div>

    <footer class="footer">
      <div class="footer_inner">
        <div class="footer_copyright">© COPYRIGHT 2010—2015</div>
      </div>
    </footer>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>