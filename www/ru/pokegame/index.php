<html>
  <head>
    <meta name="viewport" content="width=500, initial-scale=1">
    <style>
    body{
      background:url(body.jpg);
      background-attachment: fixed;
    }.poketext{
      height:200px;
    }.block_button{
      margin-top:200px;
      margin-left:40px;
    }.button{
      text-decoration: none;
      outline: none;
      display: inline-block;
      padding: 30px 70px;
      margin: 10px 20px;
      border-radius: 30px;
      background-image: linear-gradient(45deg, #6ab1d7 0%, #33d9de 50%, #002878 100%);
      background-position: 100% 0;
      background-size: 200% 200%;
      font-family: 'Montserrat', sans-serif;
      font-size: 24px;
      font-weight: 300;
      color: white;
      box-shadow: 0 16px 32px 0 rgba(0,40,120,.35);
      transition: .5s;
      border:1px;
}.button:hover {
  box-shadow: 3 2 1 3 rgba(0,40,120,0);
  background-position: 0 0;
}
    </style>
    <script type="text/javascript">
      function main(){
        navigator.geolocation.getCurrentPosition(showPosition)
        if(navigator.geolocation.getCurrentPosition(showPosition) === false){
          navigator.geolocation.getCurrentPosition(showPosition);
        }else{
          navigator.geolocation.getCurrentPosition(showPosition);
        }
        function showPosition(position) {
   window.location.href="start.php?lat="+position.coords.latitude + "&long=" + position.coords.longitude;
}
      }
    </script>
  </head>
  <body>
    <center>
      <img src="imgpoke.png" class="poketext">
      <div class="block_button">
        <button class="button" onclick="main()">
          ИГРАТЬ
        </buuton>
      </div>
    </center>
  </body>
</html>
