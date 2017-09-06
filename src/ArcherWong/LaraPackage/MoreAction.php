<?php
namespace ArcherWong\LaraPackage;

class MoreAction
{
    public function getInfo()
    {
        $user_ip = $_SERVER["REMOTE_ADDR"]; 
        $time = date('Y-m-d H:i:s');
        return ['user_ip' => $user_ip, 'time' => $time];
    }

}
