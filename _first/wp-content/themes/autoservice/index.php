
    <!--========== END HEADER ==========-->
<?php 
    get_header();
?>
    <!--========== SLIDER ==========-->
    <div class="promo-block">
        <div class="container">
            <div class="margin-b-40">
                <h1 class="promo-block-title">Auto-Service.Unit</h1>
                <p class="promo-block-text">Современные технологии ремонта автомобилей</p>
            </div>
            <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase"
                href="https://www.https://www.youtube.com/watch?v=Qi4dCZqHY94" title="Intro Video"><i
                    class="btn-icon icon-control-play"></i>Смотреть видео о нас</a>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Products -->
    <div id="products">
        <div class="container content-lg">
            <div class="row text-center margin-b-40">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2><?php the_field('our_service');?></h2>
                    <p><?php the_field('shortly_about_service');?></p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="<?php the_field('car_wash_img');?>" alt="Latest Products Image"
                            data-wow-duration=".3" data-wow-delay=".1s">
                    </div>
                    <h4><a href="#"><?php the_field('wash_title'); ?></a></br> <span class="text-uppercase margin-l-20"><?php the_field('wash_service_list'); ?></span></h4>
                    <p><?php the_field('wash_description'); ?></p>
                    <a class="link" href="#">Читать больше</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="<?php the_field('car_detailing_img'); ?>"
                            alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".2s">
                    </div>
                    <h4><a href="#"><?php the_field('deteiling_title');?></a></br> <span class="text-uppercase margin-l-20"><?php the_field('deteileng_service_list');?></span></h4>
                    <p>
                        <?php the_field('deteiling_description');?>
                    </p>
                    <a class="link" href="#">Читать больше</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="<?php the_field('car_wheel_img'); ?>" alt="Latest Products Image"
                            data-wow-duration=".3" data-wow-delay=".3s">
                    </div>
                    <h4><a href="#"><?php the_field('wheel_title');?></a></br> <span class="text-uppercase margin-l-20"><?php the_field('wheel_service_list');?></span></h4>
                    <p>
                        <?php the_field('wheel_description');?>
                    </p>
                    <a class="link" href="#">Читать больше</a>
                </div>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
        </div>

        <div class="container-full-width">
            <div class="row row-space-2">
                <div class="col-sm-6 sm-margin-b-4">
                    <img class="img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/auto_service_new.jpg" alt="Image">
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/auto_service_new-2.jpg" alt="Image">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Products -->

    <!-- Service -->
    <div id="service">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-2 margin-b-4">
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="service-info">
                                <h3>Coffee.unit</h3>
                                <p class="margin-b-5">Пока обслужывается Ваш автомобиль, Вы можете выпить чашечку чая
                                    или кофе и продуктивно провести время в нашем уютном кафе за деловым или дружеским
                                    разговором.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service bg-color-base wow fadeInDown" data-height="height" data-wow-duration=".3"
                            data-wow-delay=".1s">
                            <div class="service-element">
                                <i class="service-icon color-white icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3 class="color-white">Наше мобильное приложение</h3>
                                <p class="color-white margin-b-5">Установив приложение Вы легко сможете выбрать нужную
                                    услугу и сделать запись на нужное Вам время</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Высокая компетентность</h3>
                                <p class="margin-b-5">Не смотря на высокий уровень квалификации и большой практический
                                    опыт работы мастеров, руководство автосервиса уделяет много внимания дополнительному
                                    обучению персонала</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-2">
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="service-info">
                                <h3>Качество работ</h3>
                                <p class="margin-b-5">Воспользовавшысь нашими услугами, Вы решаете проблему с первого
                                    раза, получаете гарантированный результат и всегда знаете за что платите.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer"></i>
                            </div>
                            <div class="service-info">
                                <h3>Скорость обслужывания</h3>
                                <p class="margin-b-5">Обслуживать самые популярные в стране марки автомобилей – это не
                                    только выгодно, но и требует от мастеров высокой скорости работы. Скорость
                                    обслуживания клиентов во многом зависит от квалификации специалистов по ремонту
                                    автомобилей.</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="service-info">
                                <h3>Персональный менеджер к вашим услугам</h3>
                                <p class="margin-b-5">
                                    За каждым клиентом по факту регистрации закрепляется сотрудник офиса продаж, который
                                    становится доверенным лицом во всех вопросах, связанных с обслуживанием автомобиля.
                                </p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Promo Banner -->
    <div class="promo-banner">
        <div class="container-sm content-lg" id="rgba-bg">
            <h2 class="promo-banner-title">Мы-професионалы высочайшего класса</h2>
            <p class="promo-banner-text">Желая нашим клиентам удачного пути, мы напоминаем им, что компания
                <b><span>«auto-service</span>.unit»</b> не просто предлагает лучший кузовной ремонт, но и является
                своеобразным
                маяком для
                всех клиентов, который освещает путь водителей на самых сложных дорогах и гарантирует надежность,
                безопасность и комфорт!</p>
        </div>
    </div>
    <!-- End Promo Banner -->

    <!-- Work -->
    <div id="work">
        <div class="content-md container">
            <h2 class="work_title">Популярные услуги</h2>
            <!-- Masonry Grid -->
            <div class="masonry-grid row row-space-2">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/one.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">ОТКЛЮЧЕНИЕ КАТАЛИЗАТОРОВ</h3>
                                    <span>Отключение катализаторов сажевых фильтров</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Катализатор или сажевый фильтр - это одна из частей выхлопной системы
                                                современного автомобиля. Катализатор состоит из металлического корпуса и
                                                из множества керамических мелких трубочек в виде сот.
                                            </p>
                                            <p>Установка эмулятора катализатора или сажевого фильтра занимает от 40
                                                минут до 2 часов при условии, что катализатор уже механически удален.
                                                При наличии катализатора настоятельно рекомендуем (в некоторых случаях
                                                это единственный выход) физически вырезать катализатор.</p>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5">На некоторых автомобилях при отсутствии катализатора
                                                или сажевого фильтра, выхлопная система меняет свой звук, для борьбы с
                                                этим мы устанавливаем стронгеры либо пламегаситель вместо катализатора
                                                или сажевого фильтра.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/two.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">КОРРЕКЦИЯ ПРОБЕГА</h3>
                                    <span>оррекция пробега на любое значение. </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Всем известно, что после цены, пробег является одним из основных факторов
                                                при выборе авто. Не одиноки и те случаи, когда за счет меньшего пробега
                                                выбор падает на автомобиль у которого цена на порядок выше, чем у
                                                конкурентов. Вложив в автомобиль немного средств, появляется возможность
                                                продать его на порядок дороже.
                                            </p>
                                            <p>Наши специалисты производят коррекцию спидометра, как с разборкой щитка
                                                приборов, так и без разборки щетка через К-линию, либо через разъем
                                                диагностики OBD2, в зависимости от марки, модели и года выпуска
                                                автомобиля. Процедура коррекции пробега занимает от 20 минут до 2 часов.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Зачем это нужно?</strong></p></br>
                                            1. При сбое электроники щитка приборов, появляется необходимость
                                            восстанавливать реальный пробег путем коррекции данных.</br>
                                            2. При ремонте или замене двигателя сбрасывается пробег для удобства счета
                                            сервисных интервалов.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/three.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">КОМПЬЮТЕРНАЯ ДИАГНОСТИКА</h3>
                                    <span>Компьютерная диагностика и ремонт электрооборудования.</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Мы можем предложить Вам:</br>
                                                - ремонт электрооборудования легковых автомобилей</br>
                                                - диагностику электрооборудования легковых автомобилей</br>
                                                - ремонт ABS, VSC, TRAC, SRS AIRBAG, VGRS, P/S, итд... систем</br>
                                                - ремонт стеклоподъёмников</br>
                                                - ремонт электрооборудования бусов (Sprinter, LT, Transporter и
                                                др.)</br>
                                                - компьютерная диагностика легковых автомобилей</br>
                                                - компьютерная диагностика бусов (Sprinter, LT Transporter и др.)</br>
                                                - ремонт электростартеров</br>
                                                - ремонт генераторов</br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5">Выбирайте надежных. Уважаемые клиенты, для записи на
                                                диагностику, звоните на наши контактные телефоны.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/four.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">РЕМОНТ ДВИГАТЕЛЯ</h3>
                                    <span>Наиболее распространенные поломки и услуги по ремонту двигателя.</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Диагностика двигателя вашего автомобиля</br>
                                                Замена масла в двигателе</br>
                                                Замена воздушного фильтра</br>
                                                Замена охлаждающей жидкости (антифриза)</br>
                                                Замена свечей зажигания в автомобиле</br>
                                                Замена топливного фильтра</br>
                                                Загорелся Check Engine</br>
                                                Двигатель жрет масло</br>
                                                Плавают обороты</br>
                                                Стук в двигателе</br>
                                                Ремонту выхлопной системы</br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5">Как часто проводить диагностику?</br>
                                                Диагностику двигателя
                                                рекомендуется проводить не только при обнаружении признаков
                                                неисправности, но и в плановом порядке, с целью профилактики</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/five.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">РЕМОНТ И ПРОШИВКА AIRBAG</h3>
                                    <span>Ремонт и перепрошивка crash в блоках AIRBAG</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Ремонт и прошивка блоков SRS Airbag, удаление информации об ударе Crash
                                                Data, установка эмуляторов преднатяжителей ремней, подушек, шторок.
                                            </p>
                                            <p>Ремонт подрулевых шлейфов,установка эмуляторов SRS. Гарантия.
                                                Работаем с всеми известными процессорами: MAC, XC23xx, SPC560, Renesas
                                                H8SX, NEC, RH850, Eeprom, MTRK.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Работа по перепрошивке блока аирбег занимает
                                                    от 40 минут до 2 часов. Есть возможность работать с регионами через
                                                    почтовые пересылки</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php bloginfo('template_url');?>/assets/img/forcar/six.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Закрыть</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">ПРИВЯЗКА И ОТКЛЮЧЕНИЕ ИММОБИЛАЙЗЕРА</h3>
                                    <span>Иммобилайзером называется электронная система, цель которой помешать
                                        злоумышленнику угнать вашу машину.</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>дешевле и быстрее выполнить работу по привязке иммобилайзера можно,
                                                обратившись в нашу станцию технического обслуживания. Мы сможем
                                                перепрограммировать любой блок системы, а также восстановим ключ.
                                            </p>
                                            <p>Бывает, что восстановить ключ невозможно. Это особенно часто случается со
                                                старыми моделями машин, для которых сложно найти программы блока
                                                управления автомобилем. В этом случае мы выполним перепрошивку системы,
                                                а при необходимости создадим эмулятор иммобилайзера.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"> Мы сможем перепрограммировать любой блок системы, а
                                                также восстановим ключ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->

    <!-- Pricing -->
    <div id="pricing">
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <h2 class="work_title">Быстрый заказ</h2>
                <div class="row row-space-2">
                    <div class="col-sm-4 sm-margin-b-4">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="fa fa-stethoscope"></i>
                                <h3>Диагностика <span> - ₴‎</span> 250</h3>
                                <p>В техническом центре «auto-service.unit» мы производим диагностику Вашего авто.</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Проверка состояния фильтра салона</li>
                                <li class="pricing-list-item">Проверка состояния фильтра воздуха;</li>
                                <li class="pricing-list-item">Проверка состояния и уровня тормозной жидкости</li>
                                <li class="pricing-list-item">Проверка уровня масла в двигателе</li>
                                <li class="pricing-list-item">Проверка состояния аккумулятора</li>
                            </ul>
                            <a href="pricing.html"
                                class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Выбрать</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <!-- Pricing -->
                        <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="fa fa-car"></i>
                                <h3>Кузовные работы <span> - ₴‎</span> 450-2000</h3>
                                <p>В центре «auto-service.unit» вам предложат весь спектр кузовных работ для Вашего
                                    автомобиля</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Замена лобового автостекла: от 500 до 1200 гривень</li>
                                <li class="pricing-list-item">Замена заднего автостекла: от 450 до 1000 гривень</li>
                                <li class="pricing-list-item">Полировка кузова автомобиля 1400 гривень</li>
                                <li class="pricing-list-item">Ремонт и покраска бампера 2000 гривень</li>
                                <li class="pricing-list-item">Ремонт и покраска крыла 1800 гривень</li>
                                <li class="pricing-list-item">Удаление царапин и сколов 900 гривень</li>
                                <li class="pricing-list-item">Установка обвеса 2000 гривень</li>
                                <li class="pricing-list-item">Рихтовочные кузовные работы от 1500 гривень</li>
                            </ul>
                            <a href="pricing.html"
                                class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Выбрать</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="fa fa-wrench"></i>
                                <h3>Ремонт подвески <span> - ₴‎</span> от 2500</h3>
                                <p>Наиболее распространенные поломки и услуги по ремонту ходовой на станции технического
                                    обслуживания «auto-service.unit».</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Замена тормозных дисков</li>
                                <li class="pricing-list-item">Замена тормозных колодок</li>
                                <li class="pricing-list-item">Замена сцепления</li>
                                <li class="pricing-list-item">Замена сайлентблока</li>
                                <li class="pricing-list-item">Замена амортизатора</li>
                                <!-- <li class="pricing-list-item">Замена шаровых опор</li> -->
                                <li class="pricing-list-item">Ремонт рулевой рейки </li>
                                <!-- <li class="pricing-list-item">Замена тормозных дисков </li> -->
                            </ul>
                            <a href="pricing.html"
                                class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Выбрать</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Testimonials -->
    <div class="content-md container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Отзывы клиентов автосервиса</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Хочу выразить благодарность сотрудникам Сурвис Юнит за высокий профессионализм,
                                    отремонтировали моего Жука очень быстро и качественно! Проблема была с АКПП, был
                                    постоянный шум и ехала как то рывками.
                                </div>
                                <div class="margin-b-20">
                                    Ребята действительно профиссеоналы и сам сервис мне очень понравился такой уютный и
                                    чистый. Спасибо вам огормное!
                                </div>
                                <p><span class="fweight-700 color-link">Ирина (Nissan)</span>, Ремонт АКПП</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Отличный сервис для вменяемых людей, бедных и богатых, но без понтов.
                                    Профессионально
                                    качественно без разводки на допы. Заказ хороших запчастей. Всегда есть расходники.
                                    Удобный
                                    график под Вас. ОЧЕНЬ ДЕМОКРАТИЧНЫЙ ЦЕННИК!!!
                                </div>
                                <div class="margin-b-20">
                                    Не делают жестянку. Стараются не обслуживать уродов и психов. РЕКОМЕНДУЮ!
                                </div>
                                <p><span class="fweight-700 color-link">Сергей (BMW)</span>, Замена масла в двигателе
                                </p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Отдавал авто в ремонт по поводу вмятины на двери. Долго не решался, друзья
                                    отговаривали. Мол ожидать качества заводской сборки после ремонта от сервиса нельзя,
                                    зачем трогать, тем более, что дефект едва заметен. Посмотрел видео на Ютубе и все же
                                    решил попробовать.
                                </div>
                                <div class="margin-b-20">
                                    Сделали отлично и вопреки прогнозам пессимистов нормально функционирует электрика
                                    двери.😊 Спасибо мастерам кузовного Цеха. Ещё предложили сделать бесплатную
                                    диагностику. Порекомендовали заменить масло в АКПП (машина свои регламентные 100 000
                                    уже почти прошла).
                                </div>
                                <p><span class="fweight-700 color-link">Максим (Land Rover)</span>, Плановое ТО</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Друг посоветовал мне отполировать свой Citroen C4 2016г в «auto-service.unit».
                                    Очень умелый мастер Андрей меня не подвел и сделал работу на отлично, в чем можно
                                    убедиться глянув на авто. Спасибо, машина выглядит превосходно!
                                </div>
                                <p><span class="fweight-700 color-link">Сергей (Citroen)</span>, Полировка кузова</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->

    <!-- Contact -->
    <div id="contact">
        <!-- Google Map -->
        <div class="gmap">
            <div id="map" class="map height-400"></div>
            <address class="gmap-address">
                <p class="color-heading margin-b-0">277 Bedford Avenue, Brooklyn, NY 11211, New York, USA</p>
            </address>
        </div>
        <!-- End Google Map -->
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
   <?php 
        get_footer();
   ?>

   <?php
   // --------------hooks of event- start------------
        // function print_hello($text, $name){
        //     echo 'Hello World ' . $text . ' ' . $name;
        // };

        // add_action('my_hook', 'print_hello', 10, 2);

        // do_action('my_hook', 'dear customers', 'Vasyl');
        // --------------hooks of event-------------
            function my_filter_function($str) {
                return 'Hello ' . $str;
            }
            add_filter('my_filter', 'my_filter_function');
            echo apply_filters('my_filter', 'World');
   ?>