<?
require_once ($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$fio = $_REQUEST['name'];
$phone = $_REQUEST['tel'];
$object = $_REQUEST['object'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$complectation = $_REQUEST['complectation'];
$price = $_REQUEST['price'];

$file = $_FILES['file'];

$arSend = [
    'FIO' => $fio,
    'PHONE' => $phone,
    'EMAIL' => $email,
    'MESSAGE' => $message,
    'COMPLECTATION' => $complectation,
    'PRICE' => $price,
    'OBJECT' => $object
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
        // CEvent::SendImmediate('FORM_PRODUCT', SITE_ID, $arSend, "Y", "", $files);

        $result = [
            'status' => 'ok',
            'rec' => $recap,
        ];

        echo json_encode($result);
    }
}

?>