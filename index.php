<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h2>Tablo Oluşturma</h2>

    <form action="tablo.php" method="get" class="m-3">
        <label for="satir">Satır</label><br>
        <input type="number" name="satir" id="satir"><br>
        <label for="sutun">Sutun</label><br>
        <input type="number" name="sutun" id="sutun"><br>
        <br><br>
        <input type="submit" value="Tabloyu Oluştur">
    </form>
</body>
</html>