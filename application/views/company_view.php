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
            <?php 
                    if(mysql_num_rows($data[1]) > 0) {
                        while($row = mysql_fetch_array($data[1])) {
                        echo ("<p>".$row['about']."</p>");
                        }
                    } else echo 1; 
                ?> 
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