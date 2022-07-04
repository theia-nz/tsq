@extends('layouts.app')

@section('title', '')

@section('content')
<div class="py-8">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa corrupti quia, quod id error saepe. Quia officia
	totam porro quos modi voluptate assumenda. Quisquam ad reprehenderit quod, corporis est rem.
</div>
<div class="container mx-auto px-[15px]">
	<div class="grid grid-cols-12">
		<div class="col-span-12 xl:col-span-6">
			<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quasi placeat nesciunt magni
				voluptatum, ipsam totam explicabo dolorem ad voluptate.</div>
		</div>
		<div class="col-span-12 xl:col-span-6 relative">
			<div class="relative xl:absolute h-[30px] w-[100vw] bg-red-500 xl:translate-x-[-50vw]">
				<img class="relative xl:absolute right-0 " src="https://via.placeholder.com/400x200" alt="">
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
@endpush