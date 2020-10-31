# 腾讯sms开发组件 for hyperf

### 安装组件:
> composer require firstphp/hyperf-qcloudsms

### 发布配置:
> php bin/hyperf.php vendor:publish firstphp/hyperf-qcloudsms

### 编辑.env配置：
```php
QCLOUD_SMS_APP_ID=1107983205
QCLOUD_SMS_APP_KEY=8e6df0qr843b49opd8353d1d2802d435
QCLOUD_SMS_TEMPLATE_ID=129402
QCLOUD_SMS_SIGN=小蚂蚁
```

### 示例代码：
```php
use Firstphp\HyperfQcloudsms\QcloundSmsInterface;

......

/**
 * @Inject
 * @var QcloundSmsInterface
 */
protected $qcloundSmsInterface;

public function test() {
    $res = $this->qcloundSmsInterface->sendWithParam($nationCode, $phoneNumber, $templId, $params, $sign, $extend, $ext);
    var_dump($res);
}
```