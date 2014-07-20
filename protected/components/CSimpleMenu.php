<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 7/20/14
 * Time: 10:25 PM
 */

class CSimpleMenu extends CWidget{

    /**
     * @var items array
     */
    public $item;
    public $activeClass = "current";
    public $route;
    public $linkTemplate = "<li class='{active}'><a class = '{class}' href='{url}'>{name}</a></li>";
    protected $items = [];
    protected $filters = ['{class}','{name}','{url}','{active}'];


    public function run(){
        $this->route = Yii::app()->controller->getRoute();
        $this->items = $this->reInitItems();//CHtml::tag("ul",'',$this->reInitItems());
        $this->render('simplemenu');
    }

    protected function reInitItems(){
        foreach($this->item as $it){
            $temp_t = $this->linkTemplate;
            if($this->route == $it['url']){
                $temp_t = str_ireplace('{active}',$this->activeClass,$temp_t);
            }
            $this->items[] =
              str_ireplace($this->filters,[$it['class'],$it['name'],Yii::app()->createUrl($it['url']),''],$temp_t);

        }
        return implode(' ',$this->items);
    }
}