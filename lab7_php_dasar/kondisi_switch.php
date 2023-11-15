<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Kondisi Switch</h2>
    <?php 
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday" :
            echo "Minggu";
            break;
        case "Monday" :
            echo "Senin";
            break;
        case "Tuesday" :
            echo "Selasa";
            break;
        case "Wednesday" :
            echo "Rabu";
            break;
        case "Thursday" :
            echo "Kamis";
            break;
        case "Friday" :
            echo "Jumat";
            break;
        default:
            echo "Sabtu";
    }
    ?>
</body>
</html>