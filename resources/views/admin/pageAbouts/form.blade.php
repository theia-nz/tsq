@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@formField('wysiwyg', [
'name' => 'description',
'label' => 'Description',
'editSource' => true,
])

@formField('medias', [
'name' => 'image',
'label' => 'Image',
])

@endformFieldset

@stop