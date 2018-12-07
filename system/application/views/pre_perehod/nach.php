<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nach.dbf</title>
    <link rel="stylesheet" href="/css/fullpage.css" type="text/css" media="screen,projection"/>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
</head>
<body>
<table class="border-table">
    <thead>
    <tr>
        <th>DATA</th>
        <th>NAIM</th>
        <th>DOG</th>
        <th>NACH</th>
        <th>NACH_SUM</th>
        <th>NACH_NDS</th>
        <th>KVT</th>
        <th>NOMERSCHET</th>
        <th>KONDATA</th>
        <th>NPENI</th>
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
        <td><?php echo $rec['DATA']; ?></td>
        <td><?php echo $rec['NAIM']; ?></td>
        <td align="right"><?php echo $rec['DOG']; ?></td>
        <td class="td-number"><?php echo prettify_number($rec['NACH']); ?></td>
        <td class="td-number"><?php echo prettify_number($rec['NACH_NDS']); ?></td>
        <td class="td-number"><?php echo prettify_number($rec['NACH_SUM']); ?></td>
        <td class="td-number"><?php echo prettify_number($rec['KVT']); ?></td>
        <td align="right"><?php echo $rec['NOMERSCHET']; ?></td>
        <td><?php echo $rec['KONDATA']; ?></td>
        <td><?php echo $rec['NPENI']; ?></td>
    </tr>
        <?php
        $kvt += $rec['KVT'];
        $beznds += $rec['NACH'];
        $nds += $rec['NACH_NDS'];
        $snds += $rec['NACH_SUM'];
        ?>
    <?php endforeach; ?>
    <tr>
        <th colspan="3">ИТОГО</th>
        <th class="td-number"><?php echo prettify_number($beznds); ?></th>
        <th class="td-number"><?php echo prettify_number($nds); ?></th>
        <th class="td-number"><?php echo prettify_number($snds); ?></th>
        <th class="td-number"><?php echo prettify_number($kvt); ?></th>
        <th colspan="3"></th>
    </tr>
    </tbody>
</table>
</body>
</html>