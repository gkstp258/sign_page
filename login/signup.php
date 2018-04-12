<?php
    include("dbinfo.php");

	$connect=mysqli_connect($host, $dbid, $dbpw, $dbname);

	$query = "insert into member (id,pw,name,email) values ('".$_POST['id']."',password('".$_POST['pw']."'),'".$_POST['name']."','".$_POST['email']."')";
	$result = mysqli_query($connect,$query);
	if ($result) {
	  echo ('가입이 완료되었습니다. 로그인 화면으로 이동합니다..');
	  echo("<meta http-equiv='Refresh' content='2; URL=login.html'>");
	}
	mysqli_close($connect);
?>
