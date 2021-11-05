<?php
    //declara função
    function pegaip()
    {
        //verifica se não é vazio
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        //verifica se vem de um proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            //Endereço IP no qual a conexão TCP entrou
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        //retorna ip
        return $ip;
    }
    echo pegaip(); //Mostrar
?>