<?php
// +-----------------------------------------------------------
// | 微信公众号、小程序、开放平台获取AccessToken
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Token\Bundle;

/**
 * 公共请求参数
 */
class Option
{
    /**
     * 所有接口参数
     * @var array
     */
    protected $option = [];
    
    public function __construct(string $appid, string $secret)
    {
        $this->option = [
            'appid'=> $appid,
            'secret'=> $secret,
            'grant_type'=> 'client_credential'
        ];
    }
    
    /**
     * 设置接口参数
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        $this->option[ $name ] = $value;
    }
    
    /**
     * 获得接口参数
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        if(isset($this->option[ $name ])) {
            return $this->option[ $name ];
        }
    }
    
    /**
     * 获得所有参数
     * 会自动添加 Signature
     * @param string $format 格式化数据格式
     * @return string
     */
    public function getAll()
    {
        return $this->option;
    }
}