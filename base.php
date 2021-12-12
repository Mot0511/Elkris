{% load static%}
<html>
<head>
  <title>Elkris - электромонтажные работы</title>
  <meta name="description" content="Электромонтажные работы в Кирове. Качественное выполнение работы. Официальный сайт компании Элькрис.">

<link rel="stylesheet" href="{% static 'style.css'%}">
    <style>
    .main{margin-left: 150px;}
    .close{
      float: right;
      margin-right: 250px;
      margin-top: -70px;
      width: 96px;
      height: 96px;
      background-image: url({% static 'img/close.png' %});
      border: 0px;
    }
    .ph2{
       width: 420px;
       height: 660px;
       background: grey;
       margin-left: 10px;
       float: left;
    }

    </style>
</head>
<body>
    <div class="order" id="order">
      <h1>Форма связи</h1>
      <button type="button" onclick="hide_form()" class="close" name="button"></button>
      <div style="display: flex;">
        <form class="" action="index.html" method="post">
          <input type="text" class="input" name="" placeholder="Имя" required><br><br>
          <input type="tel" class="input" name="" placeholder="Телефон" required><br><br>
          <textarea name="name" class="textarea" placeholder="Описание проекта" rows="8" cols="80" required></textarea><br><br>
          <input type="submit" class="send_bt" name="" value="Отправить"><br>
        </form>

        <p style="padding-left: 50px;">
          Заполните <b>форму</b> обратной связи<br><br><br>
          Позвоните нам по телефону <b>45-45-24</b><br><br><br>
          Напишите письмо <b>454524@mail.ru</b>
        </p>
      </div>
    </div>

    <div class="header">
      <a href="/"><img src="{% static 'img/heading.png' %}" width="150px" height="40px" alt=""></a>
      <div class="menu">
        <a href="flat">Электромонтаж квартир</a>
        <a href="house">Электромонтаж домов</a>
        <a href="room">Электромонтаж помещений</a>
        <a href="about">О нас</a>
      </div>
      <h2>Тел. 45-45-24</h2>
      <button type="button" class="order_bt" onclick="show_form()" name="button">Оставить заявку</button>
    </div>
<div class="main">
        <h1>{% block heading %}{% endblock %}</h1>
    <h2>{% block heading2 %}{% endblock %}</h2>
    {% block price_content %}{% endblock %}
    <h2>{% block heading3 %}{% endblock %}</h2>
    {% block pph %}{% endblock %}

</div>

<script type="text/javascript">
function show_form() {
  document.getElementById('order').style = 'display: block;'

  document.getElementById('arrow').style = 'display: none;'
  document.getElementById('arrow2').style = 'display: none;'
  document.getElementById('arrow3').style = 'display: none;'
  document.getElementById('arrow4').style = 'display: none;'
 }
function hide_form() {
  document.getElementById('order').style = 'display: none;'

  document.getElementById('arrow').style = 'display: block;'
  document.getElementById('arrow2').style = 'display: block;'
  document.getElementById('arrow3').style = 'display: block;'
  document.getElementById('arrow4').style = 'display: block;'

}

</script>

</body>
</html>
