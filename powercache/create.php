<?php
header('HTTP/1.0 200 OK');
header('Content-Type: text/html; charset=UTF-8');

function write() {
    $dyn = ob_get_contents();
    ob_end_clean();
    
    $dyn .= "\n<!-- Powercached " . date('d.m.Y H:i') . " -->\n";
    preg_match('@powercache/([^?&]+)@i', $_SERVER['REQUEST_URI'], $m);
    chdir(dirname(__FILE__));
    @mkdir(dirname($m[1]), 0777, true);
    $fp = fopen($m[1], 'w');
    fwrite($fp, $dyn);
    fclose($fp);
    
    echo $dyn;
    echo "<!-- Pregenerated. -->\n";

}

chdir('..');
include 'serendipity_config.inc.php';

ob_start();
register_shutdown_function('write');
header('X-Powercache: true');
if (preg_match('@powercache/sidebar/([^/]+)/([^/]+)/([^/]+)\.html@imsU', $_SERVER['REQUEST_URI'], $m)) {
    // Sidebar pregen
    $id = preg_replace('@^-@', '@', $m[1]);
    $id = str_replace('-', ':', $id);

    $view = $m[2];
    $entry = str_replace('p', '', $m[3]);

    $plugin =& serendipity_plugin_api::load_plugin($id);
    if (is_object($plugin)) {
        $title  = '';
        $serendipity['GET']['id'] = $entry;
        $show_plugin = $plugin->generate_content($title);
    } else {
        echo "Error, could not load $id / $view / $entry";
    }
} elseif (preg_match('/feeds/', $_SERVER['REQUEST_URI'])) {
    header('Content-Type: text/xml; charset=utf-8');
    include 'index.php';
} else {
    include 'index.php';
}