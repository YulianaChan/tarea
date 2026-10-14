@extends('layouts.app')

@section('title', 'Directorio de Personal | DistriPapel')

@section('content')
    @php
        $users = [
            [
                'name' => 'Carlos Mendoza Ruiz',
                'username' => 'cmendoza_rep',
                'phone' => '+52 55 4912 8831',
                'email' => 'carlos.mendoza@distripapel.com.mx',
                'curp' => 'MERC890124HDFLDR05',
                'role' => 'repartidor',
                'role_label' => 'Repartidor',
                'role_color' => 'bg-emerald-100 text-emerald-800',
                'active' => true,
            ],
            [
                'name' => 'Sofía Valdés Gómez',
                'username' => 'svaldes_pap',
                'phone' => '+52 55 8392 1104',
                'email' => 'sofia.v@distripapel.com.mx',
                'curp' => 'VAGS920412MDFLLF08',
                'role' => 'papeleria',
                'role_label' => 'Vend. Papelería',
                'role_color' => 'bg-amber-100 text-amber-800',
                'active' => true,
            ],
            [
                'name' => 'Lic. Fernando Rivas',
                'username' => 'frivas_gen',
                'phone' => '+52 55 3301 9922',
                'email' => 'fernando.r@distripapel.com.mx',
                'curp' => 'RIFL850729HDFVNR04',
                'role' => 'general',
                'role_label' => 'Vend. General',
                'role_color' => 'bg-blue-100 text-blue-800',
                'active' => true,
            ],
            [
                'name' => 'Ing. Javier Domínguez',
                'username' => 'jdominguez_adm',
                'phone' => '+52 55 1289 4430',
                'email' => 'j.dominguez@distripapel.com.mx',
                'curp' => 'DOAJ810302HDFMVR01',
                'role' => 'admin',
                'role_label' => 'Administrador',
                'role_color' => 'bg-[#1e3a8a] text-white',
                'active' => true,
            ],
            [
                'name' => 'Roberto Nava Ortega',
                'username' => 'rnava_temp',
                'phone' => '+52 55 6710 2291',
                'email' => 'rnava@distripapel.com.mx',
                'curp' => 'NAOR900517HDFVRB02',
                'role' => 'repartidor',
                'role_label' => 'Repartidor',
                'role_color' => 'bg-emerald-100 text-emerald-800',
                'active' => false,
            ],
        ];
    @endphp

    <main class="min-h-screen px-4 pb-24 pt-4 sm:px-6 sm:pt-8">
        <div class="mx-auto max-w-xl">
            <header class="mb-5 flex items-center justify-between rounded-2xl border border-slate-200/80 bg-white px-3 py-3 shadow-sm sm:px-4">
                <a href="{{ url('/') }}" class="flex min-w-0 items-center gap-2.5" aria-label="DistriPapel, volver al panel">
                    <span class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-[#1e3a8a] text-white">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M3 20V8.5L12 4l9 4.5V20H3Z"></path>
                            <path d="M8 20v-6h8v6M7 9h.01M12 9h.01M17 9h.01"></path>
                        </svg>
                    </span>
                    <span class="min-w-0">
                        <span class="block truncate font-display text-sm font-bold text-[#142b62]">DistriPapel</span>
                        <span class="block text-[10px] text-slate-500">Dashboard</span>
                    </span>
                </a>
                <div class="flex items-center gap-2">
                    <span class="hidden items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-700 sm:inline-flex">
                        <span class="size-1.5 rounded-full bg-emerald-500"></span>
                        Online
                    </span>
                    <img src="{{ asset('images/profile-avatar.svg') }}" alt="" class="size-8 rounded-full border border-slate-200 object-cover">
                </div>
            </header>

            <section class="mb-4 flex items-center justify-between gap-3">
                <div>
                    <span class="mb-1 inline-flex rounded-full bg-indigo-50 px-2.5 py-1 text-[9px] font-bold uppercase tracking-wide text-indigo-800">Panel administrativo</span>
                    <h1 class="font-display text-2xl font-bold tracking-tight text-[#142b62]">Directorio de Personal</h1>
                    <p class="mt-1 text-xs leading-5 text-slate-500">Gestión, roles y estados de acceso para todo el equipo operativo y comercial.</p>
                </div>
                <a href="{{ route('Editar') }}" class="inline-flex min-h-10 shrink-0 items-center gap-1.5 rounded-xl bg-[#1e3a8a] px-3 text-[11px] font-semibold text-white shadow-sm transition hover:bg-blue-900">
                    <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M12 5v14M5 12h14"></path>
                        <circle cx="12" cy="8" r="3"></circle>
                    </svg>
                    Nuevo
                </a>
            </section>

            <section class="mb-4 grid grid-cols-3 gap-2.5" aria-label="Resumen de usuarios">
                <article class="rounded-xl border border-slate-200/80 bg-white p-3 shadow-sm">
                    <p class="text-[9px] font-bold uppercase tracking-wide text-slate-500">Total</p>
                    <p id="total-count" class="mt-1 font-display text-xl font-bold text-[#142b62]">{{ count($users) }}</p>
                    <p class="text-[9px] text-slate-500">usuarios</p>
                </article>
                <article class="rounded-xl border border-emerald-100 bg-emerald-50/70 p-3">
                    <p class="text-[9px] font-bold uppercase tracking-wide text-emerald-800">Activos</p>
                    <p id="active-count" class="mt-1 font-display text-xl font-bold text-emerald-800">{{ collect($users)->where('active', true)->count() }}</p>
                    <p class="text-[9px] text-emerald-700">con acceso</p>
                </article>
                <article class="rounded-xl border border-slate-200 bg-slate-100 p-3">
                    <p class="text-[9px] font-bold uppercase tracking-wide text-slate-500">Inactivos</p>
                    <p id="inactive-count" class="mt-1 font-display text-xl font-bold text-slate-600">{{ collect($users)->where('active', false)->count() }}</p>
                    <p class="text-[9px] text-slate-500">pausados</p>
                </article>
            </section>

            <section class="mb-3" aria-label="Buscar y filtrar usuarios">
                <label for="user-search" class="sr-only">Buscar por nombre, usuario, CURP o correo</label>
                <div class="relative">
                    <svg class="pointer-events-none absolute left-3.5 top-1/2 size-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="m20 20-4-4"></path>
                    </svg>
                    <input id="user-search" type="search" placeholder="Buscar por nombre, usuario, CURP o correo..." class="h-11 w-full rounded-xl border border-slate-200 bg-white pl-10 pr-4 text-xs text-slate-900 shadow-sm outline-none placeholder:text-slate-400 focus:border-blue-700 focus:ring-4 focus:ring-blue-100">
                </div>
            </section>

            <nav class="mb-2 flex gap-1 overflow-x-auto pb-1" aria-label="Filtrar por rol">
                <button type="button" data-role-filter="all" aria-pressed="true" class="shrink-0 rounded-full bg-[#1e3a8a] px-3 py-1.5 text-[10px] font-semibold text-white">Todos ({{ count($users) }})</button>
                <button type="button" data-role-filter="admin" aria-pressed="false" class="shrink-0 rounded-full bg-white px-3 py-1.5 text-[10px] font-semibold text-slate-600 ring-1 ring-slate-200">Admin ({{ collect($users)->where('role', 'admin')->count() }})</button>
                <button type="button" data-role-filter="general" aria-pressed="false" class="shrink-0 rounded-full bg-white px-3 py-1.5 text-[10px] font-semibold text-slate-600 ring-1 ring-slate-200">Vend. General ({{ collect($users)->where('role', 'general')->count() }})</button>
                <button type="button" data-role-filter="papeleria" aria-pressed="false" class="shrink-0 rounded-full bg-white px-3 py-1.5 text-[10px] font-semibold text-slate-600 ring-1 ring-slate-200">Vend. Papelería ({{ collect($users)->where('role', 'papeleria')->count() }})</button>
                <button type="button" data-role-filter="repartidor" aria-pressed="false" class="shrink-0 rounded-full bg-white px-3 py-1.5 text-[10px] font-semibold text-slate-600 ring-1 ring-slate-200">Repartidor ({{ collect($users)->where('role', 'repartidor')->count() }})</button>
            </nav>

            <div class="mb-3 grid grid-cols-3 rounded-xl bg-[#e8efff] p-1 text-center" aria-label="Filtrar por estado">
                <button type="button" data-status-filter="all" aria-pressed="true" class="rounded-lg bg-white px-2 py-2 text-[10px] font-semibold text-[#1e3a8a] shadow-sm">Todos</button>
                <button type="button" data-status-filter="active" aria-pressed="false" class="rounded-lg px-2 py-2 text-[10px] font-semibold text-slate-600">● Activos</button>
                <button type="button" data-status-filter="inactive" aria-pressed="false" class="rounded-lg px-2 py-2 text-[10px] font-semibold text-slate-600">● Inactivos</button>
            </div>

            <section id="user-list" class="space-y-3" aria-label="Usuarios">
                @foreach ($users as $user)
                    <x-user-card :user="$user" />
                @endforeach
            </section>

            <p id="empty-results" class="hidden rounded-xl border border-dashed border-slate-300 bg-white p-6 text-center text-sm text-slate-500">
                No se encontraron usuarios con esos criterios.
            </p>

            <footer class="mt-4 flex items-center justify-between text-[10px] text-slate-500">
                <p>Mostrando <span id="visible-count">{{ count($users) }}</span> de {{ count($users) }} usuarios</p>
                <div class="flex items-center gap-1" aria-label="Paginación">
                    <button type="button" disabled aria-label="Página anterior" class="flex size-7 items-center justify-center rounded-lg text-slate-300">
                        <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"></path></svg>
                    </button>
                    <span class="flex size-7 items-center justify-center rounded-lg bg-[#1e3a8a] text-[10px] font-bold text-white">1</span>
                    <button type="button" disabled aria-label="Página siguiente" class="flex size-7 items-center justify-center rounded-lg text-slate-300">
                        <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"></path></svg>
                    </button>
                </div>
            </footer>
        </div>
    </main>

    <nav class="fixed inset-x-0 bottom-0 z-10 border-t border-slate-200 bg-white/95 px-4 pb-[max(0.75rem,env(safe-area-inset-bottom))] pt-2 backdrop-blur" aria-label="Navegación principal">
        <div class="mx-auto grid max-w-xl grid-cols-5">
            <a href="{{ url('/') }}" class="flex flex-col items-center gap-1 py-1 text-slate-500">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 10.5 12 3l9 7.5V21H3z"></path><path d="M9 21v-7h6v7"></path></svg>
                <span class="text-[9px]">Panel</span>
            </a>
            <a href="{{ route('Catalogo') }}" aria-current="page" class="flex flex-col items-center gap-1 py-1 text-[#1e3a8a]">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="8" r="3"></circle><circle cx="17" cy="9" r="2"></circle><path d="M3 20v-2a6 6 0 0 1 12 0v2M16 15a4 4 0 0 1 5 4v1"></path></svg>
                <span class="text-[9px] font-bold">Usuarios</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 py-1 text-slate-500">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 5h16v15H4zM8 9h8M8 13h8M8 17h4"></path></svg>
                <span class="text-[9px]">Orden</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 py-1 text-slate-500">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 7h12v12H3zM15 11h4l2 3v5h-6z"></path><circle cx="7" cy="19" r="2"></circle><circle cx="18" cy="19" r="2"></circle></svg>
                <span class="text-[9px]">Rutas</span>
            </a>
            <a href="#" class="flex flex-col items-center gap-1 py-1 text-slate-500">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 20h18M5 20V8l7-4 7 4v12M9 20v-6h6v6M8 10h.01M12 10h.01M16 10h.01"></path></svg>
                <span class="text-[9px]">Almacén</span>
            </a>
        </div>
    </nav>

    <script>
        const userSearch = document.getElementById('user-search');
        const userCards = [...document.querySelectorAll('[data-user-card]')];
        const emptyResults = document.getElementById('empty-results');
        let selectedRole = 'all';
        let selectedStatus = 'all';

        function filterUsers() {
            const query = userSearch.value.trim().toLocaleLowerCase('es');
            let visibleCount = 0;

            userCards.forEach((card) => {
                const matchesQuery = card.dataset.search.includes(query);
                const matchesRole = selectedRole === 'all' || card.dataset.role === selectedRole;
                const matchesStatus = selectedStatus === 'all' || card.dataset.status === selectedStatus;
                const visible = matchesQuery && matchesRole && matchesStatus;

                card.classList.toggle('hidden', !visible);
                visibleCount += Number(visible);
            });

            document.getElementById('visible-count').textContent = visibleCount;
            emptyResults.classList.toggle('hidden', visibleCount !== 0);
        }

        userSearch.addEventListener('input', filterUsers);

        document.querySelectorAll('[data-role-filter]').forEach((button) => {
            button.addEventListener('click', () => {
                selectedRole = button.dataset.roleFilter;
                document.querySelectorAll('[data-role-filter]').forEach((tab) => {
                    const selected = tab === button;
                    tab.setAttribute('aria-pressed', String(selected));
                    tab.classList.toggle('bg-[#1e3a8a]', selected);
                    tab.classList.toggle('text-white', selected);
                    tab.classList.toggle('bg-white', !selected);
                    tab.classList.toggle('text-slate-600', !selected);
                });
                filterUsers();
            });
        });

        document.querySelectorAll('[data-status-filter]').forEach((button) => {
            button.addEventListener('click', () => {
                selectedStatus = button.dataset.statusFilter;
                document.querySelectorAll('[data-status-filter]').forEach((tab) => {
                    const selected = tab === button;
                    tab.setAttribute('aria-pressed', String(selected));
                    tab.classList.toggle('bg-white', selected);
                    tab.classList.toggle('text-[#1e3a8a]', selected);
                    tab.classList.toggle('shadow-sm', selected);
                    tab.classList.toggle('text-slate-600', !selected);
                });
                filterUsers();
            });
        });

        document.querySelectorAll('[data-user-status-toggle]').forEach((button) => {
            button.addEventListener('click', () => {
                const card = button.closest('[data-user-card]');
                const isActive = card.dataset.status !== 'active';
                const statusLabel = card.querySelector('[data-card-status-label]');

                card.dataset.status = isActive ? 'active' : 'inactive';
                statusLabel.innerHTML = `<span class="size-1.5 rounded-full ${isActive ? 'bg-emerald-500' : 'bg-slate-400'}"></span>${isActive ? 'Activo' : 'Baja temporal'}`;
                statusLabel.classList.toggle('text-emerald-700', isActive);
                statusLabel.classList.toggle('text-slate-500', !isActive);
                button.setAttribute('aria-label', `${isActive ? 'Desactivar' : 'Activar'} cuenta de ${card.querySelector('h2').textContent}`);
                button.innerHTML = `<svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M8 12h8M12 8v8"></path><circle cx="12" cy="12" r="9"></circle></svg>${isActive ? 'Estatus' : 'Activar'}`;

                document.getElementById('active-count').textContent = userCards.filter((item) => item.dataset.status === 'active').length;
                document.getElementById('inactive-count').textContent = userCards.filter((item) => item.dataset.status === 'inactive').length;
                filterUsers();
            });
        });
    </script>
@endsection
