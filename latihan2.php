<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <?php 
            for ($i=1; $i <= 10; $i++) { 
                echo "<tr>";
                for ($k=0; $k <= 8; $k++) { 
                    echo "<td> $i,$k</td>";
                }
                echo "</tr>"; 
            }
        ?>
    </table>
</body>
</html>