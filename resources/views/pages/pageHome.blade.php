@extends('layouts.app')

@section('title', $repo->title)

@section('content')

<div class="flex items-center bg-primary-grey cursor-pointer absolute z-[9999] inset-0" x-data="{ loadingScreen: true }"
	x-cloak x-show="loadingScreen" x-transition:enter="transition-all" x-transition:enter-start="opacity-0"
	x-transition:enter-end="opacity-100" x-transition:leave="transition-all duration-1000"
	x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-on:click="loadingScreen = false">
	<img class="object-cover object-center w-full" src="{{ $repo->image('image_a') }}" alt="">
</div>
<div class="container mx-auto px-4 mt-[30px]">
	<div class="swiper swiper-pagehome">
		<div class="swiper-wrapper">
			@foreach ($repo->getRelated('projects') as $project)
			<div class="swiper-slide flex justify-center">
				<img class="object-contain md:object-cover object-center w-full h-[70vh]"
					src="{{ $project->image('featured_image') }}" alt="">
			</div>
			@endforeach
		</div>
	</div>
	<div class="flex items-center justify-between my-[15px]">
		<div class="inline-flex gap-x-[60px]">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<div class="inline-flex items-center gap-x-[15px]">
			<div class="swiper-pagination swiper-pagination-pagehome"></div>
			<div id="swiper-index-pagehome" class="font-primary font-light text-[24px] text-primary-grey"></div>
		</div>
	</div>
</div>
<div class="w-full fixed z-[9998] bottom-0">
	<div class="container mx-auto px-4 my-[15px]">
		<div class="inline-flex gap-x-[15px]">
			<div class="relative group">
				<i
					class="fa-solid fa-phone text-secondary-grey w-[20px] h-[20px] cursor-pointer transition-all group-hover:text-tertiary-grey"></i>
				<a class="absolute inset-0"
					href="tel:{{ $setting->where('key', 'new_zealand_branch_phone')->first()->value }}"
					target="_blank"></a>
			</div>
			<div class="relative group">
				<i
					class="fa-solid fa-envelope text-secondary-grey w-[20px] h-[20px] cursor-pointer transition-all group-hover:text-tertiary-grey"></i>
				<a class="absolute inset-0"
					href="mailto:{{ $setting->where('key', 'new_zealand_branch_email')->first()->value }}"
					target="_blank"></a>
			</div>
			<div class="relative group">
				<i
					class="fa-brands fa-facebook-square text-secondary-grey w-[20px] h-[20px] cursor-pointer transition-all group-hover:text-tertiary-grey"></i>
				<a class="absolute inset-0" href="{{ $setting->where('key', 'company_facebook')->first()->value }}"
					target="_blank"></a>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush