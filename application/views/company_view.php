<div class="container">
<div class="row">
    <div class="span3">
    <br/>
        <form action="/summerhouse" method="post">
            <select onchange="this.form.submit()" name="location">
                <option <?php if($_POST["location"]=='all') {echo 'selected';}?> value="all" >Все</option>
                <option <?php if($_POST["location"]=='kamen') {echo 'selected';}?> value="kamen" >Зал на Комендантском</option>
                <option <?php if($_POST["location"]=='pioner') {echo 'selected';}?> value="pioner">Зал на Пионерской</option>
                <option <?php if($_POST["location"]=='krest') {echo 'selected';}?> value="krest">Зал на Крестовском</option>
                <option <?php if($_POST["location"]=='vas') {echo 'selected';}?> value="vas">Зал на Ваське</option>
                <option <?php if($_POST["location"]=='punk') {echo 'selected';}?> value="punk">Зал в ПУНКе</option>
            </select>
        </form>
    </div>
    <div class="span9">
        <div class="thumbnail">
            <img src="../images/comp.jpg" />
        </div>
        <br />
        <div class="well well-small" id="about">
            <h6>О компании</h6>
            <p>
            <?php
            
            

                while($row = mysql_fetch_array($data)) 
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
        </p>
        <script>
        	$('.textarea').wysihtml5();
        </script>
        <script type="text/javascript" charset="utf-8">
        	$(prettyPrint);
        </script>
                 
        </div>
<div id="courses">
    <div class="accordion table-hover" id="accordion2">
        <div class="accordion-group">
            <table border="0">
               <tr>
                    <td class='picture'><img src='../images/1.jpg'/></td>
                    <td class='details'>
                    <span class='page-header'> 
                    <h4><a>123</a><p><small>1234</small></p></h4>
                    </span>
                    </td>
                    <td class='price'><p class='lead'></p></td>                                
                </tr>
             </table>
            
        </div>     
        <div class="accordion-group">
            <div class="accordion-heading" >
               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <div class="new_coorse_add_button">
                    <img src="images/png/new_coorse_add.png">
                </div>                      
                </a>                      
             </div>                             
              <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">                                  
                      <form class="form-horizontal" method="POST" action="php/new_course" id="regForm">
                        <div class="control-group">
                            <label class="control-label" for="inputNameCourse">Название курса</label>
                            <div class="controls">
                            <input type="text" id="inputname" placeholder="Название курса" name="name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputDescriptionCourse">Описание</label>
                            <div class="controls">
                                <input type="text" id="inputDescription" placeholder="Описание" name="description">
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
                    

            
            
            <!--  Модальное окно 1.0              
            <div class="modal ">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Новый курс</h3>
              </div>
              <div class="modal-body">                
                <form class="form-horizontal" method="POST" action="" id="regForm">
                    <div class="control-group">
                        <label class="control-label" for="inputNameCourse">Название курса</label>
                        <div class="controls">
                        <input type="text" id="Inputname" placeholder="Название курса" name="name"><div id="1"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputDescriptionCourse">Описание</label>
                        <div class="controls">
                            <input type="text" id="inputDescription" placeholder="Описание" name="description"><div id="1"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputImageCourse">Выберите картинку</label>
                        <div class="controls">
                            <input type="submit" class="btn" value="С компьютера" id="input" name="description"><div id="1"></div>
                            или<br /> 
                            <input type="text" id="inputImage" placeholder="Ссылка" name="description"><div id="1"></div>
                        </div>
                    </div>
                <p>Новый курс будет добавлен сразу после проверки модератором</p> 
                </form>
               </div>
              <div class="modal-footer">
                <a href="#" class="btn">Отмена</a>
                <a href="#" class="btn btn-primary">Добавить</a>
              </div>
            </div>
            энд модальное окно
             -->
</div>
        </div>        
    </div>
</div>
</div>