<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Data Table with Filter Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        width: 100%;
        background: #fff;
        padding: 20px 30px 5px;
        margin: 20px 0;
        box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
    }
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		min-width: 50px;
		border-radius: 2px;
		border: none;
		padding: 6px 12px;
		font-size: 95%;
		outline: none !important;
		height: 30px;
	}
    .table-title {
		border-bottom: 1px solid #e9e9e9;
		padding-bottom: 15px;
		margin-bottom: 5px;
		background: black;
		margin: -20px -31px 10px;
		padding: 15px 30px;
        color: #fff;
        border-radius: 0.35em 0.35em 0 0; 
    }
    .table-title h5 {
		margin: 2px 0 0;
        font-size: 22px;
        color: #e3722e;
     
       
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 40px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table td a {
        color: #2196f3;
    }
	table.table td .btn.manage {
		padding: 2px 10px;
		background: #37BC9B;
		color: #fff;
		border-radius: 2px;
	}
	table.table td .btn.manage:hover {
		background: #2e9c81;		
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
</style>


<body>
    <div class="table-wrapper shadow table-bordered border-warning rounded mt-4">
       
        <table id="tabledemande" class="table table-striped table table-responsive table-hover" >
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h5><i class="fas fa-ticket-alt"> Mes tickets</i></h5></div>
            </div>
        </div>
        <div class="search-box float-left mb-2">
            <i class="material-icons">&#xE8B6;</i>
            <input type="text" id="tablesearch" name="tablesearch" class="form-control" placeholder="Rechercher&hellip;">
        </div>                  
            <thead>
               
               
               <tr class="text-center">
                  <th>N°</th>
                  <th>Pseudo</th>
                  <th>Document</th>
                  <th>Libellé</th>
                  <th>Date création</th>
                  <th>Etat demande</th>
                  <th>Action</th>
      
                </tr>
            </thead>
        
                                  
                    <?php while ($demande=$resultat->fetch()) {?>  
                        <?php $_SESSION['demande']=$demande;  ?>  

                <tr class="text-center">
                    <td><?php echo $demande['id']?></td>
                    <td><?php echo $pseudo?></td>
                    <td><?php echo $demande['typeDocument'] ?></td>
                    <td><?php echo $demande['libelle'] ?></td>
                    <td><?php echo date('d-m-Y', strtotime($demande['creeLe']))?></td>
                    <td><?php echo replaceSpecialChar($demande['etatDemande']) ?></td>
                    <td class="text-center"><Button class="btn btn-sm btn-warning text-center " title="Modifier" ><i class="fas fa-edit text-white" value="Modifier"></i></button> 
                    <button class="btn btn-sm btn-danger mx-auto" name ><i class="fas fa-trash text-white" 
                     title="Annuler" value="annuler"></i></button></td>
                <tr>
                    <?php  }?>
                     
                </table>
    </div>     
</body>

<script>  
      $(document).ready(function(){  
           $('#tablesearch').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#tabledemande tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
