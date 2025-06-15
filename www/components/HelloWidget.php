<?php

namespace app\components;

use yii\base\Widget;

class HelloWidget extends Widget
{
    public $name;

    public function init()
    {
        parent::init();
        if ($this->name === null) {
            $this->name = 'Guest';
        }
        ob_start();
    }

    public function run()
    {
        parent::run();
        $content = ob_get_clean();
        $content = strip_tags($content);
        return $this->render('hello', ['name' => $this->name, 'content' => $content]);
        // return 'Hello ' . $this->name . ' ' . $content;
    }
}
