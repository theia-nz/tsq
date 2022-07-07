@extends('twill::layouts.form')

@section('contentFields')

@formField('input', [
'name' => 'form_title',
'label' => 'Form Title',
'type' => 'text'
])

@formField('input', [
'name' => 'label_name',
'label' => 'Label Name',
'type' => 'text'
])

@formField('input', [
'name' => 'error_name',
'label' => 'Error Name',
'type' => 'text'
])

@formField('input', [
'name' => 'label_phone',
'label' => 'Label Phone',
'type' => 'text'
])

@formField('input', [
'name' => 'error_phone',
'label' => 'Error Phone',
'type' => 'text'
])

@formField('input', [
'name' => 'label_email',
'label' => 'Label Email',
'type' => 'text'
])

@formField('input', [
'name' => 'error_email_1',
'label' => 'Error Email 1',
'type' => 'text'
])

@formField('input', [
'name' => 'error_email_2',
'label' => 'Error Email 2',
'type' => 'text'
])

@formField('input', [
'name' => 'label_message',
'label' => 'Label Message',
'type' => 'text'
])

@formField('input', [
'name' => 'error_message',
'label' => 'Error Message',
'type' => 'text'
])

@formField('input', [
'name' => 'error_recaptcha',
'label' => 'Error Recaptcha',
'type' => 'text',
])

@formField('input', [
'name' => 'label_submit',
'label' => 'Label Submit',
'type' => 'text',
])

@formField('input', [
'name' => 'message_success',
'label' => 'Message Success',
'type' => 'text',
])

@formField('input', [
'name' => 'message_failure',
'label' => 'Message Failure',
'type' => 'text',
])

@stop

@section('sideFieldset')

@formField('repeater', [
'type' => 'recipients',
])

@stop