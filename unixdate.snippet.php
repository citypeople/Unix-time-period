<?php
// [[unixdate? &input1=`начало периода`   &input1=`конец периода` &addTv=`tv параметр для записи результатов`]]
// &addTv - по умолчанию TV параметр unixdate
$id = $modx->resource->id;
$page = $modx->getObject("modResource", $id);
$addTv = (isset($addTv)) ? $addTv : 'unixdate';

$input1 = (isset($input1)) ? $input1 : "";
$input2 = (isset($input2)) ? $input2 : "";

$date1 = $input1;
$date2 = $input2;
$days = range(strtotime($date1), strtotime($date2), (24 * 60 * 60));
$list = '';
foreach ($days as $day) {
    $day=$day*1000;
    $list .= ($list == '' ? '' : '||') . $day;
}


if (!$page->setTVValue($addTv, $list)) {
$modx->log(xPDO::LOG_LEVEL_ERROR, 'Произошла ошибка при сохранении ТВ');
}

echo $end;
