<?php

namespace Seoseo\StringLimit;

use Laravel\Nova\Fields\Field;

class StringLimit extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'string-limit';

    public function max($value = 255)
    {
        return $this->withMeta([
            'maxLength' => $value
        ]);
    }
}
