<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $ph = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
    FROM ph
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rph = $pdo->query($ph);

    while($row = $rph->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span class='ph avg'>${row['avgVal']}</span></td>
            <td><span class='ph'>${row['min']}</span></td>
            <td><span class='ph'>${row['max']}</span></td>
        <tr>
        _TR;
    }
?>