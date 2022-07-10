@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-12 gap-y-[20px] lg:gap-y-0 lg:min-h-[80vh]">
			<div class="col-span-12 lg:col-span-6 flex flex-col justify-end">
				<div class="grid grid-cols-12">
					<div class="col-span-12 lg:col-span-6">
						<div class="flex flex-col gap-y-[15px] mb-[30px]">
							<div class="font-primary font-medium text-[18px] text-primary-grey">
								{{ $setting->byKey('new_zealand_branch_name') }}
							</div>
							@if($setting->byKey('new_zealand_branch_address'))
							<div class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
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
									href="tel:{{ $setting->byKey('new_zealand_branch_email') }}"></a>
								{{ $setting->byKey('new_zealand_branch_email') }}
							</div>
							@endif
						</div>
						<div class="flex flex-col gap-y-[15px] mb-[30px] lg:mb-[160px]">
							<div class="font-primary font-medium text-[18px] text-primary-grey">
								{{ $setting->byKey('china_branch_name') }}
							</div>
							@if($setting->byKey('china_branch_address'))
							<div class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
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
								<a class="absolute inset-0" href="tel:{{ $setting->byKey('china_branch_email') }}"></a>
								{{ $setting->byKey('china_branch_email') }}
							</div>
							@endif
						</div>
					</div>
					<div class="col-span-12 lg:col-span-6">
						<livewire:contact-form />
					</div>
				</div>
				<div
					class="font-primary font-extralight uppercase text-[36px] text-primary-grey order-first lg:order-none mb-[40px] lg:mb-0">
					{{ $repo->title }}
				</div>
			</div>
			<div class="col-span-12 lg:col-span-6 flex flex-wrap justify-end gap-y-[30px] lg:gap-y-0">
				<div class="lg:absolute lg:w-[100vw] lg:left-0">
					<img class="lg:absolute lg:right-0 lg:max-w-[45vw]" src="{{ $repo->image('image_a') }}" alt="">
				</div>
				<div class="self-end">
					<div class="flex items-center justify-end gap-x-[15px] mb-[5px]">
						<div class="relative">
							<img src="{{ $setting->where('key', 'icon_phone')->first()->image('icon_phone') }}" alt="">
							<a class="absolute inset-0"
								href="tel:{{ $setting->where('key', 'new_zealand_branch_phone')->first()->value }}"
								target="_blank"></a>
						</div>
						<div class="relative">
							<img src="{{ $setting->where('key', 'icon_envelope')->first()->image('icon_envelope') }}"
								alt="">
							<a class="absolute inset-0"
								href="mailto:{{ $setting->where('key', 'new_zealand_branch_email')->first()->value }}"
								target="_blank"></a>
						</div>
						<div class="relative">
							<img src="{{ $setting->where('key', 'icon_facebook')->first()->image('icon_facebook') }}"
								alt="">
							<a class="absolute inset-0"
								href="{{ $setting->where('key', 'company_facebook')->first()->value }}"
								target="_blank"></a>
						</div>
					</div>
					<div class="font-primary font-light tracking-wider text-[16px] text-tertiary-grey">
						{!! $setting->byKey('company_copyright') !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush