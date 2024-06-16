<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
$result = '';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $result = $_POST['input'];
    $value = $_POST['angka'];
    if ($value == 'DEL') {
        $result = substr($result, 0, -1);
    } else if ($value == 'C') {
        $result = '';
    } else if ($value == '=') {
        $result = str_replace('%', '/100', $result);
        $result = eval("return $result;");
    } else {
        $result .= $value;
    }
}


?>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 mt-4">
                    <div class="calculator p-3 shadow border-0">
                        <form action="" method="post">
                            <input type="text" name="input" class="form-control display" id="" value="<?= $result  ?>">
                            <div class="buttons">
                                <?php
                                $buttons = ['C', 'DEL', '%', '/', '7', '8', '9', '*', '4', '5', '6', '-', '1', '2', '3', '+', '', '0', '.', '='];

                                foreach ($buttons as $button) {
                                    $class = "button btn";
                                    if ($button == 'DEL' || $button  == 'C') {
                                        $class .= " clear";
                                    }
                                ?>
                                    <button class="<?= $class ?>" name="angka" value="<?= $button ?>"><?= $button ?></button>
                                <?php }  ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>