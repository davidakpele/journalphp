<?php
namespace Http;

class sanctum
{
   public function getToken(){
        $length = 250;
        $token = "";
        $encrypted  = "A41wt2Lsq30A9Ox/WehogvJckPI4aY9RoSxhb8FMtVnqaUle1AtI6Yf7Wk+7";
        $encrypted .= "joxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==";
        $encrypted .= "0123456789";
        $encrypted .= "+Wm0AfDDOkMX+Wn6wnDpBWYgWwYAAAB8eyJvcmlnaW4iOiJodHRwczovL2Fkcm9sbC5jb206NDQzIiw";
        $encrypted .= "A41wt2Lsq30A9Ox/WehogvJckPI4aY9RoSxhb8FMtVnqaUle1AtI6Yf7Wk+7+";
        $max = strlen($encrypted);
        $tokenCore = '';
        for ($i=0; $i < $length; $i++) {
            $tokenCore .= $encrypted[crypto_rand_secure(0, $max-1)];
        }
        return $tokenCore.'=';
    } 
}
