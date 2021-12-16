<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>Элькрис - Главаня</title>
    <style media="screen">
    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }
    .content{
      position: absolute;
    }
    .content h1{
      color: white;
      margin-top: 190%;
      margin-left: 80%;
      width: 100%;
      font-size: 55px;
    }
    .label{
      width: 250px;
      height: 120px;
      background-color: #a6a6a6;
      border-radius: 20px;
      margin-left: 20px;
      margin-top: -880px;
      padding-left: 20px;
      padding-top: 30px;
    }
    .menu{
      width: 250px;
      height: 450px;
      background-color: #a6a6a6;
      border-radius: 20px;
      margin-left: 20px;
      padding-left: 20px;
      margin-top: 300px;
      padding-top: 15px;
    }
    .menu a, .about a{
      color: #424242;
      font-size: 25px;
      text-decoration: none;
    }
    .menu a:hover, .about a:hover{
      color: #0066db;
    }
    .contacts{
      width: 250px;
      height: 150px;
      background-color: #a6a6a6;
      border-radius: 20px;
      margin-right: -850px;
      margin-top: -880px;
      padding-left: 30px;
      padding-top: 20px;
      float: right;
      position: absolute;
      right: 50px;
    }
    .about{
      width: 250px;
      height: 450px;
      background-color: #a6a6a6;
      border-radius: 20px;
      margin-right: -850px;
      padding-left: 20px;
      margin-top: -450px;
      padding-top: 15px;
      float: right;
      position: absolute;
      right: 50px;
    }
    .order_bt{
      width: 180px;
      height: 48px;
      background-color: #0089d9;
      border: 1px solid #0089d9;
      color: white;
      font-size: 18px;
      border-radius: 10px;

      transition: color 0.5s;
      transition: background-color 0.5s;
    }
    .order_bt:hover{
      background-color: #0073b5;
    }
</style>
  </head>
  <body>
    <video autoplay muted loop id="myVideo">
      <source src="video/sity2.mp4" type="video/mp4">
    </video>
    <div class="content">
        <h1>Качественный<br> электромонтаж</h1>
        <div class="label">
          <img src="img/label2.png" alt="">
        </div>
        <div class="menu">
          <a href="index.php">Главная</a><br><br>
          <a href="flats.php">Электромонтаж квартир</a><br><br>
          <a href="houses.php">Электромонтаж домов</a><br><br>
          <a href="rooms.php">Электромонтаж помещений</a><br><br>
        </div>

        <div class="contacts">
          <h4>(8332) 45-45-24</h4>
          <h4>454524@inbox.ru</h4>
          <button type="button" class="order_bt" data-bs-toggle="modal" data-bs-target="#exampleModal" name="button">Оставить заявку</button>
        </div>
        <div class="about">
          <a href="index.php">О нас</a><br><br>
          <a href="flats.php">Портфолио</a><br><br>
          <a href="houses.php">Наши партнёры</a><br><br>

        </div>
    </div>
  </body>
</html>
