@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-12 min-h-[calc(90vh-110px)]">
			<div class="col-span-6 flex items-end bg-red-500">A</div>
			<div class="col-span-6 bg-blue-500">
				<div class="absolute h-[30px] w-[100vw] bg-orange-500 bg-opacity-50 left-0">
					<img class="absolute right-0 max-w-[50vw]" src="https://via.placeholder.com/920x460" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush