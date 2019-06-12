<?php

if(!function_exists('unformatter')){

    function unformatter($val, $type){

        $newType = strtolower($type);

        if($newType == "cnpj"){
            return str_replace('/', '', str_replace('-', '', str_replace('.', '', $val)));
        }

        if($newType == "phone"){
            return str_replace(')', '', str_replace('(', '', str_replace(' ', '', str_replace('-', '', $val))));
        }
    }

}

if(! function_exists('cpf')){

    function cpf($cpf) {

        if (! $cpf) {

            return '';

        }

        if (strlen($cpf) == 11) {

            return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9);

        }

        return $cpf;

    }

}

if(! function_exists('cnpj')){

    function cnpj($cnpj) {

        if (! $cnpj) {

            return '';

        }

        if (strlen($cnpj) == 14) {

            return substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);

        }

        return $cnpj;

    }

}

if(! function_exists('fone')){

    function fone($fone) {

        if (! $fone) {

            return '';

        }

        if (strlen($fone) == 10) {

            return '(' . substr($fone, 0, 2) . ')' . substr($fone, 2, 4) . '-' . substr($fone, 6);

        }

        if (strlen($fone) == 11) {

            return '(' . substr($fone, 0, 2) . ')' . substr($fone, 2, 5) . '-' . substr($fone, 7);

        }

        return $fone;

    }

}
