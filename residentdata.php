<?php
/*require_once('db.php');
$query = "select * from camutan_resedent";
$result = mysqli_query($connect,$query);
*/
require_once ('db.php');
require_once  ('function.php');

$result = display_data();
$rows=mysqli_num_rows($result);

?>
{"total": <?php echo $rows; ?> ,"totalNotFiltered":<?php echo $rows; ?>,"rows":[
<?php
               $i=1;$dot='';
               while($row = mysqli_fetch_assoc($result))
                    {
                 ?>
                 <?php echo $dot;?>{ 
                 "number": "<?php echo $i++;?>", 
                 "first" : "<?php echo $row['first_name']?>",
                 "last": "<?php echo $row['last_name']?>",
                 "age":"<?php echo $row['age']?>",
                 "address":"<?php echo $row['address']?>",
                 "occupation":"<?php echo $row['occupation']?>",
                 "gender":"<?php echo $row['gender']?>",
                 "email":"<?php echo $row['email']?>"
             	}<?php $dot=','; ?>
             	
 <?php }
 ?>
]}