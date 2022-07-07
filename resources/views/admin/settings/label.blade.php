@extends('twill::layouts.settings')

@section('contentFields')

@formField('input', [
'name' => 'label_previous',
'label' => 'Label Previous',
'type' => 'text',
])

@formField('input', [
'name' => 'label_next',
'label' => 'Label Next',
'type' => 'text',
])

@formField('input', [
'name' => 'label_tel',
'label' => 'Label Tel',
'type' => 'text',
])

@stop