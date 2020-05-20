<?php

include"head.php";
?>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" >
        <i class="fas fa-file-signature"></i>
        <span>Gestion des congés</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<?php
                include"sidebar_employee.php";

            ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      
      <?php
include"navbar.php";

?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Prochainement</p>
            <p class="text-gray-500 mb-0">Module en cours de construction</p>
            <a href="http://localhost/ProjetCircet/circetapps/acceuilemployee.php">&larr; Retour à l'acceuil</a>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<footer class="sticky-footer bg-white shadow">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; CIRCET Morocco 2020</span>
    </div>
  </div>
</footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt pour quitter?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                      </button>
                 </div>
                 <div class="modal-body">Selectionner "Deconnexion" si vous êtes sur de vouloir quitter votre
                        session.</div>
               <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary"
                            href="http://localhost/ProjetCircet/index.html">Deconnexion</a>
                </div>
            </div>
      </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
