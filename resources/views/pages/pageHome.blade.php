@extends('layouts.app')

@section('title', $repo->title)

@section('content')

<div class="flex items-center bg-primary-grey cursor-pointer absolute inset-0" x-data="{ loadingScreen: true }" x-cloak
	x-show="loadingScreen" x-transition:enter="transition-all" x-transition:enter-start="opacity-0"
	x-transition:enter-end="opacity-100" x-transition:leave="transition-all duration-1000"
	x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-on:click="loadingScreen = false">
	<img class="object-cover object-center w-full" src="{{ $repo->image('image_a') }}" alt="">
</div>

<div class="container mx-auto px-4">
	<div>{{ $repo->title }}</div>
</div>
@endsection

@push('scripts')
@endpush