<?php
   session_start();
?>
<html>

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome</h1>
      <p><?php echo "{$_SESSION['login_user']}님 잘옴";?></p>
      <button onclick="loginout()">Sign Out</button>
   </body>

   <script type="text/javascript">
   	function loginout() {
   		alert("로그아웃 완료");
   		location.href="login.html";
         <?php
            session_destroy();
         ?>
   	}
   </script>

</html>	
