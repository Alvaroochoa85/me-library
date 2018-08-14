<?php 
	include("../head.php"); 
	include("header.php");
?>
<div class="row">
	<div class="col-2 mt-5">
		<div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Anatomia</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Kinesiologia</a>
			<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Laboratorios</a>
		</div>
	</div>
	<div class="col-10 mt-5">
		<div class="tab-content" id="v-pills-tabContent">
			<?php include "search.php" ?>
			<div class="tab-pane fade show active row" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<?php include("book.php"); ?>
			</div>

			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<?php include("create-book.php"); ?>
			</div>
			
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
				Laboratorio
				<button type="button" class="btn btn-danger">No tocar</button>
			</div>
		</div>
	</div>
</div>

<?php include("../foot.php"); ?>