<div class="container">
<div class="row">
    <div class="span3">
        

        <br />
        <form action="/summerhouse" method="post">
            <select onchange="this.form.submit()" name="location">
                <option value="all" >Все</option>
                <option value="kamen" >Зал на Комендантском</option>
                <option value="pioner">Зал на Пионерской</option>
                <option value="krest">Зал на Крестовском</option>
                <option value="vas">Зал на Ваське</option>
                <option value="punk">Зал в ПУНКе</option>
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
            
                        while($row = mysql_fetch_array($data[1])) 
                          {
                            $text_description =  ($row['about']);
                          }
                        //mysql_query("UPDATE  `improvy`.`companies` 
                        //             SET  `about` = '`$course_description`' 
                        //             WHERE  `companies`.`id_company` =1;"); 
					
                        if (!isset ($_POST['test']))
                        {                         
                            //Вывод из базы данных
                            
                            //echo $text_description;
                            echo '<form name="frm" method="POST">';
                            echo '<input type="submit" value="Сохранить" class="btn">';
                            echo '<input type="hidden" name="action" value="false">';
                            echo '<textarea class="textarea" placeholder="Enter text..." style="width: 662px; height: 200px" name="test">'.$text_description.'</textarea>';                            
                            echo '</form>';     
                            //echo "action=".$_POST["action"]."";
														
                        }
                        else
                        {
                            //Запись в базу данных
                            $text_description = $_POST["test"];
                            //echo $_POST["test"];
                            mysql_query("UPDATE  `improvy`.`companies` 
                                     SET  `about` = '$text_description' 
                                     WHERE  `companies`.`id_company` =1;"); 

                                //Вывод из базы данных
                                
                                echo '<form name="frm" method="POST">';
                                echo '<input type="submit" value="Редактировать!" class="btn">';
                                echo '</h6><p><input type="hidden" name="text" value="'.$_POST["test"].'">';
                                echo '<input type="hidden" name="action" value="true">';
                                echo '</form>'; 
                                echo $text_description;
                                //echo "action=".$_POST["action"]."";
                                //echo "".$_POST["test"]."";
                        }
                            
                ?>
                		<script>
        	$('.textarea').wysihtml5();
        </script>
        <script type="text/javascript" charset="utf-8">
        	$(prettyPrint);
        </script>
                 </p>
                
                
                
                
                
                
                
                

        </div>
        <div id="courses">
            <table class="table table-hover">
               <?php
                    
                    if(mysql_num_rows($data[2]) > 0) {
                        while($row = mysql_fetch_array($data[2])) {
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
</div>
</div>