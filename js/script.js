function pph1() {
  var data = '
  <div class="pph_ph" id="pph_ph">\
    <img src="{% static "img/places/ph21.jpg"%}" width="660px" height="420px" alt="">\
  </div>\
  <div class="pph_ph" id="pph_ph">\
    <img src="{% static "img/places/ph22.jpg"%}" width="660px" height="420px" alt="">\
  </div>\
  <div class="pph_ph" id="pph_ph">\
    <img src="{% static "img/places/ph23.jpg"%}" width="660px" height="420px" alt="">\
  </div>\
  <div class="pph_ph" id="pph_ph">\
    <img src="{% static "img/places/ph24.jpg"%}" width="660px" height="420px" alt="">\
  </div>
  '
  alert(data)
}
function pph2() {

}
function pph3() {

}
  var page1 = 1
  var pos_page = 0
  function left2() {
    if (page1 != 1){
      pos_page = pos_page + 660
      ob = document.getElementById('pph_ph').style = 'margin-left: ' + pos_page + 'px;';
      page1 = page1 - 1
    }
  }
  function right2() {
    if (page1 != 4){
      pos_page = pos_page - 660
      ob = document.getElementById('pph_ph').style = 'margin-left: ' + pos_page + 'px;'
      page1 = page1 + 1
    }
  }
  function left() {
    document.getElementById('phs1').style = "margin-left: 0px;";
    document.getElementById('phs2').style = "margin-left: 850px;";
  }
  function right() {
    document.getElementById('phs1').style = "margin-left: -1700px;";
    document.getElementById('phs2').style = "margin-left: 0px;";
  }

  function show_form() {
    document.getElementById('order').style = 'display: block;'
  }
  function hide_form() {
    document.getElementById('order').style = 'display: none;'
  }
