<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>CRUD com Bootstrap</title>
		<link rel="icon" type="image/gc" href="imagens/gc.ico">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
		<style>
			
			body {
				background-color: #e6f7ff;
			}
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
			.btn-light {
				color: #FFFFFF;
				background-color: black;
				border-color: #999999;
			}
			.btn-light:hover {
				color: #FFFFFF;
				background-color: #666666;
				border-color: #666666;
			}			
			header, #actions {
				margin-top: 10px;
			}
			
		</style>
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		  <div class="container-fluid">
			<a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fa-solid fa-gift"></i> Gift Premium</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa-solid fa-users"></i> Clientes
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa-solid fa-user-plus"></i> Adicionar Cliente</a></li>
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/"><i class="fa-solid fa-users"></i> Gerenciar Clientes</a></li>
				  </ul>
				</li>
			   
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa-solid fa-crown"></i> Gift Club
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>product/add.php"><i class="fa-solid fa-id-card"></i> Novo Cadastro</a></li>
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>product/"><i class="fa-solid fa-user-gear"></i> Cadastrados</a></li>
				  </ul>
				</li>
				
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa-solid fa-user-lock"></i> Usuário
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuario/add.php"><i class="fa-solid fa-id-card-clip"></i> Novo Usuário</a></li>
					<li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuario/"><i class="fa-solid fa-address-book"></i> Usuários</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>

    <main class="container">