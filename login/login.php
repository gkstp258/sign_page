
<?php

    include("dbinfo.php");

    $connect=mysql_connect($host, $dbid, $dbpw) or die("mysql 오류");
    mysql_select_db($dbname)or die("db선택오류");

   session_start();

    $id = $_POST["login_id"];
    $pw = $_POST["login_pw"];

    $sql="select * from member where id='{$id}'";//member table

    $result=mysql_query($sql,$connect)or die("쿼리 오류");
    $row=mysql_num_rows($result);
    

    if ($row>0) {
        $sql="select * from member where id='{$id}' and pw = password('{$pw}');";
        $result=mysql_query($sql,$connect);
        $row=mysql_num_rows($result);

        if($row>0){
            $_SESSION['login_user']=$id;
            echo "<script>alert('로그인 성공');
            location.href='main.php';
            </script>";
            
        }
        else
        {
            echo "<script>
            alert('비밀번호 오류')
            history.back();
            </script>";
        }
    }

    else{
        echo "<script>alert('등록되지 않은 아이디입니다.');";
        echo "history.back();</script>";
    }

?>