
    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="progress.css">
    <link rel="stylesheet" href="animsition-master/dist/css/animsition.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'> 
 
    <?php 

        $c_id=$_SESSION['his_id'];
        $_SESSION['total']=0;

        $connect = mysql_connect("localhost","root","111111") or die(mysql_error());
        mysql_select_db("student");

        $re="SELECT credit FROM stuinfo
            WHERE stuinfo.id='$c_id'
            AND stuinfo.retake!='재이수'
            GROUP BY stuinfo.name";

        $new_re=mysql_query($re,$connect);
            
        while($result=mysql_fetch_array($new_re))
        {
            $_SESSION['total']+=$result[0];
        }

        $total=$_SESSION['total'];
        $totalbase=140;
     ?>


<div class = "back">

    <input type="hidden" id="total" value="<?=$total?>" />
    <input type="hidden" id="totalbase" value="<?=$totalbase?>" />

  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
    <a href="./secondpg.php" class="animsition-link">

         <div class="progress4" id="container4" >  
            <div class="b" id="example-percent-container4"  >  </div>
        <div id="container4_name">Out of 140</div>
    
        </div>
    </a>
     
  </div>

</div>



    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="progress.js">//page transition </script> 


