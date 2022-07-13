@extends('layouts.app')

@section('title', $repo->title)

@section('content')

<div class="container mx-auto px-4">
	<div class="grid grid-cols-12 gap-y-[40px] lg:gap-y-0 lg:gap-x-[80px] lg:min-h-[80vh] mb-[30px] lg:mb-0">
		<div class="col-span-12 lg:col-span-6 flex flex-col justify-end">
			<div class="grid grid-cols-12">
				<div class="col-span-12 lg:col-span-6">
					<div class="flex flex-col gap-y-[15px] mb-[30px]">
						<div class="font-primary font-medium text-[18px] text-primary-grey">
							{{ $setting->byKey('new_zealand_branch_name') }}
						</div>
						@if($setting->byKey('new_zealand_branch_address'))
						<div x-data
							class="font-primary font-light tracking-wider text-[16px] text-primary-grey self-start cursor-pointer transition-all hover:text-tertiary-grey"
							x-on:click="$nextTick(() => { reloadMap({{ $setting->byKey('new_zealand_branch_latitude') }}, {{ $setting->byKey('new_zealand_branch_longitude') }}); document.getElementById('map').scrollIntoView() });">
							{!! nl2br($setting->byKey('new_zealand_branch_address')) !!}
						</div>
						@endif
						@if($setting->byKey('new_zealand_branch_phone'))
						<div
							class="relative font-primary font-light tracking-wider text-[16px] text-primary-grey transition-all hover:text-tertiary-grey">
							<a class="absolute inset-0"
								href="tel:{{ $setting->byKey('new_zealand_branch_phone') }}"></a>
							{{ $setting->byKey('new_zealand_branch_phone') }}
						</div>
						@endif
						@if($setting->byKey('new_zealand_branch_email'))
						<div
							class="relative font-primary font-light tracking-wider text-[16px] text-primary-grey transition-all hover:text-tertiary-grey">
							<a class="absolute inset-0"
								href="mailto:{{ $setting->byKey('new_zealand_branch_email') }}"></a>
							{{ $setting->byKey('new_zealand_branch_email') }}
						</div>
						@endif
					</div>
					<div class="flex flex-col gap-y-[15px] mb-[30px] lg:mb-[160px]">
						<div class="font-primary font-medium text-[18px] text-primary-grey">
							{{ $setting->byKey('china_branch_name') }}
						</div>
						@if($setting->byKey('china_branch_address'))
						<div x-data
							class="font-primary font-light tracking-wider text-[16px] text-primary-grey self-start cursor-pointer transition-all hover:text-tertiary-grey"
							x-on:click="$nextTick(() => { reloadMap({{ $setting->byKey('china_branch_latitude') }}, {{ $setting->byKey('china_branch_longitude') }}); document.getElementById('map').scrollIntoView(); });">
							{!! nl2br($setting->byKey('china_branch_address')) !!}
						</div>
						@endif
						@if($setting->byKey('china_branch_phone'))
						<div
							class="relative font-primary font-light tracking-wider text-[16px] text-primary-grey transition-all hover:text-tertiary-grey">
							<a class="absolute inset-0" href="tel:{{ $setting->byKey('china_branch_phone') }}"></a>
							{{ $setting->byKey('china_branch_phone') }}
						</div>
						@endif
						@if($setting->byKey('china_branch_email'))
						<div
							class="relative font-primary font-light tracking-wider text-[16px] text-primary-grey transition-all hover:text-tertiary-grey">
							<a class="absolute inset-0" href="mailto:{{ $setting->byKey('china_branch_email') }}"></a>
							{{ $setting->byKey('china_branch_email') }}
						</div>
						@endif
					</div>
				</div>
				<div class="col-span-12 lg:col-span-6">
					<livewire:contact-form />
				</div>
			</div>
		</div>
		<div class="col-span-12 lg:col-span-6">
			<div id="map" class="w-full h-[60vh]"></div>
		</div>
		<div class="order-first lg:order-none col-span-12 lg:col-span-6 flex items-end">
			<div
				class="font-primary font-extralight uppercase text-[36px] text-primary-grey order-first lg:order-none mb-[20px] lg:mb-0">
				{{ $repo->title }}
			</div>
		</div>
		<div class="col-span-12 lg:col-span-6 flex items-end justify-end">
			<div class="font-primary font-light tracking-wider text-right text-[16px] text-tertiary-grey">
				{!! $setting->byKey('company_copyright') !!}
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	var latitude = {{ $setting->byKey('new_zealand_branch_latitude') }};
	var longitude = {{ $setting->byKey('new_zealand_branch_longitude') }};
</script>
<script src="{{ mix('js/google-maps.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"></script>
@endpush