<?php
session_start();
include "fonction.php";
if (isset($_POST["email"])) {
    $email = $_POST['email'];
    $emailValidation = "/^[a-zA-Z ]+$/";
    
    if(empty($email)){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill this field..!</b>
			</div>
		";
		exit();
    }else{
        if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
        $sql = "SELECT commentaire_id FROM commentaire WHERE commentaire = '$email' LIMIT 1" ;
        $check_query = mysqli_query($con,$sql);
        $count_email = mysqli_num_rows($check_query);
        if($count_email > 0){
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email available</b>
                </div>
            ";
            exit();
        }else{
            
            $sql = "INSERT INTO `commentaire` 
            (`commentaire_id`, `commentaire`)
            VALUES (NULL, '$email' )";
            $run_query = mysqli_query($con,$sql);
                echo "<div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Thanks </b>
                </div>";
                
                
            }

        
    }
    
}
?>