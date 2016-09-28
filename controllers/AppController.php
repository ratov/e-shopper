<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);//регистрируем метатег с именем keywords и содержимым что будет переданно в $keywords
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);//регистрируем метатег с именем description и содержимым что будет переданно в $description
    }
}