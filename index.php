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
      position: relative;

    }
    .content h1{
      color: white;
      position: relative;
      left: 320px;
      top: 650px;
      width: 100%;
      font-size: calc(1px + 3vw);
    }
    .menu a, .about a{
      color: #424242;
      font-size: 25px;
      text-decoration: none;
      transition: color 0.2s;
    }
    .menu a:hover, .about a:hover{
      color: #0066db;
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
    .label{
      width: 250px;
      height: 120px;
      background-color: #91d7ff;
      background-image: url(img/label_bg2.png);
      border-radius: 20px;
      position: absolute;
      top: 20px;
      left: 20px;
      padding-left: 20px;
      padding-top: 30px;
    }
    .menu{
      width: 250px;
      height: 480px;
      background-color: #91d7ff;
      background-image: url(img/label_bg2.png);
      border-radius: 20px;
      padding-top: 15px;
      margin-left: 20px;
      margin-top: 10%;
      text-align: center;
    }
    .contacts{
      width: 250px;
      height: 150px;
      background-color: #91d7ff;
      background-image: url(img/label_bg2.png);
      border-radius: 20px;
      padding-left: 30px;
      padding-top: 20px;
      float: right;
      /* margin-top: -790px;
      margin-right: 20px; */
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .about{
      width: 250px;
      height: 450px;
      background-color: #91d7ff;
      background-image: url(img/label_bg2.png);
      border-radius: 20px;
      padding-top: 15px;
      float: right;
      margin-right: 20px;
      margin-top: -450px;
      text-align: center;
    }
    .leftBlocks{
      margin-top: auto;
    }
    .infoBlock{
      width: 50%;
      height: 600px;
      background-color: white;
      border-radius: 20px;
      position: absolute;
      left: 300px;
      top: -600px;
      transition: top 0.5s;

    }
</style>
<!-- <script type="text/javascript" src="script.js"></script> -->
  </head>
  <body>
    <video autoplay muted loop id="myVideo">
      <source src="video/sity2.mp4" type="video/mp4">
    </video>
    <div class="content">
      <div class="infoBlock" id="rooms">
        <?php require 'rooms.html'; ?>
      </div>
      <div class="infoBlock" id="houses">
        <?php require 'houses.html'; ?>
      </div>
      <div class="infoBlock" id="flats">
        <?php require 'flats.html'; ?>
      </div>
      <div class="infoBlock" id="about">
        <?php require 'about.html'; ?>
      </div>
      <div class="infoBlock" id="pph">
        <?php require 'pph.html'; ?>
      </div>
      <div class="infoBlock" id="partn">
        <?php require 'partn.html'; ?>
      </div>

        <h1>Качественный<br> электромонтаж</h1>


        <div class="label">
          <img src="img/label2.png" alt="">
        </div>
        <div class="menu">
          <a href="index.php" class="fw-bold text-center">ГЛАВНАЯ</a><br><br>
          <a href="#" id="flats_bt">ЭЛЕКТРОМОНТАЖ КВАРТИР</a><br><br>
          <a href="#" id="houses_bt">ЭЛЕКТРОМОНТАЖ ДОМОВ</a><br><br>
          <a href="#" id="rooms_bt">ЭЛЕКТРОМОНТАЖ ПОМЕЩЕНИЙ</a><br><br>
        </div>

        <div class="contacts">
          <h4>(8332) 45-45-24</h4>
          <h4>454524@inbox.ru</h4>
          <button type="button" class="order_bt" data-bs-toggle="modal" data-bs-target="#exampleModal" name="button">Оставить заявку</button>
        </div>
        <div class="about">
          <a href="#" id="about_bt">О нас</a><br><br>
          <a href="#" id="pph_bt">Портфолио</a><br><br>
          <a href="#" id="partn_bt">Наши партнёры</a><br><br>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="button"></button>
              </div>
              <div class="modal-body">
                <form class="" action="form.php" method="post">
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Имя</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" required id="inputEmail" name="" value="">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPass" class="col-sm-2 col-form-label">Номер телефона</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tel" required id="inputPass" name="" value="">
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary" name="button" value="Оставить заявку">
                </form>

              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          flats_bt = document.getElementById('flats_bt');
          houses_bt = document.getElementById('houses_bt');
          rooms_bt = document.getElementById('rooms_bt');
          about_bt = document.getElementById('about_bt');
          pph_bt = document.getElementById('pph_bt');
          partn_bt = document.getElementById('partn_bt');

          flats = document.getElementById('flats');
          houses = document.getElementById('houses');
          rooms = document.getElementById('rooms');
          about = document.getElementById('about');
          pph = document.getElementById('pph');
          partn = document.getElementById('partn');

          flats_bt.addEventListener('click', function functionName() {
            flats.style = 'top: 20px;';
            houses.style = 'top: -600px;';
            rooms.style = 'top: -600px;';
            about.style = 'top: -600px;';
            pph.style = 'top: -600px;';
            partn.style = 'top: -600px;';
          }, false)
          houses_bt.addEventListener('click', function functionName() {
            flats.style = 'top: -600px;';
            houses.style = 'top: 20px;';
            rooms.style = 'top: -600px;';
            about.style = 'top: -600px;';
            pph.style = 'top: -600px;';
            partn.style = 'top: -600px;';
          }, false)
          rooms_bt.addEventListener('click', function functionName() {
            flats.style = 'top: -600px;';
            houses.style = 'top: -600px;';
            rooms.style = 'top: 20px;';
            about.style = 'top: -600px;';
            pph.style = 'top: -600px;';
            partn.style = 'top: -600px;';
          }, false)
          about_bt.addEventListener('click', function functionName() {
            flats.style = 'top: -600px;';
            houses.style = 'top: -600px;';
            rooms.style = 'top: -600px;';
            about.style = 'top: 20px;';
            pph.style = 'top: -600px;';
            partn.style = 'top: -600px;';
          }, false)
          pph_bt.addEventListener('click', function functionName() {
            flats.style = 'top: -600px;';
            houses.style = 'top: -600px;';
            rooms.style = 'top: -600px;';
            about.style = 'top: -600px;';
            pph.style = 'top: 20px;';
            partn.style = 'top: -600px;';
          }, false)
          partn_bt.addEventListener('click', function functionName() {
            flats.style = 'top: -600px;';
            houses.style = 'top: -600px;';
            rooms.style = 'top: -600px;';
            about.style = 'top: -600px;';
            pph.style = 'top: -600px;';
            partn.style = 'top: 20px;';
          }, false)
        </script>

    </div>
  </body>
</html>
