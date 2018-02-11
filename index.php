<!DOCTYPE html>
<html>
<head>
	<title>Código comparativo para getimageinfo</title>
</head>
<body>
	<h1>Comparación "get image info"</h1>
	<form action="form-result.php" method="post" name="imageForm" id="imageForm" enctype="multipart/form-data" >
		<input type="file" name="imagen" id="imagen" accept="image/*" required>
		<input type="submit" name="submit" id="submit" value="Enviar">
	</form>
	<p>Tamaño solicitado de alto: 640px</p>
	<p>Tamaño solicitado de ancho: 640px</p>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>