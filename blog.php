<?php
    // Page configuration
    $title = 'Blog';
    $child = 'views/pages/_blog.php';

    // Data configuration
    require 'controllers/blog.php';
    
    $blog = new Blog();
    $blogs = $blog->index();
    if(!$blogs) $blogs = $blog->seed();

    // Display page
    include('views/layouts/default.php');

?>