<?php
// +-----------------------------------------------------------
// | 微信公众号、小程序、开放平台获取AccessToken
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Token\Log;

interface LoggerInterface
{
    public function info($message, $phrase=null);
    public function warn($message, $phrase=null);
    public function error($message, $phrase=null);
}