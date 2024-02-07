<?php
// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include_once("header/header.php"); ?>

<style>
    .card {
        border-radius: 5px;
        border: 0.25px solid #eddcd2;
        box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -webkit-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -moz-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        height: 100%; /* Ensure the card takes up the full height of its container */
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 5px 5px 0 0; /* Rounded corners on top */
    }
</style>
    <h1 class="text-center my-4">Képek a munkáinkról</h1>
    <div class="row">
        <?php
        // Specify the directory where your images are located
        $imageDirectory = "imgs/workphotos";

        // Get a list of all files in the directory
        $files = scandir($imageDirectory);

        // Initialize arrays to store images by aspect ratio
        $imagesByRatio = array(
            "landscape" => array(), // 16:9, 4:3, etc.
            "portrait" => array()   // 9:16, 3:4, etc.
        );

        // Loop through each file
        foreach ($files as $file) {
            // Check if the file is a regular file and ends with a known image extension
            if (is_file($imageDirectory . '/' . $file) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                // Determine aspect ratio
                list($width, $height) = getimagesize($imageDirectory . '/' . $file);
                $aspectRatio = $width / $height;

                // Group images by aspect ratio
                if ($aspectRatio >= 1) {
                    // Landscape orientation
                    $imagesByRatio["landscape"][] = array("file" => $file, "aspectRatio" => $aspectRatio);
                } else {
                    // Portrait orientation
                    $imagesByRatio["portrait"][] = array("file" => $file, "aspectRatio" => $aspectRatio);
                }
            }
        }

        // Sort images by aspect ratio
        foreach ($imagesByRatio as $ratioType => $images) {
            usort($images, function($a, $b) {
                return $a['aspectRatio'] <=> $b['aspectRatio'];
            });

            // Print out the sorted images
            foreach ($images as $image) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $imageDirectory . '/' . $image['file']; ?>" alt="<?php echo $image['file']; ?>" />
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<?php include_once("header/footer.php"); ?>
