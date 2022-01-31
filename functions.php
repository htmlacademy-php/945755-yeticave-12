<?php
function formatting($num) {
    $num = number_format(ceil($num), 0, '', ' ');
    return($num . ' ' . '₽');
};

function elapsedTime($target) {
    $cur_time = strtotime('now');
    $next_time = strtotime($target);
    if ($next_time <= $cur_time) {
        return false;
    }
    $diff = $next_time - $cur_time;
    $hours = floor($diff / 3600);
    $mins = floor($diff % 3600 / 60);

    return [$hours, $mins];
}
?>
