<?php

function dd(mixed $value): void
{
    echo '<pre style="background:#111;color:#fff;padding:12px;border-radius:8px;overflow:auto;">';
    var_dump($value);
    echo '</pre>';
    die();
}
