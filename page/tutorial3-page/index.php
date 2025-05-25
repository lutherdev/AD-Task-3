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
                    <p>Scenario: An array with names with their final grade, and has to determine the highest grade for them to win a random item!</p>
                    <p>$studs = ['Lelouch' => '95', 'Ayanokoji' => '99', 'Zenitsu' => '84', 'Light' => '93', 'Shikamaru' => '95']</p>
                </div>
            </div>
            <!-- TODO create a way to show each box -->
            <div class="box"> 
                <?php
                    $title = $boxData[4]["title"];
                    $description = $boxData[4]["description"];
                    $scenario = $boxData[4]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[4]["snippet"];
                    $funcName = $boxData[4]["funcName"];
                    $num = 0;
                    ob_start();
                    capitalizeFLetter($arrayStuds);
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class="box"> 
                <?php
                    $title = $boxData[5]["title"];
                    $description = $boxData[5]["description"];
                    $scenario = $boxData[5]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[5]["snippet"];
                    $funcName = $boxData[5]["funcName"];
                    $num = 0;
                    ob_start();
                    capitalizeFLetter($arrayStuds);
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class="box"> 
                <?php
                    $title = $boxData[4]["title"];
                    $description = $boxData[4]["description"];
                    $scenario = $boxData[4]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[4]["snippet"];
                    $funcName = $boxData[4]["funcName"];
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

