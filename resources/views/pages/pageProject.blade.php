@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<livewire:projects :repo="$repo" :setting="$setting" :serviceSlug="''" />
@endsection

@push('scripts')
@endpush