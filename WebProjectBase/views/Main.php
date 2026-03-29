<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Aprenentatge per Projectes</title>
        <meta charset="UTF-8">
        <meta name="title" content="Portal del Modul 3">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <header class="title">
            <h2>Aprenentatge per Projectes</h2>
            <section id="menu">
                <nav> 
                    <a href="activities/NumbersView.html" class="optmenu">NUMBERS & ARRAYS</a>
                    <a href="activities/StringsView.html" class="optmenu">STRINGS</a>
                    <a href="activities/ArrayAssocView.html" class="optmenu">ARRAYS_ASSOC</a>
                </nav>
            </section>
        </header>

        <main class="app-container">
            <aside id="leftside">
                <div class="darkstyle">
                    <h4>Navegació</h4>
                    <nav>
                        <!-- Sidebar space reserved -->
                        <br><br><br>
                    </nav>
                </div>
            </aside>

            <section id="central">
                <h3>PORTAL FONAMENTS PROGRAMACIO PHP</h3>
                <article>
                    <?php
                    if (($user = filter_input(INPUT_COOKIE, 'user')) != null) {
                        echo "<p>Benvingut, <strong>$user</strong>. Continua el teu aprenentatge al nostre portal.</p>";
                        $level = filter_input(INPUT_COOKIE, 'level');
                        $points = filter_input(INPUT_COOKIE, 'points');
                        echo "<p>Escull un repte en funció del teu nivell actual: <strong>$level</strong> ($points punts)</p>";
                        
                        echo "<div style='margin-top: 1.5rem; display: flex; flex-direction: column; gap: 0.5rem;'>";
                        echo "<p><a href=\"../controllers/challenges/MathChallengeController.php\" class='optmenu' style='margin-left:0;'>Supera el repte Matematic</a></p>";
                        if ($level > 1) {
                            echo "<p><a href=\"../controllers/challenges/StringChallengeController.php\" class='optmenu' style='margin-left:0;'>Superar el repte amb Strings</a></p>";
                        }
                        if ($level > 2) {
                            echo "<p><a href=\"../controllers/challenges/ArrayChallengeController.php\" class='optmenu' style='margin-left:0;'>Superar el repte amb Arrays</a></p>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p><a href=\"../index.html\" class='optmenu' style='margin-left:0;'>Tornar a la pàgina principal</a></p>";
                    }
                    ?> 
                </article>
            </section>

            <aside id="rightside">
                <div class="darkstyle">
                    <h4>Referencies utils</h4>
                    <nav>
                        <a href="https://www.php.net/manual/es/" class="optmenu">PHP.NET</a>  
                        <a href="https://www.w3schools.com/php/default.asp" class="optmenu">W3CSCHOOLS</a> 
                    </nav>
                </div>
            </aside>
        </main>

        <footer>
            <div class="darkstyle">  
                <p>Autor: Jose Meseguer</p> 
            </div>           		
        </footer>
    </body>
</html>   