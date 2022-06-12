<?php

require __DIR__ . '/../vendor/autoload.php';

$files = glob(__DIR__ . '/../assets/sources/*.html');

foreach ($files as $file) {
    $html = file_get_contents($file);

    /**
     *
     */
    $htmlMin = new Abordage\HtmlMin\HtmlMin();
    $htmlMin->removeBlankLinesInScriptElements();
    $result = $htmlMin->minify($html);

    $path = str_replace(['sources', '.html'], ['results', '-abordage-html-min.html'], $file);
    file_put_contents($path, $result);

    /**
     *
     */
    $htmlMin = new voku\helper\HtmlMin();
    $htmlMin->doRemoveSpacesBetweenTags();
    $result = $htmlMin->minify($html);

    $path = str_replace(['sources', '.html'], ['results', '-voku-html-min.html'], $file);
    file_put_contents($path, $result);
}

echo 'Complete! See ./assets/results/*';
