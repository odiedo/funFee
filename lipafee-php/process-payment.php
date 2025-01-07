<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Limit this to specific origins in production
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle CORS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit();
}

// Configuration
define('MPESA_ENDPOINT', 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
define('TOKEN_ENDPOINT', 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
define('BUSINESS_SHORT_CODE', '174379');
define('CALLBACK_URL', 'https://mydomain.com/callback'); // Update with your callback URL
define('CONSUMER_KEY', 'LCxhGXpbXpJU8RVGdlu5QkZvywzbqqzuWGJRJ4cFqTBPkE2i'); // Replace with your consumer key
define('CONSUMER_SECRET', 'A3gGbtQQUjvbFDDKe1xzu7xuuMfBfCbTS813hmo2jPIlT6iYGqw9xXxgGUTnnFnt'); // Replace with your consumer secret
define('PASSKEY', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919'); // Replace with your M-Pesa passkey

/**
 * Generate an access token from Safaricom's API.
 */
function generateAccessToken()
{
    $credentials = base64_encode(CONSUMER_KEY . ':' . CONSUMER_SECRET);
    $ch = curl_init(TOKEN_ENDPOINT);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => ['Authorization: Basic ' . $credentials],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        throw new Exception('Failed to generate access token: ' . $error);
    }

    $result = json_decode($response, true);
    if (!isset($result['access_token'])) {
        throw new Exception('Invalid access token response');
    }

    return $result['access_token'];
}

/**
 * Format a phone number to international format (e.g., +254...).
 */
function formatPhoneNumber($phone)
{
    $phone = preg_replace('/\D/', '', $phone); // Remove non-numeric characters
    if (strlen($phone) === 9) {
        return '254' . $phone;
    } elseif (strlen($phone) === 10 && $phone[0] === '0') {
        return '254' . substr($phone, 1);
    } elseif (strlen($phone) === 12 && substr($phone, 0, 3) === '254') {
        return $phone;
    }

    throw new Exception('Invalid phone number format');
}

/**
 * Initiate an STK push request.
 */
function initiateStkPush($phone, $amount)
{
    $timestamp = date('YmdHis');
    $password = base64_encode(BUSINESS_SHORT_CODE . PASSKEY . $timestamp);

    $stkRequest = [
        'BusinessShortCode' => BUSINESS_SHORT_CODE,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phone,
        'PartyB' => BUSINESS_SHORT_CODE,
        'PhoneNumber' => $phone,
        'CallBackURL' => CALLBACK_URL,
        'AccountReference' => 'Payment',
        'TransactionDesc' => 'Payment via STK Push'
    ];

    $accessToken = generateAccessToken();

    $ch = curl_init(MPESA_ENDPOINT);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($stkRequest),
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json'
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($error) {
        throw new Exception('Network error during STK Push: ' . $error);
    }

    $result = json_decode($response, true);
    if ($httpCode !== 200 || !isset($result['ResponseCode']) || $result['ResponseCode'] !== '0') {
        $errorMessage = $result['errorMessage'] ?? 'Unknown error occurred';
        throw new Exception('M-Pesa API error: ' . $errorMessage);
    }

    return $result;
}

// Main logic
try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    $input = json_decode(file_get_contents('php://input'), true);
    if (!$input || !isset($input['phone']) || !isset($input['amount'])) {
        throw new Exception('Missing required parameters: phone or amount');
    }

    $phone = formatPhoneNumber($input['phone']);
    $amount = filter_var($input['amount'], FILTER_VALIDATE_INT);
    if ($amount === false || $amount < 1) {
        throw new Exception('Invalid amount');
    }

    $response = initiateStkPush($phone, $amount);

    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'STK Push initiated successfully',
        'data' => $response
    ]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>
