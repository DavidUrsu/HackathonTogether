
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<?php include("../library/head.php") ?>
    <title>Account Create</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../library/css/style_login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card-creare">
			<div class="card-header">
				<h3>Crează un cont</h3>
			</div>
			<div class="card-body">
				<form action="creare_cont.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" required name ="emailTXT"class="form-control" placeholder="email">
						
                    </div>
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
						<input type="password" required class="form-control" placeholder="parola">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-hashtag"></i></span>
						</div>
						<input type="number" required min="5" max="12" name ="clasaTXT" class="form-control" placeholder="numarul clasei tale ex: 5">
						
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-bold"></i></span>
						</div>
						<input type="text" required name ="clasaTXT" class="form-control" placeholder="litera clasei tale ex: A">
						
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-archway"></i></span>
						</div>
						<select id="institutie" name="institutieTXT" required>
                            <option value="Cuza">Colegiul National Elena Cuza</option>
                            <option value="Moisil">Colegiul National Grigore Moisil</option>
                    </div>

					<div class="row align-items-center remember" >
						<input type="checkbox" class="ascuns">
					</div>
					<div class="form-group">
						<input type="submit" value="Creare" class="btn float-right login_btn">
					</div>
				</form>
            </div>
            
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
                Ai deja un cont?<a href="http://localhost/login">Conectează-te</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Ai uitat parola?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>