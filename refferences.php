<!-- header start -->
<?php require_once 'marginalia/header.php'; ?>
<!-- header end -->

    <!--  -->
    <style>
        .reff2{
            height:20rem;
            width: 20rem;
            object-fit: cover;
            border-radius: 25px;
            }
    </style>
    <!--  -->

<div class="container">
    <div class="content">
        <!-- content start -->
        <h2 class="text-center mx-3 my-3">Refferenciáink</h2>
        <div class="row">
            <?php
            function getImagesFromDir($dir) {
                $images = [];
                $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
                foreach ($files as $file) {
                    if ($file->isFile() && in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif'])) {
                        $images[] = $file->getPathname();
                    }
                }
                return $images;
            }

            $images = getImagesFromDir('visual_assets/workphotos');
            foreach ($images as $image) {
                echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
                echo '<img src="' . $image . '" class="reff2 rounded mx-auto d-block mx-1 my-1" alt="...">';
                echo '</div>';
            }
            ?>
        </div>
        <!-- content end -->
    </div>
</div>

<!-- footer start -->
<?php require_once 'marginalia/footer.php'; ?>
<!-- footer end -->
