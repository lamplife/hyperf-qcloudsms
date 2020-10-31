<?php

declare(strict_types = 1);

/**
 * Author: 狂奔的螞蟻 <www.firstphp.com>
 * Date: 2020/10/31
 * Time: 3:43 PM
 */

namespace Firstphp\HyperfQcloudsms;

use Firstphp\HyperfQcloudsms\Bridge\SmsSingleSender;

class QcloundSmsClient implements QcloundSmsInterface
{

    /**
     * @var string
     */
    protected $appid;

    /**
     * @var string
     */
    protected $appkey;

    /**
     * @var int
     */
    protected $templateId;

    /**
     * @var string
     */
    protected $sign;

    /**
     * @var $object
     */
    protected $smsSingleSender;



    public function __construct(array $config = [])
    {
        $config = $config ? $config : config('sms');

        if ($config) {
            $this->appid = $config['appid'];
            $this->appkey = $config['appkey'];
            $this->templateId = $config['appkey'];
            $this->sign = $config['sign'];
        }

        $this->smsSingleSender = new SmsSingleSender($this->appid, $this->appkey);
    }


    /**
     * 普通单发
     *
     * 普通单发需明确指定内容，如果有多个签名，请在内容中以【】的方式添加到信息内容中，否则系统将使用默认签名。
     *
     * @param int    $type        短信类型，0 为普通短信，1 营销短信
     * @param string $nationCode  国家码，如 86 为中国
     * @param string $phoneNumber 不带国家码的手机号
     * @param string $msg         信息内容，必须与申请的模板格式一致，否则将返回错误
     * @param string $extend      扩展码，可填空串
     * @param string $ext         服务端原样返回的参数，可填空串
     * @return string 应答json字符串，详细内容参见腾讯云协议文档
     */
    public function send($type, $nationCode, $phoneNumber, $msg, $extend = "", $ext = "")
    {
        return $this->smsSingleSender->send($type, $nationCode, $phoneNumber, $msg, $extend, $ext);
    }



    /**
     * 指定模板单发
     *
     * @param string $nationCode 国家码，如 86 为中国
     * @param string $phoneNumber 不带国家码的手机号
     * @param int $templId 模板 id
     * @param array $params 模板参数列表，如模板 {1}...{2}...{3}，那么需要带三个参数
     * @param string $sign 签名，如果填空串，系统会使用默认签名
     * @param string $extend 扩展码，可填空串
     * @param string $ext 服务端原样返回的参数，可填空串
     * @return string 应答json字符串，详细内容参见腾讯云协议文档
     */
    public function sendWithParam($nationCode, $phoneNumber, $templId = 0, $params, $sign = "", $extend = "", $ext = "")
    {
        return $this->smsSingleSender->sendWithParam($nationCode, $phoneNumber, $templId, $params, $sign, $extend, $ext);
    }






}