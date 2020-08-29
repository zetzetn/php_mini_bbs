<?php
try{
  // $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;charset=utf8','root','');
  // $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8','root','root');
  $db = new PDO('mysql:dbname=mini_bbs;host=localhost;port=8889;charset=utf8', 'root', '');
}catch(PDOException $e){
    print('DB接続エラー:' . $e->getMessage());
}