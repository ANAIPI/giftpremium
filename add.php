<?php 
  require('functions.php'); 
  add();
  include(HEADER_TEMPLATE);
?>
		<header>
			<h2>Novo Produto</h2>
		</header>
		
		<form action="add.php" method="post" style="width:50%;">
		  <!-- area de campos do form -->
		  <hr>
		  <div class="row">
			
			</div>
			
			<div class="form-group col-mb-2 mb-2">
				<label for="name">Foto Do Produto</label>
				<input type="file" class="form-control" name="product['photo']">
			</div>
			
			<div class="form-group col-mb-2 mb-2">
				<label for="name">Email</label>
				<input type="text" class="form-control" name="product['email']" required>
			</div>

			<div class="form-group col-mb-2 mb-2">
				<label for="name">Gift Card Escolhido:</label>
				<input type="text" class="form-control" name="product['gift']" required>
			</div>
			
			<div class="form-group col-mb-2 mb-2">
				<label for="name">Preço</label>
				<input type="number" class="form-control" name="product['preco']" required>
			</div>
		  
		  <div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-secondary"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
				<a href="index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i> Voltar</a>
			</div>
		  </div>
		</form>

<?php include(FOOTER_TEMPLATE); ?>