<div>
    <a
        @if (!empty($href) && !$disabled) href="{{ $href }}" @endif
    class="flex items-center @if($disabled) opacity-50 select-none cursor-not-allowed @elseif(!$disabled && !empty($href)) hover:bg-{{ $color }}-300 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-500 focus:ring-offset-2 @endif @if (isset($pill)) rounded-full @else rounded-lg @endif px-3 text-sm py-1.5 bg-{{ $color }}-200 text-{{ $color }}-700">
        @if ($dotted)
            <span class="inline-block w-1 h-1 rounded-full bg-{{ $color }}-700"></span>
        @endif

        <span
            class="inline-block font-semibold leading-none @if ($dotted) ml-2 @endif">{{ $content ?? $slot }}</span>
    </a>
</div>
