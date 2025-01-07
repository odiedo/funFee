<?php

class MpesaSTKPush {
    private $baseUrl;
    private $accessToken;
    
    public function __construct($accessToken, $isSandbox = true) {
        $this->baseUrl = $isSandbox ? 
            'https://sandbox.safaricom.co.ke' : 
            'https://api.safaricom.co.ke';
        $this->accessToken = $accessToken;
    }

    public function initiateSTKPush($params) {
        try {
            // Validate required parameters
            $requiredParams = [
                'BusinessShortCode',
                'Password',
                'Timestamp',
                'TransactionType',
                'Amount',
                'PartyA',
                'PartyB',
                'PhoneNumber',
                'CallBackURL',
                'AccountReference',
                'TransactionDesc'
            ];
            
            foreach ($requiredParams as $param) {
                if (!isset($params[$param]) || empty($params[$param])) {
                    throw new Exception("Missing required parameter: {$param}");
                }
            }
            
            // Initialize cURL session
            $ch = curl_init($this->baseUrl . '/mpesa/stkpush/v1/processrequest');
            
            // Set cURL options
            curl_setopt_array($ch, [
                CURLOPT_HTTPHEADER => [
                    'Authorization: Bearer ' . $this->accessToken,
                    'Content-Type: application/json'
                ],
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => json_encode($params),
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYPEER => false, // Only for development/sandbox
                CURLOPT_TIMEOUT => 30
            ]);
            
            // Execute cURL request
            $response = curl_exec($ch);
            
            // Check for cURL errors
            if (curl_errno($ch)) {
                throw new Exception('cURL Error: ' . curl_error($ch));
            }
            
            // Get HTTP status code
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            // Decode JSON response
            $decodedResponse = json_decode($response, true);
            
            if ($httpCode !== 200) {
                throw new Exception(
                    'HTTP Error: ' . $httpCode . 
                    ', Response: ' . $response
                );
            }
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Invalid JSON response: ' . $response);
            }
            
            return $decodedResponse;
            
        } catch (Exception $e) {
            // Log error for debugging
            error_log('M-Pesa STK Push Error: ' . $e->getMessage());
            
            // Return error response
            return [
                'error' => true,
                'message' => $e->getMessage(),
                'code' => isset($httpCode) ? $httpCode : 500
            ];
        }
    }
}

// Usage example
try {
    $mpesa = new MpesaSTKPush('6oT3AFmWBdu0cK79EbrzqKdGbQ3D', true);
    
    $stkParams = [
        'BusinessShortCode' => 174379,
        'Password' => 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjUwMTA3MTIzNzQ2',
        'Timestamp' => '20250107123746',
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => 1,
        'PartyA' => 254708374149,
        'PartyB' => 174379,
        'PhoneNumber' => 254743050069,
        'CallBackURL' => 'https://mydomain.com/path',
        'AccountReference' => 'FunCorpDev',
        'TransactionDesc' => 'App services'
    ];
    
    $response = $mpesa->initiateSTKPush($stkParams);
    
    if (isset($response['error'])) {
        // Handle error
        echo json_encode($response);
    } else {
        // Handle success
        echo json_encode($response);
    }
    
} catch (Exception $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
}