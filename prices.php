<?php
// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php include_once("header/header.php"); ?>
        <h1 class="text-center my-2">Áraink</h1>
        <div class="row mx-4 my-4">
            <table class="table table-striped my-4 mx-4 mx-auto text-center">
                <thead style="font-size: 1.3rem;">
                    <tr>
                        <th>Munka</th>
                        <th>Ár</th>
                        <th>Egység</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Festés -->
                    <tr>
                        <th>Festés</th>
                        <th>3500 Ft</th>
                        <th>m<sup>2</sup></th>
                    </tr>
                    <!-- Burkolás -->
                    <tr>
                        <th>Burkolás</th>
                        <th>9000 Ft</th>
                        <th>m<sup>2</sup></th>
                    </tr>
                    <!-- Vakolás  -->
                    <tr>
                        <th>Vakolás</th>
                        <th>5000 Ft</th>
                        <th>m<sup>2</sup></th>
                    </tr>
                    <!-- Parketta  -->
                    <tr>
                        <th>Parkettázás</th>
                        <th>6000 Ft</th>
                        <th>m<sup>2</sup></th>
                    </tr>
                    <!-- Betonozás  -->
                    <tr>
                        <th>Betonozás</th>
                        <th>6000 Ft</th>
                        <th>m<sup>2</sup></th>
                    </tr>
                </tbody>
            </table>
            <small class="muted text-center">Az árak változnak attól függően, milyen munkaméretet, anyagminőséget és mennyiséget vesznek igénybe.</small>
        </div>
    </div>
<?php include_once("header/footer.php"); ?>
