<?php
    // Page configuration
    $title = 'Blog';
    $child = 'views/pages/_blog.php';

    // Data configuration
    require 'controllers/blog.php';
    
    $blog = new Blog();
    $blogs = $blog->index();
    if(!$blogs) $blogs = $blog->seed();

    // Sorting
    usort($blogs, function($el1, $el2) {
        $dt1 = strtotime($el1['created_at']);
        $dt2 = strtotime($el2['created_at']);
        return $dt2 - $dt1;
    });

    // Display page
    include('views/layouts/default.php');

?>