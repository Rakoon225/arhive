<?
require_once ($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$fio = $_REQUEST['fio'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$arSend = [
    'FIO' => $fio,
    'PHONE' => $phone,
    'EMAIL' => $email,
    'MESSAGE' => $message
];

$files = [];
if ($_FILES['file']) {
    $arr_file = array(
        "name" => $_FILES['file']['name'],
        "size" => $_FILES['file']['size'],
        "tmp_name" => $_FILES['file']['tmp_name'],
        "type" => "",
        "old_file" => "",
        //"del" => "Y",
        "MODULE_ID" => "iblock"
    );

    $fid = CFile::SaveFile($arr_file, "form_product");

    if ($fid > 0):
        $files[] = $fid;
    endif;
}

if (isset($_POST['grecaptcha'])) {
    $recap = checkRecap();

    if ($recap) {
        CEvent::SendImmediate('FORM_REQUEST', SITE_ID, $arSend, "Y", "", $files);

        $result = [
            'status' => 'ok',
            'rec' => $recap,
        ];

        echo json_encode($result);
    }
}

?>