@if (session('flash.type') === 'info')
    <div class="flex items-center justify-center px-10 sm:p-0">
        <div
        x-data="{ show: true }"
        x-init="setTimeout(() => { show = false }, 2000)"
        x-show="show"
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="notification bg-gray-800 p-3 rounded-full px-5 text-xs sm:text-sm text-neutral-300 inline-block mx-auto fixed bottom-0 mb-10 text-center shadow-lg z-[100]">
            <div class="flex gap-4 items-center min-w-[155px] justify-between">
                <p>{{ session('flash.message') }}</p>
                <div class="cursor-pointer" x-on:click="show = false" >
                    <x-flash::svg.cancel size="25" />
                </div>
            </div>
        </div>
    </div>
@endif
