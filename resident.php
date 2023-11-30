<?php
/*require_once('db.php');
$query = "select * from camutan_resedent";
$result = mysqli_query($connect,$query);
*/
require_once ('db.php');
require_once  ('function.php');

$result = display_data();


?> 




<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=divice-width, initial scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script  src="css/bootstrap.min.js"></script>
      <title>resident list</title>
    </head>
    <body>

       <header>
             <div class="header">
            <h2 class="logo">Brgy.Camutan Info</h2>
            </div>
            <div class="navigator">
              <nav class="anav">
              <a class="nav" href="welcome.php">Home</a>
             <a class="nav" href="resident.php">Resident list</a>
              <a class="nav" href="register.php">Add Resident</a>
             <a class="nav" href="signup.php">signup</a>
             <a class="nav" href="">User list</a>
             <a class="nav" href="index.php">logout</a>
             </nav>  
               </div>            
       </header> 
       <div>
       <div width=500 class="resident">
         <div class="row">
            <div class="col">
               <div class="card-header">
               <h1 class = "hresident">RESIDENT LIST</h1>
               <div cass = "card-body">
               <table   class="table table-bordered text-center">
            <thead class="bg-success-bg-subtle">
               <tr class="bg-success-bg-subtle">
               <th>First Name</th>
               <th>Last Name</th>
               <th>Age</th>
               <th>Address</th>
               <th>Occupation</th>
               <th>Gender</th>
               <th>Email</th>
               <th>Edit</th>
               <th>Delete</th>
               </tr>
            <thead>
               <tr>
               <?php
               
               while($row = mysqli_fetch_assoc($result))
                    {
                 ?>
                 <td><?php echo $row['first_name']?></td>
                 <td><?php echo $row['last_name']?></td>
                 <td><?php echo $row['age']?></td>
                 <td><?php echo $row['address']?></td>
                 <td><?php echo $row['occupation']?></td>
                 <td><?php echo $row['gender']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><a href="" class="btn btn-primary">Edit</td>
                 <td><a href="" class="btn btn-danger">Delete</td>
<               </tr>
                <?php    
                    }
               ?>
            
             </table>
             </div>
            </div>
          </div>
       </div>
       </div>
       </div>
        <footer>
                  <div class="footer">
                      <div class="the_author">
                       <h3 class="footer_author">@All_Rigth Reserved</h3> </br>
                       <h5>Powered By: CFCST ICT Student 2023</h5>
                        
                      </div>
                     <div class="me"><p class="author">CREATOR: Ariane C. Torrefiel BSIT-3</p></div>
                  </div>
             
        </footer>
    </body>
</html>
