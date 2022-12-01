<?php
class PayPayersApi {
    private $_url;
    private $_token;
    function __construct($token) {
        $this->_url   = 'https://paypayers.ru/api/moneyback';
        $this->_token = $token;
    }
    private function sendRequest($method, array $content = []) {
        if( $ch = curl_init() ) {
            $content['token'] = $this->_token;
    curl_setopt($ch, CURLOPT_URL, $this->_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($content));
    $result = curl_exec($ch);
    curl_close($ch);
  }
  
         }
    public function moneyback(Array $params = []) {
        return $this->sendRequest('moneyback', $params);
    }
    
}
    

?>
