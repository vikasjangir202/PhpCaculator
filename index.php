<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Calculator/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $fnum = $snum = $operation = $result = "";
    $fnumErr = $snumErr = "";

    if (isset($_POST["submit"])) {
        $fnum = $_POST["fnum"];
        $snum = $_POST["snum"];
        $operation = $_POST["opr"];
        $result = "";
        if (empty($fnum)) {
            $result =  "Input a number";
            $fnumErr =  " Please input a number";
        }
        if (empty($snum)) {
            $snumErr =  " Please input a number";
            $result =  "Input a number";
        }
        if($fnumErr == "" && $snumErr == "")
        {
            switch ($operation) {
                case 'Add':
                   $result = $fnum + $snum;
                    echo $result;
                    break;

                case "Subtract":
                    $result = $fnum - $snum;
                    echo $result;
                    break;

                case "Multiply":
                    $result = $fnum * $snum;
                    echo $result;
                    break;

                case "Divide":
                    $result = $fnum / $snum;
                    echo "<br>";
                    echo $result;
                    break;
            }
        }
    }
    ?>


    <div class="container">
        <div class="head">
            <h1>Calculator</h1>
            <p>A simple Calculator built using PHP.</p>
        </div>
        <div class="op">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <label for="first"> First Number:  </label><br>
                <input type="number" name="fnum" >
                <br>
                <label for="second"> Second Number:  </label><br>
                <input type="number" name="snum" >
                <br>
                <label for="option"> Operation: </label><br>
                <select name="opr">
                    <option value="Add">Add</option>
                    <option value="Subtract">Subtract</option>
                    <option value="Multiply">Multiply</option>
                    <option value="Divide">Divide</option>
                </select>
                <br>
                <Button type="submit" name="submit"> RESULT </Button>

                <p class="result"><?php echo $result; ?> </p>
            </form>
        </div>
    </div>


</body>

</html>