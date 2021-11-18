<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/ewase/db/db_connect.php");

    // ph recent
    $ph = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM ph
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rph = $pdo->query($ph);
    $row_ph = $rph->fetch();
    $value = $row_ph['value'];
    $periodd = $row_ph['day'];
    $periodt = $row_ph['moment'];

    // turbidity recent
    $tur = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM tur
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rtur = $pdo->query($tur);
    $row_tur = $rtur->fetch();
    $value_tur = $row_tur['value'];
    $periodd_tur = $row_tur['day'];
    $periodt_tur = $row_tur['moment'];

    $tds = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM tds
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rtds = $pdo->query($tur);
    $row_tds = $rtds->fetch();
    $value_tds = $row_tds['value'];
    $periodd_tds = $row_tds['day'];
    $periodt_tds = $row_tds['moment'];

    $ec = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM ec
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rec = $pdo->query($ec);
    $row_ec = $rec->fetch();
    $value_ec = $row_ec['value'];
    $periodd_ec = $row_ec['day'];
    $periodt_ec = $row_ec['moment'];

    $do = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM do
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rdo = $pdo->query($do);
    $row_do = $rdo->fetch();
    $value_do = $row_do['value'];
    $periodd_do = $row_do['day'];
    $periodt_do = $row_do['moment'];

    $vowt = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM vowt
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rvowt = $pdo->query($vowt);
    $row_vowt = $rvowt->fetch();
    $value_vowt = $row_vowt['value'];
    $periodd_vowt = $row_vowt['day'];
    $periodt_vowt = $row_vowt['moment'];

    $temp = <<<_SELECT
    SELECT date(period) AS day,time(period) AS moment,value
    FROM temp
    ORDER BY period DESC
    LIMIT 1;
    _SELECT;

    $rtemp = $pdo->query($temp);
    $row_temp = $rtemp->fetch();
    $value_temp = $row_temp['value'];
    $periodd_temp = $row_temp['day'];
    $periodt_temp = $row_temp['moment'];

    echo <<<_TR
    <tr>
        <td>PH</td>
        <td class='ph'>${value}</td>
        <td>${periodd}</td>
        <td>${periodt}</td>
    </tr>
    <tr>
        <td>Turbidity</td>
        <td class='tur'>${value_tur}</td>
        <td>${periodd_tur}</td>
        <td>${periodt_tur}</td>
    </tr>
    <tr>
        <td>Total Dissolved Solids</td>
        <td class='tds'>${value_tds}</td>
        <td>${periodd_tds}</td>
        <td>${periodt_tds}</td>
    </tr>
    <tr>
        <td>Electrical Conductivity</td>
        <td class='ec'>${value_ec}</td>
        <td>${periodd_ec}</td>
        <td>${periodt_ec}</td>
    </tr>
    <tr>
        <td>Dissolved Oxygen</td>
        <td class='tur'>${value_do}</td>
        <td>${periodd_do}</td>
        <td>${periodt_do}</td>
    </tr>
    <tr>
        <td>Volume Of Water Treated</td>
        <td class='tur'>${value_vowt}</td>
        <td>${periodd_vowt}</td>
        <td>${periodt_vowt}</td>
    </tr>
    <tr>
        <td>Temperature</td>
        <td class='temp'>${value_temp}</td>
        <td>${periodd_temp}</td>
        <td>${periodt_temp}</td>
    </tr>
    _TR;
?>