<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    $vowt = <<<_SELECT
    SELECT date(period) AS day,value
    FROM vowt
    GROUP BY day
    ORDER BY period DESC
    LIMIT 5
    _SELECT;

    $rvowt = $pdo->query($vowt);

    while($row = $rvowt->fetch())
    {
        echo <<<_TR
        <tr>
            <td>${row['day']}</td>
            <td><span>${row['value']}</span></td>
        <tr>
        _TR;
    }
?>