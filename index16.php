<?php
echo strftime('%Y:%m %d %H:%M');
exit;
//include ('index.php'); //Подключение файлов + не возвращает ничего
//require ('index.php'); // Подключение файлов если файл не будет найден будет фатал ерор и код не продолжиться + возвращает тру (1)

$a=null; // false
$b = ''; // False
$c = 0 ; // false

$l = 55;
$d = 12;
$n = 10;

if ($d>$n and $l)
{
    echo 'big';
}
//elseif ;
//elseif ;

else {
    echo 'small';

}
//&& - and
// || - or (або)
var_dump($a != $c); // a не равняется с;
//=== сравнение типов
// !== не равняеться
//switch ($l){
 //   case 55:
 //       echo 'fivefive', '<br>';
 //       break;
   // case 12:
 //       echo 'juhgh', '<br>';
   ////     break;
  //  case 31:
   //     echo 'bbbbb', '<br>';
   // default:
   //  echo    'nothing find', '<br>';
//}
// $id = (int)$_GET['id'];
// var_dump(abs($id);  возвращает додатня число математична функция
// var_dump(strip_tags($id));  удаление не нужных строк
// var_dump(rand(5,280)); функция генерую рандомне число
//floor округляяет число в меньшую сторону
// var_dump(trin($id, 'og')); удаляет заданые символы или пробелы
 //$res = explode( ', ', $id); вставляет символы
 ////$arr=[
  //  '1',
//    '2',
 //   '3'
//];
 //$res = implode('<', $arr);

var_dump(file_exists('temp'));
file_put_contents('my test file.txt', 'hello', );
?>
<form action="/" method="get" > //если не укажем action страничка отправит запрос сама себе
    <label for="name">Name</label>
    <input id="name" type="text" name="name">
    <label for="age">Age</label>
    <input id="name" type="text" name="age">
    <input type="submit" value="send">
</form>


