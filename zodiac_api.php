<?php 
    function zodiac_sign($date_of_birth){

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://zodiac-sign.p.rapidapi.com/sign?date=".$date_of_birth,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: zodiac-sign.p.rapidapi.com",
                "x-rapidapi-key: cfdd4152afmshada68913f2cc187p110843jsn22640b564f1c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return $err;
        } else {
            return $response;
        }
    }
    
?>