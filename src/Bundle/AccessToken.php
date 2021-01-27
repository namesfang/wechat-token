<?php
// +-----------------------------------------------------------
// | 微信公众号、小程序、开放平台获取AccessToken
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Token\Bundle;

use Namesfang\WeChat\Token\Bundle;
use Namesfang\WeChat\Token\Request;

class AccessToken extends Bundle
{
    public function request()
    {
        $data = $this->option->getAll();
        
        //$this->logger->print($data, true);
        
        $request = new Request($this->logger);
        
        $request->url(self::BASE_URL);
        $request->path('cgi-bin/token');
        $request->query($data);
        return $request->get();
    }
}