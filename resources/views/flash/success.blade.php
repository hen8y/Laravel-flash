@if (session('flash.type') === 'success') 
    <div class="flex items-center justify-center px-10 sm:p-0">
        <div
        fsh-data="{ show: true }"
        fsh-show="show"
        fsh-init="setTimeout(() => { show = false }, 2000)"
        fsh-transition:enter="transform ease-out duration-300 transition"
        fsh-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        fsh-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        fsh-transition:leave="transition ease-in duration-100"
        fsh-transition:leave-start="opacity-100"
        fsh-transition:leave-end="opacity-0"
        class="notification bg-green-800 p-3 rounded-full px-5 text-xs sm:text-sm text-neutral-300 inline-block fixed mx-auto bottom-0 mb-10 text-center shadow-lg z-[100]">
            <div class="flex gap-4 items-center min-w-[150px] justify-between">
                <p>{{ session('flash.message') }}</p>
                <div class="cursor-pointer" fsh-on:click="show = false" >
                    <x-flash::svg.cancel size="25" />
                </div>
            </div>
        </div>
    </div>
@endif
