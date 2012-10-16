<div class="container">
<dir id="res"></dir>
    <div class="row">
        <div class="span3">
            <div class="filtr">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        Цена
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Anim pariatur cliche...
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        Местоположение
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                        Anim pariatur cliche...
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="span9">           
                <div  class="row">
                    <?php
                    if(mysql_num_rows($data) > 0) {
                        while($row = mysql_fetch_array($data)) {
                         echo ("<div class='result'>
                        <div class='span2'>
                            <div class='thumbnail'>
                                <img src='../images/1.jpg'/>
                            </div>
                        </div>
                        <div class='span5'>    
                            <div class='details'>"
                            .$row['name']
                             .$row['description'].   
                            "</div>
                        </div>
                        <div class='span2'>
                            <div class='price'>"
                            .$row['price'].
                            "</div>
                        </div>
                    </div>
                </div>");
                           }
                         } else echo 1;
                     ?>       
    </div>
</div>