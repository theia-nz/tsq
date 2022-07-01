@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div>{{ $repo->title }}</div>
@endsection

@push('scripts')
@endpush