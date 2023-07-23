<div>
    <div class="border-b border-gray-200 bg-white  p-6 mb-4">
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
            <div class="ml-4 ">
                <button class="mouseover:pointer">
                    <img src="img/larajobs.png" class="h-8 w-auto" />
                </button>
            </div>
        </div>
    </div>
    @foreach ($data['items'] as $index => $item)
        <livewire:job :wire:key="$index" :link="$item->get_permalink()" :title="$item->get_title()" :description="$item->get_description()" :date="$item->get_date()" />
    @endforeach
</div>
