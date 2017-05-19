<?php
/**
 * PhalApi_Exception_InternalServerError 服务器运行异常错误
 *
 * @package     PhalApi\Exception
 * @license     http://www.phalapi.net/license GPL 协议
 * @link        http://www.phalapi.net/
 * @author      dogstar <chanzonghuang@gmail.com> 2015-02-05
 */
require ROOT . 'lib/Exception/Exception.php';

class Fast_Exception_InternalServerError extends Fast_Exception {

    public function __construct($message, $code = 0) {
        parent::__construct(
            'Interal Server Error: {message}', array('message' => $message),500+$code
        );
    }
}
