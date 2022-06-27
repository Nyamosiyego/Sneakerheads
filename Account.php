<!DOCTYPE html>
<html>
<head>
  <title>Slide Navbar</title>
  <link rel="stylesheet" type="text/css" href="slide navbar style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">
<div class="main">
  <input type="checkbox" id="chk" aria-hidden="true">

  <div class="signup">
    <form>
      <label for="chk" aria-hidden="true">Sign up</label>
      <input type="text" name="username" placeholder="Username" required="">
      <input type="email" name="email" placeholder="Email" required="">
      <input type="password" name="password" placeholder="Password" required="">
      <button>Sign up</button>
    </form>
  </div>

  <div class="login">
    <form>
      <label for="chk" aria-hidden="true">Login</label>
      <input type="email" name="email" placeholder="Email" required="">
      <input type="password" name="pswd" placeholder="Password" required="">
      <button>Login</button>
    </form>
  </div>
</div>
</form>
</body>
</html>
