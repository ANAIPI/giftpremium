<?php 
	require('functions.php'); 
	edit();
	include(HEADER_TEMPLATE);

	function ajustaData($data){
		$d = new DateTime($data);
		return $d->format("Y-m-d");
	}
?>
		<header>
			<h2>Atualizar Produto</h2>
		</header>
		
		<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
		  <!-- area de campos do form -->
		  <hr>
		  <div class="row">
			<div class="form-group col-md-50">
			
			<div class="form-group col-md-5">
				<label for="campo3">Email</label>
				<input type="varchar" class="form-control" name="product['email']" value="<?php echo $product['email']; ?>">
			</div>
			
			<div class="form-group col-md-5">
				<label for="campo3">Foto</label>
				<input type="file" class="form-control" name="product['photo']" value="<?php echo $product['photo']; ?>">
			</div>

			<div class="form-group col-md-5">
				<label for="campo3">Gift</label>
				<input type="text" class="form-control" name="product['gift']" maxlength="2" value="<?php echo $product['gift']; ?>">
			</div>
			
			<div class="form-group col-md-5">
				<label for="campo3">Preço</label>
				<input type="number" class="form-control" name="product['preco']" maxlength="2" value="<?php echo $product['preco']; ?>">
			</div>
			
		  </div>
		  
		  <div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-secondary"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
				<a href="index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
			</div>
		  </div>
		</form>

<?php include(FOOTER_TEMPLATE); ?>