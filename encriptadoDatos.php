<?php
    /*Esto va en el archivo de conexion.php*/
    if(!function_exists('encryption')){ //Valida si la funcion ya esta en memoria
        function encryption($string){
            $output = FALSE;
            $key = hash('sha256',SECRET_KEY);
            $iv = openssl_random_pseudo_bytes(oppenssl_cipher_iv_length(METHOD));
            $output=openssl_encrypt($string, METHOD, $key,0,$iv);
            $output=base64_encode($output.'::'.$iv);
            return $output;
        }
        function decryption($string){
            $key = hash('sha256',SECRET_KEY);
        }
    }
?>