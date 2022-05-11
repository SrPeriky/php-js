<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Introducir cualquier carácter y compruebe si se trata de un alfabeto, un dígito o un carácter especial.</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1>
			<?php 
			function calcular($str){
				$en = ["is", "us", "day", "give", "because", "new", "well", "two", "also", "think", "now"];
				$es = ["es", "nosotros", "día", "dar", "porque", "nuevo", "bien", "dos", "también", "pensar", "ahora"];
				$result = "";
				$newStr = explode(" ",$str);
				for ($i = 0; $i < count($newStr); $i++) {
			       	$tem = $newStr[$i];
			       	for ($p = 0; $p < count($es); $p++) if($newStr[$i] == $es[$p]) { $tem = $en[$p]; break; }
			        $result = $result . $tem . " ";
			    } return $result;
			} if (isset($_POST['dato'])) echo calcular($_POST['dato']);

			 ?>
		</h1>
		<form autocomplete="off" id="form" method="post" enctype="multipart/form-data" onsubmit="main(new FormData(this)); return false;">
		  <div class="mb-3">
		    <label class="form-label">Ingrese un caracter</label>
		    <input type="text" class="form-control" name="dato">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>