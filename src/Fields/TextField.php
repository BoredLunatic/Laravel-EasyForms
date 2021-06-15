<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasCounter, HasMasking, HasMaxLength};
use PlusTimeIT\EasyForms\Traits\Transformable;

class TextField extends EasyField
{
    use HasCounter;
    use HasMasking;
    use HasMaxLength;
    use Transformable;

    public const TYPE = 'text';

    protected $component = 'v-text-field';

    protected $maxlength;
}
