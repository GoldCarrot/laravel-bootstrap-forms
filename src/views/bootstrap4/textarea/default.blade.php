<?php
$invalidClass = $errors->{$errorBag}->has($nameWithoutBrackets) ? ' is-invalid' : '';

$wrapperAttributes['class'] .= $invalidClass;
?>
<div {!! Html::attributes($wrapperAttributes) !!}>
    @if($label)
        {{ Form::label($name, $label, $labelAttributes) }}
    @endif
    {{ Form::textarea($name, $value, array_merge([
        'class' => 'form-control'.$invalidClass,
        'style' => 'resize: vertical',
    ], $attributes)) }}

    @if($inlineValidation)
        @if($errors->{$errorBag}->has($nameWithoutBrackets))
            <div class="invalid-feedback">
                {{ $errors->{$errorBag}->first($nameWithoutBrackets) }}
            </div>
        @else
            <small class="form-text text-muted">{{ $note }}</small>
        @endif
    @else
        <small class="form-text text-muted">{{ $note }}</small>
    @endif
</div>
