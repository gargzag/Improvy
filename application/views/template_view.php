<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Imptovy - это место, где собраны все образовательные курсы и спортивные секции вашего города." />
		<meta name="keywords" content="" />
		<title>ImprovY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="/js/code.js" type="text/javascript"></script>        
        <link rel="stylesheet" href="/css/jquery-ui-1.9.0.custom.css" />
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/reg.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        
	</head>
	<body >
       <!--<div class="bg_modal"></div>
        <div class="modalw"> 
            <p align="right">
                <a href="#" id="closemodal"><i class="icon-remove"></i>Закрыть</a>
            </p>            
            <div class="modalc">
                <h1 align="center">ImprovY</h1>
                <p>Здравствуйте, зарегистрируйтесь пложалуйста чтобы добавить свои курсы</p>
                <p>Регистрация простая, заполните поля ниже</p>
                <form class="form-horizontal" method="POST" action="">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email"><div id="1"></div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Пароль</label>
                        <div class="controls">
                          <input type="password" id="inputPassword" placeholder="Пароль">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Повторите пароль</label>
                        <div class="controls">
                          <input type="password" id="inputPassword2" placeholder="Пароль">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                            <button type="" class="btn" id="sub">Регистрация</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>-->
      
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">ImprovY</h3>
          </div>
          <div class="modal-body">
              <p>Здравствуйте, зарегистрируйтесь пложалуйста чтобы добавить свои курсы</p>
                <p>Регистрация простая, заполните поля ниже</p>
                <form class="form-horizontal" method="POST" action="/php/registration.php">
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Название компании</label>
                        <div class="controls">
                          <input type="text" id="name" placeholder="Название компании" name="name"><div id="1"></div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email" name="Email"><div id="1"></div>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Пароль</label>
                        <div class="controls">
                          <input type="password" id="inputPassword" placeholder="Пароль" name="Pass">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Повторите пароль</label>
                        <div class="controls">
                          <input type="password" id="inputPassword2" placeholder="Пароль">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                            <button type="" class="btn" id="sub">Регистрация</button>
                        </div>
                      </div>
                      
                </form>
          </div>
          <div class="modal-footer">
           <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button> -->
          </div>
        </div>

        <header>                
                    <div class="navbar navbar-fixed-top">
                        <div class="navbar-inner ">
                            <div class="container">
                                <a class="brand" href="/main">ImprovY</a>
                                <a class="brand" href="/main">Санкт-Петербург</a>
                                <ul class="nav pull-right">
                                    <li><a href='/contacts'>Контакты</a></li>
                                    <li><a href='#' id="b">Вход</a></li>
                                    <li><button class="btn btn-primary" type="button">Добавить курсы</button></li>
                                    <?php 
//                                        
//                                        switch($content_view){
//                                            case "main_view.php":   echo "<li class='active'><a href='/main'>Главная</a></li>
//                                                                    <li><a href='/contacts'>Контакты</a></li>
//                                                                    <li><a href='/portfolio'>О нас</a></li>" ; break;
//                                            case "contacts_view.php":   echo "<li><a href='/main'>Главная</a></li>
//                                                                    <li class='active'><a href='/contacts'>Контакты</a></li>
//                                                                    <li><a href='/portfolio'>О нас</a></li>"; break;
//                                            case "portfolio_view.php":   echo "<li ><a href='/main'>Главная</a></li>
//                                                                    <li><a href='/contacts'>Контакты</a></li>
//                                                                    <li class='active'><a href='/portfolio'>О нас</a></li>";break;
//                                            
//                                        }
//                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
              
        </header>
        <br />
        <?php include 'application/views/'.$content_view; ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                
                </div>
            </div>
        </footer> 
				
	</body>
</html>

