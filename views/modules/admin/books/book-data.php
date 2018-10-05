<div class="form-group row">
	<h4 class="col-12">Datos del libro</h4>
</div>

<div class="row">
	<div class="col-9">
		<div class="form-group row">
			<input name="book-title" id="book-title" class="form-control col-12" type="text" placeholder="Titulo del libro" required>
		</div>
		<div class="form-group row">
			<select name="book-vol" class="form-control col-5" required>
				<option disabled selected >Selecionar volumen</option>
				<option value="1">Vol. 1</option>
				<option value="2">vol. 2</option>
				<option value="3">Vol. 3</option>
			</select>
			<a href="" class="material-icons col-1" data-toggle="modal" data-target="#create-vol">add</a>

			<select name="book-edision" class="form-control col-5" required>
				<option disabled selected >Selecionar edición</option>
				<option value="1">1º edición</option>
				<option value="2">2º edición</option>
				<option value="3">3º edición</option>
			</select>
			<a href="" class="material-icons col-1" data-toggle="modal" data-target="#create-vol">add</a>
		</div>
		<div class="form-group row justify-content-between">
			<input name="book-year" type="text" class="form-control col-3"  placeholder="año">
			<input name="book-pag" type="text" class="form-control col-3" placeholder="cantidad páginas">
			
			<select name="book-languaje" class="form-control col-3">	
				<option disabled selected >Selecionar idioma</option>
				<option value="1">Español</option>
				<option value="2">Ingles</option>
				<option value="3">Portugues</option>
			</select>
		</div>
		<div class="form-group row">
			<textarea name="book-description" class="form-control col-12" rows="3" placeholder="Ingrese descripción del libro"></textarea>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
    		<label class="justify-content-end" id="cover-preview" for="cover-img"></label>
    		<input name="cover-img" type="file" class="form-control-file" id="cover-img">
  		</div>
	</div>
</div>