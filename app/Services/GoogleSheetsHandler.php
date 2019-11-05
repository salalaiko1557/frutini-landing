<?php

namespace App\Services;

class GoogleSheetsHandler{

    public function saveToGoogleSheet(array $customer)
    {

        $client = $this->getClient();
        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = '1FwG2-9X5hUJ7SJCz2o4YXd--rGp8ELUu8hZr0oxz4cs';
        $range = 'Sheet1!A1:G3';
        $values = [
            [$customer['name'], $customer['email'], $customer['mobile_number'], $customer['name_msngrs'], $customer['mobile_number_mesenger'], $customer['partner_type'], date("Y-m-d H:i:s")]
        ];
        $updateBody = new \Google_Service_Sheets_ValueRange([
            'range' => $range,
            'majorDimension' => 'ROWS',
            'values' => $values,
        ]);
        $params = [
            'valueInputOption' => "USER_ENTERED"
        ];
    
        $result = $service->spreadsheets_values->append($spreadsheetId, $range, $updateBody, $params);
    }

    function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets API PHP Quickstart');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS, \Google_Service_Sheets::DRIVE]);
        $client->setAuthConfig(base_path().'/client_secret.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        $tokenPath = base_path().'/token.json';
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }
        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                printf("Open the following link in your browser:\n%s\n", $authUrl);
                info($authUrl);
                // print 'Enter verification code: ';
                // $authCode = trim(fgets(STDIN));
                
                $authCode = '4/swGI5kwZLhvklSmbbFxk9qBIcpScgJFfIJO05ZMXSwzC93nYXaGIy5U';
                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);

                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new \Exception(join(', ', $accessToken));
                }
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }
}