<?php

session_start();

$count = isset($_SESSION['count']) ? $_SESSION['count'] : 0;
echo 'Третья страница была открыта ' . $count . ' раз(а)';
