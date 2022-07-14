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
		<div class="relative flex items-center gap-x-[15px] bg-white bg-opacity-95 py-[15px] px-[30px] group">
			<img src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
			@if($prevRepo)
			<a class="font-primary font-light uppercase text-[21px] text-primary-grey bg-white bg-opacity-95 h-full px-[15px] flex items-center absolute right-0 -translate-x-full transition-all group-hover:translate-x-full"
				href="{{ route('project', $nextRepo->getSlug()) }}">
				{{ $setting->byKey('label_previous') }}
			</a>
			<a class="absolute inset-0" href="{{ route('project', $prevRepo->getSlug()) }}"></a>
			@endif
		</div>
	</div>
	<div class="absolute z-10 right-0 top-1/2 -translate-y-1/2">
		<div class="relative flex items-center gap-x-[15px] bg-white bg-opacity-95 py-[15px] px-[30px] group">
			<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
			@if($nextRepo)
			<a class="font-primary font-light uppercase text-[21px] text-primary-grey bg-white bg-opacity-95 h-full px-[15px] flex items-center absolute left-0 translate-x-full transition-all group-hover:-translate-x-full"
				href="{{ route('project', $nextRepo->getSlug()) }}">
				{{ $setting->byKey('label_next') }}
			</a>
			<a class="absolute inset-0" href="{{ route('project', $nextRepo->getSlug()) }}"></a>
			@endif
		</div>
	</div>
	<div class="absolute z-20 left-1/2 bottom-[15px] -translate-x-1/2 flex gap-x-[15px]">
		<div
			class="swiper-button-prev-singleproject flex items-center justify-center w-[64px] h-[64px] bg-white bg-opacity-95 cursor-pointer">
			<img src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
		</div>
		<div
			class="swiper-button-next-singleproject flex items-center justify-center w-[64px] h-[64px] bg-white bg-opacity-95 cursor-pointer">
			<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
		</div>
	</div>
	<div class="absolute z-10 bottom-0 w-full">
		<div class="container mx-auto px-4 flex items-center justify-end">
			<div class="inline-flex items-center gap-x-[15px] my-[30px]">
				<div class="swiper-pagination swiper-pagination-singleproject"></div>
				{{-- <div id="swiper-index-singleproject"
					class="font-primary font-medium text-[48px] text-primary-grey"></div> --}}
			</div>
		</div>
	</div>
</div>
@endif

@endsection

@push('scripts')
@endpush