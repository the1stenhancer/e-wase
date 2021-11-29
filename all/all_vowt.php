<link rel="stylesheet" href="../css/ewase_all.css">

<script src="../script/ewase.js" defer></script>

<img class="back-image" src="../img/background.jpg">

<h1><img src="../img/parameters/flask.png" width=50 height=50>Volume Of Water Treated (l)</h1>

<table>
    <thead>
        <tr><th>Day</th><th>Value</th></tr>
    </thead>
    <tbody>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

            $vowt = <<<_SELECT
            SELECT date(period) AS day,value
            FROM vowt
            GROUP BY day
            ORDER BY period DESC
            _SELECT;
        
            $rvowt = $pdo->query($vowt);
        
            while($row = $rvowt->fetch())
            {
                $cvalue = test_vars($row['value']);
                $cday = test_vars($row['day']);
        
                echo <<<_TR
                <tr>
                    <td>${cday}</td>
                    <td><span>${cvalue}</span></td>
                <tr>
                _TR;
            }
        ?>
    </tbody>
</table>