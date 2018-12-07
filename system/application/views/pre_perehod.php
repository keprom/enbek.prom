<?php
$links = array(
    "billing/perehod" => array(
        "title" => "Перейти в след месяц"
    ),
    "billing/dbase" => array(
        "title" => "Импортировать оплату"
    ),
    "billing/pre_nachislenie_v_analiz" => array(
        "title" => "Экспортировать начисление в анализ по ТП",
        "read_link" => "billing/open_anal_tp_dbf"
    ),
    "billing/nachislenie_v_buhgalteriu" => array(
        "title" => "Перенос начисления в бухгалтерию",
        "read_link" => "billing/open_nach_dbf"
    ),
    "billing/perenos_rek1" => array(
        "title" => "Перенос реквизитов",
        "read_link" => "billing/open_rekv_dbf"
    ),
    "billing/perenos_nach" => array(
        "title" => "Перенос начисления в 1С 8.3",
        "read_link" => "billing/open_schet_dbf"
    ),
    "billing/tariff_list" => array(
        "title" => "Тарифы",
    )
);
foreach ($links as $key => $value):
    if (array_key_exists($key, $last_user_actions)) {
        $links[$key]['last_time'] = $last_user_actions[$key];
    } else {
        $links[$key]['last_time'] = '-';
    }
endforeach;
?>
<table class="border-table">
    <thead>
    <tr>
        <th>Операция</th>
        <th>Дата последнего запуска</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($links as $key => $value): ?>
        <tr style="margin: 10px;">
            <td style="padding: 10px;"><?php echo anchor($key, $value['title']); ?></td>
            <td style="padding: 10px;" align="center"><?php echo $value['last_time']; ?></td>
            <?php if (array_key_exists('read_link', $value)):?>
                <td style="padding: 10px;" align="center"><?php echo anchor($value['read_link'],"Открыть");?></td>
            <?php else:?>
                <td style="padding: 10px;" align="center"></td>
            <?php endif;?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>