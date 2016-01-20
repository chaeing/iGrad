<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

    $c_id=$_SESSION['his_id']; // 현재 로그인 아이디
    $c_first=$_SESSION['major1']; // 1전공 겁색용 변수
    $c_second=$_SESSION['major2']; // 2전공 검색용 변수
    $c_curri=$_SESSION['curri']; // 교육과정 선택용 변수
    $var=$_POST['section']; //전달 받은 선택 값
    $only_first_eng_140=0; //only_first_eng 세션 변수
    $_SESSION['eng_major']=0; //영어 전공 갯수
    $_SESSION['eng_lib']=0;  //영어 교양 학점

    $connect = mysql_connect("localhost","root","111111") or die(mysql_error());
    mysql_select_db("student");

    $re="SELECT major.code,major.name,major.credit,major.english,major.section,major.detail 
        FROM major
        WHERE major.detail LIKE '%".$c_first."%'
        AND major.detail NOT LIKE '%".$c_second."%'
        AND major.english='100%'
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.year=major.year
        AND stuinfo.semester=major.semester
        AND stuinfo.code=major.code
        AND stuinfo.name=major.name
        AND stuinfo.credit=major.credit
        AND stuinfo.english=major.english) 
        GROUP BY major.name,major.code,major.credit,major.english
        ORDER BY major.name";

    $new_re=mysql_query($re,$connect);      

    while($result=mysql_fetch_array($new_re)){
        $only_first_eng_140+=$result[2];
    }

    $_SESSION['only_first_eng_140']=$only_first_eng_140;

    $re="SELECT code,name,credit,english,section,detail
        FROM 140lib
        WHERE 140lib.english='100%'
        AND 140lib.detail!='실무영어'
        AND EXISTS 
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.code=140lib.code
        AND stuinfo.name=140lib.name
        AND stuinfo.credit=140lib.credit
        AND stuinfo.english=140lib.english)
        GROUP BY 140lib.name,140lib.code,140lib.credit,140lib.english
        ORDER BY 140lib.name";

    $_SESSION['eng_total']=0.0;

    $new_re=mysql_query($re,$connect);
      
    while($result=mysql_fetch_array($new_re))
    {   
        $_SESSION['eng_total']+=$result[2];
    }

    $_SESSION['eng_lib']=$total;

    $re="SELECT major.code,major.name,major.credit,major.english,major.section,major.detail
        FROM major
        WHERE major.english='100%'
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.year=major.year
        AND stuinfo.semester=major.semester
        AND stuinfo.code=major.code
        AND stuinfo.name=major.name
        AND stuinfo.credit=major.credit
        AND stuinfo.english=major.english)
        GROUP BY major.name,major.code,major.credit,major.english
        ORDER BY major.name";

    $new_re=mysql_query($re,$connect);
      
    while($result=mysql_fetch_array($new_re))
    {
        if(eregi($c_first,$result[5]) || (eregi($c_second,$result[5])))
        {
            $_SESSION['eng_major']+=$result[2];
        }
        else
        {
            $_SESSION['eng_lib']+=$result[2];
        }   
        $_SESSION['eng_total']+=$result[2];  
    }

    $re="SELECT majorbase.code,majorbase.name,majorbase.credit,majorbase.english,majorbase.section,majorbase.detail
        FROM majorbase
        WHERE majorbase.english='100%'
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.year=majorbase.year
        AND stuinfo.semester=majorbase.semester
        AND stuinfo.code=majorbase.code
        AND stuinfo.name=majorbase.name
        AND stuinfo.credit=majorbase.credit
        AND stuinfo.english=majorbase.english)
        GROUP BY majorbase.name,majorbase.code,majorbase.credit,majorbase.english
        ORDER BY majorbase.name";

    $new_re=mysql_query($re,$connect);
      
    while($result=mysql_fetch_array($new_re))
    { 
        if(eregi($c_first,$result[5]) || (eregi($c_second,$result[5])))
        {
            $_SESSION['eng_major']+=$result[2];
        }
        else
        {
            $_SESSION['eng_lib']+=$result[2];
        }   
        $_SESSION['eng_total']+=$result[2]; 
    }

?>