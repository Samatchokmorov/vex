<?php 
error_reporting(0);
	include("conf.php");

	echo $username = $_POST["username"];
	echo $email = $_POST["email"];
    
	 if(isset($_POST["username"])||isset($_POST["pwd"])){
	$sql = 'INSERT INTO `my_user`(`username`, `email`, `pwd`) VALUES ("'.$username.'", "'.$email.'")';
	$res = mysql_query($sql);
	 }else{
	  $err ="Ваша форма пуста";
	 }	  
		$noterror = "Ваши данные сохранены в базе!";
?>

<!DOCTYPE html>
<html>
<head>
<title>Индивидуальная игра</title>
    <link rel="stylesheet" href="css/style2.css">
	<link rel="shortcut icon" href="img/icon/favicon.ico?1520959430" type="image/x-icon">
 </head>
 <body>
        <header>
		  <div class="container">
		    <div class="row">
			  <div class="contacts-bar address">
                  <a href="">город бишкек, улица киевская 203</a>
               </div>				  
	              <nav class="nav-site">
			        <ul>
					  <li>
				        <a href="">Расписание</a>
					  </li>
                      <li>
                        <a href="rules game.html" target="_blank">Правила игры</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="logo-wrap">
                  <figure>
                    <div class="symbol">
                      <div class="eye"></div>
                        <div class="squares"></div>
                    </div>
                    <div class="text"></div>
                  </figure>
				</div>
				<div class="contacts-bar phone">
				  <a href="">0312 312-312,&nbsp0550 50-50-50</a>
				    <div class="col-md">
				</div>
			  </div>
              <nav class="nav-menu">
                <ul>
                  <li>
                    <a href="about.html" target="_blank">о нас</a>
                  </li>
                  <li>
                    <a href="">отзывы</a>
                  </li>
                  <li>
                    <a href="">контакты</a>
                  </li>
                </ul>
              </nav>
			  <a href="" class="individual">индивидуальная игра</a>
			</div>
	      </div>
        </div>
      </header>
	  <main style="min-height: 228px;">
	    <div class="inner-page-header">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12">
			    <h1>Индивидуальная игра</h1>
			  </div>
            </div>
          </div>
        </div>		  
		<div class="main-page-wrap">
          <div class="articles-group">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
				  <article>
				    <p style="text-align: center;">
					  Специально для самых изысканных игроков, мы предлагаем провести индивидуальную игру.
                      <br>
					  !Тонны страха и самые яркие эмоции вам обеспечены.
				    </p>
                    <p style="text-align: center;">
					  Максимальное количество участников в игре: 5 человек.
                      <br>
					  Дату и время мы согласуем с вами отдельно.
				    </p>
				    <p style="text-align: center;">
					  <span style="color: #ff720d; font-size: large; ">Заполните контактные данные и мы с вами свяжемся!
					  </span>
				    </p>
				    <form method="post" class="ordergame">
					  <ul class="fieldBlock">
					    <li>
						  <p>
						    Your name
							<span>*</span>
						  </p>
						  <input type="text" class="your_name" name="username">
						</li>
						<li>
						  <p>
						    E-mail
							<span>*</span>
						  </p>
						  <input type="text" class="your_phone" name="email">
					    </li>
						<li>
						  <p>Number of players</p>
						  <input type="text" class="amount_players" name="password">
						</li>
						<li>
						  <input type="submit" value="Отправить">
						  <div class="agreement">
						    Нажимая кнопку "Отправить" вы принимаете
							<br>
							<a href="/user-info-rules/" target="_blank">пользовательское соглашение</a>
							</div></div>
						  </div>
					    </li>
					  </ul>
					</form>
				  </article>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </main>
	  <footer>
        <div class="container">
		  <div class="row">
		    <div class="col-md-offset-4">
			  <nav class="nav-social-media text-center">
                <ul>
                  <li class="vk">
                    <a href="http://vk.com" target="_blank"></a>
                  </li>
                  <li class="fb">
                    <a href="http://facebook.com" target="_blank"></a>
                  </li>
                  </ul>
                  </nav>
                  <div class="copyright text-center">©2018 Квесты в реальности “ОБЛАСТЬ ТЬМЫ”</div>
</body>
</html>					 