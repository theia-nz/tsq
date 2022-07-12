@extends('layouts.app')

@section('title', $repo->title)

@section('content')

<div class="flex items-center bg-primary-grey cursor-pointer absolute z-50 inset-0"
	x-data="{ loadingScreen: @if(config('app.debug')) false @else true @endif }" x-cloak x-show="loadingScreen"
	x-transition:enter="transition-all" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
	x-transition:leave="transition-all duration-1000" x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0" x-on:click="loadingScreen = false">
	<img class="object-cover object-center w-full" src="{{ $repo->image('image_a') }}" alt="">
</div>

@if($repo->getRelated('projects')->where('published', 1)->count())
<div class="relative">
	<div class="swiper swiper-pagehome w-screen h-screen">
		<div class="swiper-wrapper">
			@foreach ($repo->getRelated('projects')->where('published', 1) as $project)
			<div class="swiper-slide flex justify-center bg-cover bg-center bg-no-repeat relative group"
				style="background-image:url('{{ $project->image('featured_image') }}');">
			</div>
			@endforeach
		</div>
	</div>
	<div class="absolute z-10 bottom-0 w-full h-[40px] bg-tertiary-grey bg-opacity-80">
		<div class="container mx-auto px-4 flex items-center justify-between">
			<div class="inline-flex gap-[30px] lg:gap-x-[60px]">
				<div class="swiper-button-prev-pagehome">
					<img class="cursor-pointer"
						src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
				</div>
				<div class="swiper-button-next-pagehome">
					<img class="cursor-pointer"
						src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}"
						alt="">
				</div>
			</div>
			<div class="inline-flex items-center gap-x-[15px]">
				<div class="swiper-pagination swiper-pagination-pagehome"></div>
				<div id="swiper-index-pagehome" class="font-primary font-light text-[24px] text-primary-grey"></div>
			</div>
		</div>
	</div>
</div>
@endif

@endsection

@push('scripts')
@endpush