<link rel="stylesheet" href="../css/ewase_all.css">

<script src="../script/ewase.js" defer></script>

<img class="back-image" src="../img/background.jpg">

<h1><img src="../img/parameters/temp.png" width=50 height=50>Temperature (Celsius)</h1>

<table>
    <thead>
        <tr><th>Day</th><th>Average</th><th>Min</th><th>Max</th></tr>
    </thead>
    <tbody>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

            $temp = <<<_SELECT
            SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
            FROM temp
            GROUP BY day
            ORDER BY period DESC
            _SELECT;
        
            $rtemp = $pdo->query($temp);
        
            while($row = $rtemp->fetch())
            {
                $cavg = test_vars($row['avgVal']);
                $cday = test_vars($row['day']);
                $cmin = test_vars($row['min']);
                $cmax = test_vars($row['max']);
        
                echo <<<_TR
                <tr>
                    <td>${cday}</td>
                    <td><span class='temp avg'>${cavg}</span></td>
                    <td><span class='temp'>${cmin}</span></td>
                    <td><span class='temp'>${cmax}</span></td>
                <tr>
                _TR;
            }
        ?>
    </tbody>
</table>