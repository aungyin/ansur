<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
$params = json_decode(file_get_contents('php://input'), true);

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// .envファイルを読み込む
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $HOST = 'sv2122.xserver.jp';
$HOST = strTrim($_ENV['HOSTNAME']);
$INFO_USERNAME = strTrim($_ENV['USERNAME']);
$INFO_PASSWORD = strTrim($_ENV['PASSWORD']);
$INFO_EMAIL = strTrim($_ENV['RECIPIENT_MAIL']);
$INFO_COMPANY = '株式会社アンスール';

// 入力情報を取得
$inquryName = empty($params['name']) ? '名前がない' : $params['name'];
$inquryFurigana = $params['furigana'];
$inquryCompanyName = $params['companyName'];
$inquryDepartmentName = $params['departmentName'];
$inquryPhoneNum = $params['phoneNum'];
$inquryEmail = $params['email'];
$inquryChoice = $params['inquryChoice'];
$inquryDetail = $params['inquryDetail'];
// $inquryName = 'てすと　たろう';
// $inquryFurigana = 'テスト　タロウ';
// $inquryCompanyName = 'ダミー株式会社';
// $inquryDepartmentName = '第１開発部';
// $inquryPhoneNum = '0123456789';
// $inquryEmail = 'aungyin19@gmail.com';
// $inquryChoice = 'テストその他その他';
// $inquryDetail = 'お問い合わせ詳細テストテストテストテストテスト。お問い合わせ詳細テストテストテストテストテスト';


// 送信日時
$mailSentDateTime = date( "Y/m/d (D) H:i:s", time() );
// 送信者のIPアドレス
$inquirerIpAddress = $_SERVER["REMOTE_ADDR"];
// 送信者のホスト名
$inquirerHostName = getHostByAddr(getenv('REMOTE_ADDR'));

// 送信者のサーバー情報
$inquirerServerInfo = <<< INFO

送信者のIPアドレス：$inquirerIpAddress
送信者のホスト名：$inquirerHostName

INFO;

// 件名
$contactHeader = "「ホームページのお問い合わせ」からメールが届きました";

// お問い合わせ詳細情報
$contactBody = <<< BODY

==========================================

【お名前】
    $inquryName
【ふりがな】
    $inquryFurigana
【御社名】
    $inquryCompanyName
【部署名】
    $inquryDepartmentName
【電話番号】
    $inquryPhoneNum
【メールアドレス】
    $inquryEmail
【お問い合わせ対象】
    $inquryChoice
【お問い合わせ内容】
    $inquryDetail

==========================================

送信日時：$mailSentDateTime
BODY;

// 自動返信メールの件名
$autoReplySubject = "{$inquryName}様: お問い合わせいただきありがとうございます。";

$autoReplyHeader = <<< HEADER

$inquryName 様

お問い合わせありがとうございました。
早急にご返信致しますので今しばらくお待ちください。

送信内容は以下になります。

HEADER;

$autoReplySingnature = <<< FOOTER

──────────────────────
株式会社アンスール
103-0006　東京都中央区日本橋富沢町3-18　サンウォールビル　4階
TEL：03-6222-8295
E-mail:info@ansurs.co.jp
URL: http://www.ansurs.co.jp/
──────────────────────

FOOTER;


// ================================================
// メール送信
// ================================================

try {
    // メールサーバー設定
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    // $mail->Host = '127.0.0.1';
    // $mail->Port = 3000;
    $mail->Host       = $HOST;                                  // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $INFO_USERNAME;                         // SMTP username
    $mail->Password   = $INFO_PASSWORD;                         // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;                // UTF-8
    $mail->Encoding   = PHPMailer::ENCODING_BASE64;             // base64
    $mail->setFrom($INFO_EMAIL, $INFO_COMPANY);
    $mail->setLanguage('ja', 'vendor/phpmailer/phpmailer/language/');


    // 自動返信メール
    $mail->addAddress($inquryEmail, $inquryName);
    $mail->Subject = $autoReplySubject;
    $mail->Body    = $autoReplyHeader.$contactBody.$autoReplySingnature;
    $mail->send();
    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    // $mail->setFrom($INFO_EMAIL, (empty($inquryName) ? 'HPからのお問い合わせ' : $inquryName));
    $mail->setFrom($INFO_EMAIL, $INFO_COMPANY);


    // 宛先を一度Reset
    $mail->ClearAddresses();


    // infoへのメール
    $mail->addAddress($INFO_EMAIL);
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($inquryEmail, $inquryName);
    $mail->Subject = "【{$inquryChoice}】ホームページからのお問い合わせ";
    $mail->Body    = $contactHeader.$contactBody.$inquirerServerInfo;
    $mail->send();

    echo 'メール送信完了しました。';

} catch (Exception $e) {

  echo "メール送信失敗しました。 Mailer Error: {$mail->ErrorInfo}";

}

// envで取得した後に、最初と最後の'"'が文字とみなされるので削除
function strTrim ($str) {
  $str = ltrim($str, '"');
  $str = rtrim($str, '"');
  return $str;
}
?>