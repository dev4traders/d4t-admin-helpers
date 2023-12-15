<?php

namespace D4T\Admin\Helpers;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Support\Helper;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('helpers.title');
    }

    protected function formatInput(array $input)
    {
        return $input;
    }

    public function form()
    {

    }
}
