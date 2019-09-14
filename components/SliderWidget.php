<?php

namespace app\components;


use yii\base\Widget;
use app\models\Slider;
use app\assets\AppAsset;
use Yii;

class SliderWidget extends Widget
{

    public $tpl;
    public $tree;
    public $data;

    public function init()
    {
        parent::init();
        if($this->tpl === null)
        {
            $this->tpl = 'slider';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        $this->data = Slider::find()->orderBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->data = $this->getHtml($this->tree);
        return $this->data;
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if(!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getHtml($tree)
    {
        $str = '';
        foreach ($tree as $slide)
        {
            $str .= $this->getTemplate($slide);
        }
        return $str;
    }


    protected function getTemplate($slide)
    {
        ob_start();
        include __DIR__ .'/slider_tpl/'. $this->tpl;
        return ob_get_clean();
    }
}