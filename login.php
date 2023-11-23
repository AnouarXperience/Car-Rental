<?php
//appel  fichier  connexion  Base  DONNÉES 
include("includes/db.php");
?>


<body>
<div id="customer_login" >
    <link rel="stylesheet" type="text/css" href="les Marques des Voitures/style.css">
	
        <form  method="post" action="">

            <table width="700" align="center" >
            	<tr align="center">
            		 
             <td colspan="4" style="color:red"><br><br> <h2><i> Log In &emsp; </i> <b>OR</b> &emsp;<i>Register</i>  </h2></td>

            	</tr> 
                 <tr >
                 	<td align="right"><br><br><br><b>Email:</b></td>
                 	<td><br><br><br><input type="text" name="email" placeholder="Enter Your email" required></td>
                 </tr>
                 <tr>
                 	<td align="right"><b>Password:</b></td>
                 	<td><input type="Password" name="pass"  placeholder="Enter Your Password" required></td>
                 </tr>    
                 <tr>    <td>&nbsp;</td>
</tr>

                  <tr align="right">
                 	  <td ><h3><a href="register.php">Register Here</a></h3></td>

                 

                 
                 	<td align="center"><input type="submit" name="login" value="Login"/></td>
                      </tr>



            </table>

             
 </form>


<?php
//Test si user a saisie ses informations (formulaire)
     if(isset($_POST['login']))
       {
           //recuperation donne email et mot passe
          $c_email=$_POST['email'];
          $c_pass=$_POST['pass'];
// requete verification existance user
          $sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
//execution requete
           $run_c=mysqli_query($con,$sel_c);
//resultat requete
           $check_customer=mysqli_num_rows($run_c);
//verification success de requete:0--> erreur
           if($check_customer==0)
           {
//affichage message erreur si donnees saisies sont incorrectes
            echo "<script>alert('Password or Email Incorrect, Try again..!') </script>";
            exit();
            }
            

//user exist dand BD
            if($check_customer>0)
            {
                //open session user
                   session_start();
                   //enregistrement email user pour l#afficher
                     $_SESSION['customer_email']=$c_email;
                     //afficher message suucees pour user
               echo "<script> alert('You Logged in Successfully..!') </script>";
               //redirection a page index
                echo "<script>window.open('index.php','_self')</script>";
            }


       }

 



?>



</div>  

</body>
  

