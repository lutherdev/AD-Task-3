<?php
require_once __DIR__ . '/../../utils/capitalizeFLetter.utils.php';
require_once __DIR__ . '/../../utils/getRandId.utils.php';
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/head.component.php';
require_once __DIR__ . '/../../components/nav.component.php';
?>

<?php
head("LEVEL 3", "tutorial3");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div id="hero-text">
                    <h1>PREDEFINED FUNCTIONS!</h1>
                    <p><span>"PREDEFINED"</span> meaning the built in functions of PHP</p>
                    <p><span>Scenario:</span> An array with names with their final grade, and has to determine the highest grade for them to win a random item!</p>
                    <p><span>code declare:</span></p>
                    <p>$studs = [<br>'Lelouch' => '95',<br> 'Ayanokoji' => '99',<br> 'Zenitsu' => '84',<br> 'Light' => '93',<br> 'Shikamaru' => '95'<br>]</p>
                </div>
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
                    $highGrade = max($studs);
                        foreach ($studs as $name => $grade){
                            if ($highGrade == $grade){
                            $topStud = strtoupper($name);
                            break; 
                            }
                        }
                        echo "Congratulations: " . $topStud . "!!";
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class="box"> 
                <?php
                    $title = $boxData[6]["title"];
                    $description = $boxData[6]["description"];
                    $scenario = $boxData[6]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[6]["snippet"];
                    $funcName = $boxData[6]["funcName"];
                    $num = 1;
                    ob_start();
                    $highGrade = max($studs);
                        foreach ($studs as $name => $grade){
                            if ($highGrade == $grade){
                                echo "$name has the highest grade of $grade";
                            }
                        }
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <div class="box"> 
                <?php
                    $title = $boxData[7]["title"];
                    $description = $boxData[7]["description"];
                    $scenario = $boxData[7]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[7]["snippet"];
                    $funcName = $boxData[7]["funcName"];
                    $num = 2;
                    ob_start();
                    $prize = getRandId(0,2);
                    echo "Student: " . $topStud . "<br>";
                    echo "You won {$prizes[$prize]}<br>";
                    echo date("F j, Y g:i A") . "<br>";
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

