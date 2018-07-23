<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Territory of GOOD Thought</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        "use strict";
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');
        mail.blur(function(){
         if(mail.val() != ''){
           if(mail.val().search(pattern) ==0){
             $('#valid_email_message').text('');
             $('input[type=submit]').attr('disable',false);
           }else{
             $('#valid_email_message').text('ERROR email');
             $('input[type=submit]').attr('disable',true);
           }
         }else{
           $('#valid_email_message').text('Set you email');
         }
       });
       var password = $('input[input[name=password]');
       password.blur(function(){
         if(password.val() != ''){
           if(password.val().length < 6){
             $(#valid_password_message').text('Minimal password length 6 chare');
             $('input[type=submit]').attr('disabled',true);
           }else{
             $('#valid_password_message').text('');
             $('input[type=submit]').attr('disabled', false);
           }
         }else{
           $('#valid_password_message').text('Input password!');
         }
       });
     });
   </script> 
  </head>
  <body>

    <div id="header">
      <h2>Territory of Thought</h2>
      <a href="/index.php">Home</a>
      <div id="auth_block">
        <div id="link_register">
          <a href="/form_register.php">Регистрация</a>
        </div>
        <div id="link_auth">
          <a href="/form_auth.php">Авторизация</a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
