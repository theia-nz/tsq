<div class="relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-y-[30px] lg:gap-y-[60px]">
            @foreach($projects as $project)
            <div class="lg:col-start-1 col-span-12 lg:col-span-4 flex items-end justify-center lg:justify-start">
                <div class="text-center lg:text-right">
                    <div class="font-primary font-medium text-[29px] text-primary-grey">{{ $project->title }}</div>
                    <div class="font-primary font-medium text-[20px] text-secondary-grey">{{ $project->description }}
                    </div>
                </div>
            </div>
            <div class="lg:col-start-6 col-span-12 lg:col-span-8 mb-[60px] lg:mb-0 relative group">
                <div class="absolute inset-0 bg-white bg-opacity-0 transition-all group-hover:bg-opacity-50"></div>
                <img class="object-contain object-center lg:object-left-top w-full bg-tertiary-grey-50 lg:bg-transparent"
                    src="{{ $project->image('featured_image') }}" alt="">
                <a class="absolute inset-0" href="{{ route('project', $project->getSlug()) }}"></a>
            </div>
            @endforeach
        </div>
    </div>
    @if($can_load_more)
    <div class="absolute z-[-1] bottom-0 w-full h-[75vh]" x-data="" x-intersect="$wire.call('loadMore')"
        x-on:scroll.window="$nextTick(() => { if((window.innerHeight + window.scrollY) >= document.body.scrollHeight) { $wire.call('loadMore') } });">
    </div>
    @else
    <div class="h-[30px]">
    </div>
    @endif
    <div class="relative">
        <div class="fixed w-full bottom-[30px]">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-12">
                    <div class="col-span-4 flex items-end">
                        <div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
                            {{ $repo->title }}
                        </div>
                    </div>
                    <div class="col-start-9 lg:col-start-5 col-span-4 flex items-end justify-end lg:justify-center">
                        @if($can_load_more)
                        <div
                            class="flex items-center justify-center gap-x-[15px] bg-white bg-opacity-50 py-[10px] px-[10px] lg:px-[15px]">
                            <div
                                class="font-primary font-extralight uppercase text-center text-[21px] text-primary-grey">
                                {{ $repo->header_a }}
                            </div>
                            <svg class="animate-bounce text-primary-grey w-[30px] h-[30px] mt-[5px]"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                            </svg>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>