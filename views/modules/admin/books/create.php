<form method="post"  class="mt-5">
	<nav>
		<div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="book-data-tab" data-toggle="tab" href="#book-data" role="tab">Datos libro</a>
			<a class="nav-item nav-link" id="autor-data-tab" data-toggle="tab" href="#autor-data" role="tab">Datos autor </a>
			<a class="nav-item nav-link" id="editorial-data-tab" data-toggle="tab" href="#editorial-data" role="tab">Datos editorial</a>
			<a class="nav-item nav-link" id="catalographic-data-tab" data-toggle="tab" href="#catalographic-data" role="tab">Datos catalografico</a>
		</div>
	</nav>
	<div class="tab-content" id="book-create-tab">
		<div class="tab-pane fade show active" id="book-data" role="tabpanel">
			<?php @include("book-data.php"); ?>
		</div>
		<div class="tab-pane fade" id="autor-data" role="tabpanel">
			<?php @include("autor-data.php") ?>
		</div>
		<div class="tab-pane fade" id="editorial-data" role="tabpanel">
			<?php @include("editorial-data.php") ?>
		</div>
		<div class="tab-pane fade" id="catalographic-data" role="tabpanel">
			<?php @include("catalographic-data.php") ?>
		</div
	</div>
	<div class="row justify-content-between">
		<input class="col-4" type="submit" name="save-book" value="Agregar libro">
		<input class="col-4" type="button" name="" value="Cancelar">
	</div>

</form>
<?php 
	include("create-autor-modal.php");
	include("create-editorial-modal.php"); 
	require_once("../../../../controllers/BookController.php");
	require_once("../../../../models/BookModel.php");
 
	

	if(isset($_POST["save-book"])){
		$librito = new BookController();
		$librito->store();
	}
?>


