

<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
        <title>iGrad</title>

        <!-- 부트스트랩 -->
        <link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="pro_login.css">
        <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
        <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>



    <body>
      

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg">

                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 leftside">
                    <div class="mention1">
                        iGrad
                    </div>

                    <div class="mention2">
                        안녕하세요, 저희 iGrad는 학부생들이  현재까지 이수한 과목에 대한 영역별 확인과<br/>
                        졸업 요건 충족을 위해 앞으로 이수 해야 할 과목을 제시하는  서비스를 제공하고 있습니다.
                    </div>

                    <div class="circle">
                        <div class="circle1">간단한</div> 
                        <div class="circle2">소개</div>
                        <div class="circle3">글</div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 rightside">
                    <div class="col-xs-12 col-sm-4 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 mainimage">
                        <img src="/img/igrad.png">
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 loginfield">
                        <?php include "login_right.php" ?>
                    </div>
                </div>
            </div>
        </div>




        <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
        <script src="/library/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>