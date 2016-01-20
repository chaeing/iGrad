<?php


/*************
db에 해당 db 지우기 hisnet id이용
*************/
session_start();

$connect = mysql_connect("localhost","root","7777777") or die(mysql_error());
mysql_select_db("adb");


$sql_delete = "delete from class where id = '".$_SESSION['his_id']."'";

mysql_query($sql_delete,$connect);






$_SESSION['is_logged'] = 'NO';    //login여부
$_SESSION['stu_class']=null;      //학기
$_SESSION['major2']=null;         //2전공
$_SESSION['major1']=null;         //1전공
$_SESSION['curri']=null;		      //default	0 : 130학점
$_SESSION['his_id']=null;         //히스넷 아디
$_SESSION['his_pw']=null;         //히스넷 비번
$_SESSION['address']=null;        //주소값




mysql_close($connect);

 ?>







<script>
  alert("로그아웃 되셨습니다.");
  location.href="pro_login.php";
</script>
