$(document).ready(function(){


    $('.add_user').click(function(e){
e.preventDefault();
        var first_name=$('.first_name').val();
        var middle_name=$('.middle_name').val();
        var last_name=$('.last_name').val();
        var password=$('.password').val();
        var confirm_password=$('.confirm_password').val();
        $.ajax({
            type: 'POST',
            url: 'confirmation.php',
            data: {
                first_name:first_name,
                middle_name:middle_name,
                last_name:last_name,
                password:password,
                confirm_password:confirm_password
            },
            success:function(response){
                if(response=="Record inserted successfully")
                { alert(response);
                    window.open('index.php');
                }
                else{
                    alert(response);
                }
            }
        })
    });

    $('.login').click(function(e){
        e.preventDefault();
        var username=$('.username').val();
        var password=$('.password').val();
        $.ajax({
            type: 'POST',
            url: 'check.php',
            data: {
                username:username,
                password:password
            },
            success:function(response){
                if(response == 1){
                window.open("form.php");
              }
              else{
                alert("kindlly enter correct data");
              }
                            }

        })
    });   

   $(window).on('load', function() {
    
       // var type = $('select#logoType').children("option:selected").val();
        var type = $('#logoTypeSelect option:selected').val();
        alert(type);
        if (type == "text") {
            
          //  $('option.text').prop('selected', true);
            $('.logoText').css("display", "block");
            $('.logoFile').css("display", "none");
        } else if(type=="file") {
            
          //  $('option.image').prop('selected', true);
            $('.logoFile').css("display", "block");
            $('.logoText').css("display", "none");
        }
       
    })

    $('select#logoTypeSelect').change(function(){
        var type =$('select#logoTypeSelect').children("option:selected").val();
   
if(type=="text")
{  
    $('.logoText').css("display","block");
    $('.logoFile').css("display","none");
}
else if(type=="file"){
    $('.logoFile').css("display","block");
    $('.logoText').css("display","none");
}

});

/*
var logoFileValue = "<?php echo $row['logoFile']; ?>";
if(logoFileValue !== " ") {
    $('.logoFile').css("display", "block");
    $('.logoText').css("display", "none");
} else if(logoFileValue == " "){
    $('.logoText').css("display", "block");
    $('.logoFile').css("display", "none");
}*/


  
$('.submit').click(function(e){
     e.preventDefault();
    var logoType=$('#logoTypeSelect').val();
    var logoText=$('.logoText').val();
    var navItem1=$('.navItem1').val();
    var navItem2=$('.navItem2').val();
    var navItem3=$('.navItem3').val();
    var navItem4=$('.navItem4').val();
    var navItem5=$('.navItem5').val();
    var navItem6=$('.navItem6').val();
    var anchor1=$('.anchor1').val();
    var anchor2=$('.anchor2').val();
    var section1heading1=$('.section1heading1').val();
    var section1heading2=$('.section1heading2').val();
    var section1para=$('.section1para').val();
    var section2heading=$('.section2heading').val();
    var section2para=$('.section2para').val();
    var anchor3=$('.anchor3').val();
    var section2img1heading=$('.section2img1heading').val();
    var section2img1para=$('.section2img1para').val();
    var section2img2heading=$('.section2img2heading').val();
    var section2img2para=$('.section2img2para').val();
    var section2img3heading=$('.section2img3heading').val();
    var section2img3para=$('.section2img3para').val();
   

    var formData = new FormData();
    formData.append('logoType', logoType);
    var logoFile = $('.logoFile')[0].files[0];
    formData.append('logoFile', logoFile);
    formData.append('logoText', logoText);
    formData.append('navItem1', navItem1);
    formData.append('navItem2', navItem2);
    formData.append('navItem3', navItem3);
    formData.append('navItem4', navItem4);
    formData.append('navItem5', navItem5);
    formData.append('navItem6', navItem6);
    var navItem7 = $(".navItem7")[0].files[0];
    formData.append('navItem7', navItem7);
    var navItem8 = $(".navItem8")[0].files[0];
    formData.append('navItem8', navItem8);
    formData.append('section1heading1',section1heading1);
    formData.append('section1heading2', section1heading1);
    formData.append('section1para', section1para);
    var section1img = $(".section1img")[0].files[0];
    formData.append('section1img',section1img);
    formData.append('anchor1', anchor1);
    formData.append('anchor2', anchor2);
    formData.append('section2heading', section2heading);
    formData.append('section2para', section2para);
    formData.append('anchor3', anchor3);
    var section2img1 = $(".section2img1")[0].files[0];
    formData.append('section2img1', section2img1);
    formData.append('section2img1heading', section2img1heading);
    formData.append('section2img1para', section2img1para);
    var section2img2 = $(".section2img2")[0].files[0];
    formData.append('section2img2', section2img2);
    formData.append('section2img2heading', section2img2heading);
    formData.append('section2img2para', section2img2para);
    var section2img3 = $(".section2img3")[0].files[0];
    formData.append('section2img3', section2img3);
    formData.append('section2img3heading', section2img3heading);
    formData.append('section2img3para', section2img3para);
   
    
    
    $.ajax({
        type: 'POST',
        url: 'user_data.php', 
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
           alert(response);
          
        }
    });


  
});


   
   
});