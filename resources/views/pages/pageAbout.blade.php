@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-12 min-h-[calc(90vh-110px)]">
			<div class="col-span-3 flex items-end">
				<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
					{{ $repo->title }}
				</div>
			</div>
			<div class="col-span-3 flex items-center">
				<div class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
					{!! nl2br($repo->description) !!}
				</div>
			</div>
			<div class="col-span-6">
				<div class="absolute w-[100vw] left-0">
					<img class="absolute right-0 max-w-[45vw]" src="{{ $repo->image('image') }}" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush