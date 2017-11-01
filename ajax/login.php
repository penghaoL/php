<?php
   if(empty($_POST['username']) || empty($_POST['password'])){
   	exit('请输入用户名和密码');
   }
   $username = $_POST['username'];
   $password = $_POST['password'];
 $connect = mysqli_connect('127.0.0.1','root','liupenghao','ajax');
  if(!$connect){
          exit("建立数据库失败");
      }
 $query = mysqli_query($connect,"select * from users where id=412343214;");
 
 $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  $password = $row['id'];
  if($username == $row['name'] && $password == $row['id']){
  	exit('恭喜');
  }
  exit('用户名或密码不正确');
