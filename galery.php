<?php
// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include_once("Header/header.php"); ?>

<style>
    .card-img-top {
        height: 400px; /* Set a fixed height for the images */
        width: auto; /* Let the width adjust automatically to maintain aspect ratio */
        object-fit: cover; /* Ensure the image covers the entire space */
        border-radius: 5px;
        border: 0.25px solid #eddcd2;
        box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -webkit-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -moz-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
    }
</style>


<div class="row">
    <h1 class="text-center my-4 mx-4">Képek a munkáinkról</h1>
    <?php
    // Specify the directory where your images are located
    $imageDirectory = "imgs/workphotos";

    // Get a list of all files in the directory
    $files = scandir($imageDirectory);

    // Loop through each file
    foreach ($files as $file) {
        // Check if the file is a regular file and ends with a known image extension
        if (is_file($imageDirectory . '/' . $file) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
            // Output the HTML img tag with the file path
            echo '<div class="col-4">';
            echo '<div class="card mx-4 my-4">';
            echo '<img class="card-img-top" src="' . $imageDirectory . '/' . $file . '" alt="' . $file . '" />';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>

<?php include_once("Header/footer.php"); ?>
