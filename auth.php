<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Authorisation</title>
    <link rel="stylesheet" href="styles/main.css" />
  </head>
  <body>
  <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
      <div class="container">
        <h2>Authorisation</h2>
        <p>Lorem Ipsum is simply dummy text of the printing .</p>
        
        <form method="post" action="lib/auth.php">
          <div class="inline">
            <div>
              <label>Login</label>
              <input type="text" name="login" />
            </div>
            <div>
            <label>Password</label>
            <input type="password" name="password" />
            </div>
            
  
          </div>
          <button type="submit">Register</button>
        </form>
      </div>
    </div>
    <div class="container email">
      <h3>Lorem Ipsum</h3>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </p>
      <div class="block">
        <div>
          <h4>Stay in the loop</h4>
          <p>
            Subscribe to receive the latest news and updates about TDA. We
            promise not to spam you!
          </p>
        </div>
        <div>
          <input
            type="email"
            id="emailField"
            placeholder="Enter email address"
          />
          <button onclick="checkEmail()">Continue</button>
        </div>
      </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>
    <script>
      function checkEmail() {
        let email = document.querySelector("#emailField").value;
        if (!email.includes("@")) alert("Нет символа @");
        else if (!email.includes(".")) alert("Нет символа .");
        else alert("Всё отлично");
      }
    </script>
  </body>
</html>
