<?php

$domain = "https://sukammodularkitchen.in";

$exclude = [
    'header.php',
    'footer.php',
    'config.php',
    'db.php',
    'generate-sitemap.php'
];

$files = glob("*.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($files as $file) {

    if (in_array($file, $exclude)) {
        continue;
    }

    $url = ($file == 'index.php')
        ? $domain . '/'
        : $domain . '/' . str_replace('.php', '', $file);

    $xml .= "  <url>\n";
    $xml .= "    <loc>{$url}</loc>\n";
    $xml .= "    <changefreq>weekly</changefreq>\n";
    $xml .= "    <priority>0.8</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= '</urlset>';

file_put_contents('sitemap.xml', $xml);

echo "✅ Sitemap Generated Successfully!";
?>