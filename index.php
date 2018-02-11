<!DOCTYPE html>
<html>
<head>
	<title>Código comparativo para getimageinfo</title>
	<link href="css/toastr.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1>Comparación "get image info"</h1>
	<form action="form-result.php" method="post" name="imageForm" id="imageForm" enctype="multipart/form-data" >
		<input type="file" name="imagen" id="imagen" accept="image/*" required>
		<input type="submit" name="submit" id="submit" value="Enviar">
	</form>
	<p>Tamaño solicitado de alto: <strong>640px</strong></p>
	<p>Tamaño solicitado de ancho: <strong>640px</strong></p>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/toastr.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>