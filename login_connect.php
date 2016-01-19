<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php


/*******
db에 자료 올리고 session설정용 page
로그인 완료시 다른 페이지로 옮겨가서 작업할 것.
*********/
//define("HISNET", "hisnet.handong.edu");
//define("PORT", 80);
//TODO cookie 결정.

session_start();
$_SESSION['is_logged'] = 'NO';
$_SESSION['stu_class']=null;
$_SESSION['major2']=null;
$_SESSION['major1']=null;
$_SESSION['curri']=null;      //default   0 : 130학점
$_SESSION['his_id']=null;
$_SESSION['his_pw']=null;
$_SESSION['address']=null;

$a = new membercraHisnetValidation();
$a->validation($_POST['his_id'],$_POST['his_pw']);

class membercraHisnetValidation {

   //학번
   var $stu_id = null;
   //이름
   var $stu_name = null;
   //hisnet id
   var $his_id = null;
   //hisnet pw
   var $his_pw = null;
   //교직원 여부
   var $is_faculty = null;

   var $is_login_successed = false;

   /**
    * @function membercraHisValidation
    * @brief 생성자. 학번, 이름, 히즈넷 아이디, 히즈넷 비밀번호, 교직원 여부를 프로퍼티에 넣기
    **/
   function validation($his_id, $his_pw, $is_faculty = false) {


      $this->his_id = $his_id;
      $this->his_pw = $his_pw;
      $this->is_faculty = $is_faculty;

      // 히즈넷에 요청을 보내서 올바른 사람인지 확인한다.
      $this->requestHisnet();
   }


   /**
    * @function requestHisnet
    * @brief 히즈넷 서버에 로그인 요청을 보낸다. fsockopen() 사용
    * 먼저 쿠키를 받아낸다.
    * 주의할 점은 /login.asp 와 /goMenu_eval.asp 그리고 /main.asp 3곳에 요청을 다 보내야 한다. (2012년 1월 31일 기준.)
    * 만약 히즈넷의 로그인 알고리즘이 바뀌면 이 부분을 수정해 주어야 한다.
    **/
  function requestHisnet() {
    include 'simple_html_dom.php';
      // Create temorary file for save cookies
    $ckfile = tempnam ("/tmp", "CURLCOOKIE");

    $connect = mysql_connect("localhost","root","111111") or die(mysql_error());   
    mysql_select_db("student");
    // POST data form for login
    $dataopost = array (
     "Language" => "Korean",
     "f_name" => "",
     "id" => $this->his_id,
     "part" => "",
     "password" => $this->his_pw,
     "x" => 0,
     "y" => 0,
    );

    // 1st request
    $ch = curl_init ("http://hisnet.handong.edu/login/_login.php");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt ($ch, CURLOPT_POST, true);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $dataopost);
    curl_setopt ($ch, CURLOPT_COOKIEJAR, $ckfile);
    curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/login/login.php");
    $result = curl_exec ($ch);
    curl_close ($ch);

    // 2nd request
    $ch = curl_init ("http://hisnet.handong.edu/login/goMenu_eval.php?cleaninet=1&language=Korean");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
    curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/login/_login.php");
    $result = curl_exec ($ch);
    curl_close ($ch);


    $dataopost = array (
    "memo" => "",
     );

