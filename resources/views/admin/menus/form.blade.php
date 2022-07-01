@extends('twill::layouts.form')

@section('contentFields')

@formField('input', [
'name' => 'link',
'label' => 'Link',
'type' => 'text',
])

@formField('radios', [
'name' => 'type',
'label' => 'Type',
'default' => 'internal',
'inline' => true,
'options' => [
[
'value' => 'internal',
'label' => 'Internal',
],
[
'value' => 'external',
'label' => 'External',
],
],
])

@formField('checkbox', [
'name' => 'new_tab',
'label' => 'New Tab',
])

@stop