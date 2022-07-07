@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<livewire:projects :repo="$repo" :serviceSlug="$repo->getSlug()" />
@endsection

@push('scripts')
@endpush