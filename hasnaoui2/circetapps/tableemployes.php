<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: black;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
        color: #e3722e;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.afficher {
        color: green;
    }
    table.table td a.notifier {
        color: blue;
    }
    table.table td a.modifier {
        color: orangered;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 800px;
		
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 20px;
	}	
	.modal form label {
		font-weight: normal;
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
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
   
        <div class="table-wrapper shadow table-bordered border-warning  rounded">
          <table id="tabletickets" class="table table-striped table table-responsive table-hover">     
            <div class="table-title">
                <div class="row ">
                    <div class="col-sm-12 ">
						<h2>Informations <b>Employés</b></h2>
						<a href="#ajouterEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> 
						<span>Ajouter un employé</span></a>
					</div>
                
       
                </div>
            </div>  
         
            <div class="search-box float-left mb-2 ">
            <i class="material-icons ">&#xE8B6;
            </i><input type="text" id="tablesearch" name="tablesearch" class="form-control" placeholder="Rechercher&hellip;">
            
        </div>  
                <thead class="text-center">
                    <tr>
				  <th>Non</th>
                  <th>Prénom</th>
                  <th>Matricule</th>
                  <th>N° CIN</th>
				  <th>N° CNSS</th>
				  <th>Date d'embauche</th>
				  <th>Service</th>
				  <th>Fonction</th>
				  <th> Action </th>
				</tr>
			</thead>
                <tbody>
       
                <?php while ($employees=$resultat->fetch()) {?>  
                <?php $_SESSION['employees']=$employees;  ?>  

                        <tr>
					
                    <td><?php echo strtoupper($employees['nom']) ?></td>
					<td><?php echo ucwords($employees['prenom']) ?></td>
					<td><?php echo $employees['matricule'] ?></td>
                    <td><?php echo $employees['cin'] ?></td> 
                    <td><?php echo $employees['codeCnss'] ?></td>
					<td><?php echo date('d-m-Y', strtotime($employees['dateEmbauche'])) ?></td>
					<td><?php echo replaceSpecialChar(utf8_decode($employees['service']))  ?></td>
					<td><?php echo replaceSpecialChar(utf8_decode($employees['fonction'])) ?></td>
                    <td class="inline-block">

					<a href="#voirEmployeeModal" class="afficher" data-toggle="modal"><i class="fas fa-eye" data-toggle="tooltip" title="Fiche complète"></i></a>
                    <a href="#modifierEmployeeModal" class="modifier" data-toggle="modal"><i class="fas fa-pen" data-toggle="tooltip" title="Mettre à jour"></i></a>
                    
                    </td>
                <tr>
                    <?php  }?>
                </tbody>
                </tbody>
            </table>
			<!--<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>-->
        </div>
    </div>
	<!-- accepter Modal HTML -->
	<div id="modifierEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">	
					<h4 class="modal-title">Veuillez saisir les informations à modifier : </h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body modal-lg">		
					<div class="row">
                        <div class="col-md-4">
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Date naissance</label>
							<input type="date" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CIN</label>
							<input type="text" class="form-control" required>						
						</div>
						<div class="form-group">
							<label>Code CNSS</label>
							<input type="text" class="form-control" required>
						</div>
											
                         </div>
						 <div class="col-md-4">
						 <div class="form-group">
							<label>Pseudo</label>
							<input type="text" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="text" class="form-control" required>

						</div>
						<div class="form-group">
							<label>Date d'embauche</label>
							<input type="date" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Type de contrat</label>
							<input type="text" class="form-control" required>
						</div>					
						</div>	
						<div class="col-md-4">
						
						<div class="form-group">
							<label>Service</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fonction</label>
							<input type="text" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>				
                         </div>
				</div>			
		
					<div class="modal-footer">
						<input type="reset" class="btn btn-warning rounded shadow" name="cancel" value="Reset">
						<input type="button" class="btn btn-danger rounded shadow" data-dismiss="modal" value="Quitter">
						<input type="submit" class="btn btn-success rounded shadow" value="Enregistrer">
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- accepter Modal HTML -->
	<div id="ajouterEmployeeModal" class="modal fade mx-2 mt-3">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Veuillez remplir la fiche du nouvel employé : </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body modal-lg">		
					<div class="row">
                        <div class="col-md-4">
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Date naissance</label>
							<input type="date" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CIN</label>
							<input type="text" class="form-control" required>						
						</div>
						<div class="form-group">
							<label>Code CNSS</label>
							<input type="text" class="form-control" required>
						</div>
											
                         </div>
						 <div class="col-md-4">
						 <div class="form-group">
							<label>Pseudo</label>
							<input type="text" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="text" class="form-control" required>

						</div>
						<div class="form-group">
							<label>Date d'embauche</label>
							<input type="date" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Type de contrat</label>
							<input type="text" class="form-control" required>
						</div>					
						</div>	
						<div class="col-md-4">
						
						<div class="form-group">
							<label>Service</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fonction</label>
							<input type="text" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>				
                         </div>
				</div>			
		
					<div class="modal-footer">
						<input type="reset" class="btn btn-warning rounded shadow" name="cancel" value="Reset">
						<input type="button" class="btn btn-danger rounded shadow" data-dismiss="modal" value="Quitter">
						<input type="submit" class="btn btn-success rounded shadow" value="Enregistrer">
					</div>
					</div>
				</form>
				</div>
		</div>
	</div>
	<!-- rejeter Modal HTML -->
	<div id="voirEmployeeModal" class="modal fade bd-example-modal-lg mx-2 mt-5">
		<div class="modal-dialog modal-lg"">
			<div class="modal-content">	
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Fiche employé</h4>
					</div>
					<div class="modal-body modal-lg">
				
					<div class="row">
                        <div class="col-md-6">
						<?php $profil = $db-> query("SELECT * from employee");
						
						?>
                            <h5> <?php echo ucwords($prenom)," ", strtoupper($nom); ?></h5>
                            <p>Date naissance :  <?php echo date('d-M-Y', strtotime($dateNaissance)) ?></p>
                            <p>CIN :  <?php echo $cin; ?> </p>
                            <p>CNSS : <?php echo $codeCnss; ?></p> 
                            <p>Tél :  <?php echo $tel; ?></p>
                            <p>Service : <?php echo replaceSpecialChar(utf8_decode($service)) ?></p>
                            <p>Fonction :  <?php echo replaceSpecialChar(utf8_decode($fonction)) ?></p>
                            <p> Date d'embauche : <?php echo date('d-M-Y', strtotime($dateEmbauche) )?></p>
                            <p>Adresse actuelle : <?php echo ' '.replaceSpecialChar(utf8_decode($adresse)) ; ?></p>
                         </div>
						 <div class="col-md-6">

						 <?php echo ucwords($prenom)," ", strtoupper($nom); ?></p>
                            <p>Age :  <?php echo $diff->format('%y') ?></p>
                            <p>CIN :  <?php echo $cin; ?> </p>
                            <p>CNSS : <?php echo $codeCnss; ?></p> 
                            <p>Tél :  <?php echo $tel; ?></p>
                            <p>Service : <?php echo replaceSpecialChar(utf8_decode($service)) ?></p>
                            <p>Fonction :  <?php echo replaceSpecialChar(utf8_decode($fonction)) ?></p>
                            <p> Date d'embauche : <?php echo date('d-M-Y', strtotime($dateEmbauche) )?></p>
                            <p>Adresse actuelle : <?php echo ' '.replaceSpecialChar(utf8_decode($adresse)) ; ?></p>
							</div>
							<tr>
                  
                </div>
				</div>	
					<div class="modal-footer">
						<input type="button" class="btn btn-secondary rounded shadow" data-dismiss="modal" value="Quitter">
					
					</div>
				</form>
			</div>
        </div>
        <!-- Notifier Modal HTML -->
	<div id="notifierEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Notifier Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Quitter">
						<input type="submit" class="btn btn-danger" value="Notifier">
					</div>
				</form>
			</div>
		</div>

</body>
</html>                                		                            
<script>  
      $(document).ready(function(){  
           $('#tablesearch').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#tabletickets tr').each(function(){  
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

 
