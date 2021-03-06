<div class="flex flex-col @if (!$first) mt-4 @endif" x-data="{ showFocusRing: false, revealPassword: false }">
    @if (!$hideLabel || $name === null)
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif

    <div class="@if (!$hideLabel) mt-2 @endif flex items-center rounded-lg"
         x-bind:class="{ 'ring ring-{{ $color }}-200': showFocusRing }">
        @if ($icon)
            <div class="border rounded-r-none rounded-lg p-3 border-gray-300">
                <x-icon :name="$icon" :set="$iconSet" size="6" class="text-gray-400" solid/>
            </div>
        @endif


        <input
            @focus="showFocusRing = true"
            @blur="showFocusRing = false"
            type="password"
            x-bind:type="revealPassword ? 'text' : 'password'"
            @if ($name) name="{{ $name }}" id="{{ $name }}" @endif
            class="py-3 px-5 block w-full rounded-lg border-gray-300 focus:border-gray-300 shadow-sm focus:border-opacity-0 focus:ring-0 @if ($icon) border-l-0 rounded-l-none @endif border-r-0 rounded-r-none {{ $attributes->get('class') }}"
            {{ $attributes }}
        />

        <button
            type="button"
            class="border-l-0 rounded-l-none rounded-lg p-3 text-gray-400 hover:text-gray-500 focus:text-gray-500 border-gray-300 cursor-pointer"
            x-bind:class="{ 'border': !showFocusRing }"
            @click="revealPassword = !revealPassword">
            <div x-show="!revealPassword">
                <x-icon name="eye" set="heroicon" size="6"/>
            </div>
            <div x-show="revealPassword">
                <x-icon name="eye-off" set="heroicon" size="6"/>
            </div>
        </button>
    </div>

    @if ($name)
        @error($name)
        <p class="flex items-center text-red-500 mt-2">
            <x-icon name="exclamation-circle" solid size="5"/>
            <span class="inline-block ml-2">{{ $message }}</span>
        </p>
        @enderror
    @endif
</div>
