<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
// $des = $_POST['des'];

mail('454524@inbox.ru', 'Новый заказ!', 'Имя заказчика: '.$name.'. Номер телефона заказчика: '.$tel);
echo "<script>location='endphp.html'</script>";
?>
