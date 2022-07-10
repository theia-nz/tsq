@extends('layouts.app')

@section('title', $repo->title)

@section('content')
@if($repo->getRelated('services')->count())
<div class="container mx-auto px-4">
	<div class="grid grid-cols-12 gap-y-[20px] lg:gap-y-[40px] lg:gap-x-[40px] lg:min-h-[80vh]">
		@foreach ($repo->getRelated('services')->where('published', 1) as $service)
		@if($loop->iteration === 4)
		<div class="col-span-12 lg:col-span-3 flex flex-col items-center lg:items-end justify-end">
			<div class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
				{!! nl2br($service->description) !!}
			</div>
			<div class="font-primary text-[24px] text-primary-grey mt-[60px]">{{ $service->title }}</div>
		</div>
		@else
		<div class="col-span-12 lg:col-span-3 flex flex-col items-center lg:items-end justify-end">
			<div class="relative group">
				<div class="absolute inset-0 bg-white bg-opacity-0 transition-all group-hover:bg-opacity-50"></div>
				<img class="object-cover object-center h-[50vh]" src="{{ $service->image('featured_image') }}" alt="">
				<a class="absolute inset-0" href="{{ route('service', $service->getSlug()) }}"></a>
			</div>
			<div class="font-primary text-[24px] text-primary-grey mt-[20px] lg:mt-[60px] mb-[20px] lg:mb-0">{{
				$service->title }}</div>
		</div>
		@endif
		@endforeach
		<div class="order-first lg:order-none col-span-12 flex items-end">
			<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
				{{ $repo->header_a }}
			</div>
		</div>
	</div>
</div>
@endif
@endsection

@push('scripts')
@endpush