<h2 class="text-{{ $size }} font-semibold tracking-wide @if ($color && $color !== 'gray') text-{{ $color }}-500 @else text-gray-700 @endif uppercase {{ $attributes->get('class') }}"  {{ $attributes->except('class') }}>{{ $content ?? $slot }}</h2>
