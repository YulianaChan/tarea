@props(['type' => 'submit'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-xl bg-[#1e3a8a] px-5 py-3 text-sm font-semibold text-white shadow-md shadow-blue-950/15 transition hover:bg-blue-900 focus:outline-none focus:ring-4 focus:ring-blue-200 active:translate-y-px']) }}
>
    {{ $slot }}
</button>
