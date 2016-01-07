<?php
require 'datas.php';
require 'lib/table.php'
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Compteurs de valeurs chiffrées</title>
        <link rel="stylesheet" href="/asset/css/style.css" media="screen" charset="utf-8">
    </head>
    <body>
        <header id="header">
            <div class="container">
                <h1>Compteurs de valeurs chiffrées</h1>
            </div>
        </header>

        <main id="content">
            <div class="container">

                <h2>Les DUT</h2>
                <?= makeTable($duts, 'dut'); ?>

                <h2>Les licences</h2>
                <?= makeTable($licences, 'licence'); ?>
            </div>
        </main>

        <footer id="footer">
            <div class="container">
                <p>
                    <span class="copyleft">&copy;</span> 2016 &bull; Hugo Alliaume, Justin Escalier, Nicolas Pourprix
                </p>
            </div>
        </footer>
        <script src="asset/js/app.js" charset="utf-8"></script>
    </body>
</html>
