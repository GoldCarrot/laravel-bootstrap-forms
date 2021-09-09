<?php
$invalidClass = $errors->{$errorBag}->has($nameWithoutBrackets) ? ' has-error' : '';

$wrapperAttributes['class'] .= $invalidClass;
?>
<div {!! Html::attributes($wrapperAttributes) !!}>
    <div class="checkbox">
        <label>
            @if($hasDefaultValue)
                {{ Form::hidden($name, $defaultValue) }}
            @endif
            {{ Form::checkbox($name, $value, $checked) }} {{ $label }}
        </label>
    </div>
    @if($inlineValidation)
        @if($errors->{$errorBag}->has($nameWithoutBrackets))
            <strong class="help-block">{{ $errors->{$errorBag}->first($nameWithoutBrackets) }}</strong>
        @else
            <strong class="help-block">{{ $note }}</strong>
        @endif
    @else
        <strong class="help-block">{{ $note }}</strong>
    @endif
</div>

