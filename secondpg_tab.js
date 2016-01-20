
$("#taken").on('click',function(){


        var allbar1 = document.getElementById('about_container3');
        var allbar2 = document.getElementById('about_container5');
        allbar1.style.display='none';
        allbar2.style.display='none';

        this.style.opacity="1.0";
        this.style.filter  = 'alpha(opacity=100)'; // IE fallback

        var element1 = document.getElementById('container3');
        element1.style.opacity = "1.0";
        element1.style.filter  = 'alpha(opacity=100)'; // IE fallback

        var element1 = document.getElementById('container4');
        element1.style.opacity = "1.0";
        element1.style.filter  = 'alpha(opacity=100)'; // IE fallback

        var element1 = document.getElementById('container5');
        element1.style.opacity = "1.0";
        element1.style.filter  = 'alpha(opacity=100)'; // IE fallback


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
