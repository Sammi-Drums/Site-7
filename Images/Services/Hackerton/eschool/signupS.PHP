<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="enter email@.com"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="eamail" 
                      placeholder="enter email@.com"><br>
          <?php }?>


          <label>Contact</label>
          <?php if (isset($_GET['contact'])) { ?>
               <input type="text" 
                      name="contact" 
                      placeholder="enter contacts"
                      value="<?php echo $_GET['contact']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="contact" 
                      placeholder="enter contacts"><br>
          <?php }?>


         


          <label>Date Of Birth</label>
          <?php if (isset($_GET['birthdate'])) { ?>
               <input type="text" 
                      name="birthdate" 
                      placeholder="enter date of birth"
                      value="<?php echo $_GET['birthdate']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="birthdate" 
                      placeholder="enter birth date"><br>
          <?php }?>
          <!--<div class="dropdown">-->
               
               <div class="form-check">
                    <label class="form-check-label" for="exampleRadios1">
                         Male
                     </label>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                   
                    <?php if (isset($_GET['male'])) { ?>
                     
                         <?php echo $_GET['male']; ?>
                    <?php }else{ ?>
                         
                    <?php }?>
               </div><br>
               <div class="form-check">
                    <label class="form-check-label" for="exampleRadios2">
                         Female
                    </label>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                   
                    <?php if (isset($_GET['female'])) { ?>
                   
                         <?php echo $_GET['female']; ?>
                    <?php }else{ ?>
                        
                    <?php }?>
               </div><br>
         <!-- </div><br>-->
          
<!-- Example single danger button -->
          <label for= "course"></label>Select a course:</label>
          <select name="course" id="course">
               <option value="engineering">Engineering</option>
               <option value="buiseness">Buiseness</option>
               <option value="education">Education</option>
               <option value="fashion">Fashion</option>
          </select><br><br>

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit"   class="btn btn-success "   >Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>