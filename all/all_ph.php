
<link rel="stylesheet" href="../css/ewase_all.css">

<script src="../script/ewase.js" defer></script>

<img class="back-image" src="../img/background.jpg">
<h1><img src="../img/parameters/waterPH.png" width=50 height=50>PH Overview</h1>
<div class="colors">
    <em><span id="blue"> </span> Perfect</em>
    <em><span id="green"> </span> Acceptable</em>
    <em><span id="orange"> </span> Acidic</em>
    <em><span id="red"> </span> Alkaline</em>
</div>
<table>
    <thead>
        <tr><th>Day</th><th>Average</th><th>Min</th><th>Max</th></tr>
    </thead>
    <tbody>
        <?php

            require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

            $ph = <<<_SELECT
            SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
            FROM ph
            GROUP BY day
            ORDER BY period DESC
            _SELECT;

            $rph = $pdo->query($ph);

            while($row = $rph->fetch())
            {
                $cavg = test_vars($row['avgVal']);
                $cday = test_vars($row['day']);
                $cmin = test_vars($row['min']);
                $cmax = test_vars($row['max']);

                echo <<<_TR
                <tr>
                    <td>${cday}</td>
                    <td><span class='ph avg'>${cavg}</span></td>
                    <td><span class='ph'>${cmin}</span></td>
                    <td><span class='ph'>${cmax}</span></td>
                <tr>
                _TR;
            }

        ?>
    </tbody>
</table>