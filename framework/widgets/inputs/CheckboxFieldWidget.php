<?php
namespace framework\widgets\inputs;

use framework\widgets\Widget;

class CheckboxFieldWidget extends FieldWidget {

    const INPUT_TYPE = 'checkbox';

    /** @var bool */
    public $checked = false;

    protected function getHtmlArgs(){
        return parent::getHtmlArgs() . ($this->checked ? ' checked' : '');
    }
}