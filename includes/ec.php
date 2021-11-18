<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $ec = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
    FROM ec
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rec = $pdo->query($ec);

    while($row = $rec->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span class='ec avg'>${row['avgVal']}</span></td>
            <td><span class='ec'>${row['min']}</span></td>
            <td><span class='ec'>${row['max']}</span></td>
        <tr>
        _TR;
    }
?>