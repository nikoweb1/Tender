<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8"/>
    <title>CeraVE(II)</title>
    <link rel="stylesheet" href="css/stylev3.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
	  <script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#button').on('click', function() { 		
        $.ajax({
			url: 'click.php',         
			method: 'get',             
			dataType: 'json',          
			data: {id: '10'},     //id счетчика
			success: function(data){   
				$('#count').html(data.count);
				//alert(data.ip);
				if(data.ip){
					$('#button').prop('disabled', true);
				}
			}
		});
		
	});
	
	
});
</script>
  </head>
  <body>
    <div class="wrap">
      <div class="common-bg1">
        <div class="abs lside"></div>
        <div class="abs rside"></div>
      </div>
      <div class="common-bg2 hide">
        <div class="abs lside"></div>
        <div class="abs rside"></div>
      </div>
      <div class="over-wrap">
        <div id="page">
          <nav class="abs main-m">
            <a href="#" class="prev-move"></a>
            <a href="#" class="home-move"></a>
            <!-- <a href="#" class="next-move hide"></a> -->
          </nav>
          <div class="sl sl2 _show">
            <a href="#" class="abs sl2-links sl2-link1"></a>
            <a href="#" class="abs sl2-links sl2-link2"></a>
            <a href="#" class="abs sl2-links sl2-link3"></a>
            <a href="#" class="abs sl2-links sl2-link4"></a>
            <div class="abs ovec vec1">
              <a href="#" class="abs"></a>
            </div>
            <div class="abs ovec vec2">
              <a href="#" class="abs"></a>
            </div>
            <div class="abs ovec vec3">
              <a href="#" class="abs"></a>
            </div>
            <div class="abs ovec vec4">
              <a href="#" class="abs"></a>
            </div>
          </div>
          <div class="abs m_pop1">
            <div class="abs x"></div>
            <p class="abs m_pop1-p1">Комплексный уход для пациентов с акне при различных степенях тяжести</p>
            <p class="abs m_pop1-p2">ФИО ведущего</p>
            <iframe width="1024" height="575" src="https://www.youtube.com/embed/UoWfGOMjewE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="abs m_pop2">
            <div class="abs x"></div>
            <p class="abs q1"><span>гамма</span> CERAVE SA</p>
            <p class="abs q2">ключевые &nbsp;&nbsp;<span>ингредиенты</span></p>
            <p class="abs q3">ЗапатЕнтованная<br>технология mve<span>®</span></p>
            <p class="abs q4">ИНГРЕДИЕНТЫ НАХОДЯТСЯ В МНОГОСЛОЙНЫХ СФЕРАХ</p>
            <p class="abs q5">
              СФЕРЫ ПОСТЕПЕННО «открываются»,<br>
              ПОСЛЕДОВАТЕЛЬНО ВЫСВОБОЖДАЯ АКТИВНЫЕ<br>
              КОМПОНЕНТЫ В ТЕЧЕНИЕ ДНЯ, ЧТО ОБЕСПЕЧИВАЕТ<br>
              <span>ДЛИТЕЛЬНЫЙ ЭФФЕКТ, ПЕРЕНОСИМОСТЬ<br>
              И ПОВЫШЕНИЕ КОМПЛАЕНТНОСТИ</span>
            </p>
            <div class="abs f1">
              <span class="abs">КОМБИНАЦИЯ ТРЕХ ЦЕРАМИДОВ 1,3,6-II</span>
            </div>
            <div class="abs f2">
              <span class="abs">ВЫСОКОМОЛЕКУЛЯРНАЯ<br>ГИАЛУРОНОВАЯ КИСЛОТА</span>
            </div>
            <div class="abs f3">
              <span class="abs">0,5% САЛИЦИЛОВАЯ КИСЛОТА</span>
            </div>
            <div class="abs f4">
              <span class="abs">0,5% ЛИПО-ГИДРОКСИ-КИСЛОТА</span>
            </div>
            <div class="abs f5">
              <span class="abs">10% МОЧЕВИНА</span>
            </div>
            <div class="abs f6"></div>
          </div>
          <div class="abs m_pop3">
            <div class="abs like">
				<?php
	$id_counter = "10"; //id счетчика
	require_once "select_count.php";
