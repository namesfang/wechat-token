<?php
// +-----------------------------------------------------------
// | 获取 AccessToken 示例
// +-----------------------------------------------------------
use Namesfang\WeChat\Token\Log\Logger;
use Namesfang\WeChat\Token\Bundle\Option;
use Namesfang\WeChat\Token\Bundle\AccessToken;

define('ROOT_PATH', dirname(__DIR__));
define('LOG_PATH',  sprintf('%s/logs', ROOT_PATH));

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    $className = str_replace('Namesfang/WeChat/Token/', '', $className);
    require_once sprintf('%s/src/%s.php', ROOT_PATH, $className);
});

// +-----------------------------------------------------------
// | 配置参数方式
// +-----------------------------------------------------------
$option = new Option('appid', 'secret');

// 也可以自行封装日志实现 LoggerInterface 即可
$logger = new Logger(LOG_PATH, true);

// 实例化发送类
$send = new AccessToken($option, $logger);

// 发送
$res = $send->request();

// 判断请求是否异常
if($res->error) {
    $logger->print($res->error, true);
}

// 打印接口返回的原始数据
$logger->print($res->original, true);

// 打印接口返回状态
$logger->print($res->access_token, true);