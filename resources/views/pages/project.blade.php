@extends('layouts.app')

@section('title', $repo->title)

@section('content')
@if(count($repo->images('images')))
<div class="container mx-auto px-4">
	<div class="swiper swiper-singleproject">
		<div class="swiper-wrapper">
			@foreach ($repo->images('images') as $image)
			<div class="swiper-slide flex justify-center">
				<img class="object-contain lg:object-cover object-center w-full h-[70vh]" src="{{ $image }}" alt="">
			</div>
			@endforeach
		</div>
	</div>
	<div class="flex items-center justify-between my-[15px]">
		<div class="inline-flex gap-x-[60px]">
			<div class="relative flex items-center">
				<img src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
				@if($prevRepo)
				<a class="absolute inset-0" href="{{ config('app.url') }}/projects/{{ $prevRepo->slug }}"></a>
				@endif
			</div>
			<div class="relative">
				<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
				@if($nextRepo)
				<a class="absolute inset-0" href="{{ config('app.url') }}/projects/{{ $nextRepo->slug }}"></a>
				@endif
			</div>
		</div>
		<div class="inline-flex items-center gap-x-[15px]">
			<div class="swiper-pagination swiper-pagination-singleproject"></div>
			<div id="swiper-index-singleproject" class="font-primary font-light text-[24px] text-primary-grey"></div>
		</div>
	</div>
</div>
<div class="container mx-auto px-4">
	<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">{{ $repo->title }}</div>
	<div class="font-primary font-medium text-secondary-grey text-[20px]">{!! nl2br($repo->description) !!}</div>
</div>
@endif
@endsection

@push('scripts')
@endpush