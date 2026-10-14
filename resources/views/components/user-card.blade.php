@props(['user'])

<article
    data-user-card
    data-search="{{ \Illuminate\Support\Str::lower($user['name'].' '.$user['username'].' '.$user['curp'].' '.$user['email'].' '.$user['phone']) }}"
    data-role="{{ $user['role'] }}"
    data-status="{{ $user['active'] ? 'active' : 'inactive' }}"
    class="rounded-2xl border border-slate-200/80 bg-white p-3.5 shadow-sm transition hover:border-blue-200 hover:shadow-md"
>
    <div class="flex items-start gap-3">
        <img
            src="{{ asset('images/profile-avatar.svg') }}"
            alt=""
            class="size-11 shrink-0 rounded-full border border-slate-200 object-cover"
        >
        <div class="min-w-0 flex-1">
            <div class="flex items-start justify-between gap-2">
                <div class="min-w-0">
                    <h2 class="truncate text-sm font-bold text-slate-900">{{ $user['name'] }}</h2>
                    <p class="truncate text-[11px] text-slate-500">{{ '@'.$user['username'] }}</p>
                </div>
                <div class="flex shrink-0 flex-col items-end gap-1">
                    <span class="rounded-full px-2 py-0.5 text-[9px] font-bold {{ $user['role_color'] }}">{{ $user['role_label'] }}</span>
                    <span data-card-status-label class="inline-flex items-center gap-1 text-[10px] font-semibold {{ $user['active'] ? 'text-emerald-700' : 'text-slate-500' }}">
                        <span class="size-1.5 rounded-full {{ $user['active'] ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                        {{ $user['active'] ? 'Activo' : 'Baja temporal' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 space-y-1.5 rounded-xl bg-[#f1f5ff] px-3 py-2.5 text-[11px] text-slate-600">
        <p class="flex items-center gap-2 truncate">
            <svg class="size-3.5 shrink-0 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M7 3h10v18H7zM10 6h4M11 18h2"></path>
            </svg>
            {{ $user['phone'] }}
        </p>
        <p class="flex items-center gap-2 truncate">
            <svg class="size-3.5 shrink-0 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                <path d="m3 7 9 6 9-6"></path>
            </svg>
            {{ $user['email'] }}
        </p>
    </div>

    <div class="mt-2.5 grid grid-cols-[1fr_auto_auto] gap-2">
        <a href="{{ route('Editar') }}" class="flex min-h-9 items-center justify-center gap-1.5 rounded-lg bg-[#e7edfb] px-3 text-[11px] font-semibold text-[#1e3a8a] transition hover:bg-blue-100">
            <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="m15 5 4 4M4 20l4-.8L19 8a2.8 2.8 0 0 0-4-4L4 15l-1 5Z"></path>
            </svg>
            Editar
        </a>
        <button
            type="button"
            data-user-status-toggle
            class="flex min-h-9 items-center justify-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 text-[11px] font-semibold text-slate-700 transition hover:bg-slate-50"
            aria-label="{{ $user['active'] ? 'Desactivar' : 'Activar' }} cuenta de {{ $user['name'] }}"
        >
            <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M8 12h8M12 8v8"></path>
                <circle cx="12" cy="12" r="9"></circle>
            </svg>
            {{ $user['active'] ? 'Estatus' : 'Activar' }}
        </button>
        <button type="button" disabled aria-label="Eliminar {{ $user['name'] }}" class="flex size-9 items-center justify-center rounded-lg bg-red-50 text-red-400 opacity-70" title="Eliminación no disponible">
            <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path d="M4 7h16M10 11v6M14 11v6M5 7l1 14h12l1-14M9 7V4h6v3"></path>
            </svg>
        </button>
    </div>
</article>
