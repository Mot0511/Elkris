function flats() {
  document.getElementById('infoBlock').innerHTML = '<style media="screen">\
    .info h2{\
      text-align: center;\
      margin-top: 20px;\
      font-size: 40px;\
    }\
    .info h3, p{\
      margin-left: 20px;\
    }\
  </style>\
  <div class="info">\
    <h2>Электромонтаж квартир</h2>\
    <h3>Стоимость:</h3>\
    <p>стоимость</p>\
    <h3>Портфолио:</h3>\
    <p>портфолио</p>\
  </div>\
  '
}
function houses() {


}
function rooms() {
  document.getElementById('infoBlock').innerHTML = "\<?php require 'rooms.html'; ?>"
}
