<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal account</title>
    <link rel="stylesheet" href="styles/main.css" />
  </head>
  <body>
  <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
      <div class="container">
        <h2>Personal account</h2>
        <p>Hello:<b> <?php echo $_COOKIE['login'];?></b></p>
        <form method="post" action="lib/add-game.php">
          <label>Image</label>
          <input class="one-line" type="text" name="image" />

          <label>Followers</label>
          <input class="one-line" type="text" name="followers" />
          
          <button type="submit">Add</button>
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
