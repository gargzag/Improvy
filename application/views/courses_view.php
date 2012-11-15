<div class="container">
    <div class="row">
        <div class="span3">

<div id="side" >

  <h3><li><a href="sport">Спорт/Фитнес</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="yoga">Yoga</a></li>
                    <li><a href="pilates">Pilates</a></li>
                    <li><a href="strip-dance">Strip Dance</a></li>
                    <li><a href="tennis">Теннис</a></li>
                    <li><a href="run">Бег</a></li>
                    <li><a href="streching">Стречинг</a></li>
  </ul>

  <h3><li><a href="martial">Боевые искусства</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="box">Бокс</a></li>
                    <li><a href="karate">Каратэ</a></li>
                    <li><a href="sambo">Самбо</a></li>
                    <li><a href="dzudo">Дзюдо</a></li>
                    <li><a href="tai-box">Тайский бокс</a></li>
  </ul>

  <h3><li><a href="computer">Компьютерные курсы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="programming">Программирование</a></li>
                    <li><a href="seo">SEO</a></li>
                    <li><a href="smm">SMM</a></li>
                    <li><a href="design">Дизайн</a></li>
                    <li><a href="video-edit">Видеомонтаж</a></li>
                    </ul>
  </ul>

  <h3><li><a href="languages">Иностранные языки</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="english">Английский</a></li>
                    <li><a href="french">Французский</a></li>
                    <li><a href="spanish">Испанский</a></li>
                    <li><a href="italian">Итальянский</a></li>
                    <li><a href="german">Немецкий</a></li>
                    <li><a href="chinese">Китайский</a></li>
  </ul>

  <h3><li><a href="dance">Танцы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="club-dance">Клубные танцы</a></li>
                    <li><a href="hiphop">Hip-Hop</a></li>
                    <li><a href="bal-dance">Бальные танцы</a></li>
                    <li><a href="child-dance">Детские танцы</a></li>
                    <li><a href="belly-dance">Танец живота</a></li>
                    <li><a href="tango">Танго</a></li>
  </ul>

</div>
        </div>
        <div class="span9">
               
                    
   
    <table class="table table-hover">
        
             <?php
                    
                    if(mysql_num_rows($data) > 0 || die(mysql_error()) ) {
                        while($row = mysql_fetch_array($data)) {
                        echo (" <tr>
                                    <td class='picture'><img src='../images/1.jpg'/></td>
                                    <td class='details'>
                                        <span class='page-header'> 
                                            <h4><a href=/".$row['compname_eng']."/".$row['coursename_eng'].">".$row['coursename_rus']."</a><p><small>".$row['compname_rus']."</small></h4>
                                        </span>
                                    </td>
                                    <td class='price'><p class='lead'>".$row['price']."</p></td>
                                </tr>");
                        }
                    } else echo 1;
        ?>
       
    </table>
</div>
</div>

</div>