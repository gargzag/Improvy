<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>ImprovY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="/js/jquery.js" type="text/javascript"></script>
		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <a class="brand" href="/main">ImprovY</a>
                                <ul class="nav pull-right">
                                  
                                    <?php 
                                        switch($content_view){
                                            case "main_view.php":   echo "<li class='active'><a href='/main'>Главная</a></li>
                                                                    <li><a href='/contacts'>Контакты</a></li>
                                                                    <li><a href='/portfolio'>О нас</a></li>" ; break;
                                            case "contacts_view.php":   echo "<li><a href='/main'>Главная</a></li>
                                                                    <li class='active'><a href='/contacts'>Контакты</a></li>
                                                                    <li><a href='/portfolio'>О нас</a></li>"; break;
                                            case "portfolio_view.php":   echo "<li ><a href='/main'>Главная</a></li>
                                                                    <li><a href='/contacts'>Контакты</a></li>
                                                                    <li class='active'><a href='/portfolio'>О нас</a></li>";break;
                                            
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php include 'application/views/'.$content_view; ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                
                </div>
            </div>
        </footer> 
				
	</body>
</html>