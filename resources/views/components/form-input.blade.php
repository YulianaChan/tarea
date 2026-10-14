@props([
    'label',
    'name',
    'type' => 'text',
    'icon' => null,
    'autocomplete' => null,
    'placeholder' => '',
    'value' => null,
])

<div>
    @if ($label !== '')
        <label for="{{ $name }}" class="mb-2 block text-sm font-semibold text-slate-700">
            {{ $label }}
        </label>
    @endif
    <div class="relative">
        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400" aria-hidden="true">
            @switch($icon ?? ($type === 'password' ? 'password' : ($type === 'email' ? 'email' : 'text')))
                @case('password')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="4" y="10" width="16" height="11" rx="2"></rect>
                    <path d="M8 10V7a4 4 0 1 1 8 0v3"></path>
                </svg>
                @break
                @case('email')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                    <path d="m3 7 9 6 9-6"></path>
                </svg>
                @break
                @case('user')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
                </svg>
                @break
                @case('calendar')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                    <path d="M16 3v4M8 3v4M3 10h18"></path>
                </svg>
                @break
                @case('id')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                    <circle cx="8" cy="11" r="2"></circle>
                    <path d="M5.5 16a3 3 0 0 1 5 0M13 10h5M13 14h5"></path>
                </svg>
                @break
                @case('phone')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M7 3h10v18H7zM10 6h4M11 18h2"></path>
                </svg>
                @break
                @case('key')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="8" cy="15" r="4"></circle>
                    <path d="m11 12 8-8 2 2-2 2 2 2-3 3-2-2-3 3"></path>
                </svg>
                @break
                @case('role')
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
                @break
                @default
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="4" y="4" width="16" height="16" rx="3"></rect>
                    <path d="M8 9h8M8 13h5"></path>
                </svg>
            @endswitch
        </span>
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            placeholder="{{ $placeholder }}"
            value="{{ $type === 'password' ? '' : old($name, $value) }}"
            @if ($errors->has($name))
                aria-invalid="true"
                aria-describedby="{{ $name }}-error"
            @endif
            {{ $attributes->merge([
                'class' => 'block w-full rounded-xl border bg-white py-3.5 pl-12 pr-4 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100 ' . ($errors->has($name) ? 'border-red-400' : 'border-slate-200'),
            ]) }}
        >
    </div>
    @error($name)
        <p id="{{ $name }}-error" class="mt-2 text-sm font-medium text-red-600">{{ $message }}</p>
    @enderror
</div>
