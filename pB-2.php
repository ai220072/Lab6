<?php
    header("Content-Type: image/png");

    $image=imagecreate(400,400);

    $green=imagecolorallocate($image,0,128,0);
    $purple=imagecolorallocate($image,160,32,240);
    $white=imagecolorallocate($image,255,255,255);

    // Fill the bg with white color
    imagefill($image,0,0,$white);

    // Draw a green circle
    $circle_center_x = 200; // Center of the circle (x-coordinate)
    $circle_center_y = 200; // Center of the circle (y-coordinate)
    $circle_radius = 100;   // Radius of the circle

    imageellipse($image, $circle_center_x, $circle_center_y, $circle_radius * 2, $circle_radius * 2, $green);
    
    // Draw a purple line
    $line_start_x = 50;// Starting point of the line (x-coordinate)
    $line_start_y =200;  // Starting point of the line (y-coordinate)
    $line_end_x =350;   // Ending point of the line (x-coordinate)
    $line_end_y =200;   // Ending point of the line (y-coordinate)
    imageline($image, $line_start_x, $line_start_y, $line_end_x, $line_end_y, $purple);

    // Output the image
    imagepng($image);

    // Free up memory
    imagedestroy($image);

?>
