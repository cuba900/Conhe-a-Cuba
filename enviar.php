
     <?php
      $myemail = "armandobaro@gmail.com";
      $name = $_POST["nome"];
      $email = $_POST["mail"];
      $telefone = $_POST["telefone"];
      $message = $_POST["mensagem"];
      $email_body = "Nome: " . $name "\n Mail: " .  $email . "\n Telefone " . $telefone . "\n Mensagem: " . $message;
      mail($myemail,"Contato", $email_subject, $email_body, $headers);
      header("location:obrigado.html");
      ?>
      