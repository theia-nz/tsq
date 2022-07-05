@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@formField('medias', [
'name' => 'image_a',
'label' => 'Image A',
])

@formField('browser', [
'routePrefix' => null,
'moduleName' => 'modules.projects',
'name' => 'projects',
'label' => 'Projects',
'max' => 9999,
])

@endformFieldset

@stop