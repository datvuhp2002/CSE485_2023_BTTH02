<?php 
    define('DEV', true);  // In development or live? Development = true | Live = false
    // DOC_ROOT is created because the download code has several versions of the sample site
    // On a live site a single forward slash / would indicate the document root folder
    // The book just used a path, but these lines allow your code to run if they are in a different folder
    $this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])); // Folder this file is in
    $parent_folder = dirname($this_folder);                      // Parent of this folder
    define("DOC_ROOT", $parent_folder . '/public/');             // Document root

    // File upload settings
    define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR .  'uploads' . DIRECTORY_SEPARATOR); // Image upload folder
    define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]); // Allowed file types
    define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif',]);        // Allowed file extensions
    define('MAX_SIZE', '5242880');                                    // Max file size
?>