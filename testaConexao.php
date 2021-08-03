<?php
    $link = mysqli_connect('localhost', 'root', '');
    if (!$link) {
        die('Nao conectou! - ' . mysqli_error() . PHP_EOL);
    }
    echo 'Conectou!';
  ?>