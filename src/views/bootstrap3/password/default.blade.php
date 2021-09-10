<?php
$invalidClass = $errors->{$errorBag}->has($nameWithoutBrackets) ? ' has-error' : '';

$wrapperAttributes['class'] .= $invalidClass;
$labelAttributes['class'] = 'content-label ' . ($labelAttributes['class'] ?? '');
?>
<div {!! Html::attributes($wrapperAttributes) !!}>
    @if($label)
        {{ Form::label($name, $label, $labelAttributes) }}
    @endif

    {{ Form::password($name, array_merge(['class' => 'form-control'], $attributes)) }}

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
