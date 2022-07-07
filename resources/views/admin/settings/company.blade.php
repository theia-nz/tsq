@extends('twill::layouts.settings')

@section('contentFields')

@formField('input', [
'name' => 'company_name',
'label' => 'Company Name',
'type' => 'text',
])

@formField('medias', [
'name' => 'company_logo',
'label' => 'Company Logo',
])

@formField('medias', [
'name' => 'company_favicon',
'label' => 'Company Favicon',
])

@formField('input', [
'name' => 'company_facebook',
'label' => 'Company Facebook',
'type' => 'url',
])

@formField('input', [
'name' => 'company_copyright',
'label' => 'Company Copyright',
'type' => 'text',
])

@stop

@section('fieldsets')

@formFieldset(['title' => 'New Zealand Branch',])

@formField('input', [
'name' => 'new_zealand_branch_name',
'label' => 'New Zealand Branch Name',
'type' => 'text',
])

@formField('input', [
'name' => 'new_zealand_branch_address',
'label' => 'New Zealand Branch Address',
'type' => 'textarea',
])

@formField('input', [
'name' => 'new_zealand_branch_latitude',
'label' => 'New Zealand Branch Latitude',
])

@formField('input', [
'name' => 'new_zealand_branch_longitude',
'label' => 'New Zealand Branch Longitude',
])

@formField('input', [
'name' => 'new_zealand_branch_phone',
'label' => 'New Zealand Branch Phone',
'type' => 'text',
])

@formField('input', [
'name' => 'new_zealand_branch_email',
'label' => 'New Zealand Branch Email',
'type' => 'email',
])

@endformFieldset

@formFieldset(['title' => 'China Branch',])

@formField('input', [
'name' => 'china_branch_name',
'label' => 'China Branch Name',
'type' => 'text',
])

@formField('input', [
'name' => 'china_branch_address',
'label' => 'China Branch Address',
'type' => 'textarea',
])

@formField('input', [
'name' => 'china_branch_latitude',
'label' => 'China Branch Latitude',
])

@formField('input', [
'name' => 'china_branch_longitude',
'label' => 'China Branch Longitude',
])

@formField('input', [
'name' => 'china_branch_phone',
'label' => 'China Branch Phone',
'type' => 'text',
])

@formField('input', [
'name' => 'china_branch_email',
'label' => 'China Branch Email',
'type' => 'email',
])

@endformFieldset

@stop