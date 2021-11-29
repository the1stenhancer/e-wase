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