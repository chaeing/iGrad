
<link rel="stylesheet" type="text/css" href="firstmain.css">
<!-- 부트스트랩 -->
<link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<?php
//장시간 미사용 로그인 해제 어떻게 할지.
    session_start();
/*
if($_SESSION['is_logged'] ==0)
{	?>
	<script>
		alert("아이디나 비밀번호를 확인해주세요.");
		location.replace("pro_login.php");
	</script>
		<?php
	exit;
}

*/
?>




<div class="row" id="alldisplay">

	<div class="col-md-12" id="upper">
        <?php include "mainupper.php";?>
    </div>


    <div class="col-md-12" id="mainframe">

        <div class="col-md-12" id="center">
            <div class="col-md-2 col-md-offset-5" id="switch">
                   
            </div>     


            <div class="col-md-6 col-md-offset-1 graph">
                <?php include "progress.php" ?>

                <div class="col-md-5 counter">
                    <div class="col-md-8 col-md-offset-2 number">
                        <?php include "counter.php" ?>
                    </div>
                </div>
            </div>

        <div class="col-md-12" id="underbar">
            <?php include "underbar.php" ?>
        </div>
       


        </div>
    </div>
</div>






    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="firstmain.js"></script>







    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="animsition-master/dist/js/animsition.min.js">//page transition </script> 





