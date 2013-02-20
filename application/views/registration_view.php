<div class="container pad">
<div class="row">
  <div class="span12 bg_reg">
    <h1 style="color: blue;"><em>Improvy<small>- это агрегатор курсов, треннингов, спортивных секций. Это Яндекс среди курсов.</small></em></h1> 
  </div>
</div>
<div class="row">
  <div class="span12">    
        <p>Здравствуйте, зарегистрируйтесь пложалуйста чтобы добавить свои курсы</p>
        <p>Регистрация простая, заполните поля ниже</p>
        <p>Поля отмеченные <font color="red">*</font> обязательный для заполнения!</p>
        <p id="thx" style="display:none;">Спасибо за регистрацию! нажмите <a href="/main">сюда</a> чтобы начать работать</p>
                <form class="form-horizontal" method="POST" action="/php/registration.php" target="iframe" id="regForm" enctype=multipart/form-data>
                  <div class="row">
                    <div class="span6">
                      <fieldset>
                      
                        <label >Название компании <font color="red">*</font></label>
                        
                          <input type="text" id="Inputname" class="span4" placeholder="Название компании" name="name">
                        
                      
                      
                        <label >Имя Фамилия <font color="red">*</font></label>
                        
                          <input type="text" id="fio" class="span4" placeholder="Имя Фамилия" name="fio">
                      
                      
                        <label>Email <font color="red">*</font></label>
                        
                          <input type="text" id="inputEmail" class="span4" placeholder="Email" name="Email">
                      
                    </fieldset>
                    </div>
                    <div class="span6">
                      
                        <label  >Адрес компании <font color="red">*</font></label>
                       
                          <input type="text" id="Address" class="span4" placeholder="" name="Address">
                       
                      
                        <label>Веб-сайт(если есть)</label>
                        
                          <input type="text" id="Site" class="span4" placeholder="" name="Site">
                       
                      
                        <label >Телефон <font color="red">*</font></label>
                       
                          <input type="text" id="Phone" class="span4" placeholder="" name="Phone">

                          <label >Логотип <font color="red">*</font></label>
                       
                          <input type="file" id="logo" class="span4" placeholder="" name="uploadfile">
                                          
                    </div>
                    <div class="control-group">
                        <div class="controls">
                          <div id="1" style="height: 20px;"> </div>                     
                      </div>  
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button class="btn btn-primary" type="submit" id="sub">Регистрация</button>                                                 
                        </div>
                      </div>       
                      </div>               
                </form>
                <iframe name="iframe" hieght="0" width="0" frameborder="0"></iframe>
                <!-- Modal -->
                <div id="reg_complete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Modal header</h3>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                  </div>
                </div>

  </div>
</div>
</div>
<div class = "hfooter"></div>
</div>
