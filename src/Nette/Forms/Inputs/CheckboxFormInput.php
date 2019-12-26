<?php declare(strict_types = 1);

namespace Opendevel\Nette\Forms\Inputs;

use Nette\Forms\Controls\Checkbox;
use Nette\Forms\Helpers;
use Nette\Forms\Rules;
use Nette\Utils\Html;

class CheckboxFormInput extends Checkbox
{

    public function getControl(): Html
    {
        return self::make(
            $this->getHtmlName(),
            $this->getHtmlId(),
            $this->translate($this->caption),
            $this->value,
            null,
            $this->required,
            $this->disabled,
            $this->getRules()
        );
    }

    public static function make(
        string $htmlName,
        string $htmlId,
        ?string $caption = null,
        bool $checked = false,
        ?string $value = null,
        bool $required = false,
        bool $disabled = false,
        ?Rules $rules = null
    ): Html {
        return Html::el('div')
            ->class('form-check')
            ->addHtml(
                Html::el('input')
                    ->type('checkbox')
                    ->class('form-check-input')
                    ->name($htmlName)
                    ->disabled($disabled)
                    ->required($required)
                    ->checked($checked)
                    ->id($htmlId)
                    ->value($value)
                    ->setAttribute(
                        'data-nette-rules',
                        $rules ? Helpers::exportRules($rules) : false
                    )
            )
            ->addHtml(
                Html::el('label')
                    ->class('form-check-label')
                    ->for($htmlId)
                    ->setText($caption)
            );
    }

}
