<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $temp = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,AVG(value) as avgVal,MAX(value) AS max,MIN(value) AS min
    FROM temp
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rtemp = $pdo->query($temp);

    while($row = $rtemp->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span class='temp avg'>${row['avgVal']}</span></td>
            <td><span class='temp'>${row['min']}</span></td>
            <td><span class='temp'>${row['max']}</span></td>
        <tr>
        _TR;
    }
?>