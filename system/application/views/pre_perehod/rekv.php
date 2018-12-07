<!doctype html>
<html lang="en">
<head>
<!--    <meta charset="UTF-8">-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rekv.dbf</title>
    <link rel="stylesheet" href="/css/fullpage.css" type="text/css" media="screen,projection"/>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
</head>
<body>
<table class="border-table">
    <thead>
    <tr>
        <th>name</th>
        <th>dog</th>
        <th>rnn</th>
        <th>direct</th>
        <th>adres</th>
        <th>schet</th>
        <th>tel</th>
        <th>data</th>
        <th>sub</th>
        <th>bank</th>
        <th>mfo</th>
        <th>korr</th>
        <th>adresbank</th>
        <th>otrasl</th>
        <th>bin</th>
        <th>dog1</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($records as $rec): ?>
        <tr>
            <td><?php echo $rec['NAME']; ?></td>
            <td align="right"><?php echo $rec['DOG']; ?></td>
            <td align="right"><?php echo $rec['RNN']; ?></td>
            <td><?php echo $rec['DIRECT']; ?></td>
            <td><?php echo $rec['ADRES']; ?></td>
            <td align="right"><?php echo $rec['SCHET']; ?></td>
            <td><?php echo $rec['TEL']; ?></td>
            <td><?php echo $rec['DATA']; ?></td>
            <td><?php echo $rec['SUB']; ?></td>
            <td><?php echo $rec['BANK']; ?></td>
            <td align="right"><?php echo $rec['MFO']; ?></td>
            <td align="right"><?php echo $rec['KORR']; ?></td>
            <td><?php echo $rec['ADRESBANK']; ?></td>
            <td><?php echo $rec['OTRASL']; ?></td>
            <td align="right"><?php echo $rec['BIN']; ?></td>
            <td align="right"><?php echo $rec['DOG1']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>