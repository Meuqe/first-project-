<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=divice-width, initial scale=1.0">
	<style>
	    :root { view-transition-name: root;}
         html{min-width:100%; min-height:100%;  display: block;
	     -webkit-locale: "en";}
	     body{background-image: url('images/li.jpg') ; width:100%; background-size: cover;
		 }
		 h1{text-align:center; width:100%; color:black; font-size:3.5em;}
		 div{margin-top: 5%;  margin-left: 25%; margin-right: 25%; width:50%; height: 80%; inline-block; border:3px solid black; backdrop-filter:blur(5px);}
	     label{font-size: 1.5em; font-style:italic; margin-left: 25px; display: inline-block; width:25%;}
		 input{width:400px; height:30px; margin;10px;}
		 .button{text-align: center; margin-left:40%; margin-right:40%; width:20%}
		
	</style>
   <title>Registration</title>
    </head>
    <body>
	   <div>
          
	  <form method="post" action="process.php">
		  <h1>Registration Form</h1>
		  <label>First Name:</label>
		  <input type="text" name="first_name" /><br/><br/>
		  <label>Last Name:</label>
		  <input type="text" name="last_name" /><br/><br/>
		  <label>Age:</label>
		  <input type="text" name="age" /><br/><br/>
		  <label>Address:</label>
		  <input type="text" name="address" /><br/><br/>
		  <label>Occupation:</label>
		  <input type="text" name="occupation" /><br/><br/>
		  <label>Gender:</label>
		  <input type="text" name="gender" /><br/><br/>
		  <label>Email:</label>
		  <input type="text" name="email" /><br/><br/>
		  <input class="button" type="submit" value="Register"/><br/><br/>
       </form>
	   </div>
    </body>
</html>
