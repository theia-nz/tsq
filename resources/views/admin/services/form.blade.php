@extends('twill::layouts.form')

@section('contentFields')

@formField('medias', [
'name' => 'featured_image',
'label' => 'Featured Image',
])

@formField('wysiwyg', [
'name' => 'description',
'label' => 'Description',
'editSource' => true,
])

@stop