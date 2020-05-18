<?php
session_start();
include "fonction.php";
if (isset($_SESSION["uid"])) {

	$f_name = $_POST["firstname"];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
    $Ville = $_POST['Ville'];
    $number = $_POST['number'];
    $CODEpostale= $_POST['CODEpostale'];
    $cardname= $_POST['cardname'];
    $cardnumber= $_POST['cardNumber'];
    $date= $_POST['date'];
    $cvv= $_POST['cvv'];
    $user_id=$_SESSION["uid"];
    $cardnumberstr=(string)$cardnumber;
    $total_count=$_POST['total_count'];
    $prod_total = $_POST['total_price'];
    
    
    $sql0="SELECT commande_id from `commandes_info`";
    $runquery=mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $commande_id=1;
    }else if (mysqli_num_rows($runquery) > 0) {
        $sql2="SELECT MAX(commande_id) AS max_val from `commandes_info`";
        $runquery1=mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $commande_id= $row["max_val"];
        $commande_id=$commande_id+1;
        echo( mysqli_error($con));
    }

	$sql = "INSERT INTO `commandes_info` 
	(`commande_id`,`user_id`,`f_name`, `email`,`adresse`, 
	`Ville`, `number`, `CODEpostale`, `cardname`,`cardnumber`,`date`,`prod_count`,`total`,`cvv`) 
	VALUES ($commande_id, '$user_id','$f_name','$email', 
    '$adresse', '$Ville', '$number', '$CODEpostale','$cardname','$cardnumberstr','$date','$total_count',
    '$prod_total','$cvv')";


    if(mysqli_query($con,$sql)){
        $i=1;
        $prod_id_=0;
        $prod_price_=0;
        $prod_qty_=0;
        while($i<=$total_count){
            $str=(string)$i;
            $prod_id_+$str = $_POST['prod_id_'.$i];
            $prod_id=$prod_id_+$str;		
            $prod_price_+$str = $_POST['prod_price_'.$i];
            $prod_price=$prod_price_+$str;
            $prod_qty_+$str = $_POST['prod_qty_'.$i];
            $prod_qty=$prod_qty_+$str;
            $sub_total=(int)$prod_price*(int)$prod_qty;
            $sql1="INSERT INTO `commande_produits` 
            (`order_pro_id`,`commande_id`,`product_id`,`qte`,`total`) 
            VALUES (NULL, '$commande_id','$prod_id','$prod_qty','$sub_total')";
            if(mysqli_query($con,$sql1)){
                $del_sql="DELETE from Panier where user_id=$user_id";
                if(mysqli_query($con,$del_sql)){
                    echo"<script>window.location.href='store.php'</script>";
                }else{
                    echo(mysqli_error($con));
                }

            }else{
                echo(mysqli_error($con));
            }
            $i++;


        }
    }else{

        echo(mysqli_error($con));
        
    }
    
}else{
    echo"<script>window.location.href='index.php'</script>";
}
	




?>