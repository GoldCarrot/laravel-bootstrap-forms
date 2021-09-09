<?php

namespace Laraeast\LaravelBootstrapForms\Traits;

use Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;

trait HasOpenAndClose
{
    /**
     * Open the form tag.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function open(array $options = [])
    {
        return Form::open($options);
    }

    /**
     * Open the form tag with get method.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function get(array $options = [])
    {
        return Form::open(array_merge($options, [
            'method' => 'get',
        ]));
    }

    /**
     * Open the form tag with post method.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function post(array $options = [])
    {
        return Form::open(array_merge($options, [
            'method' => 'post',
        ]));
    }

    /**
     * Open the form tag with put method.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function put(array $options = [])
    {
        return Form::open(array_merge($options, [
            'method' => 'put',
        ]));
    }

    /**
     * Open the form tag with patch method.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function patch(array $options = [])
    {
        return Form::open(array_merge($options, [
            'method' => 'patch',
        ]));
    }

    /**
     * Open the form tag with delete method.
     *
     * @param array $options
     *
     * @return HtmlString
     */
    public function delete(array $options = [])
    {
        return Form::open(array_merge($options, [
            'method' => 'delete',
        ]));
    }

    /**
     * Open the form tag with model and put method.
     *
     * @param Model $model
     * @param array $options
     *
     * @return HtmlString
     */
    public function model($model, array $options = [])
    {
        return $this->putModel($model, $options);
    }

    /**
     * Open the form tag with model and put method.
     *
     * @param Model $model
     * @param array $options
     *
     * @return HtmlString
     */
    public function putModel($model, array $options = [])
    {
        return Form::model($model, array_merge($options, [
            'method' => 'put',
        ]));
    }

    /**
     * Open the form tag with model and patch method.
     *
     * @param Model $model
     * @param array $options
     *
     * @return HtmlString
     */
    public function patchModel($model, array $options = [])
    {
        return Form::model($model, array_merge($options, [
            'method' => 'patch',
        ]));
    }

    /**
     * Close the form tag.
     *
     * @return HtmlString
     */
    public function close()
    {
        return Form::close();
    }
}