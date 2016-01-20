
$("#taken").on('click',function(){



        $.ajax({
                url : "taken.php",
                dataType : "html",
                async : false,
                type : "post",  // post 또는 get
                success : function(result){

                $("#alloflist").html(result);


                } 
            });  

    });


$("#basket").on('click',function(){



        $.ajax({
                url : "basket.php",
                dataType : "html",
                async : false,
                type : "post",  // post 또는 get
                success : function(result){

                $("#alloflist").html(result);


                } 
            });  

    });



$(".search-form").on('click',function(){



        $.ajax({
                url : "searchpage.php",
                dataType : "html",
                async : false,
                type : "post",  // post 또는 get
                success : function(result){

                $("#alloflist").html(result);


                } 
            });  

    });
