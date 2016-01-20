<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

    $c_id=$_SESSION['his_id']; // 현재 로그인 아이디
    $c_first=$_SESSION['major1']; // 1전공 겁색용 변수
    $c_second=$_SESSION['major2']; // 2전공 검색용 변수
    $c_curri=$_SESSION['curri']; // 교육과정 선택용 변수
    $var=$_POST['section']; //전달 받은 선택 값

    $re="SELECT code,name,credit,english,section,detail
        FROM 140lib
        WHERE 140lib.section='교양'
        AND (140lib.detail LIKE '신앙%' OR 140lib.detail LIKE '세계관%')
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND 140lib.code=stuinfo.code
        AND 140lib.name=stuinfo.name
        AND 140lib.credit=stuinfo.credit
        AND 140lib.english=stuinfo.english)
        GROUP BY 140lib.name,140lib.code,140lib.credit,140lib.english
        ORDER BY 140lib.name";

    $_SESSION['lib_religion']=0.0;
    $_SESSION['lib_religion2']=0.0;
    $_SESSION['lib_worldview']=0.0;

    $new_re=mysql_query($re,$connect);

    while($result=mysql_fetch_array($new_re))
    {
        if($result[5]=='신앙2')
            $_SESSION['lib_religion2']+=$result[2];

        if($result[5]=='세계관1')
            $_SESSION['lib_worldview']+=$result[2];

        $_SESSION['lib_religion']+=$result[2];
    }

?>