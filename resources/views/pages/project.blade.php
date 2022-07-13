@extends('layouts.app')

@section('title', $repo->title)

@section('content')
@if(count($repo->images('images')))
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="swiper swiper-singleproject">
			<div class="swiper-wrapper">
				@foreach ($repo->images('images') as $image)
				<div class="swiper-slide flex justify-center">
					<img class="object-contain object-center h-screen" src="{{ $image }}" alt="">
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="absolute z-10 left-0 top-1/2 -translate-y-1/2">
		<div
			class="relative flex items-center gap-x-[15px] bg-white bg-opacity-95 py-[15px] px-[15px] shadow shadow-primary-grey-50">
			<img src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
			@if($prevRepo)
			<a class="absolute inset-0" href="{{ route('project', $prevRepo->getSlug()) }}"></a>
			@endif
			<div class="font-primary font-light uppercase text-[21px] text-primary-grey">
				{{ $setting->byKey('label_previous') }}
			</div>
		</div>
	</div>
	<div class="absolute z-10 right-0 top-1/2 -translate-y-1/2">
		<div
			class="relative flex items-center gap-x-[15px] bg-white bg-opacity-95 py-[15px] px-[15px] shadow shadow-primary-grey-50">
			<div class="font-primary font-light uppercase text-[21px] text-primary-grey">
				{{ $setting->byKey('label_next') }}
			</div>
			<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
			@if($nextRepo)
			<a class="absolute inset-0" href="{{ route('project', $nextRepo->getSlug()) }}"></a>
			@endif
		</div>
	</div>
	<div class="absolute z-10 bottom-0 w-full">
		<div class="container mx-auto px-4 flex items-center justify-end">
			<div class="inline-flex items-center gap-x-[15px]">
				<div class="swiper-pagination swiper-pagination-singleproject"></div>
				<div id="swiper-index-singleproject" class="font-primary font-medium text-[48px] text-primary-grey">
				</div>
			</div>
		</div>
	</div>
</div>
@endif

@endsection

@push('scripts')
@endpush