<?
$date1 = '2015-07-21';
$date2 = '2015-07-24';
$days = range(strtotime($date1), strtotime($date2), (24 * 60 * 60));
$list = '';
foreach ($days as $day) {
	$day=$day*1000;
    $list .= ($list == '' ? '' : '||') . $day;
}
// Результат, разделенный ||
echo $list;
?>
