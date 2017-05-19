<?php


class Fast_Exception_BadRequest extends Fast_Exception{

    public function __construct($message, $code = 0) {
        parent::__construct(
            'Bad Request: {message}', array('message' => $message), 400 + $code
        );
    }
}
