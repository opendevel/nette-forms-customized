<?php declare(strict_types = 1);

namespace Opendevel\Nette\Forms;

use Nette\Forms\Controls\Checkbox;
use Opendevel\Nette\Forms\Inputs\CheckboxFormInput;

trait Bootstrap4FormTrait
{

    /**
     * Alter Nette Checkbox
     * @param string $name
     * @param null $caption
     * @return \Nette\Forms\Controls\Checkbox
     */
    public function addCheckbox(string $name, $caption = null): Checkbox
    {
        $component = new CheckboxFormInput($caption);
        $this->addComponent($component, $name);

        return $component;
    }

}
