<?php
    $search = null;
    $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $search;
?>