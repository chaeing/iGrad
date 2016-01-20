<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php

    $c_id=$_SESSION['his_id']; // 현재 로그인 아이디
    $c_first=$_SESSION['major1']; // 1전공 겁색용 변수
    $c_second=$_SESSION['major2']; // 2전공 검색용 변수
    $c_curri=$_SESSION['curri']; // 교육과정 선택용 변수
    $var=$_POST['section']; //전달 받은 선택 값
    $chinese_count=0;
    $chinese_count_pra=0;

    $re="SELECT code,name,credit,english,section,detail
        FROM 140lib
        WHERE 140lib.section='교양'
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.code=140lib.code
        AND stuinfo.name=140lib.name  
        AND stuinfo.credit=140lib.credit
        AND stuinfo.english=140lib.english)
        GROUP BY 140lib.name,140lib.code,140lib.credit,140lib.english
        ORDER BY extra ASC";

    $_SESSION['lib_total']=0.0;

    $new_re=mysql_query($re,$connect);

    while($result=mysql_fetch_array($new_re))
    {

        if(($result[1]=='중국어1')||($result[1]=='중국어2')||($result[1]=='중국어3')||($result[1]=='중국어4')||
            ($result[1]=='초급중국어1')||($result[1]=='초급중국어2')||($result[1]=='중급중국어1')||($result[1]=='중급중국어2'))
        {
            if((!(chinese_check())) && ($chinese_count==0))
            {
                $chinese_count++;
                continue;
            }
        }
        $_SESSION['lib_total']+=$result[2];
    }

    $tmp_re="SELECT code,name,credit,english,section,detail2
        FROM majorbase
        WHERE majorbase.section='교양'
        AND majorbase.detail NOT LIKE '%".$c_first."%'
        AND majorbase.detail NOT LIKE '%".$c_second."%'
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

    $new_re=mysql_query($tmp_re,$connect);
        
    while($result=mysql_fetch_array($new_re)){

        $_SESSION['lib_total']+=$result[2];    
    }

?>