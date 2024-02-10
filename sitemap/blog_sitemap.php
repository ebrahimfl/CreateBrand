<?php 
include_once("../cb_admin/php/fun/fun.php");
$conn = new addmin;

$rootPath = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].'/createBrand/blogs/';
$rootPathImg = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].'/createBrand/assets/images/blog/';
$blog_url_r = $conn->show("blog","url");

$blog_url = [];
$blog_img = [];
    while ($data = $blog_url_r->fetch_assoc()) {
        $blog_url[] = $data['url'];
        $blog_img[] = $data['img'];

    } 
    
  
    // Set the content type to XML
    header('Content-type: application/xml; charset="UTF-8"');
    
    // Start the XML file with the xsi namespace
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'.PHP_EOL;
    echo '<!--  createofbrnd.com  -->'.PHP_EOL;
    // Your URLs and additional information

    
    // Loop through each URL and add it to the sitemap
    foreach ($blog_url as $data) {
        echo '<url>';
        echo '<loc>'.htmlspecialchars($rootPath.$data) .'</loc>';
        echo '<lastmod>'.date("c").'</lastmod>';
        echo '<changefreq>'."daily".'</changefreq>';
        echo '<priority>'."0.9000".'</priority>';
        echo '</url>';
    }
    foreach ($blog_img as $data) {
        echo '<url>';
        echo '<loc>'.htmlspecialchars($rootPathImg.$data) .'</loc>';
        echo '<lastmod>'.date("c").'</lastmod>';
        echo '<changefreq>'."daily".'</changefreq>';
        echo '<priority>'."0.9000".'</priority>';
        echo '</url>';
    }
    
    // Close the XML file
    echo '</urlset>';
    ?>
    



