    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="progress.css">
    
 
    <?php

        session_start();

        $connect = mysql_connect("localhost","root","111111") or die(mysql_error());   
        mysql_select_db("student");

        function chinese_check()
        {
            $chinese_re="SELECT EXISTS
              (SELECT * FROM stuinfo
              WHERE stuinfo.id='$c_id'
              AND stuinfo.name='한문')";

            $result_chinese_re=mysql_query($chinese_re,$connect);

            if($result_chinese_re==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        function c_program_check()
        {
            $comp_re="SELECT EXISTS
                (SELECT * FROM stuinfo
                WHERE stuinfo.id='$c_id'
                AND stuinfo.name='C 프로그래밍')";

            $result_comp_re=mysql_query($comp_re,$connect);

            if($result_comp_re==1)
            {
                return true;
            }
            else
            {
                return false;
            }    
        }

        function comp_major_check($c_first,$c_second)
        {
            if($c_first=='컴퓨터공학' || $c_second=='컴퓨터공학')
            {
                return true;
            }
            else if($c_first=='전자공학' || $c_second=='전자공학')
                return true;
            else if($c_first=='Information Technology' || $c_second=='Information Technology')
                return true;
            else
            {
                return false;
            }
        }

        require_once('140_lib_total_score.php');
        require_once('140_prac_total_score.php');
        require_once('140_maj_total_score.php');

        $target1=$_SESSION['lib_total'];

        $target2=$_SESSION['prac_total'];

        $target3=$_SESSION['maj_total'];

        $base1=40;
        $base2=20;
        $base3=66;

     ?>


<div class = "back">

    <input type="hidden" id="t1" value="<?=$target1?>" />
    <input type="hidden" id="t2" value="<?=$target2?>" />
    <input type="hidden" id="t3" value="<?=$target3?>" />
    <input type="hidden" id="b1" value="<?=$base1?>" />
    <input type="hidden" id="b2" value="<?=$base2?>" />
    <input type="hidden" id="b3" value="<?=$base3?>" />
    
    
  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
    <a href="./secondpg.php" class="animsition-link">
        <div class="progress1" id="container1" >  
            <div class="a" id="maincircle_1"  ></div>
            <div id="container1_name">교양</div>
    	</div>

        <div class="progress2" id="container2" >  
            <div class="a" id="maincircle_2"  >  </div>
            <div id="container1_name">실무</div>

        </div>

        <div class="progress3" id="container3" >  
            <div class="a" id="maincircle_3"  >  </div>
            <div id="container1_name">전공</div>
        </div>

    
        </div>
    </a>
     
  </div>

</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="progress.js">//page transition </script> 





