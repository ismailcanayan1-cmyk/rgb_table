<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        $satir = $_GET["satir"];
        $sutun = $_GET["sutun"];

        echo "\n\t<table class = \"table table-bordered\">\n";

        for($i = 0; $i < $satir; $i++) {
            echo "\t\t<tr>\t\n";
            for ($j = 0; $j < $sutun; $j++) {
                $r = rand(0,255);
                $g = rand(0,255);
                $b = rand(0,255);
                echo "\t\t\t<td style=\"background-color: rgb($r,$g,$b)\">\t\n";
            }
            echo "\t\t</tr>\t\n";
        }

        echo "</table>\n";
        ?>
    </div>
</body>
</html>