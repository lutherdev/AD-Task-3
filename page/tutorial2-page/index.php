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
            <div class="box">
                <?php
                    $title = $boxData[4]["title"];
                    $description = $boxData[4]["description"];
                    $scenario = $boxData[4]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[4]["snippet"];
                    $funcName = $boxData[4]["funcName"];
                    $num = 1;
                    ob_start();
                    $newStuds = [];
                    foreach ($arrayStuds as $itStud){
                        $newStuds[$itStud] = 300; 
                    }
                    foreach ($newStuds as $itStud => $money){
                        echo "User: $itStud, Balance: $money <br>";
                    }
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class ="pageButton">
                <a href="../tutorial-page/index.php">BACK</a>
                <a href="../tutorial3-page/index.php">NEXT</a>
            </div>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

