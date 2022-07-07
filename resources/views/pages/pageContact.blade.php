@extends('layouts.app')

@section('title', $repo->title)

@section('content')
<div class="relative">
	<div class="container mx-auto px-4">
		<div class="grid grid-cols-12 gap-y-[40px] lg:gap-y-0 lg:min-h-[80vh]">
			<div class="col-span-12 lg:col-span-3 flex items-end">
				<div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
					CONTACT US
				</div>
			</div>
			<div class="col-span-12 lg:col-span-3 flex items-center">
				<livewire:contact-form />
			</div>
			<div class="col-span-12 lg:col-span-6 flex flex-wrap justify-end gap-y-[30px] lg:gap-y-0">
				<div class="lg:absolute lg:w-[100vw] lg:left-0">
					<img class="lg:absolute lg:right-0 lg:max-w-[45vw]" src="https://via.placeholder.com/920x460"
						alt="">
				</div>
				<div
					class="self-end flex items-center gap-x-[15px] font-primary font-extralight uppercase text-[21px] text-primary-grey transition-all hover:text-tertiary-grey relative">
					STUFF
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush