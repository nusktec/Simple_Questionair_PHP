<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['token']) && $_SESSION['token'] != true) {
    header("location: index.php");
}
require('../mysqli.class.php');

include "../config.php";

$db = new Db();
?>
<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DRF Admin</title>
    <meta name="description" content="Dashboard UI Kit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/main.min.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<header class="c-navbar u-mb-medium">
    <a class="c-navbar__brand" href="#!">
        <img src="" alt="DRF LOGO">
    </a>


</header>

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-xl-12">
            <main>
                <div class="row">

                </div><!-- // .row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="c-table-responsive@tablet">
                            <table class="c-table u-mb-large">
                                <caption class="c-table__title">
                                    Form Submitted
                                    <small>0 Registered</small>
                                </caption>
                                <thead class="c-table__head c-table__head--slim">
                                <tr>
                                    <th class="c-table__cell c-table__cell--head">S/N</th>
                                    <th class="c-table__cell c-table__cell--head">Name</th>
                                    <th class="c-table__cell c-table__cell--head">Data</th>
                                    <th class="c-table__cell c-table__cell--head">Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php
                                $rd = $db->query("select * from data");
                                $rd = $rd->fetch_all(MYSQLI_ASSOC);
                                $sn = 0;
                                foreach ($rd as $data) {
                                    $sn++;
                                    ?>
                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><?php echo $sn; ?>
                                        </td>

                                        <td class="c-table__cell"><?php echo $data['name']; ?></td>

                                        <td class="c-table__cell">JSON / ARRAY</td>

                                        <td class="c-table__cell">
                                            <a class="c-btn c-btn--success" href="?view=<?php echo $data['id']; ?>">View
                                                Details</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<script src="js/main.min.js"></script>
</body>
</html>