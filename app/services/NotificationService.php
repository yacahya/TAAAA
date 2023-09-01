<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;



class NotificationService
{
    public function wa($untuk, $pesan)
    {
        $token = "htTrUqzqcDsk54T63GYesqmiaE9VcRDhb0IdpcnYcceXQsBYyjcQCcIX1prLQjj2";
        $response = Http::withHeaders([
            "Authorization" =>$token,
        ])->post('https://kudus.wablas.com/api/send-message',[
            "phone"=> $untuk,
            "message"=> $pesan,
        ]);

        return $response->json();
    }
}