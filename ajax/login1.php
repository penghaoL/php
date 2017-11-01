<?php 
 if(empty($_POST['username']) || empty($_POST['password'])){
 	exit('请输入用户名或密码');
 }
 $username = $_POST['username'];
 $password = $_POST['password'];
 $connect = mysqli_connect('127.0.0.1','root','liupenghao','ajax');
  if(!$connect){
          exit("建立数据库失败");
      }
 $query = mysqli_query($connect,"select * from users;");
 
 $row = mysqli_fetch_assoc($query);
 while($row){
    if($username == $row['name'] && $password == $row['password']){
    		echo '恭喜';
    		// header('Location: ./yihaodian/index.html');
    		exit();
    }
 	$row = mysqli_fetch_assoc($query);
 }
 echo '密码错误';