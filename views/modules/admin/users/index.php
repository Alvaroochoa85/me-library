<?php 
  include("../head.php"); 
  include("../header.php");
?>

<div class="row">
  <div class="col-2 menu-loans">
    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab"><span class="material-icons">search</span> Buscar</a>
      <a class="nav-link" id="v-pills-newuser-tab" data-toggle="pill" href="#v-pills-newuser" role="tab"><span class="material-icons">library_add</span> Agregar nuevo</a>
      <a class="nav-link" id="v-pills-moroso-tab" data-toggle="pill" href="#v-pills-moroso" role="tab"><span class="material-icons">report_problem</span> Ver moroso</a>
    </div>
  </div>
  <div class="col-9 tab-show">
    <div class="tab-content row justify-content-end" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-search" role="tabpanel">
        
      </div>
      <div class="tab-pane fade col-11" id="v-pills-newuser" role="tabpanel">
        <?php include("create.php") ?>

      </div>
      <div class="tab-pane fade" id="v-pills-moroso" role="tabpanel">...</div>
    </div>
  </div>
</div>


<?php   include("../foot.php"); ?>