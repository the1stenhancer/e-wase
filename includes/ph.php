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