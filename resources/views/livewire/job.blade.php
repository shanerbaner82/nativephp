<div class="grid grid-cols-1 gap-4 mt-2 px-3">
    <div class="relative flex items-center space-x-3 rounded-lg  bg-white p-2 border border-gray-200 hover:border-gray-400 transition-bg duration-300">
        <div class="min-w-0 flex-1 flex items-start justify-between">
            <div class="w-7/8 pr-2">
                <span class="absolute inset-0" aria-hidden="true"></span>
                <p class="font-medium text-sm text-sky-600 ">{{$author}}</p>
                <p class="font-medium text-gray-900 capitalize">{{\Illuminate\Support\Str::ucfirst(\Illuminate\Support\Str::lower($title))}}</p>
                <p class="truncate text-sm text-gray-500">{{\Carbon\Carbon::make($date)->format('F j, Y')}}</p>
            </div>
            <button wire:click="visitJob"  class="relative inline-flex mt-2 justify-center items-center rounded-md  text-sm font-semibold text-sky-500 shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
            </button>
        </div>
    </div>
</div>
