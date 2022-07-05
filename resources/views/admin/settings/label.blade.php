@extends('twill::layouts.settings')

@section('contentFields')

@formField('input', [
'name' => 'label_previous',
'label' => 'Previous',
'type' => 'text',
])

@formField('input', [
'name' => 'label_next',
'label' => 'Next',
'type' => 'text',
])

@stop