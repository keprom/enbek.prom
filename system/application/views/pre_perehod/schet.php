<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schet.dbf</title>
    <link rel="stylesheet" href="/css/fullpage.css" type="text/css" media="screen,projection"/>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
</head>
<body>
<table class="border-table">
    <thead>
    <tr>
        <th>dog</th>
        <th>kvt</th>
        <th>tarif</th>
        <th>beznds</th>
        <th>nds</th>
        <th>snds</th>
        <th>nomer</th>
        <th>data</th>
        <th>dog1</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $kvt = 0;
    $beznds = 0;
    $nds = 0;
    $snds = 0;
    ?>
    <?php foreach ($records as $rec): ?>
        <tr>
            <td align="right"><?php echo $rec['DOG']; ?></td>
            <td class="td-number"><?php echo $rec['KVT']; ?></td>
            <td class="td-number"><?php echo $rec['TARIF']; ?></td>
            <td class="td-number"><?php echo $rec['BEZNDS']; ?></td>
            <td class="td-number"><?php echo $rec['NDS']; ?></td>
            <td class="td-number"><?php echo $rec['SNDS']; ?></td>
            <td class="td-number"><?php echo $rec['NOMER']; ?></td>
            <td><?php echo $rec['DATA']; ?></td>
            <td align="right"><?php echo $rec['DOG1']; ?></td>
        </tr>
        <?php
        $kvt += $rec['KVT'];
        $beznds += $rec['BEZNDS'];
        $nds += $rec['NDS'];
        $snds += $rec['SNDS'];
        ?>
    <?php endforeach; ?>
    <tfoot>
    <tr>
        <th>ИТОГО</th>
        <th class="td-number"><?php echo prettify_number($kvt); ?></th>
        <th></th>
        <th class="td-number"><?php echo prettify_number($beznds); ?></th>
        <th class="td-number"><?php echo prettify_number($nds); ?></th>
        <th class="td-number"><?php echo prettify_number($snds); ?></th>
        <th colspan="3"></th>
    </tr>
    </tfoot>
    </tbody>
</table>
</body>
</html>