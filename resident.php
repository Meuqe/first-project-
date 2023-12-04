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
      <meta name="viewport" content="width=divice-width, initial scale=1,shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet"  href="css/fontawesome.min.css">
      <link rel="stylesheet" type="text/css" hreref="css/v4-shims.min.css">
      <link rel="stylesheet" type="text/css" hf="css/svg-with-js.min.css">
      <link rel="stylesheet"  href="css/all.min.css">
      <script  src="js/bootstrap.min.js"></script>
      <script  src="js/bootstrap.bundle.js"></script>
      <script  src="js/bootstrap.min.js"></script>
      <script  src="js/datatables.min.js"></script>
      <script  src="js/fontawesome.min.js"></script>
      <script  src="js/jquery.js"></script>
       
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
             <a class="nav" href="">User list</a>
             <a class="nav" href="index.php">logout</a>
             </nav>  
               </div>            
       </header> 
       <div>
       <div width=800  class="resident">
         <div class="row">
            <div class="col">
               <div class="card-header">
               <h1 class = "hresident">RESIDENT LIST</h1>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-lg 6">
           <button type="button"  class="btn btn-primary m-1 float-rigth" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp; &nbsp;Add New Resident</button>
            <a  href="#" class="btn btn-success m-1 float-rigth"><i class="fas fa-table fa-lg"></i>&nbsp; &nbsp;Export to Excel</a>
        </div>
        <hr class="my-1">

            <div cass = "card-body">
               <table   class="table table-striped table-sm table-bordered text-center">
            <thead class="">
               <tr class="">
               <th>First Name</th>
               <th>Last Name</th>
               <th>Age</th>
               <th>Address</th>
               <th>Occupation</th>
               <th>Gender</th>
               <th>Email</th>
               <th>Ation</th>
               
               </tr>
           </thead>
            <tbody>
               <tr class="text-center text-secondary">
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
                 <td><a href="#"title="View Details" class="text-success"><i class="fa-solid fa-info"></i></a>&nbsp; &nbsp;
                 <a href="#" title="Edit Details" class="btn btn-primary">Edit</a>
                 <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ventanaModal"
    data-info="" onclick="deleteModalthis(this, '<?php echo $row['first_name'].''.$row['last_name']?>','<?php echo $row['ID']?>')">delete</a>
                 </td>
              </tr>
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
 <script type= "text/javascript" >$(document).ready(function(){$("table").DataTable()});</script>


<!-- Ventana Modal -->
<div class="modal fade" id="ventanaModal" tabindex="-1" aria-labelledby="ventanaModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal1Label"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!-- Información -->
	        </div>
			<div class="modal-footer">
            	<button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="confirmDelete" onClick="">Confirm</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteModalthis(element, name, id) {
        let info = name;
        $('#ventanaModal .modal-title').html("Delete Resident "+name);
        $('#ventanaModal .modal-body').html("Confirm Delete Resident "+name);
        $("#confirmDelete").attr("onclick","confirmDelete("+id+")");
    }
    function confirmDelete(id) {
        let info = id;
        const newUrl = "delete.php?ID="+id;
		window.location.replace(newUrl);
    }
</script>
     <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h2 class="modal-title text-center"  >Add New Resident</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <form method="post" action="process.php" id="form-data">
            <div class="form-group">
    
          <input type="text" name="first_name" placeholder="First Name" required value = "" class="form-control"/><br/>
          
          <input type="text" name="last_name" placeholder="Last Name" required value = "" class="form-control"/><br/>
          
          <input type="text" name="age" placeholder="Age" required value = "" class="form-control"/><br/>
          
          <input type="text" name="address" placeholder="Address" required value = "" class="form-control"/><br/>
          
          <input type="text" name="occupation" placeholder="Occupation" required value = "" class="form-control"/><br/>
          
          <input type="text" name="gender" placeholder="Gender"required value = "" class="form-control"/><br/>
          
          <input type="text" name="email"  placeholder="email" required value = "" class="form-control"/><br/>
          <input class="btn btn-primary text-center form-control" type="submit" value="Register"/><br/>
          </div>
       </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


    </body>

</html>
