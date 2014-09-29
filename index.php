<!-- <!DOCTYPE html> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Gaz-On</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/variables.css" rel="stylesheet">
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" /> -->

     <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- HEADER -->
    <div class="block_bg" id="header_bg">
      <div class="container" id="header">
        <div class="row">
          <div class="col-xs-4 pull-right" id="header_phone">+7 (8352) 380-730</div>
        </div>
        <div class="row">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="#"><img src="/img/logo.png"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#">О НАС</a></li>
                  <li><a href="#">НАШИ РАБОТЫ</a></li>
                  <li><a href="#">ОТЗЫВЫ</a></li>
                  <li><a href="#">КЛИЕНТЫ</a></li>
                  <li><a href="#">КОНТАКТЫ</a></li>
                  <li><a href="#">ВАШ ГОРОД<br><span id="nav_city">Чебоксары</span> <span class="glyphicon glyphicon-chevron-down"></span></a></li>
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>

    <!-- END HEADER -->
    
    <!-- JUMBO-SLIDER -->
    <div class="block_bg" id="jumbo_slider_bg">

      <div class="container" id="jumbo_slider">
        <div class="row">
          <ul id="jumbo_bxslider">
            <li><img src="/img/jumbo/slider2.png"></li>
            <li><img src="/img/jumbo/slider1.png"></li>
          </ul>          
        </div>
      </div>
    </div>
    <!-- JUMBO-SLIDER END -->
    <!-- CALC -->
    <div class="block_bg" id="calc_bg">
      <div class="container" id="calc">
        <div class="row">
          <div class="col-xs-4" id="calc_left">Рассчитайте окупаемость ГБО и сразу получите результат</div>
          <div class="col-xs-4" id="sobsno_calc">
            <div class="row" id="calc_title">
              Окупаемость ГБО</div>
            <form class="form-horizontal" role="form" id="calc_form">
              <div class="form-group">
                <div class="hidden form_error"></div>
                <label for="inputData1" class="col-xs-8 control-label">Стоимость установки (руб.):</label>
                <div class="col-xs-5">
                  <input type="text" class="form-control input-sm" id="stUst" name="stUst">
                </div>
              </div>
              <div class="form-group">
              <div class="hidden form_error"></div>
                <label for="inputData2" class="col-xs-8 control-label">Цена литра бензина (руб.):</label>
                <div class="col-xs-5">
                  <input type="text" class="form-control input-sm" id="CenaBenz">
                </div>
              </div>
              <div class="form-group">
              <div class="hidden form_error"></div>
                <label for="inputData3" class="col-xs-8 control-label">Цена литра газа (руб.):</label>
                <div class="col-xs-5">
                  <input type="text" class="form-control input-sm" id="CenaGaz">
                </div>
              </div>
              <div class="form-group">
              <div class="hidden form_error"></div>
                <label for="inputData4" class="col-xs-8 control-label">Расход на 100 км (л):</label>
                <div class="col-xs-5">
                  <input type="text" class="form-control input-sm" id="Rashod100">
                </div>
              </div>
              <div class="form-group">
              <div class="hidden form_error"></div>
                <label for="inputData5" class="col-xs-8 control-label">Ср. суточный пробег (км):</label>
                <div class="col-xs-5">
                  <input type="text" class="form-control input-sm" id="SrSutProb">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-default btn-lg" id="calcSubmit">РАССЧИТАТЬ</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-xs-4">
            <p>Результат</p>
            <div><span id="EconDay"> </span> руб. - экономия в день</div>
            <div><span id="EconYear"></span> руб. - экономия за год</div>
            <div><span id="OkupDay"></span> дня - окупаемость ГБО</div>
          </div>
        </div>
      </div>
    </div>
    <!-- CALC END -->
    <!-- PROFIT -->
    <div class="block_bg" id="profit_bg">
      <div class="container" id="profit">
        <div class="row">
          <div class="col-xs-5 block_title">
            <div class="row">
              <div class="col-xs-6 title_name">Выгоды</div>
              <div class="col-xs-2 pull-right"><img src="/img/gaz-on_0023_Shape.png"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0003_fa-money.png"></div>
              <div class="col-xs-10">
                <b>При каждой заправке Ваша экономия составляет 50%. </b><br>
                Если Вы в день экономите 232 руб., за год это 85 000 руб.
              </div>
            </div>
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0019_fa-lock.png"></div>
              <div class="col-xs-10">
                <b>Безопасность газового оборудования. </b><br>
                Исследования и краш-тесты, проводимые в области современного газового оборудования доказали его безопасность.
              </div>
            </div>
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0022_fa-cogs-.png"></div>
              <div class="col-xs-10">
                <b>Ресурс двигателя увеличивается на 40%.</b><br>
                В камере сгорания газ не образует нагар и коксовые отложения.
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0018_fa-key-.png"></div>
              <div class="col-xs-10">
                <b>Газ невозможно слить или разбавить. </b><br>
                В Вашем газовом баллоне всегда будет газа ровно столько, столько было.
              </div>
            </div>
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0021_fa-tachometer.png"></div>
              <div class="col-xs-10">
                <b>Двойной запас хода.</b> <br>
                Запасная топливная система. Вы будете уверены в своем автомобиле.
              </div>
            </div>
            <div class="row profit_item">
              <div class="col-xs-2"><img src="/img/gaz-on_0020_fa-globe.png"></div>
              <div class="col-xs-10">
                <b>В настоящее время Европа активно переходит на газовое топливо. </b><br>
                Так как газ не содержит вредных примесей (пример -химические соединения со свинцом и серой).
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- PROFIT END -->
    <!-- WORK STEP -->
    
    <div class="block_bg" id="work_step_bg">
      <div class="container" id="work_step">
        <div class="row">
          <div class="col-xs-12" id="work_step_title">Ход работы</div>
        </div>
        <div class="row">
          <div class="col-xs-12" id="work_step_img"><img src="/img/gaz-on_0017_work.png"></div>
        </div>
      </div>
    </div>
    <!-- WORK STEP END -->
    <!-- CONSULTATION -->
    <div class="block_bg consultation_bg">
      <div class="container consultation">
        <div class="row">
          <div class="col-xs-7">
            <div class="consultation_title">Оставь заявку на консультацию</div>
            <div>Оставьте заявку на бесплатную консультацию с нашим специалистом.</div>
          </div>
          <div class="col-xs-5 cons_btn">
            <div class="btn btn-lg  btn-default pull-right consult_btn">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONSULTATION END -->
    <!-- FAQ -->
    <div class="block_bg" id="faq_bg">
      <div class="container" id="faq">
        <div class="row">
          <div class="col-xs-12" id="faq_title">Вы можете посмотреть часто задаваемые вопросы и ответы к ним.</div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center"><img src="/img/gaz-on_0016_Arrow-.png"></div>
        </div>
        <div class="row">
          <div data-faq="1" class="col-xs-7 faq_item_left">Вредна ли установка ГБО для двигателя?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="2" class="col-xs-7 faq_item_right">Опасно ли ГБО в автомобиле?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="3" class="col-xs-7 faq_item_left">Какое давление выдерживает газовый баллон?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="4" class="col-xs-7 faq_item_right">Можно установить ГБО на турбированный двигатель?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="5" class="col-xs-7 faq_item_left">Каково нормальное соотношение расхода газа и бензина?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="6" class="col-xs-7 faq_item_right">Как часто следует менять воздушный фильтр при использовании ГБО?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="7" class="col-xs-7 faq_item_left">Правда ли, что после установки оборудования в салоне будет запах газа?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div class="row">
          <div data-faq="8" class="col-xs-7 faq_item_right">Сколько времени требуется на установку ГБО?</div>
        </div>
        <div class="jhidden faq_answer col-xs-10 col-xs-offset-1" data-faq="8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
      </div>

    </div>
    <!-- FAQ END -->
    <!-- WORKS -->
    <div class="block_bg" id="works_bg">
      <div class="container" id="works">
        
          <div class="row">
          <div class="col-xs-5 block_title">
            <div class="row">
              <div class="col-xs-6 title_name">Наши работы</div>
              <div class="col-xs-2 pull-right"><img src="/img/gaz-on_0023_Shape.png"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12" id="works_gallery">
          <ul class="bxslider">
              <li><div class="white_shadow"></div><img src="/img/works/01.jpg"/></li>
              <li><div class="white_shadow"></div><img src="/img/works/02.jpg"/></li>
              <li><div class="white_shadow"></div><img src="/img/works/03.jpg"/></li>
              <li><div class="white_shadow"></div><img src="/img/works/04.jpg"/></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 works_active_item"><img src="/img/works/01.jpg"/></div>
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-12 works_active_item_title">Toyota Land Cruiser 2007 г.в</div>
            </div>
            <div class="row">
              <div class="col-xs-12 works_active_item_desc">Установлено газовое оборудование (ГБО) KME Nevo Pro (ЭБУ KME, форсунки Hana 2000, редуктор KME Gold до 350 л.с.) Гарантия 5 лет на весь комплект оборудования и на работы + 5 лет гарантии на двигатель.</div>
            </div>
            <div class="row">
              <!-- <a id="single_image" href="image_big.jpg"><img src="image_small.jpg" alt=""/></a> -->
              <div class="col-xs-3"><a class="multi_image" rel="group1" href="/img/works/01.jpg"><img src="/img/works/01sm.jpg" class="img-responsive" alt=""/></a></div>
              <div class="col-xs-3"><a class="multi_image" rel="group1" href="/img/works/02.jpg"><img src="/img/works/02.jpg" class="img-responsive" alt=""/></a></div>
              <div class="col-xs-3"><a class="multi_image" rel="group1" href="/img/works/03.jpg"><img src="/img/works/03.jpg" class="img-responsive" alt=""/></a></div>
              <div class="col-xs-3"><a class="multi_image" rel="group1" href="/img/works/04.jpg"><img src="/img/works/04.jpg" class="img-responsive" alt=""/></a></div>
              <!-- <div class="col-xs-3"><img src="/img/works/01.jpg" class="img-responsive"></div> -->
              <!-- <div class="col-xs-3"><img src="/img/works/02.jpg" class="img-responsive"></div> -->
              <!-- <div class="col-xs-3"><img src="/img/works/03.jpg" class="img-responsive"></div> -->
              <!-- <div class="col-xs-3"><img src="/img/works/04.jpg" class="img-responsive"></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- WORKS END -->
    <!-- REVIEWS -->
    <div class="block_bg" id="rev_bg">
      <div class="container" id="reviews">
        <div class="row">
          <div class="col-xs-12" id="rev_title">
              Отзывы наших клиентов
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <ul class="bxslider_rev">
                <li>
                  <div class="rev_item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                  <div class="rev_author">Роман Subaru Impreza</div>
                </li>
                <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- REVIEWS END -->
    <!-- CLIENTS -->
    <div class="block_bg" id="clients_bg">
      <div class="container" id="clients">
        <div class="row">
          <div class="col-xs-5 block_title">
            <div class="row">
              <div class="col-xs-8 title_name">Корпоративные клиенты</div>
              <div class="col-xs-2 pull-right"><img src="/img/gaz-on_0023_Shape.png"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12" id="clients_logo">
            <img src="/img/gaz-on_0015_logo-klient.png.png">
          </div>
        </div>
      </div>
    </div>
    <!-- CLIENTS END -->
    <!-- MARKS -->
    <div class="block_bg" id="marks_bg">
      <div class="container" id="marks">
        <div class="row">
          <div class="col-xs-12" id="marks_title">Марки оборудований</div>
        </div>
        <div class="row">
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0009_logo1.jpg.png"></div>
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0010_logo2.jpg.png"></div>
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0011_logo3.jpg.png"></div>
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0012_logo4.jpg.png"></div>
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0013_logo5.jpg.png"></div>
          <div class="col-xs-2"><img src="/img/marks/gaz-on_0014_logo6.jpg.png"></div>
        </div>
      </div>
    </div>
    <!-- MARKS END -->
     <!-- CONSULTATION 2-->
    <div class="block_bg consultation_bg">
      <div class="container consultation">
        <div class="row">
          <div class="col-xs-7">
            <div class="consultation_title">Оставь заявку на консультацию<br>c нашим спциалистом</div>
            <!-- <div>Оставьте заявку на бесплатную консультацию с нашим специалистом.</div> -->
          </div>
          <div class="col-xs-5 cons_btn" id="cons_btn2">
            <div class="btn btn-lg  btn-default pull-right consult_btn">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONSULTATION 2 END -->
    <!-- CONTACTS -->
    <div class="block_bg" id="contacts_bg">
      <div class="container" id="contacts">
        
        <div class="row">
          <div class="col-xs-12" id="contacts_title">
            Контакты
          </div>
        </div>
        <div class="row">
          <ul id="contact_slider">
            <li>
              <div class="col-xs-2">Адрес:<br><br>ул.Панфилова, 33А, офис 103, напротив маг. "Пятерочка"</div>
              <div class="col-xs-2 col-xs-offset-1">Вас обслужит:<br><br>Светлана Олеговна Сокова</div>
              <div class="col-xs-6 col-xs-offset-1">Как добраться:<br><br>
                <div class="map">
                  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=SW7-rE8fZXe6zlab4EJxKzwAvlwJQeTQ&width=455&height=250"></script>
                </div>
              </div>

            </li>
            <li>
              <div class="col-xs-2">Адрес:<br><br>ул.Панфилова, 33А, офис 103, напротив маг. "Пятерочка"</div>
              <div class="col-xs-2 col-xs-offset-1">Вас обслужит:<br><br>Светлана Олеговна Сокова</div>
              <div class="col-xs-6 col-xs-offset-1">Как добраться:<br><br>
                <div class="map">
                  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=SW7-rE8fZXe6zlab4EJxKzwAvlwJQeTQ&width=455&height=250"></script>
                </div>
              </div>

            </li>
            <li>
              <div class="col-xs-2">Адрес:<br><br>ул.Панфилова, 33А, офис 103, напротив маг. "Пятерочка"</div>
              <div class="col-xs-2 col-xs-offset-1">Вас обслужит:<br><br>Светлана Олеговна Сокова</div>
              <div class="col-xs-6 col-xs-offset-1">Как добраться:<br><br>
                <div class="map">
                  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=SW7-rE8fZXe6zlab4EJxKzwAvlwJQeTQ&width=455&height=250"></script>
                </div>
              </div>

            </li>
            <li>
              <div class="col-xs-2">Адрес:<br><br>ул.Панфилова, 33А, офис 103, напротив маг. "Пятерочка"</div>
              <div class="col-xs-2 col-xs-offset-1">Вас обслужит:<br><br>Светлана Олеговна Сокова</div>
              <div class="col-xs-6 col-xs-offset-1">Как добраться:<br><br>
                <div class="map">
                  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=SW7-rE8fZXe6zlab4EJxKzwAvlwJQeTQ&width=455&height=250"></script>
                </div>
              </div>

            </li>
            <li>
              <div class="col-xs-2">Адрес:<br><br>ул.Панфилова, 33А, офис 103, напротив маг. "Пятерочка"</div>
              <div class="col-xs-2 col-xs-offset-1">Вас обслужит:<br><br>Светлана Олеговна Сокова</div>
              <div class="col-xs-6 col-xs-offset-1">Как добраться:<br><br>
                <div class="map">
                  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=SW7-rE8fZXe6zlab4EJxKzwAvlwJQeTQ&width=455&height=250"></script>
                </div>
              </div>

            </li>
          </ul>
         <!--  <div id="bx-pager">
            <a data-slide-index="0" href=""><img src="/img/marks/gaz-on_0014_logo6.jpg.png"></a>
            <a data-slide-index="1" href=""><img src="/img/marks/gaz-on_0014_logo6.jpg.png"></a>
            <a data-slide-index="2" href=""><img src="/img/marks/gaz-on_0014_logo6.jpg.png"></a>
            <a data-slide-index="3" href=""><img src="/img/marks/gaz-on_0014_logo6.jpg.png"></a>
          </div> -->
        </div>
      </div>
    </div>
    <!-- CONTACTS END -->
    <div id="sera_poloska"></div>
    <!-- MINIMAP -->
    <div class="block_bg" id="minimap_bg">
      <div class="container" id="minimap">
        
        <div class="row">
          <div class="col-xs-3" id="minimap_logo">Gaz-ON</div>
          <div class="col-xs-3" id="minimap_company">
            <div>КОМПАНИЯ</div><br>
            <div class="minimap_company_item">Выгоды</div>
            <div class="minimap_company_item">Отзывы</div>
            <div class="minimap_company_item">Клиенты</div>
            <div class="minimap_company_item">Вопросы</div>
            <div class="minimap_company_item">Контакты</div>
          </div>
          <div class="col-xs-3">
            <div>АДРЕС</div><br>
            <div>Чебоксары, Марпосадское шоссе, 22</div><br>
            <div>Тел.: +7 (8352) 380-730</div>
            <div>gaz-on21@bk.ru</div>

          </div>
          <div class="col-xs-3">
            <div>ПОДЕЛИТЬСЯ</div><br>
            <div>Расскажите друзьям о нас<br> в социальных сетях</div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
    <!-- MINIMAP END -->
    <!-- FOOTER -->
    <div class="block_bg" id="footer_bg">
      <div class="container" id="footer">
        
        <div class="row">
          <div class="col-xs-8">Copyright © 2014 Gaz-ON</div>
          <div class="col-xs-4">Создание сайта <a href="http://ssites.pro" target="_blank"><img src="/img/gaz-on_0004_light_logo.png"></a></div>
        </div>
      </div>
    </div>  
    <!-- FOOTER END -->
    <!-- MODAL -->
    <div class="block_bg jhidden" id="modal_bg">
      <div class="container" id="modal">
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3" id="modal_window">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="row" id="modal_title">
              Заполните форму
            </div>
            <div class="row">
              <form role="form">
                <div class="form-group">
                  <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Введите Ваше имя">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" id="exampleInputPassword1" placeholder="Введите Ваш телефон">
                </div>
                <button type="submit" class="btn btn-default btn-lg btn-block">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <!-- MODAL END -->
<?php
function GetRealIp() {
 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
   $ip=$_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
   $ip=$_SERVER['REMOTE_ADDR'];
 }
 return $ip;
}
$realUserIP = GetRealIp();
echo $realUserIP;
?>
<em>Ваш город:</em> <span id="geocity"></span>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="/js/language/ru_RU.js"></script>


    
    <script src="/js/script.js"></script>
  </body>
</html>