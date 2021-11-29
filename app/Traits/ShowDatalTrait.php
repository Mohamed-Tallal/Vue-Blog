<?php

namespace App\Traits;

trait ShowDatalTrait{

    public function SuccessWithData($mesage,$data, $count= null) {

        return[
            'statues' => true,
            'code' => 200,
            'message' => $mesage,
            'count' =>$count,
            'data' => $data
            ];
    }

    public function errorValidation($mesage,$error){
        return[
            'statues' => false,
            'code' => 500,
            'message' => $mesage,
            'error' => $error
        ];
    }

    public function Succes($mesage){
        return[
            'statues' => true,
            'code' => 200,
            'message' => $mesage,

        ];
    }
    public function ErrorFind($mesage){
        return[
            'statues' => false,
            'code' => 404,
            'message' => $mesage,

        ];
    }
}

