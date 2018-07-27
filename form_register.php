<?php
  require_once("header.php");
?>

<div class="block_for_messages">
  <?php
    if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
      echo $_SESSION["error_messages"];
      unset($_SESSION["error_messages"]);
    }
    if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
      echo $_SESSION["success_messages"];
      unset($_SESSION["success_messages"]);
    }
  ?>
</div>

<?php
  if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
  <div id="form_register">
    <h2>Форма регистрации</h2>
    <form action="register.php" method="post" name="form_register">
     <table>
      <tbody>
       <tr>
        <td> Имя: <br>
        <input name="first_name" required="required" type="text"></td>
       </tr>
       <tr>
        <td> Фамилия: <br>
        <input name="last_name" required="required" type="text"></td>
       </tr>
       <tr>
        <td> Email: <br>
        <input name="email" required="required" type="email"><br> 
            <span id="valid_email_message" class="message_error"></span></td>
       </tr>
       <tr>
        <td> Пароль: <br>
        <input name="password" placeholder="минимум 6 символов" required="required" type="password"><br>
            <span id="valid_password_message" class="message_error"></span></td>
       </tr>
       <tr>
        <td> Капча: <br>
         <p>
          <img src="captcha.php" alt="Капча" /><br><br>
          <input name="captcha" placeholder="Проверочный код" required="required" type="text">
         </p>
        </td>
       </tr>
       <tr>
        <td><input name="btn_submit_register" value="Регимся" type="submit"></td>
       </tr>
      </tbody>
     </table>
    </form>
   </div>
<?php
  }else{
?>
   <div id="authorized">
    <h2>Мы уже знакомы</h2>
   </div>
<?php
 }
  require_once("footer.php");
?>
