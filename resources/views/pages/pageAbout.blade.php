@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="container mx-auto px-4">
	<div class="grid grid-cols-12 gap-y-[40px] lg:gap-y-0 lg:gap-x-[80px] lg:min-h-[80vh] mb-[30px] lg:mb-0">
		<div class="col-span-12 lg:col-span-6 flex items-center justify-start">
			<div>
				@foreach($repo->sentences as $sentence)
				<div class="font-primary font-normal tracking-wider text-[29px] text-primary-grey">
					@isset($sentence['capital']) <span class="font-bold text-[60px] text-tertiary-grey">{{
						$sentence['capital']
						}}</span>
					@endisset
					{{ $sentence['sentence']}}
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-span-12 lg:col-span-6 flex items-start lg:items-center">
			<img class="object-contain object-center h-full " src="{{ $repo->image('image_a') }}" alt="">
		</div>
		<div class="order-first lg:order-none col-span-12 flex items-start lg:items-end justify-between">
			<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
				{{ $repo->header_a }}
			</div>
			<div
				class="flex items-center gap-x-[15px] font-primary font-extralight uppercase text-[21px] text-primary-grey transition-all hover:text-tertiary-grey relative">
				{{ $repo->link_label_a }}
				<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}" alt="">
				<a class="absolute inset-0" href="{{ config('app.url') }}/{{ $repo->link_a }}"></a>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush