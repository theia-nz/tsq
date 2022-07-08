@extends('twill::layouts.form', [
'disableContentFieldset' => true,
])

@section('fieldsets')

@formFieldset(['title' => 'Section A',])

@endformFieldset

@stop