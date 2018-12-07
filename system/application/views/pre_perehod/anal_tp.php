<!doctype html>
<html lang="en">
<head>
<!--    <meta charset="UTF-8">-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anal_tp.dbf</title>
    <link rel="stylesheet" href="/css/fullpage.css" type="text/css" media="screen,projection"/>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
</head>
<body>
<table class="border-table">
    <thead>
    <tr>
        <th>ture</th>
        <th>tp</th>
        <th>potrorg</th>
        <th>olpkvtorg</th>
        <th>opltenorg</th>
    </tr>
    </thead>
    <tbody>
    <?php $kvt = 0; ?>
    <?php foreach ($records as $rec): ?>
        <tr>
            <td><?php echo $rec['TURE']; ?></td>
            <td><?php echo $rec['TP']; ?></td>
            <td class="td-number"><?php echo prettify_number($rec['POTRORG']); ?></td>
            <td><?php echo $rec['OPLKVTORG']; ?></td>
            <td><?php echo $rec['OPLTENORG']; ?></td>
        </tr>
    <?php $kvt += $rec['POTRORG']; ?>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="2">ИТОГО</th>
        <th class="td-number"><?php echo prettify_number($kvt); ?></th>
        <th colspan="2"></th>
    </tr>
    </tfoot>
</table>
</body>
</html>