<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
Yii::$app->mailer->compose()
    ->setFrom('david.paul.inc@gmail.com')
    ->setTo('dap3065@yahoo.com')
    ->setSubject('test Message subject')
    ->setTextBody(' test Plain text content')
    ->setHtmlBody('<b>HTML content</b>')
    ->send();
    }

    public function actionRun()
    {
Yii::$app->mailer->compose()
    ->setFrom('david.paul.inc@gmail.com')
    ->setTo('dap3065@yahoo.com')
    ->setSubject('test Message subject')
    ->setTextBody(' test Plain text content')
    ->setHtmlBody('<b>HTML content</b>')
    ->send();
    }

    public function actionTest()
    {
Yii::$app->mailer->compose()
    ->setFrom('david.paul.inc@gmail.com')
    ->setTo('dap3065@yahoo.com')
    ->setSubject('test Message subject')
    ->setTextBody(' test Plain text content')
    ->setHtmlBody('<b>HTML content</b>')
    ->send();
    }

    public function actionReport()
    {
Yii::$app->mailer->compose()
    ->setFrom('david.paul.inc@gmail.com')
    ->setTo('dap3065@yahoo.com')
    ->setSubject('test Message subject')
    ->setTextBody(' test Plain text content')
    ->setHtmlBody('<b>HTML content</b>')
    ->send();
    }
}

