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

@formField('browser', [
'routePrefix' => null,
'moduleName' => 'modules.services',
'name' => 'services',
'label' => 'Services',
'max' => 9999,
])

@endformFieldset

@stop