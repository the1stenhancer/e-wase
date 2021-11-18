<!DOCTYPE html>
<html>
    <head>
        <title>eWASE</title>
        <meta charset="utf8">
        <meta name="author" content="prantix">
        <meta name="description" content="SDG On portable water for all.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="img/parameters/planet-earth.png">
        <link rel="stylesheet" href="css/ewase.css">
        <script src="script/ewase.js" defer></script>
    </head>
    <body>
        <img class="back-image" src="img/sky1.jpeg">
        <header>
            <div class="sdg">
                <div>
                    <img class="sdg-img" src="img/sdg.jpg">
                </div>
                <div>
                    <img class="sdg-img" src="img/sdg3.jpeg">
                </div>
                <div>
                    <img class="sdg-img" src="img/sdg6.jpeg">
                </div>
            </div>
            <div class="logo">
                <img src="img/background.jpg">
                <h1><em>e</em>-WASE</h1>
                <p>Monitoring and control platform</p>
            </div>
        </header>
        <div class="col2">
            <div class="col1">
                <h3>Physico-Chemical Parameters</h3>
                <div class="col2-2">
                    <ul>
                        <li><a href="#ph">PH</a></li>
                        <li><a href="#tur">Turbidity</a></li>
                        <li><a href="#tds">TDS</a></li>
                        <li><a href="#ec">EC</a></li>
                        <li><a href="#do">DO</a></li>
                        <li><a href="#vowt">VOWT</a></li>
                        <li><a href="#temp">TEMP</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <h3>Devices</h3>
                <p><a class="devices" href="#devices">Status</a></p>
            </div>
        </div>
        <div class="location">
            <img src="img/parameters/planet-earth.png">
            <div>
                <p>Cameroon, Centre</p>
                <p>Yaounde, Ekounou</p>
            </div>
        </div>
        <main>
            <section id="recent">
                <h2>Recent Values</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Properties</th>
                            <th>Value</th>
                            <th>Day</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/recents.php");
                        ?>
                    </tbody>
                </table>
            </section>
            <section id="parameters">
                <h2>Detail Parameter Overview</h2>
                <article id="ph">
                    <h3><img src="img/parameters/waterPH.png" width=50 height=50>PH</h3>
                    <div class="colors">
                        <em><span id="blue"> </span> Perfect</em>
                        <em><span id="green"> </span> Acceptable</em>
                        <em><span id="orange"> </span> Acidic</em>
                        <em><span id="red"> </span> Alkaline</em>
                    </div>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/ph.php"); ?></tbody>
                    </table>
                    <a href="all/all_ph.php" target="_blank">View all</a>
                </article>
                <hr>
                <article id="tur">
                    <h3><img src="img/parameters/waterTurbidity.png" width=50 height=50>Turbidity (NTU)</h3>
                    <div class="colors">
                        <em><span id="blue"> </span> Perfect</em>
                        <em><span id="green"> </span> Acceptable</em>
                        <em><span id="orange"> </span> In-range</em>
                        <em><span id="brown"> </span> dirty</em>
                        <em><span id="darkbrown"> </span> muddy</em>
                    </div>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/turbidity.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
                <hr>
                <article id="tds">
                    <h3><img src="img/parameters/waterTurbidity.png" width=50 height=50>Total Dissolved Solids (mg/l)</h3>
                    <div class="colors">
                        <div>
                            <em><span id="whitesmoke"> </span> Ideal</em>
                            <em><span id="skyblue"> </span> Drinkable</em>
                            <em><span id="darkblue"> </span> Hard Water</em>
                            <em><span id="purple"> </span> Marginally Acceptable</em>
                        </div>
                        <div>
                            <em><span id="orange"> </span> High TDS</em>
                            <em><span id="red"> </span> Don't Drink this</em>
                            <em><span id="green"> </span> Avg Tap water</em>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/tds.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
                <hr>
                <article id="ec">
                    <h3><img src="img/parameters/conductivity.png" width=50 height=50>Electrical Conductivity (uS/cm)</h3>
                    <div class="colors">
                        <div>
                            <em><span id="whitesmoke"> </span> Ideal</em>
                            <em><span id="skyblue"> </span> Drinkable</em>
                            <em><span id="darkblue"> </span> Hard Water</em>
                            <em><span id="purple"> </span> Marginally Acceptable</em>
                        </div>
                        <div>
                            <em><span id="orange"> </span> High TDS</em>
                            <em><span id="red"> </span> Don't Drink this</em>
                            <em><span id="green"> </span> Avg Tap water</em>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/ec.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
                <hr>
                <article id="do">
                    <h3><img src="img/parameters/bubbles.png" width=50 height=50>Dissolved Oxygen (mg/l)</h3>
                    <div class="colors">
                        <em><span id="blue"> </span> Perfect</em>
                        <em><span id="green"> </span> Acceptable</em>
                        <em><span id="orange"> </span> In-range</em>
                        <em><span id="brown"> </span> Not Acceptable</em>
                        <div>
                            <em><span id="darkbrown"> </span> Don't Drink this</em>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/do.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
                <hr>
                <article id="temp">
                    <h3><img src="img/parameters/temp.png" width=50 height=50>Temperature (Celsius)</h3>
                    <table>
                        <thead>
                            <th>Day</th><th>Average</th><th>Min</th><th>Max</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/temp.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
                <hr>
                <article id="vowt">
                    <h3><img src="img/parameters/flask.png" width=50 height=50>Volume Of Water Treated (l)</h3>
                    <table>
                        <thead>
                            <th>Day</th><th>Treated</th>
                        </thead>
                        <tbody><?php include_once($_SERVER['DOCUMENT_ROOT']."/ewase/includes/vowt.php"); ?></tbody>
                    </table>
                    <a href="">View all</a>
                </article>
            </section>
        </main>
        <hr>
        <footer>
            <em>&copy;2021 eWASE by PARRISS</em>
            <div class="attributions">
                <div>PH icon made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                <div>Turbidity icon made by <a href="https://www.flaticon.com/authors/bomsymbols" title="BomSymbols">BomSymbols</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
            </div>
        </footer>
    </body>
</html>