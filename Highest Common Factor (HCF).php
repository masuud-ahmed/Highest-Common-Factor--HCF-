<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highest Common Factor (HCF)</title>
</head>
<body>
    <h1>Name: Masud Ahmed Yusuf <br> ID: C1211446</h1>
    <h2>Highest Common Factor (HCF) of Two Numbers</h2>
    <?php
     function calculateHCF($a = 18, $b = 24) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
echo "HCF of 18 and 24 is: " . calculateHCF() . "<br>";
echo "HCF of 10 and 50 is: " . calculateHCF(10,50) . "<br>"; /// I passed new argument to test its working or not 
?>

</body>
</html>