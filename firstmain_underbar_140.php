

    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="firstmain_underbar_140.css">
 
    <!-- 부트스트랩 -->
    <link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <?php 
        $eng=3;
        $engbase=5;
     ?>


    <div class="row backunderbar">
         
        <input type="hidden" id="eng" value="<?=$eng?>" />
        <input type="hidden" id="engbase" value="<?=$engbase?>" />
        
            <a href="secondpg_main_eng_140.php">
                <div class="subgraph" id="subone" >  
                    <div class="a" id="sub"></div>
               	</div>
                
                <div class="sub_name">
                    필수영어학점
                </div>
            </a>
            

            <div class = "english">
                <?php //if로 케이스 나눠서 ?>
                <img src="img/x.png">
                
            </div>
            <div class="sub_name">
                    졸업영어성적제출
            </div>


            <div class="reading">
                <?php //if ?>
                <img src="img/x.png">
            </div>
            <div class="sub_name">
                    교양독서수강
            </div>

    </div>


       

     
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
   

    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="firstmain_underbar_140.js">//page transition </script> 




