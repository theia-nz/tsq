@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@formField('input', [
'name' => 'header_a',
'label' => 'Header A',
'type' => 'text',
])

@endformFieldset

@stop