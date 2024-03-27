@if (session('flash.type') === 'error')
    <div class="flex items-center w-full justify-center px-10 sm:p-0 z-[1000] ">
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
            class="notification fixed bottom-0 z-[1000] "
        >

            <div class=" p-3 rounded-full  w-full px-5 text-xs sm:text-sm text-white inline-block mx-auto mb-10 text-center shadow-lg z-[1000] {{ config('flash.enable_dark_mode') === true ? 'block dark:hidden' : '' }} " style="background-color: {{ config('flash.theme.error') }}">
                <div class="flex gap-4 items-center min-w-52  w-full max-w-[320px] sm:max-w-screenjustify-between">
                    <p>{{ session('flash.message') }}</p>

                    <div class="cursor-pointer rounded-full opacity-80" fsh-on:click="show = false" style="background-color: {{ lightenBG(config('flash.theme.error'),0.3) }}" >
                        @if(config('flash.cancel_btn_type') == 'svg')
                            <x-flash::svg.cancel size="25" />
                        @else
                            <div class="px-2 p-1 text-xs">close</div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="p-3 rounded-full px-5 text-xs w-full sm:text-sm text-white mx-auto mb-10 text-center shadow-lg z-[1000] {{ config('flash.enable_dark_mode') === true ? 'hidden dark:inline-block' : 'hidden' }} " style="background-color: {{ config('flash.dark-theme.error') }}">
                <div class="flex gap-4 items-center min-w-52  w-full max-w-[320px] sm:max-w-screenjustify-between">
                    <p>{{ session('flash.message') }}</p>

                    <div class="cursor-pointer rounded-full opacity-80" fsh-on:click="show = false" style="background-color: {{ lightenBG(config('flash.dark-theme.error'),0.3) }}" >
                        @if(config('flash.cancel_btn_type') == 'svg')
                            <x-flash::svg.cancel size="25" />
                        @else
                            <div class="px-2 p-1 text-xs">close</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
