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
                    //Вывод из базы данных 
                    echo $text_description."<br/>"; 
                    echo '<input type="submit" value="Редактировать!" class="btn" text-align="right">';
                    //Флаг для смены окна
                    echo '<input type="hidden" name="action" value=2>';
                    echo '</form>';                            				
                }
                else {   
                    echo '<form name="frm" method="POST">';
                    //Флаг для смены окна
                    echo '<input type="hidden" name="action" value=1>';
                    //Флаг для сохранения
                    echo '<input type="hidden" name="action_save" value=1>';
                    //Вывод из базы данных  
                    echo '<textarea class="textarea" placeholder="Enter text..." style="width: 662px; height: 200px" name="test">'.$text_description.'</textarea>';                            
                    echo '<input type="submit" value="Сохранить" class="btn">';
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
            <table class="table table-hover">
               <tr>
                    <td class='picture'><img src='../images/1.jpg'/></td>
                    <td class='details'>
                    <span class='page-header'> 
                    <h4><a></a><p><small></small></h4>
                    </span>
                    </td>
                    <td class='price'><p class='lead'></p></td>
               </tr>
            </table>
        </div>
        </div>
        
    </div>
</div>
</div>