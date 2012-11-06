<div class="container">
<div class="row">
    <div class="span3">
        

        <br />
        <form action="/summerhouse" method="post">
            <select onchange="this.form.submit()" name="location" id="select">
                <option value="all">Выберите адрес</option>
                <option value="Хухуху">Зал на Комендантском</option>
                <option value="pioner">Зал на Пионерской</option>
                <option value="krest">Зал на Крестовском</option>
                <option value="vas">Зал на Ваське</option>
                <option value="punk">Зал в ПУНКе</option>
            </select>
        </form>
        <a href=""><button class="btn btn-primary">Добавить адрес</button></a>
        
    </div>
    <div class="span9">
        <div class="thumbnail">
            <img src="../images/comp.jpg" />
        </div>
        <br />
        <div class="well well-small" id="about">
            <h6>О компании</h6>
			<?php
            
            

                while($row = mysql_fetch_array($data[1])) 
                {
                    $text_description =  ($row['about']);
                }
                  
                if (!($_POST['action']=='2'))    {                 
                    if (($_POST['action_save']=='1'))    {
                        //Запись в базу данных
                        $text_description = $_POST["test"];
                        mysql_query("UPDATE  `improvy`.`companies` 
                                     SET  `about` = '$text_description' 
                                     WHERE  `companies`.`id_company` =1;");
                    }                               
                    echo '<form name="frm" method="POST">';
                    echo '<input type="submit" value="Редактировать!" class="button_edit_textarea" >';
                    //Вывод из базы данных 
                    echo $text_description."<br/>"; 
                    //Флаг для смены окна
                    echo '<input type="hidden" name="action" value=2>';
                    echo '</form>';                            				
                }
                else {   
                    echo '<form name="frm" method="POST">';
                    echo '<input type="submit" value="Сохранить" class="btn button_save">';
                    //Флаг для смены окна
                    echo '<input type="hidden" name="action" value=1>';
                    //Флаг для сохранения
                    echo '<input type="hidden" name="action_save" value=1>';
                    //Вывод из базы данных  
                    echo '<textarea class="textarea" placeholder="Введите описание вашей компании." style="width: 662px; height: 200px" name="test">'.$text_description.'</textarea>';                           
                    
                    echo '</form>';     
                }                            
                ?>
				        <script>
							$('.textarea').wysihtml5();
						</script>
						<script type="text/javascript" charset="utf-8">
							$(prettyPrint);
						</script>
        </div>


 
<div id="courses">
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading" >
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    123...?
                </a> 
            </div>
        <div id="collapseOne" class="accordion-body collapse">
            <div class="accordion-inner"> 
                 3456
            </div>
        </div>
        </div>
            
               <?php                    
                    if(mysql_num_rows($data[2]) > 0) {
                        $i=1;
                        while($row = mysql_fetch_array($data[2])) {
                        echo (" <div class='accordion-group'>                        
                                    <div class='accordion-heading' >
                                        <div class = 'picture_course'>
                                        <img src='../images/1.jpg'/>
                                        </div>
                                        <div class='name_course'>
                                            <span class='page-header'> 
                                                <h4><a href=/".$row['name_eng']."/".$row['eng'].">".$row['rus']."</a><p><small>".$row['name_rus']."</small></h4>
                                            </span>
                                        </div>
                                        <p class='lead'>".$row['price']."</p>
                                        <div class='price'>
                                            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse".$i."' id='APMI".$i."'>
                                            <img id='PMI".$i."' src = 'images/png/button_add1.png' class = 'image_collapse_open'>
                                            </a>
                                        </div>
                                    
                                    </div>
                                    <div id='collapse".$i."' class='accordion-body collapse'>
                                        <div class='accordion-inner'> 
                                             хуй вам
                                        </div>
                                    </div>
                                </div>
                                ");
                        $i=$i+1;
                        }
                    } else echo("<div class='accordion-group'>
                                    <div class='accordion-heading' >
                                    <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse2'>
                                        Добавьте курсы сейчас
                                    </a>
                                    </div>
                                 </div>
                                 <div id='collapse2' class='accordion-body collapse'>
                                     <div class='accordion-inner'> 
                                          хуй вам
                                     </div>
                                 </div>
                                ");
                ?>
             
                
        <div class="accordion-group">
            <div class="accordion-heading" >
               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNew" id="APM">
                <div class="new_coorse_add_button">
                    <img id="PM" src="images/png/new_coorse_add_new.png">
                </div>                      
                </a>                      
             </div>                             
              <div id="collapseNew" class="accordion-body collapse">
                  <div class="accordion-inner">                                  
                      <form class="form-horizontal" method="POST" action="php/new_course" id="regForm">
                        <div class="control-group">
                            <label class="control-label">Название курса</label>
                            <div class="controls">
                            <input type="text" id="inputname" placeholder="Название курса" name="name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Описание</label>
                            <div class="controls">
                                <input type="text" id="inputDescription" placeholder="Описание" name="description">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Расположение</label>
                            <div class="controls">
                                <select name="location" id="select">
                                    <?php
                                    echo ('
                                    <option value="all">Выберите адрес</option>
                                    <option value="Хухуху">Зал на Комендантском</option>
                                    <option value="pioner">Зал на Пионерской</option>
                                    <option value="krest">Зал на Крестовском</option>
                                    <option value="vas">Зал на Ваське</option>
                                    <option value="punk">Зал в ПУНКе</option>
                                    ')
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputImageCourse">Выберите картинку</label>
                            <div class="controls">
                                <input type="submit" class="btn" value="С компьютера" id="input" name="description">
                                или
                                <input type="text" id="inputImage" placeholder="Ссылка" name="description">
                            </div>
                        </div>   
                    <p>Новый курс будет добавлен сразу после проверки модератором
                            <input type="submit" class="btn" value="Добавить"></p> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>      

        </div>
        
    </div>
</div>
</div>