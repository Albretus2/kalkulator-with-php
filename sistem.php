<?php
$i = '';
$b = '';

$i = $_POST['i'];
$b = $_POST['b'];
if ($b == 'C') {
    $i = '';
} else if ($b == 'DEL') {
    $i = substr($i, 0, -1);
} else if ($b == '=') {
    $i = eval("return $i;");
} else {
    $i .= $b;
}

return $i;
