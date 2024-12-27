<?php
    if(isset($_POST['description']))
    {
        $day = $_POST['day'];
        $description = $_POST['description'];
        $file = fopen('report.txt', 'a');
        fwrite($file, "Day: $day\n");
        fwrite($file, "Description: $description\n");
        fwrite($file, "--------------------------\n");
        fclose($file);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="day">
            <strong>Day of issue</strong>
            <input type="date" id="day" name="day">
        </label>
        <br>
        <label for="description">
            <strong>Description of issue</strong>
            <textarea name="description" id="description"></textarea>
        </label>
        <input type="submit" id="send">
    </form>
</body>
</html>