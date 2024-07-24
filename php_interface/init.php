<?
AddEventHandler('main', 'OnEpilog', array('CMainHandlers', 'OnEpilogHandler'));
class CMainHandlers
{
	public static function OnEpilogHandler()
	{
		if ($GLOBALS['APPLICATION']->GetCurDir() != '/') {
			$title = $GLOBALS['APPLICATION']->GetTitle();
			$GLOBALS['APPLICATION']->SetPageProperty('title', $title . ' — Строительная компания Дворец РФ');
		}
	}
}

function discount_date_end($date)
{
	$check_time = strtotime($date . ' 23:59:59') - time();
	//if ($check_time < 0) return false;
	$days = floor($check_time / 86400);
	$hours = floor(($check_time % 86400) / 3600);
	$minutes = floor(($check_time % 3600) / 60);
	$seconds = $check_time % 60;
	return $days . ' / ' . $hours . ':' . $minutes . ':' . $seconds;
}

define('RECAP_CLIENT', '6LeDv78pAAAAAKum9EZL2ax7NbfbqG_t2YrxniqE');
define('RECAP_SERVER', '6LeDv78pAAAAAOx008jOQcQEytBXbsylK041lqWi');

function checkRecap()
{
	$recaptcha_key = RECAP_SERVER;

	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_params = array(
		'secret' => $recaptcha_key,
		'response' => $_POST['grecaptcha'],
		'remoteip' => $_SERVER['REMOTE_ADDR'],
	);

	$ch = curl_init($recaptcha_url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $recaptcha_params);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($ch);
	if (!empty($response)) {
		$decoded_response = json_decode($response);
	}

	$recaptcha_success = false;

	if ($decoded_response && $decoded_response->score > 0) {
		$recaptcha_success = $decoded_response->score;
		// обрабатываем данные формы, которая защищена капчей
	}

	if ($recaptcha_success > 0.5)
		return $recaptcha_success;

	return 0;

}

function getWatermark($watermark_name)
{
	if (!$watermark_name)
		return false;

	$arWaterMark = [
		[
			'name' => 'watermark',
			'position' => 'center', // (доступные варианты tl|tc|tr|ml|mc|mr|bl|bc|br или topleft|topcenter|topright|centerleft|center|centerright|bottomleft|bottomcenter|bottomright)  
			'type' => 'image',  // (доступные варианты "image|text")
			'size' => 'medium', // ( доступные варианты big|medium|small|real; real доступен только для type=image )
			'file' => $_SERVER['DOCUMENT_ROOT'] . '/upload/watermarks/' . $watermark_name . '.png', // Путь к картинке
			'fill' => 'resize', // ( доступные варианты exact|resize|repeat )
			'alpha_level' => 15, // прозрачность
			//   "coefficient"    => "1",         // ( альтернатива параметру size. В случае текстового варианта - от 1 до 7, по крайней мере так в исходниках; для картинок 0.1 до 1 )
			//   "text"           => "Водяной знак!", //  ( текст водяного знака )
			//   "color"          => "ff0000",        //  ( hex формат цвета текста )
			//   "font"           => $_SERVER["DOCUMENT_ROOT"]."/arial.ttf",      //  ( путь до файла шрифта в формате .ttf )
			//   "use_copyright"  => "Y"              //  ( использовать ли знак копирайта перед текстом )
		]
	];

	return $arWaterMark;
}