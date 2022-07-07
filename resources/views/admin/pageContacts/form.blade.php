@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@formField('medias', [
'name' => 'image_a',
'label' => 'Image A',
])

@endformFieldset

@stop