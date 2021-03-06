<button type="{{ $type }}"
        class="flex disabled:opacity-50 items-center justify-center bg-{{ $color }}-500 @if (!isset($attributes['disabled'])) hover:bg-{{ $color }}-400 active:bg-{{ $color }}-500 @else cursor-default @endif focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500 focus:ring-offset-2 text-white rounded-lg py-3 px-3 transition ease-in-out duration-150 {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    <x-icon :name="$icon" :size="5" :set="$iconSet" solid x-ref="icon"/>
</button>
