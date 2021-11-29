<link rel="stylesheet" href="../css/ewase_all.css">

<script src="../script/ewase.js" defer></script>

<img class="back-image" src="../img/background.jpg">
<h1><img src="../img/parameters/waterTurbidity.png" width=50 height=50>Total Dissolved Solids (mg/l)</h1>
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
        <tr><th>Day</th><th>Average</th><th>Min</th><th>Max</th></tr>
    </thead>
    <tbody>
        <?php

            require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

            $tds = <<<_SELECT
            SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
            FROM tds
            GROUP BY day
            ORDER BY period DESC
            _SELECT;

            $rtds = $pdo->query($tds);

            while($row = $rtds->fetch())
            {
                $cavg = test_vars($row['avgVal']);
                $cday = test_vars($row['day']);
                $cmin = test_vars($row['min']);
                $cmax = test_vars($row['max']);

                echo <<<_TR
                <tr>
                    <td>${cday}</td>
                    <td><span class='tds avg'>${cavg}</span></td>
                    <td><span class='tds'>${cmin}</span></td>
                    <td><span class='tds'>${cmax}</span></td>
                <tr>
                _TR;
            }

        ?>
    </tbody>
</table>