<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8"/>
    <title>Dercos</title>
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
			data: {id: '4'},     //id счетчика
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
      <div class="common-bg hide"></div>
      <div class="over-wrap">
        <div id="page">
          <nav class="abs main-m">
            <a href="#" class="prev-move hide"></a>
            <a href="#" class="home-move"></a>
            <a href="#" class="next-move"></a>
          </nav>
          <div class="sl sl1 _show">
            <div class="abs like">
				<?php
	$id_counter = "4"; //id счетчика
	require_once "select_count.php";
?>
              <p>
                Я рекомендую<br>
                DERCOS <b>AMINEXIL</b> CLINICAL 5<br>
                <b><span id="count"><?php echo $count; ?></span> коллег</b> рекомендуют
              </p>
               <input id="input_count" type="hidden" value="0">
       			<form class="abs">
				 <input type="button" id="button" value="" >
              </form>
            </div>
            <div class="abs tub"></div>
            <h1 class="abs">
              dercos
              <span><b>aminexil</b> clinical 5</span>
            </h1>
            <h2 class="abs">
              Средство против выпадения волос
              <span>Воздействует на корень, стержень<br>волоса и кожу головы</span>
            </h2>
          </div>
          <div class="sl sl2">
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
            <iframe width="1024" height="575" src="https://www.youtube.com/embed/sXJOcwYS7rQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="abs m_pop2">
            <div class="abs x"></div>
            <p class="abs q1">AMINEXIL <span>1,5%</span></p>
            <p class="abs q2">2,4-диамино-пиримидин-3 оксид</p>
            <div class="abs plsh plsh1">уменьшает фиброз</div>
            <div class="abs plsh plsh2">улучшает трофику<br>волосяного фолликула</div>
            <ul class="abs list">
              <li>Ингибирует<br>лизилгидроксилазу</li>
              <li>Уменьшает ретикуляцию<br>(сшивку) коллагена</li>
              <li>Препятствует уплотнению<br>фибронектиновой сети</li>
              <li>Реорганизует микросеть<br>коллагеновых волокон</li>
            </ul>
            <p class="abs q3"><b>Протокол:</b> двойное слепое плацебоконтролируемое исследование, 3 месяца, метод фототрихограммы</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop3">
            <div class="abs x"></div>
            <p class="abs w1">Гамма <span>aminexil</span></p>
            <p class="abs w5">Комплексный уход для пациентов с алопецией</p>
            <p class="abs w3">основной уход</p>
            <p class="abs w4">дополнительный уход</p>

            <p class="abs w12">
              + Витамины РР/ В6<br>+ Пантенол
            </p>
            <p class="abs w12s">
              + Витамины РР/ В5/ В6<br>+ керамид
            </p>
            <p class="abs w13">
              ампульный уход<br>
              для мужчин<br>
              с кофеином
            </p>
            <p class="abs w14">
              ампульный уход<br>
              для женщин<br>
              с витаминами B1, В6 и РР
            </p>
            <p class="abs w15">
              Тонизирующий<br>
              шампунь против<br>
              выпадения волос
            </p>
            <p class="abs w16">
              Тонизирующий<br>
              укрепляющий<br>
              кондиционер против<br>выпадения волос
            </p>
            <div class="abs o o1"></div>
          </div>
          <div class="abs m_pop4">
            <div class="abs x"></div>
            <p class="abs e1">AMINEXIL <span>CLINICAL 5</span></p>
            <p class="abs e2">Воздействует на поврежденный волос на всем протяжении</p>
            <ul class="abs list list1">
              <li>Аминексил 1,5%</li>
              <li>Аргинин</li>
              <li>Октеин</li>
            </ul>
            <ul class="abs list list2">
              <li>Вулканическая термальная вода VICHY</li>
              <li>SP94</li>
            </ul>
            <p class="abs plsh plsh1">АНТИФИБРОТИЧЕСКИЙ ЭФФЕКТ<br>УСИЛИВАЕТ МИКРОЦИРКУЛЯЦИЮ</p>
            <p class="abs plsh plsh2">ПРОТИВОВОСПАЛИТЕЛЬНЫЙ<br>ЭФФЕКТ</p>
            <p class="abs plsh plsh3">УКРЕПЛЯЕТ СТРУКТУРУ ВОЛОСА</p>
            <div class="abs tub"></div>
          </div>
          <div class="abs m_pop8">
            <p class="abs y1">СХЕМА ПРИМЕНЕНИЯ средств <b>normaderm</b></p>
            <p class="abs y1s">в терапии акне</p>
            <p class="abs y2">утро</p>
            <p class="abs y3">вечер</p>
            <!-- <p class="abs y4">дополнительный<br>уход</p> -->
            <p class="abs y5">легкая степень акне поддерживающая терапия</p>
            <p class="abs y6">от средней до тяжелой степени</p>

            <p class="abs y y7"><b>normaderm</b><br><span>phytosolution</span><br>очищающий гель</p>
            <p class="abs y y8"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y9"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y10"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y11"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y12">наружная<br>терапия</p>
            <p class="abs y y13">в сочетании<br>с медикаментозным<br>лечением</p>
            <p class="abs y y14"><b>normaderm</b><br><span>phytosolution</span><br>очищающий гель</p>
            <p class="abs y y15"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y16"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий<br>уход двойного<br>действия</p>
            <p class="abs y y17"><b>normaderm</b><br>корректирующий<br>уход</p>
            <p class="abs y y18"><b>normaderm</b><br><span>phytosolution</span><br>корректирующий уход<br>двойного действия</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