      // 3rd request
    $ch = curl_init ("http://hisnet.handong.edu/main.php");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_POST, true);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $dataopost);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
    curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/login/goMenu_eval.php?cleaninet=1&language=Korean");
    $result = curl_exec ($ch);
    curl_close($ch);


    // 4th request
    $ch = curl_init ("http://hisnet.handong.edu/for_student/main.php");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
    curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/main.php");

    $ch = curl_init ("http://hisnet.handong.edu/haksa/hakjuk/HHAK110M.php");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
    curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/for_student/main.php");
    $result = curl_exec ($ch);


      $html = str_get_html($result);

      //로그인 exception 처리
      if(!is_object($html->find('.tblcationTitlecls', 1)))
      {
         if(strlen($_POST['his_id']) == 0){
               ?>
               <script>
                     alert("아이디를 입력해 주세요.");
                     location.href='pro_login.php';
               </script>
               <?php
               exit;
         }

         if(strlen($_POST['his_pw']) == 0){
               ?>
               <script>
                     alert("비밀번호를 입력해 주세요.");
                     location.href='pro_login.php';
               </script>
               <?php
               exit;
         }
            ?>
            <script>
                     alert("아이디나 비밀번호를 확인해주세요.");
                     location.href='pro_login.php';
            </script>
               <?php
               exit;
      }

      //학기 구하기
      $table = $html->find('.tblcationTitlecls', 1)->parent()->parent();
      $td_class = $table->children(1)->children(1)->innertext;
      $stu_class = substr($td_class, 0, 1);
      $_SESSION['stu_class']=$stu_class;


      //전공 구하기
      $stu_major1 = $table->children(6)->children(3)->innertext;
      $stu_major1 = iconv("EUC-KR","UTF-8", $stu_major1);
      $stu_major1=strip_tags($stu_major1);
      $pos=strpos($stu_major1,".");
      // echo "pos : ".$pos. "major_len : ".strlen($stu_major1);



      if($pos<strlen($stu_major1)-2){
        $stu_major2=substr($stu_major1,$pos+2,strlen($stu_major1));
        $_SESSION['major2']=$stu_major2;
      }
      $stu_major1=substr($stu_major1,0,$pos);
      $_SESSION['major1']=$stu_major1;

      //교육과정 구하기
      $stu_curri = $table->children(10)->children(3)->innertext;
      $stu_curri = iconv("EUC-KR","UTF-8", $stu_curri);
      $stu_curri=strip_tags($stu_curri);
      $_SESSION['curri']=0;      //default   0 : 130학점
      if(strlen($stu_curri)>5)
      {
      $_SESSION['curri'] = 1;      //1 : 140학점 0 : 130학점
      }



      $ch = curl_init ("http://hisnet.handong.edu/haksa/lecture/HLEC110M.php");
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
      curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/haksa/hakjuk/HHAK110M.php");
      $result = curl_exec ($ch);

      // Delete temp file after using
     //   unlink($ckfile);

      // 요청 결과를 해석해서 프로퍼티에 사용자 정보를 넣는다.
      $result = iconv("EUC-KR","UTF-8", $result);
     //$this->parseResponse($result);
      $_SESSION['is_logged'] = 'YES';
      $_SESSION['his_id']=$this->his_id;
      $_SESSION['his_pw']=$this->his_pw;
      $_SESSION['address']=$result;


      $html = str_get_html($_SESSION['address']);
      $numberofyear=1;
      do{
        $fornumber=$html->find('table[id=att_list1]', 0)->children(0)->children(2)->children(0)->children($numberofyear);
        $numberofyear++;
      }while(is_object($fornumber));
      
      $numberofyear-=2;

      if($_SESSION['major1']=='생명과학(66)')
      {
        $_SESSION['major1']='생명과학';
        $_SESSION['lifsci']=66;
      }
      else if($_SESSION['major1']=='생명과학(45)')
      {
        $_SESSION['major1']='생명과학';
        $_SESSION['lifsci']=45;      
      }
      else if($_SESSION['major1']=='생명과학(33)')
      {
        $_SESSION['major1']='생명과학';
        $_SESSION['lifsci']=0;
      }
      else
      {
        $_SESSION['lifsci']=0;
      }       

      $c_id=$_SESSION['his_id'];
      $c_first=$_SESSION['major1'];
      $c_second=$_SESSION['major2'];
      $c_curri=$_SESSION['curri'];

