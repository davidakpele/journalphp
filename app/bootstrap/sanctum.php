<?php
namespace Http;

class sanctum
{
   public function getToken(){
        $length = 500;
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $codeAlphabet.= "ABCeNBHVe3kmAqvU2s7yyuJSF2gpxKLC";
        $max = strlen($codeAlphabet); // edited
        $tokenCore = '';
        for ($i=0; $i < $length; $i++) {
            $tokenCore .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
        }
        return $tokenCore.'=';
    } 
}
