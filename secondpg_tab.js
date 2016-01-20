
$("#taken").on('click',function(){



        $.ajax({
                url : "secondpg_tab_taken.php",
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
                url : "secondpg_tab_basket.php",
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
                url : "secondpg_tab_search.php",
                dataType : "html",
                async : false,
                type : "post",  // post 또는 get
                success : function(result){

                $("#alloflist").html(result);


                } 
            });  

    });
