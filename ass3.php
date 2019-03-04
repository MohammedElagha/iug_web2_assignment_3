        <!-- Redefine $stdGrads  as an associative array, the Indices are the names of your 
        registered courses last semester and the values are your grades.
        These cript  print the contents in tabular format with the GPA in the table foot
         -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <style>
        td{text-align:center;}
    </style>
    <table border="1">
        <thead>
            <tr>
            <?php
    $stdGrads = array(
        "Data Stracture" =>88,
        "Web Development 1"=> 90,
        "Mathematical Computing" =>63,
        "Software Engineering"=>78
    );
    foreach ($stdGrads as $key => $value) {
        echo ("<th>$key</th>");
    }
    ?>
            </tr>
        </thead>
        <tbody>
            <?php
                    foreach ($stdGrads as $key => $value) {
                        echo ("<td>$value</td>");
                    }
            ?>
        </tbody>
        <tfoot>
            <?php
                    $sum=0;
                    $avg=0;
                    foreach ($stdGrads as $key => $value) {
                        $sum = $sum + $value;
                    }
                    $avg = $sum/count($stdGrads);
            ?>
            <tr>
                <th colspan="3">Avg :</th>
                <th>
                <?php echo $avg; ?>
                </th>
            </tr>
        </tfoot>
    </table>
</body>
</html>