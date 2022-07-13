<div class="relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-y-[30px] lg:gap-y-[60px]">
            @foreach($projects as $project)
            <div class="lg:col-start-1 col-span-12 lg:col-span-3 text-left lg:text-right">
                <div class="font-primary text-[24px] text-primary-grey">{{ $project->title }}</div>
                <div class="font-primary font-medium text-[20px] text-secondary-grey">{{ $project->description }}</div>
            </div>
            <div class="lg:col-start-6 col-span-12 lg:col-span-7 mb-[60px] lg:mb-0 relative group">
                <div class="absolute inset-0 bg-white bg-opacity-0 transition-all group-hover:bg-opacity-50"></div>
                <img class="object-contain object-center lg:object-left-top w-full h-[30vh] bg-tertiary-grey-50 lg:bg-transparent"
                    src="{{ $project->image('featured_image') }}" alt="">
                <a class="absolute inset-0" href="{{ route('project', $project->getSlug()) }}"></a>
            </div>
            @endforeach
        </div>
    </div>
    @if($can_load_more)
    <div class="absolute bottom-0 w-full h-[75vh]" x-data="" x-intersect="$wire.call('loadMore')">
    </div>
    @else
    <div class="h-[80px]">
    </div>
    @endif
    <div class="relative">
        <div class="fixed w-full bottom-[40px] lg:bottom-[140px]">
            <div class="container mx-auto px-4">
                <div class="font-primary font-extralight uppercase text-[36px] text-primary-grey">
                    {{ $repo->title }}
                </div>
            </div>
        </div>
    </div>
</div>