<?php

namespace Laraeast\LaravelBootstrapForms\Components;

use Illuminate\Support\Facades\Config;

class CheckboxComponent extends BaseComponent
{
    /**
     * The component view path.
     *
     * @var string
     */
    protected $viewPath = 'checkbox';

    /**
     * @var bool
     */
    protected $checked = false;

    /**
     * @var bool
     */
    protected $hasDefaultValue = true;

    /**
     * @var mixed
     */
    protected $defaultValue;

    /**
     * Set resource name property.
     *
     * @param $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->hasDefaultValue = Config::get('laravel-bootstrap-forms.checkboxes.hasDefaultValue', true);
    }

    /**
     * Initialized the input arguments.
     *
     * @param null $name
     * @param null $value
     * @param bool $checked
     * @return $this
     */
    public function init($name = null, $value = null, $checked = false)
    {
        $this->name($name);

        $this->value($value ?: old($name));

        $this->checked = $checked;

        $this->setDefaultLabel();

        $this->setDefaultNote();

        $this->setDefaultPlaceholder();

        return $this;
    }

    /**
     * @param bool $checked
     * @return $this
     */
    public function checked($checked = true)
    {
        $this->checked = ! ! $checked;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function default($value = 0)
    {
        $this->hasDefaultValue = true;

        $this->defaultValue = $value;

        return $this;
    }

    /**
     * @return $this
     */
    protected function withoutDefault()
    {
        $this->hasDefaultValue = false;

        return $this;
    }

    /**
     * @return $this
     */
    protected function withDefault()
    {
        $this->hasDefaultValue = true;

        return $this;
    }

    /**
     * The variables with registered in view component.
     *
     * @return array
     */
    protected function viewComposer()
    {
        return [
            'checked' => $this->checked,
            'hasDefaultValue' => $this->hasDefaultValue,
            'defaultValue' => $this->defaultValue,
        ];
    }
}
