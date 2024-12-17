<?php
        // Set the content type to an image (PNG)
        header("Content-Type: image/png");
 
        // Create an image canvas with a width of 400px and a height of 100px
        $image = imagecreate(400, 100);
 
        // Define colors for the background and text
        $blue = imagecolorallocate($image, 0, 0, 255);  // Blue color (for background if needed)
        $white = imagecolorallocate($image, 255, 255, 255);  // White color (for text)
 
        // Fill the bg with blue color
        imagefill($image,0,0,$blue);
        
        // Add the welcome text to the image
        imagestring($image, 5, 50, 40, "Welcome to Our Shop!", $white);

        // Output the image
        imagepng($image);

        // Free up memory
        imagedestroy($image);

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
?>