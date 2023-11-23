   



  <!Doctype>
<?php
  session_start();
//connection BD
include("includes/db.php");
?>



<html>
<head>
<title>Location Voiture...!</title>

	<link rel="stylesheet" href ="css/style.css" media="all" />

</head>
<body>
           <!-- Formulare ajout user a BD: table customer: action dans meme fichier -->
       <div id="register">
            <form action="register.php" method="post" enctype="multipart/form-data">

            	<table  align="center" >
            		<tr><br>
            			   <td colspan="2" align="center"  style="color: red"><h2>Create an Account</h2></td>		   
            		</tr>


            		<tr>

            			<td align="right"><br>Name: </td>
            			<td ><br><input type="text"  name="c_name" required></td>
            		</tr>

            		<tr>
            			<td align="right">Email:</td>
            			<td><input type="text" name="c_email" required></td>
            		</tr>

            		<tr>
            			<td align="right">Password:</td>
            			<td><input type="Password" name="c_pass" required text-align="center"></td>
            		</tr>

            		<tr>
            			<td align="right">Image:</td>
            			<td><input type="file" name="c_image" required></td>
            		</tr>

            		<tr>
            			<td align="right">Country:</td>
            			<td>
            				 <select name="c_country" required="">
            				 	<option>Select a Country</option>
            				 	<option>Tunisia</option>
            				 	<option>France</option>
            				 	<option>China</option>
            				 	<option>Japan</option>
            				 	<option>Russia</option>
            				 	<option>United Arab Emirates</option>
            				 	<option>United States</option>
            				 	<option>United Kingdom</option>


            				 </select>



            			</td>
            		</tr>

            		<tr>
            			<td align="right">City:</td>
            			<td><input type="text" name="c_city"></td>
            		</tr>

            		<tr>
            			<td align="right">Contact No:</td>
            			<td><input type="text" name="c_contact" required></td>
            		</tr>
            		
            		<tr>
            			<td align="right">Address:</td>
                         <td>
                         	   <textarea cols="20" rows="1" name="c_address"></textarea>
                         </td>
            		</tr>
                   
                   <tr align="center">
                   	<td colspan="2"><input type="submit" name="register" value="Create Account"></td>
                   </tr>



            	</table>
            </form>
  </div>
<!-- MAIN CONTAINER ENDS HERE-->
	<div id="footer">
	 	<h2 >&copy By Abdallah Anoir</h2>
	</div>
</body>
</html>

<?php
//verif si donnee formulaire registre sont bien saisies
 if(isset($_POST['register']))
     {
//recuperation tous donnees saisies
         $c_name=$_POST['c_name'];
         $c_email=$_POST['c_email'];
         $c_pass=$_POST['c_pass'];
         $c_image=$_FILES['c_image']['name'];
         $c_image_tmp=$_FILES['c_image']['tmp_name'];
         $c_country=$_POST['c_country'];
         $c_city=$_POST['c_city'];
         $c_contact=$_POST['c_contact'];
         $c_address=$_POST['c_address'];
//recuperation fichier image dans dossier images
        move_uploaded_file($c_image_tmp, "images/$c_image");
//requete insertion new user
           $insert_c="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) 
             values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
//execution requete
          $run_c=mysqli_query($con,$insert_c);
//requete verif si user saisie existe dans BD (verif par donnee saisie vs donnes dans BD)
          $sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
//execution requete
          $run_cust=mysqli_query($con,$sel_c);
//resultat requete verif par select
           $check_customer=mysqli_num_rows($run_cust);

//si rresultat requete valide
            if($check_customer>0)
            {
				//recuperation email user registred
				$_SESSION['customer_email']=$c_email;
				//message succes au user
			   echo "<script> alert('Account Created Successfully..!') </script>";
			   //redirection vers page index
                echo "<script>window.open('index.php','_self')</script>";
            }
            else
            {
				//message erreur pour user saisie email existe dans BD
               echo "<script> alert('Register Again..!') </script>";
    
            }




     }






?>



   
