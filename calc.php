<?php
$result = ''; // Initialize $result variable to store the calculation result

if(isset($_POST['calc'])) {
    $f = $_POST['one'];
    $l = $_POST['second'];
    $result = $f + $l; // Perform the addition and store the result in $result
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="calc.php" method="post">
        <label for="one">NO 1:</label><br>
        <input type="text" id="one" name="one" placeholder="Enter first number"><br>
        <label for="second">NO 2:</label><br>
        <input type="text" id="second" name="second" placeholder="Enter second number"><br>
        <input type="submit" value="Calculate" name="calc"><br>
        <label for="result">Result:</label><br><br>
        <input type="text" id="result" name="result" value="<?php echo $result; ?>" disabled><br>
    </form>
</body>
</html>
