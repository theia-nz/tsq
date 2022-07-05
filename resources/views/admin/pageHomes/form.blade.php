@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@formField('browser', [
'routePrefix' => null,
'moduleName' => 'modules.projects',
'name' => 'projects',
'label' => 'Projects',
'max' => 9999,
])

@endformFieldset

@stop