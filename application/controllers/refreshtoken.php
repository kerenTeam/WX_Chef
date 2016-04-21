<?php
        defined('APPID','wxa997c956cf6631b0');
        defined('APPSECRET','ee3f2a43a6c508708780dba0c5bd7393');
        $data = json_decode(file_get_contents("../access_token.json"));
        $url= "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APP."";
        $result         = wxHttpsRequest($url);

        //print_r($result);
        $jsoninfo       = json_decode($result, true);
        $access_token   = $jsoninfo["access_token"];
        $_SESSION['update_code']   = $jsoninfo["access_token"];
        
        // if ($access_token) {
        //     $data->expire_time = time() + 7000;
        //     $data->access_token = $access_token;
        //     $fp = fopen("../access_token.json", "w");  
        //     fwrite($fp, json_encode($data));
        //     fclose($fp);
        // }

    
        function wxHttpsRequest($url,$data = null)
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
            if (!empty($data)){
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl);
            curl_close($curl);
            return $output;
        }

?>