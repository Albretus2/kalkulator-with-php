<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator | Albretus Ichvanius Giharta</title>

    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
$i  = '';
$b = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $i = $_POST['i'];
    $b = $_POST['b'];
    if ($b == 'DEL') {
        $i = substr($i, 0, -1);
    } else if ($b == 'C') {
        $i = '';
    } else if ($b == '=') {
        $i = eval("return $i;");
    } else {
        $i .= $b;
    }
}
?>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-3">
                        <form action="" method="post">
                            <div class="calc bg-secondary text-light p-4 rounded-4">
                                <input type="text" name="i" id="" value="<?= $i  ?>" class="form-control text-end mb-3" readonly>
                                <div class="buttons">
                                    <?php
                                    $buttons =
                                        ['C', 'DEL', '%', '/', '7', '8', '9', '*', '4', '5', '6', '-', '1', '2', '3', '+', '', '0', '.', '='];
                                    foreach ($buttons as $b) {
                                        $class = "btn btn-dark button";
                                        if ($b == 'C' || $b == 'DEL') {
                                            $class .= " dif";
                                        }
                                    ?>
                                        <button class="<?= $class ?> border-0" name="b" value="<?= $b ?>"><?= $b ?></button>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>