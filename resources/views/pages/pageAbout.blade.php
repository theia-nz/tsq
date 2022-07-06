@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-12 gap-y-[30px] lg:gap-y-0 lg:min-h-[calc(90vh-110px)]">
			<div class="col-span-12 lg:col-span-3 flex items-end">
				<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
					{{ $repo->header_a }}
				</div>
			</div>
			<div class="col-span-12 lg:col-span-3 flex items-center">
				<div class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
					{!! nl2br($repo->paragraph_a) !!}
				</div>
			</div>
			<div class="col-span-12 lg:col-span-6 flex flex-wrap justify-end gap-y-[30px] lg:gap-y-0">
				<div class="lg:absolute lg:w-[100vw] lg:left-0">
					<img class="lg:absolute lg:right-0 lg:max-w-[45vw]" src="{{ $repo->image('image_a') }}" alt="">
				</div>
				<div
					class="self-end flex items-center gap-x-[15px] font-primary font-extralight uppercase text-[21px] text-primary-grey relative">
					{{ $repo->link_label_a }}
					<img src="{{ $setting->where('key', 'icon_angle_right')->first()->image('icon_angle_right') }}"
						alt="">
					<a class="absolute inset-0" href="{{ config('app.url') }}/{{ $repo->link_a }}"></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush