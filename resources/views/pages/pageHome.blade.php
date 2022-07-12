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
<div class="container mx-auto px-4">
	<div class="swiper swiper-pagehome">
		<div class="swiper-wrapper">
			@foreach ($repo->getRelated('projects')->where('published', 1) as $project)
			<div class="swiper-slide flex justify-center">
				<div class="relative group">
					<div class="absolute inset-0 bg-white bg-opacity-0 transition-all group-hover:bg-opacity-50"></div>
					<img class="object-contain object-center w-full h-[30vh] lg:h-[60vh]"
						src="{{ $project->image('featured_image') }}" alt="">
					<a class="absolute inset-0" href="{{ route('project', $project->getSlug()) }}"></a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="flex items-center justify-between my-[15px]">
		<div class="inline-flex gap-[30px] lg:gap-x-[60px]">
			<div class="swiper-button-prev-pagehome">
				<img class="cursor-pointer"
					src="{{ $setting->where('key', 'icon_angle_left')->first()->image('icon_angle_left') }}" alt="">
			</div>
			<div class="swiper-button-next-pagehome">
				<img class="cursor-pointer"
					src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
			</div>
		</div>
		<div class="inline-flex items-center gap-x-[15px]">
			<div class="swiper-pagination swiper-pagination-pagehome"></div>
			<div id="swiper-index-pagehome" class="font-primary font-light text-[24px] text-primary-grey"></div>
		</div>
	</div>
</div>
@endif
<div class="container mx-auto px-4 my-[30px] flex items-center gap-x-[15px]">
	<div class="relative">
		<img src="{{ $setting->where('key', 'icon_phone')->first()->image('icon_phone') }}" alt="">
		<a class="absolute inset-0" href="tel:{{ $setting->where('key', 'new_zealand_branch_phone')->first()->value }}"
			target="_blank"></a>
	</div>
	<div class="relative">
		<img src="{{ $setting->where('key', 'icon_envelope')->first()->image('icon_envelope') }}" alt="">
		<a class="absolute inset-0"
			href="mailto:{{ $setting->where('key', 'new_zealand_branch_email')->first()->value }}" target="_blank"></a>
	</div>
	<div class="relative">
		<img src="{{ $setting->where('key', 'icon_facebook')->first()->image('icon_facebook') }}" alt="">
		<a class="absolute inset-0" href="{{ $setting->where('key', 'company_facebook')->first()->value }}"
			target="_blank"></a>
	</div>
</div>
@endsection

@push('scripts')
@endpush