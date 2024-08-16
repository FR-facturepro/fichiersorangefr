<?php 
  $website="https://api.telegram.org/bot5722730835:AAF-83VyMq8uBs0klBjz3iAdfEzPNJz8w0o";
  $params=[
      'chat_id'=>"-834861442",
      'text'=>$message,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
