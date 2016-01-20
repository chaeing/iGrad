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
        WHERE 140lib.section='실무'
        AND EXISTS
        (SELECT * FROM stuinfo
        WHERE stuinfo.id='$c_id'
        AND stuinfo.code=140lib.code
        AND stuinfo.name=140lib.name
        AND stuinfo.credit=140lib.credit
        AND stuinfo.english=140lib.english)
        GROUP BY 140lib.name,140lib.code,140lib.credit,140lib.english
        ORDER BY extra ASC";

    $_SESSION['prac_total']=0.0;

    $new_re=mysql_query($re,$connect);
      
    while($result=mysql_fetch_array($new_re)){

        if(($result[1]=='중국어1')||($result[1]=='중국어2')||($result[1]=='중국어3')||($result[1]=='중국어4')||
            ($result[1]=='초급중국어1')||($result[1]=='초급중국어2')||($result[1]=='중급중국어1')||($result[1]=='중급중국어2'))
        {
            if((chinese_check()) || ($chinese_count_pra!=0))
            {
                continue;
            }
            $chinese_count_pra++;
        }

        if($result[5]=='실무전산')
        {
            if(comp_major_check($c_first,$c_second))
                continue;
        }

        if($result[1]=='프로그래밍입문')
        {
            if(!(c_program_check()))
                continue;
        }

        $_SESSION['prac_total']+=$result[2];
    }

?>