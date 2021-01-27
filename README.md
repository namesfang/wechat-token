### 微信公众号、小程序、开放平台应用获取AccessToken

##### 获取token 示例
```
use Namesfang\WeChat\Token\Log\Logger;
use Namesfang\WeChat\Token\Bundle\Option;
use Namesfang\WeChat\Token\Bundle\AccessToken;
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
```