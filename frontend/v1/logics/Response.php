<?php

namespace frontend\v1\logics;

class Response
{ 
    public static function errorReturn($message='', $code=0)
    {
        return \Yii::createObject([
            'class'  => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_JSON,
            'data'   => [
                'message' => $message,
                'code'    => $code,
            ],
        ]);
    }

    public static function successReturn($result=array())
    {
        return \Yii::createObject([
            'class'  => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_JSON,
            'data'   => [
                'result'  => $result,
                'message' => 'success',
                'code'    => 200,
            ],
        ]);
    }

}
