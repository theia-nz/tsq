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

@formField('repeater', [
'type' => 'sentences',
])

@formField('wysiwyg', [
'name' => 'paragraph_a',
'label' => 'Paragraph A',
'editSource' => true,
])

@formField('medias', [
'name' => 'image_a',
'label' => 'Image A',
])

@formField('input', [
'name' => 'link_label_a',
'label' => 'Link Label A',
'type' => 'text',
])

@formField('input', [
'name' => 'link_a',
'label' => 'Link A',
'type' => 'text',
])

@endformFieldset

@stop