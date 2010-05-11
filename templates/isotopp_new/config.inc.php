<?php
function safeid($string) {
    return preg_replace('@[^a-z0-9_]@imsU', '-', $string);
}

$serendipity['smarty']->register_modifier('safeid', 'safeid');
