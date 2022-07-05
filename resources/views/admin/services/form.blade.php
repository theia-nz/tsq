@extends('twill::layouts.form')

@section('contentFields')

@formField('medias', [
'name' => 'featured_image',
'label' => 'Featured Image',
])

@formField('input', [
'name' => 'description',
'label' => 'Description',
'type' => 'textarea'
])

@stop