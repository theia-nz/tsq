<header
	class="@if(\Illuminate\Support\Facades\Route::currentRouteName() === 'home' || \Illuminate\Support\Facades\Route::currentRouteName() === 'project') bg-white bg-opacity-95 w-full fixed top-0 @else relative @endif z-40"
	x-data="{ sideMenu: false }">
	<div
		class="container mx-auto px-4 @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'home') py-[5px] @else pt-[15px] pb-[15px] lg:pb-[30px] @endif flex items-center justify-between">
		<div class="relative mr-[15px]">
			<a class="absolute inset-0" href="{{ config('app.url') }}"></a>
			@if(\Illuminate\Support\Facades\Route::currentRouteName() === 'home')
			<img class="max-h-[30px]"
				src="{{ $setting->where('key', 'company_favicon')->first()->image('company_favicon') }}" alt="">
			@else
			<img class="max-h-[80px]" src="{{ $setting->where('key', 'company_logo')->first()->image('company_logo') }}"
				alt="">
			@endif
		</div>
		<svg class="cursor-pointer w-[30px] h-[30px]" x-on:click.stop="sideMenu = true"
			xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
		</svg>
	</div>
	<div class="flex flex-row-reverse fixed inset-0" x-cloak x-show="sideMenu">
		<div class="cursor-pointer absolute inset-0" x-show="sideMenu" x-on:click="sideMenu = false"
			x-transition:enter="transition-all" x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100" x-transition:leave="transition-all"
			x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
			<div class="bg-primary-grey bg-opacity-50 absolute inset-0"></div>
		</div>
		<div class="bg-primary-grey w-full max-w-xl overflow-auto pt-[80px] md:pt-[160px] px-[45px] md:px-[60px] relative"
			x-show="sideMenu" x-transition:enter="transition-all" x-transition:enter-start="translate-x-full"
			x-transition:enter-end="translate-x-0" x-transition:leave="transition-all"
			x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
			<div class="flex flex-col gap-y-[20px] relative">
				<img class="cursor-pointer absolute top-[-45px] md:top-[-90px] right-0"
					src="{{ $setting->where('key', 'icon_xmark')->first()->image('icon_xmark') }}" alt=""
					x-on:click.stop="sideMenu = false">
				@foreach($menu->getSiblings()->where('published', 1) as $menuIndex => $menuItem)
				<div
					class="font-primary {{ request()->segment(1) === $menuItem->link ? 'font-medium' : 'font-extralight' }} uppercase text-[36px] text-quaternary-grey transition-all hover:text-tertiary-grey relative">
					<a class="absolute inset-0" @if($menuItem->link) href="{{ $menuItem->type === 'external' ?
						$menuItem->link : config('app.url') . '/' . $menuItem->link }}" target="{{ $menuItem->new_tab ?
						'_blank' : '_self' }}" @else href="{{ config('app.url') }}" @endif></a>
					{{ $menuItem->title }}
					@if($menuItem->getDescendants()->where('published', 1)->count())
					<div class="flex flex-col gap-y-[20px] pt-[20px] pl-[20px] md:pl-[40px]">
						@foreach ($menuItem->getDescendants()->where('published', 1) as $submenuItem)
						<div
							class="font-primary {{ request()->segment(2) === $submenuItem->link ? 'font-medium' : 'font-extralight' }} uppercase text-[36px] text-quaternary-grey transition-all hover:text-tertiary-grey relative">
							<a class="absolute inset-0" @if($submenuItem->link) href="{{ $submenuItem->type ===
								'external' ?
								$submenuItem->link : config('app.url') . '/' . $submenuItem->link }}" target="{{
								$submenuItem->new_tab ?
								'_blank' : '_self' }}" @endif></a>
							{{ $submenuItem->title }}
						</div>
						@endforeach
					</div>
					@endif
				</div>
				@endforeach
			</div>
		</div>
	</div>
</header>