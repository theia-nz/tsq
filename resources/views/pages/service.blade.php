@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<livewire:projects :repo="$repo" :setting="$setting" :serviceSlug="$repo->getSlug()" />
@endsection

@push('scripts')
@endpush