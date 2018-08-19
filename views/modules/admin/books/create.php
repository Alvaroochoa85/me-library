<form method="post" class="mt-5">
	<div class="form-group row">
		<h4 class="col-12">Agregar nuevo libro</h4>
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<select data-placeholder="Seleciona autor/es" multiple class="form-control select-autor col-8">
			<option value="Reznik">Reznik</option>
			<option value="Pepito Perez">Pepito Perez</option>
			<option value="Junito">Junito</option>
		</select>
		<a href="" class="material-icons col-1" data-toggle="modal" data-target="#create-autor">add</a>
		
	</div>
	<div class="form-group row">
		<select data-placeholder="Seleciona editorial/es" multiple class="form-control select-editorial col-8">
			<option value="Sol">Sol</option>
			<option value="Nueva luna">Nueva luna</option>
			<option value="Venus">Venus</option>
		</select>
		<a href="" class="material-icons col-1" data-toggle="modal" data-target="#create-editorial">add</a>
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
	<div class="form-group row">
		<input type="text" class="form-control col-8" id="title" placeholder="Titulo del libro">
	</div>
</form>

<?php include("create-autor-modal.php");
	  include("create-editorial-modal.php"); 
?>