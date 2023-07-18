<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - MAIL</title>
</head>

<body>

  <form action="email.php" method="post">
    <h2>Contact</h2>
    <p>Name: <br>
    <input type="text" name="name" required></p>
    <p>Email: <br>
    <input type="email" name="email" required></p>
    <p>Comments: <br>
    <textarea name="comment" cols="30" rows="10" required></textarea></p>
    <p class="center"><input type="submit" value="Send email"></p>
  </form>

</body>

</html>