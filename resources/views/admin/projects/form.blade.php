@extends('twill::layouts.form')

@section('contentFields')

@formField('medias', [
'name' => 'featured_image',
'label' => 'Featured Image',
])

@formField('input', [
'name' => 'description',
'label' => 'Description',
'type' => 'textarea',
])

@formField('input', [
'name' => 'location',
'label' => 'Location',
'type' => 'text',
])

@formField('input', [
'name' => 'year',
'label' => 'Year',
'type' => 'text',
])

@formField('input', [
'name' => 'client',
'label' => 'Client',
'type' => 'text',
])

@formField('medias', [
'name' => 'images',
'label' => 'Images',
'max' => 9999,
])

@stop