//i=0이 현재 년도, i=1부터 i==i(0)일때까지 or table 널 확인, 널 아닐때까지
      for($i=1;$i<=$numberofyear;$i++){

        //학년별 (년도 구하기)
        $c_year = $html->find('table[id=att_list1]', 0)->children(0)->children(2)->children(0)->children($i)->innertext;
        // echo $c_year." ";
        if($i==1)
        {
          $_SESSION['inyear']=$c_year;
        }

        for($j=1;$j<=4;$j++){
        //echo "http://hisnet.handong.edu/haksa/lecture/HLEC110M.php?hak_year=".$year."&hak_term=".$j;
          $ch = curl_init ("http://hisnet.handong.edu/haksa/lecture/HLEC110M.php?hak_year=".$c_year."&hak_term=".$j);
          curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
          curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/haksa/lecture/HLEC110M.php");
          $result = curl_exec ($ch);

          $result = iconv("EUC-KR","UTF-8", $result);

          // echo $j." ";

          $html = str_get_html($result);
        
          for($k=1;$k<=15; $k++){

            if(!is_object($html->find('table[id=att_list]',0)->children($k))){
              continue;
            }

            $c_code = $html->find('table[id=att_list]',0)->children($k)->children(1)->innertext;
            $c_code=strip_tags($c_code);
            // echo $c_code." " ;

            $c_name = $html->find('table[id=att_list]',0)->children($k)->children(2)->innertext;
            $c_name=strip_tags($c_name);
            // echo $c_name." ";

            $c_english = $html->find('table[id=att_list]',0)->children($k)->children(3)->innertext;
            $c_english=strip_tags($c_english);
            //$position=strpos($c_english,"%");
            //$c_english=substr($c_english,0,$position);
            // echo $c_english."  ";

            $c_credit = $html->find('table[id=att_list]',0)->children($k)->children(4)->innertext;
            $c_credit=strip_tags($c_credit);
            // echo $c_credit." ";

            // $c_prof = $html->find('table[id=att_list]',0)->children($k)->children(6)->innertext;
            // $c_prof=strip_tags($c_prof);
            // $c_prof= preg_replace('/^(&nbsp;)+/', '', $c_prof);   //&nbsp제거 정규식
            // // echo $c_prof." ";

            $c_retake = $html->find('table[id=att_list]',0)->children($k)->children(9)->innertext;
            $c_retake=strip_tags($c_retake);
            // echo $c_retake." ";

            $query = "INSERT into stuinfo(id,first,second,curri,year,semester,code,name,credit,english,retake) 
            values('$c_id','$c_first','$c_second','$c_curri','$c_year','$j','$c_code','$c_name','$c_credit','$c_english','$c_retake')";
// '$_SESSION['.'major1]','$_SESSION['.'major2]','$_SESSION['.'curri]'
            mysql_query($query,$connect);
          }
        }
      }

      $ch = curl_init ("http://hisnet.handong.edu/haksa/record/HREC110M.php");
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
      curl_setopt ($ch, CURLOPT_REFERER, "http://hisnet.handong.edu/haksa/lecture/HLEC110M.php?hak_year=".$c_year."&hak_term=".$j);
      $result = curl_exec ($ch);

      $result = iconv("EUC-KR","UTF-8", $result);

      $html = str_get_html($result);


      if(is_object($html->find('div[id=div_'.$_SESSION['inyear'].'0]', 0))){

        $data = $html->find('div[id=div_'.$_SESSION['inyear'].'0]', 0);
             
        for($k=2;$k<=6;$k++){
                      
          if(!is_object($data->children(0)->children($k))) 
          {
            break;
          }


          $c_code = $data->children(0)->children($k)->children(0)->innertext;
          $c_code = strip_tags($c_code);

                   
          $c_name =  $data->children(0)->children($k)->children(1)->innertext;
          $c_name=strip_tags($c_name);
                                  

          $c_credit =  $data->children(0)->children($k)->children(3)->innertext;
          $c_credit=strip_tags($c_credit);

          $c_inyear=$_SESSION['inyear'];

          $query = "INSERT into stuinfo(id,first,second,curri,year,semester,code,name,credit,english,retake) values('$c_id','$c_first','$c_second','$c_curri','$c_inyear',0,'$c_code','$c_name','$c_credit','100%','&nbsp')";
          mysql_query($query,$connect);
        }   
                               
      }

      mysql_close($connect);

    // function parseResponse($result) {

    //     include 'simple_html_dom.php';


    //     $html = str_get_html($result);

    //     $table = $html->find('.tblcationTitlecls', 1)->parent()->parent();
    //     $td_id = $table->children(1)->children(1)->innertext;
    //     $td_school = $table->children(4)->children(0)->innertext;

    //     if(!strcmp($td_school,'대학원'))
    //        $stu_id = substr($td_id, 0, 8);
    //     else
    //        $stu_id = substr($td_id, 11, 19);

    //     $stu_name = $html->find('strong', 0)->innertext;
    //   $chk_name = $html->find('.tblcationTitlecls',0)->parent()->children(1)->innertext;
    //   $chk_name=trim($chk_name);

    //     debugPrint('school:'.$td_school);
    //     debugPrint('name:'.$stu_name.' and id:'.$stu_id);
    //     debugPrint('this_name:'.$this->stu_name.' and this_id:'.$this->stu_id);

    //     $this->is_login_successed =
    //        (($stu_id==$this->stu_id) && ($this->stu_name==$stu_name));

    //  }

    //  function isLoginSuccess() {
    //     return $this->is_login_successed;
    //  }

  }

   /**
    * @function parseResponse
    * @brief 요청 결과를 해석해서 사용자 정보를 클래스 프로퍼티에 넣는다
    * @param HTTP response $res
    */
}
  
  require_once('firstmain.php');

?>