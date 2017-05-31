<html>
<head>
    <?php require_once("include/loadConfig.php") ?>
    <?php require_once("include/loadAssets.html") ?>
    <?php require_once("include/loadNavbar.html") ?>
    <title>BetaVille Web 2017 Draft</title>
</head>
<body>
<div class="container-fluid">
    <div class="flex-row">
        <div class="p-3">
            <div id="loadSectionLeft"></div>
        </div>
        <div class="p-3">
            <div id="loadSectionMiddle"></div>
        </div>
        <div class="p-6">
            <div id="loadSectionModelView"></div>
        </div>
    </div>
</div>
</body>
<footer>
    <script>
        $(document).ready(function() {
            getCities();
            $("#bremenMenu").click(function () {
                console.log("Bremen menu pressed");
                $("#loadSectionLeft").load("load/bremenMenuContent.html");
            });
        });
    </script>
</footer>
</html>