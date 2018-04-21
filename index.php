<?php
$github_signal = $_SERVER['HTTP_X_HUB_SIGNATURE']; //获取github签名  

  list($hash_type,$hash_value) = explode('=', $github_signal,2);

  //获取用户输入的
  $payload = file_get_contents("php://input");
  $secret = 'wenhaiCOM.';
  //生成带有密钥的hash 值  
  $hash = hash_hmac($hash_type, $payload, $secret);
  if($hash && $hash === $hash_value){
       echo '认证成功,开始更新';
       echo exec("sh github_auto_pull.sh");
       echo date('Y-m-d H:i:s');
  }else{
       echo '认证失败';
  }