?>
              <p>
                Я рекомендую CeraVe SA<br>
                <b><span id="count"><?php echo $count; ?></span> коллег</b> рекомендуют
              </p>
               <input id="input_count" type="hidden" value="0">
       			<form class="abs">
				 <input type="button" id="button" value="">
              </form>
            </div>
            <div class="abs x"></div>

            <div class="abs o o1"></div>
            <div class="abs o o2"></div>
          </div>
          <div class="abs m_pop4">
            <p class="abs z1">СХЕМА ПРИМЕНЕНИЯ <b>средств Cerave</b></p>
            <p class="abs z2">очищение</p>
            <p class="abs z3">уход</p>
            <p class="abs z4">сухая кожа/ксероз<br>(сенильный, метеорологический, при сахарном диабете)</p>
            <p class="abs z5">атопический дерматит</p>
            <p class="abs z6">Псориаз, ихтиоз, фолликулярный кератоз</p>

            <p class="abs zz zz1">увлажняющий<br>очищающий крем-гель</p>
            <p class="abs zz zz2">увлажняющая<br>очищающая пенка</p>
            <p class="abs zz zz3">увлажняющий<br>крем</p>
            <p class="abs zz zz4">увлажняющий<br>лосьон</p>
            <p class="abs zz zz5">увлажняющий<br>очищающий крем-гель</p>
            <p class="abs zz zz6">увлажняющая<br>очищающая пенка</p>
            <p class="abs zz zz7">увлажняющий<br>крем</p>
            <p class="abs zz zz8">увлажняющий<br>лосьон</p>
            <p class="abs zz zz9">SA смягчающий<br>очищающий гель</p>
            <p class="abs zz zz10">SA смягчающий<br>крем</p>

            <p class="abs z7">ЧАСТОТА ПРИМЕНЕНИЯ ЗАВИСИТ ОТ ИНДИВИДУАЛЬНОЙ ПОТРЕБНОСТИ ПАЦИЕНТА</p>
          </div>

          <div class="abs x_pop1">
            <div class="abs x"></div>
            <h1 class="abs">Смягчающий гель и крем</h1>
            <h2 class="abs">для сухой, огрубевшей и неровной кожи</h2>

            <div class="abs l l1">
              <div>
                противовоспалительное<br>действие
                <span>ниацинамид</span>
              </div>
            </div>
            <div class="abs l l2">
              <div>
                мягкое<br>кератолитическое<br>действие
                <span>0,5% салициловая кислота</span>
              </div>
            </div>

            <div class="abs r r1">
              <div>
                мягкое<br>кератолитическое<br>действие
                <span>10% мочевина<br>0,5% салициловая кислота<br>0,5 липо-гидрокси-кислота</span>
              </div>
            </div>

            <div class="abs tub"></div>
            <h3 class="abs">очищение</h3>
            <h4 class="abs">уход</h4>

            <div class="abs b">
              <div class="abs bt bt1">
                <div>
                  восстанавливают<br>гидролипидный барьер
                  <span>церамиды 1, 3, 6-II<br>Жирные кислоты и холестерол</span>
                </div>
              </div>
              <div class="abs bt bt2">
                <div>
                  ОБЕСПЕЧИВАют<br>ПРОЛОНГИРОВАННЫЙ<br>ЭФФЕКТ
                  <span>Технология доставки MVE</span>
                </div>
              </div>
              <div class="abs bt bt3">
                <div>
                  увлажняют
                  <span>гиалуроновая кислота</span>
                </div>
              </div>
            </div>
          </div>

          <div class="abs x_pop2">
            <div class="abs x"></div>
            <h1 class="abs">восстанавливающий крем</h1>
            <h2 class="abs">для очень сухой, огрубевшей кожи ног</h2>

            <div class="abs l l1">гипоаллергенно</div>
            <div class="abs l l2">без отдушек</div>
            <div class="abs l l3">без парабенов</div>

            <div class="abs r r1">
              <div>
                восстанавливают<br>гидролипидный барьер
                <span>церамиды 1, 3, 6-II<br>Жирные кислоты и холестерол</span>
              </div>
            </div>
            <div class="abs r r2">
              <div>
                ОБЕСПЕЧИВАют<br>ПРОЛОНГИРОВАННЫЙ<br>ЭФФЕКТ
                <span>Технология доставки MVE</span>
              </div>
            </div>
            <div class="abs r r3">
              <div>
                увлажняют
                <span>гиалуроновая кислота</span>
              </div>
            </div>
            <div class="abs r r4">
              <div>
                оказывает<br>противовоспалительное<br>действие
                <span>ниацинамид</span>
              </div>
            </div>
            <div class="abs r r5">
              <div>
                оказывает мягкое<br>кератолитическое действие
                <span>лактат аммония,<br>салициловая кислота</span>
              </div>
            </div>

            <div class="abs tub"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
