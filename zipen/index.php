<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zipen</title>
</head>
<body>

<h2>wyślij obraz do spakowania</h2>

<form action="wstawianie.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="obrazy[]" multiple accept=".jpg,.jpeg,.png">
    <br><br>
    <button type="submit">spakuj do ZIP</button>
</form>

</body>
</html>