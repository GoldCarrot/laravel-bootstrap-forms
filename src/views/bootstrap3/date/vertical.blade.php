<?php
$invalidClass = $errors->{$errorBag}->has($nameWithoutBrackets) ? ' has-error' : '';

$wrapperAttributes['class'] .= $invalidClass;
$labelAttributes['class'] = 'content-label col-md-2 ' . ($labelAttributes['class'] ?? '');

?>
<div {!! Html::attributes($wrapperAttributes) !!}>
    <div class="row">
        @if($label)
            {{ Form::label($name, $label, $labelAttributes) }}
        @else
            <div class="col-md-2"></div>
        @endif

        <div class="col-md-10">

            {{ Form::date($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}

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
    </div>
</div>
