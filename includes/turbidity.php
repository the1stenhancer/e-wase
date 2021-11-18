<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $tur = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
    FROM tur
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rtur = $pdo->query($tur);

    while($row = $rtur->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span class='tur avg'>${row['avgVal']}</span></td>
            <td><span class='tur'>${row['min']}</span></td>
            <td><span class='tur'>${row['max']}</span></td>
        <tr>
        _TR;
    }
?>