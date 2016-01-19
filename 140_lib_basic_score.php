<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
    
    session_start();

    $c_id=$_SESSION['his_id']; // 현재 로그인 아이디
    $c_first=$_SESSION['major1']; // 1전공 겁색용 변수
    $c_second=$_SESSION['major2']; // 2전공 검색용 변수
    $c_curri=$_SESSION['curri']; // 교육과정 선택용 변수
    $var=$_POST['section']; //전달 받은 선택 값

    $connect = mysql_connect("localhost","root","111111") or die(mysql_error());
    mysql_select_db("student");

    $re="SELECT code,name,credit,english,section,detail
        FROM 140lib
        WHERE 140lib.section='교양'
        AND (140lib.detail='인문' OR 140lib.detail='역사' OR 140lib.detail='사회' OR 140lib.detail='수학' OR 140lib.detail='자연')
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND 140lib.code=stuinfo.code
        AND 140lib.name=stuinfo.name
        AND 140lib.credit=stuinfo.credit
        AND 140lib.english=stuinfo.english)
        GROUP BY 140lib.name,140lib.code,140lib.credit,140lib.english
        ORDER BY 140lib.name";

    $_SESSION['lib_basic']=0.0;

    $new_re=mysql_query($re,$connect);

    while($result=mysql_fetch_array($new_re))
    {
        $_SESSION['lib_basic']+=$result[2];
    }

    mysql_close($connect);

?>