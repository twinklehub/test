<?php
require_once 'vendor/predis/predis/autoload.php'; 
use Predis\Client;

if (!function_exists('get_redis_connection')) {
    function get_redis_connection() {
        $redis = new Client();
        return $redis;
    }
}