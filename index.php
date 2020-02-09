<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Send form</title>
</head>
<body>

<!--start contact form---->
<div class="main">
<form action="contactform.php" method="POST">

<h2>Your details</h2>
<br>
<span>Patient to enter the following details</span>
<br><br>
<label>Forename</label>
<input type="text" name="forename">
<label>Surname</label>
<input type="text" name="surname">
<label>Email</label>
<input type="text" name="email">
<label for="number">NHS Number (10 digits / no spases)</label>
<input type="number" name="number">
<label for="date">Date of Birth (DD/MM/YYYY)</label>
<input type="date" name="date">
<button type="submit" name="submit">Submit form</button>
</form><!--end form--->

</div>

</body>
</html>
