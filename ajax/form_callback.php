<?
require_once ($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$phone = $_REQUEST['phone'];
$hour_start = $_REQUEST['hour_start'];
$hour_end = $_REQUEST['house_end'];

$minute_start = $_REQUEST['minute_start'];
$minute_end = $_REQUEST['minute_end'];

$time = '';

$type_event = 'FORM_CALLBACK';

if ($hour_start || $hour_end || $minute_start || $minute_end) {
	if ($hour_start || $minute_start)
		$time .= 'с ' . $hour_start . ':' . $minute_start . ' ';
	if ($hour_end || $minute_end)
		$time .= 'до ' . $hour_end . ':' . $minute_end;
}



$arSend = [
	'PHONE' => $phone,
	'TIME' => $time,
];

if ($object_id) {
	$arSend['OBJECT_ID'] = $object_id;
	$type_event = 'FORM_CALLBACK_OBJECT';
}


if (isset($_POST['grecaptcha'])) {
	$recap = checkRecap();

	if ($recap) {
		CEvent::SendImmediate($type_event, SITE_ID, $arSend);

		$result = [
			'status' => 'ok',
			'rec' => $recap,
		];

		echo json_encode($result);
	}
}
?>