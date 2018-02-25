<?php

namespace Elnooronline\LaravelBootstrapForms\Components;

class TextareaComponent extends TextualComponent
{
    /**
     * The component view path.
     *
     * @var string
     */
    protected $viewPath = 'BsForm::textarea';

    /**
     * Initialized the input arguments.
     *
     * @param null $name
     * @param null $value
     * @return $this
     */
    public function init($name = null, $value = null)
    {
        $this->name = $name;

        $this->value = $value ?: old($name);

        $this->hasDefaultLocaledLabel($name);

        $this->hasDefaultLocaledNote($name);

        $this->hasDefaultLocaledPlaceholder($name);

        return $this;
    }

    /**
     * Set textarea cols attribute.
     *
     * @param $cols
     * @return $this
     */
    public function cols($cols)
    {
        $this->attributes['cols'] = $cols;

        return $this;
    }

    /**
     * Set textarea rows attribute.
     *
     * @param $rows
     * @return $this
     */
    public function rows($rows)
    {
        $this->attributes['rows'] = $rows;

        return $this;
    }

    /**
     * The variables with registerd in view component.
     *
     * @return array
     */
    protected function viewComposer()
    {
        return [];
    }
}