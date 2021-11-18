<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $tds = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
    FROM tds
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rtds = $pdo->query($tds);

    while($row = $rtds->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span class='tds avg'>${row['avgVal']}</span></td>
            <td><span class='tds'>${row['min']}</span></td>
            <td><span class='tds'>${row['max']}</span></td>
        <tr>
        _TR;
    }
?>