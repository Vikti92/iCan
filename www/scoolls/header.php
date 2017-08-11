
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Спортивный справочник</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="Спотивные школы спотивная спб Санкт-петербург спорт СДЮШОР СДЮСШОР ">
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/boostrap/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/boostrap/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-aweson/css/font-awesome.min.css" />
	
</head>
<body>

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
 <script src="js/html5.js"></script>
 <link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
	
<div class="wrapper ">				
										<!--header -->
<header> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 Logo">
				<ul class="list-inline">
				<li><a href="index.php"><img src="image/logo.png" alt="лого"></a></li>
				<li><a href=""><h4>ICAN.COM</h4></a></li>
				</ul>
			</div>
			<div class="col-md-6 text-right">
			<ul class="list-inline">	
					<li><form action=""><input type="text" placeholder="поиск"></form></li>
					<li><div class="dropdown">
						  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 	<i class="fa fa-chevron-down" aria-hidden="true"></i>
						    	Санкт-Петербург						   
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
						    <li><a href="#" >Москва</a></li>
						    <li><a href="#" >Санкт-Петербург</a></li>
						    <li><a href="#" >Новосибирск</a></li>
						  </ul>
						</div>
					</li>
					<li><button id="registration">регистрация</button></li>
					<li><button>вход</button></li>
				</ul>	
			</div>
		</div>
	</div>
</header>


<div class="content">

<section id="popup">
	<div class="text-center">
		 <p>ВОЙТИ</p>
		 <form action="">
		 	<input type="email" placeholder="email">
		 	<br><br>
		 	<input type="password" placeholder="password">
		 	</form>
		 	<button>войти</button>
		 	<br>
		 	<a href="auth.php">Забыли пароль</a>
		 	<br>
		 	<a href="">Регистрация</a>
	 </div>
</section>

<nav id="menu">
	<div class="container">
		<div class="row">
			<ul>
				<li class="menuHover"><a class="hrefDiscipline" href="scoolls.php">Летние спортивные дисциплины</a>
					 <div class="catalog">
						<ul>
							<li><a href="#">Велоспорт-BMX </a></li>
							<li><a href="#">Велоспорт-маунтинбайк </a></li>
							<li><a href="#">Велоспорт-трек </a></li>
							<li><a href="#">Велоспорт-шоссе</a></li>
							<li><a href="#">Гребля на байдарках и каноэ</a></li>
							<li><a href="">Гребной слалом</a></li>
							<li><a href="#">Гребной спорт</a></li>
							<li><a href="#">Дзюдо</a></li>
							<li><a href="#">Каратэ</a></li>
							<li><a href="#">Конный спорт</a></li>
							<li><a href="#">Легкая атлетика</a></li>
							<li><a href="#">Парусный спорт</a></li>
							<li><a href="#">Плавание</a></li>
							<li><a href="#">Серфинг</a></li>
							<li><a href="#">Синхронное плавание</a></li>
							<li><a href="#">Скалолазание</a></li>
							<li><a href="#">Скейтбординг</a></li>
							<li><a href="#">Современное пятиборье</a></li>
							<li><a href="#">Спортивная борьба</a></li>
							<li><a href="#">Cтрельба</a></li>
							<li><a href="#">Стрельба из лука</a></li>
							<li><a href="#">Триатлон</a></li>
							<li><a href="#">Тхэквондо</a></li>
							<li><a href="#">Тяжелая атлетика</a></li>
						</ul>	
					</div>
				</li>
				<li class="menuHover"><a class="hrefDiscipline" href="wsd.php">зимние спортивные дисциплины</a>
					<div class="catalog">
						<ul>
							<li><a href="biatlon.php">Биатлон</a></li>		
							<li><a href="#">Бобслей</a></li>		
							<li><a href="#">Горнолыжный спорт</a></li>
							<li><a href="#">Конькобежный спорт</a></li>
							<li><a href="#">Лыжные гонки</a></li>
							<li><a href="#">Прыжки на лыжах с трамплина</a></li>
							<li><a href="#">Санный спорт</a></li>
							<li><a href="#">Сноуборд</a></li>
							<li><a href="#">Фехтование</a></li>
							<li><a href="#">Фигурное катание на коньках</a></li>
						</ul>
					</div>			
				</li>
				<li class="menuHover"><a class="hrefDiscipline" href="gymnastics.php"><br>гимнастика</a>
					<div class="catalog">
						<ul>
							<li><a href="#">Акробатический рок-н-ролл</a></li>
							<li><a href="#">Капоэйра</a></li>
							<li><a href="#">Прыжки в воду</a></li>
							<li><a href="#">Прыжки на батуте</a></li>
							<li><a href="#">Спортивная акробатика</a></li>
							<li><a href="#">Спортивная аэробика</a></li>
							<li><a href="#">Спортивная гимнастика</a></li>
							<li><a href="#">Танцевальный спорт</a></li>
							<li><a href="#">Художественная гимнастика</a></li>
							<li><a href="#">Фристайл</a></li>
							<li><a href="#">Чир-спорт и Черлидинг</a></li>
							<li><a href="#">Эстетическая гимнастика</a></li>
						</ul>
					</div>	
				</li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Летние спортивные игры</a>
					<div class="catalog">
						<ul>
							<li><a href="#">Бадминтон</a></li>
							<li><a href="#">Баскетбол</a></li>
							<li><a href="#">Бейсбол</a></li>
							<li><a href="#">Водное поло</a></li>
							<li><a href="#">Волейбол</a></li>
							<li><a href="#">Гандбол</a></li>
							<li><a href="#">Гольф</a></li>
							<li><a href="#">Настольный теннис</a></li>
							<li><a href="#">Регби</a></li>
							<li><a href="#">Софтбол</a></li>
							<li><a href="#">Теннис</a></li>
							<li><a href="#">Футбол</a></li>
							<li><a href="#">Хоккей на траве</a></li>
						</ul>
					</div>	
				</li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Зимние спортивные игры</a>
					<div class="catalog">
						<ul>
							<li><a href="#">Керлинг</a></li>
							<li><a href="#">Хоккей</a></li>
						</ul>
					</div>	
				</li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Адаптивные летние дисциплины</a></li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Адаптивный зимние дисциплины</a></li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Адаптивные летние игры</a></li>
				<li class="menuHover"><a class="hrefDiscipline" href="#">Адаптивный зимние игры</a></li>
			</ul>
		</div>	
	</div>			
</nav>