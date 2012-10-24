<div class="container">
    <div class="row">
        <div class="span3">

<div id="side" >

  <h3><li><a href="sport">Спорт/Фитнес</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="yoga">Yoga</a></li>
                    <li><a href="pilates">Pilates</a></li>
                    <li><a href="strip_dance">Strip Dance</a></li>
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
                    <li><a href="tai_box">Тайский бокс</a></li>
  </ul>

  <h3><li><a href="computer">Компьютерные курсы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">SMM</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Видеомонтаж</a></li>
                    </ul>
  </ul>

  <h3><li><a href="languages">Иностранные языки</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="№">Английский</a></li>
                    <li><a href="#">Французский</a></li>
                    <li><a href="#">Испанский</a></li>
                    <li><a href="#">Итальянский</a></li>
                    <li><a href="#">Немецкий</a></li>
                    <li><a href="#">Китайский</a></li>
  </ul>

  <h3><li><a href="dance">Танцы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="#">Клубные танцы</a></li>
                    <li><a href="#">Hip-Hop</a></li>
                    <li><a href="#">Бальные танцы</a></li>
                    <li><a href="#">Детские танцы</a></li>
                    <li><a href="#">Танец живота</a></li>
                    <li><a href="#">Танго</a></li>
  </ul>

</div>
        </div>
        <div class="span9">
               
                    
   
    <table class="table table-hover">
        
             <?php
                    
                    if(mysql_num_rows($data) > 0) {
                        while($row = mysql_fetch_array($data)) {
                        echo (" <tr>
                                    <td class='picture'><img src='../images/1.jpg'/></td>
                                    <td class='details'>
                                        <span class='page-header'> 
                                            <h4><a href=/".$row['name_eng']."/".$row['eng'].">".$row['rus']."</a><p><small>".$row['name_rus']."</small></h4>
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