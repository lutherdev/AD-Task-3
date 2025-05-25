<?php
require_once __DIR__ . '/../../utils/capitalizeFLetter.utils.php';
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/head.component.php';
require_once __DIR__ . '/../../components/nav.component.php';
?>

<?php
head("LEVEL 2", "tutorial2");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div id="hero-text">
                    <h1>PREDEFINED FUNCTIONS!</h1>
                    <p>"PREDEFINED" meaning the built in functions of PHP, and here some category to use it on</p>
                    <p>String Manipulation, Number Manipulation, and Date Manipulation</p>
                </div>
            </div>
            <div class="box"> //TODO create a way to show each box
                <?php
                    $title = $boxData[3]["title"];
                    $description = $boxData[3]["description"];
                    $scenario = $boxData[3]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[3]["snippet"];
                    $funcName = $boxData[3]["funcName"];
                    $num = 0;
                    ob_start();
                    capitalizeFLetter($arrayStuds);
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class ="pageButton">
                <a href="../tutorial2-page/index.php">BACK</a>
            </div>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

