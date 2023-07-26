<?php
// session_start(); // start the session

// if (isset($_POST['submit'])) {
//     $_SESSION['first_name'] = $_POST['first_name'];
// }
// ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <form method="post" action="about.php">
  <div class="mb-3">
  <label for="first_name" class="form-label">First Name</label>
  <input type="text"  name="first_name" id="first_name" required value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>">
   </div>
   <br><br>
   <div class="mb-3">
  <label for="last_name" class="form-label">Last Name</label>
  <input type="text" name="last_name" id="last_name" required>
   </div>

   <br><br>

   <div class="mb-3">
   <label for="address">Address:</label>
  <input type="text" name="address" id="address" required>
</div>
<br><br>

<select class="form-select" aria-label="Default select example" name="options">
  <option selected>select country</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<br><br>

<p>Gender:</p>
  <label for="male">Male</label>
  <input type="radio" name="gender" value="male" id="male" required>
  <label for="female">Female</label>
  <input type="radio" name="gender" value="female" id="female" required>
<br><br>

<p>Interests:</p>
  <label for="interest1">PHP</label>
  <input type="checkbox" name="interests[]" value="PHP" id="interest1">
  <label for="interest2">MYSQL</label>
  <input type="checkbox" name="interests[]" value="MYSQL" id="interest2">
  <label for="interest3">J2SE</label>
  <input type="checkbox" name="interests[]" value="J2SE" id="interest3">
<br><br>

<label for="username">Username:</label>
  <input type="text" name="username" id="username" required>
<br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required>
   <br><br>

   <div class="mb-3">
  <label for="exampleFormControlInput6" class="form-label">Department</label>
  <input type="text" class="form-control" id="exampleFormControlInput6"  placeholder="OPenSource" name="department">
   </div>
   <br><br>
   <div>
   <label for="code_word">Code Word:SH58So</label><br>
<label for="exampleFormControlInput7" class="form-label">please insert the code the bellow box</label><br>
  <input type="text" name="code_word" id="code_word" required> 
 </div>
<br><br>

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
</form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

