<?php
require_once __DIR__ . '/../../utils/capitalizeFLetter.utils.php';
require_once __DIR__ . '/../../utils/getRandId.utils.php';
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/head.component.php';
require_once __DIR__ . '/../../components/nav.component.php';
?>

<?php
head("THE BEGINNING", "congrats");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div id="hero-text">
                    <h1>CONGRATULATIONS PROGRAMMER!</h1>
                    <p><span>YOU</span> now know the basics of PHP! <br> #GetCertifiedPHP</p>
                </div>
            </div>
            <div class ="pageButton">
                <a href="../tutorial2-page/index.php">BACK</a>
                <a href="/index.php">BACK TO HOME</a>
            </div>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

