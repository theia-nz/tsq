@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<livewire:projects :repo="$repo" :serviceSlug="''" />
@endsection

@push('scripts')
@endpush