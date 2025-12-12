<?php

if (isset($_GET['text'])) {
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="file.txt"');
    echo $_GET['text'];
} else {
    echo 'Параметр text не указан';
}
