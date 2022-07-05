@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="container mx-auto px-4">
	<div>{{ $repo->title }}</div>
</div>
@endsection

@push('scripts')
@endpush