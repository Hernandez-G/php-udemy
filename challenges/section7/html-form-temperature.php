<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature!</title>
</head>
<body>
    <form action="html-temperature-conversion.php" method="POST">
        <input type="number" name="temperature" placeholder="Numbers only">
        Farienheit<input type="radio" name="degrees" label="F" value="F">
        Celcius<input type="radio" name="degrees" label="C" value="C">

        <select name="accuracy">
            <option value="0">Whole Number</option>
            <option value="1">1 decimal place</option>
            <option value="2">2 decimal places</option>
            <option value="3">3 decimal places</option>
            
        </select>



        <input type="submit" name="submit" value="CONVERT">
    </form>
</body>
</html>