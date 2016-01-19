<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
    
    session_start();

    $c_id=$_SESSION['his_id']; // 현재 로그인 아이디
    $c_first=$_SESSION['major1']; // 1전공 겁색용 변수
    $c_second=$_SESSION['major2']; // 2전공 검색용 변수
    $c_curri=$_SESSION['curri']; // 교육과정 선택용 변수
    $only_first_140=0;

    $re="SELECT major.code,major.name,major.credit,major.english,major.section,major.detail
        FROM major
        INNER JOIN stuinfo
        ON major.year=stuinfo.year
        AND major.semester=stuinfo.semester
        AND major.code=stuinfo.code
        AND major.name=stuinfo.name
        AND major.credit=stuinfo.credit
        AND major.english=stuinfo.english
        WHERE stuinfo.id='$c_id'
        GROUP BY major.name,major.code,major.credit,major.english
        HAVING major.detail LIKE '%".$c_first."%'
        OR major.detail LIKE '%".$c_second."%'
        ORDER BY major.name";

    $_SESSION['maj_total']=0.0;

    $new_re=mysql_query($re,$connect);
    
    while($result=mysql_fetch_array($new_re))
    {

        if((eregi($c_first,$result[5])) && !(eregi($c_second,$result[5])))
        {
            $only_first_140+=$result[2];
        }

        $_SESSION['maj_total']+=$result[2];
    }

    $tmp_re="SELECT code,name,credit,english,section,detail
        FROM majorbase
        WHERE (majorbase.detail LIKE '%".$c_first."%'
        OR majorbase.detail LIKE '%".$c_second."%')
        AND majorbase.section='전공'
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
  
    while($result=mysql_fetch_array($new_re))
    {
        if(eregi($c_first,$result[5]) && !(eregi($c_second,$result[5])))
        {
            $only_first_140+=$result[2];
        }

        $_SESSION['maj_total']+=$result[2];
    }

    $_SESSION['only_first_140']=$only_first_140;

?>