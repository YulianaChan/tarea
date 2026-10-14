@extends('layouts.app')

@section('title', 'Editar perfil | DistriPapel')

@section('content')
    <main class="min-h-screen px-4 py-5 sm:px-6 sm:py-8">
        <div class="mx-auto max-w-xl">
            <header class="mb-5 flex items-center justify-between rounded-2xl border border-slate-200/80 bg-white px-3 py-3 shadow-sm sm:px-4">
                <div class="flex items-center gap-2.5">
                    <a href="{{ url('/') }}" class="flex size-9 items-center justify-center rounded-xl text-slate-600 transition hover:bg-slate-100" aria-label="Volver">
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="m15 18-6-6 6-6M9 12h12"></path>
                        </svg>
                    </a>
                    <div>
                        <p class="font-display text-sm font-bold text-[#142b62]">Usuario Editar Perfil</p>
                        <p class="text-[11px] text-slate-500">DistriPapel</p>
                    </div>
                </div>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-emerald-700">
                    <span class="size-1.5 rounded-full bg-emerald-500"></span>
                    Online
                </span>
            </header>

            <section class="mb-5">
                <p class="mb-1.5 text-[10px] font-bold uppercase tracking-[0.16em] text-amber-700">Módulo de colaborador</p>
                <h1 class="font-display text-3xl font-bold tracking-tight text-[#142b62]">Editar Perfil</h1>
                <p class="mt-1.5 text-sm leading-6 text-slate-600">
                    Actualiza tu información personal y credenciales de acceso institucional.
                </p>
            </section>

            <section class="mb-5 rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm sm:p-5" aria-label="Resumen del colaborador">
                <div class="flex items-center gap-3">
                    <img
                        src="{{ asset('images/profile-avatar.svg') }}"
                        alt="Foto de perfil de Carlos Mendoza Ruiz"
                        class="size-14 shrink-0 rounded-full border-2 border-white object-cover shadow ring-1 ring-slate-200"
                    >
                    <div class="min-w-0 flex-1">
                        <h2 class="font-display text-sm font-bold text-slate-900">Carlos Mendoza Ruiz</h2>
                        <div class="mt-1 flex flex-wrap items-center gap-1.5">
                            <span class="rounded-full bg-blue-50 px-2 py-1 text-[10px] font-semibold text-[#1e3a8a]">Repartidor · Ruta activa</span>
                            <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-1 text-[10px] font-semibold text-emerald-700">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                Activo
                            </span>
                        </div>
                        <p class="mt-1 text-[10px] text-slate-500">ID: EMP-0429 · Alta: 15 Ene 2023</p>
                    </div>
                </div>
                <div class="mt-4 flex gap-2 rounded-xl bg-[#f1f5ff] p-3 text-xs leading-5 text-slate-600">
                    <svg class="mt-0.5 size-4 shrink-0 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <p>Perfil validado para operaciones en campo. Permisos y jerarquía de nómina gestionados por Administración General.</p>
                </div>
            </section>

            <section class="mb-5 rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm sm:p-5">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="flex items-center gap-2 font-display text-sm font-bold text-[#142b62]">
                        <svg class="size-4 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
                        </svg>
                        Datos Personales
                    </h2>
                    <span class="text-[9px] font-semibold uppercase tracking-wide text-slate-400">Sincronizado</span>
                </div>

                <div class="space-y-4">
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <label for="full_name" class="text-xs font-semibold text-slate-700">Nombre Completo</label>
                            <span class="text-[10px] font-medium text-emerald-700">✓ Verificado</span>
                        </div>
                        <x-form-input name="full_name" label="" icon="user" placeholder="Nombre completo" value="Carlos Mendoza Ruiz" autocomplete="name" />
                    </div>

                    <x-form-input name="age" label="Edad" type="text" icon="calendar" value="34 años" readonly />
                    <x-form-input name="curp" label="CURP" type="text" icon="id" value="MERC890124HDFLDR05" readonly />

                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <label for="phone" class="text-xs font-semibold text-slate-700">Teléfono Móvil (Terminal)</label>
                            <span class="text-[10px] font-semibold text-amber-700">SMS de verificación</span>
                        </div>
                        <div class="flex gap-2">
                            <x-form-input name="phone" label="" type="tel" icon="phone" autocomplete="tel" placeholder="+52 55 0000 0000" value="+52 55 4912 8831" />
                            <button type="button" class="mt-0 flex size-12 shrink-0 items-center justify-center self-end rounded-xl border border-slate-200 bg-[#f1f5ff] text-[#1e3a8a] transition hover:bg-blue-100" aria-label="Verificar teléfono">
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M4 5h16v12H8l-4 4V5Z"></path>
                                    <path d="M8 9h8M8 13h5"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <x-form-input
                        name="email"
                        label="Correo Electrónico Corporativo"
                        type="email"
                        icon="email"
                        autocomplete="email"
                        placeholder="nombre@distripapel.com"
                        value="carlos.mendoza@distripapel.com"
                    />
                </div>
            </section>

            <section class="mb-5 rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm sm:p-5">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="flex items-center gap-2 font-display text-sm font-bold text-[#142b62]">
                        <svg class="size-4 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"></path>
                            <rect x="9" y="10" width="6" height="5" rx="1"></rect>
                            <path d="M10 10V8a2 2 0 1 1 4 0v2"></path>
                        </svg>
                        Credenciales de Acceso
                    </h2>
                    <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[10px] font-bold text-[#1e3a8a]">Nivel 2</span>
                </div>

                <div class="space-y-4">
                    <x-form-input name="username" label="Nombre de Usuario (Logística)" icon="user" value="cmendoza_rep" autocomplete="username" />

                    <div>
                        <label for="new_password" class="mb-2 block text-sm font-semibold text-slate-700">Nueva Contraseña</label>
                        <div class="flex gap-2">
                            <div class="min-w-0 flex-1">
                                <x-form-input name="new_password" label="" type="password" icon="key" autocomplete="new-password" placeholder="Dejar en blanco para conservar" />
                            </div>
                            <button type="button" class="mt-0 min-h-12 shrink-0 self-end rounded-xl border border-slate-200 bg-[#f1f5ff] px-4 text-xs font-semibold text-[#1e3a8a] transition hover:bg-blue-100">
                                Cambiar
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl bg-[#f1f5ff] p-3">
                        <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-white text-[#1e3a8a]">
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="14" rx="2"></rect>
                                <path d="M8 22h8M12 18v4M7 9h4v4H7zM14 9h3M14 12h3"></path>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-bold text-slate-700">Última Sesión Activa</p>
                            <p class="mt-0.5 text-[11px] leading-4 text-slate-500">Hoy a las 08:30 AM desde Unidad Isuzu R-01</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm sm:p-5">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="flex items-center gap-2 font-display text-sm font-bold text-[#142b62]">
                        <svg class="size-4 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                        Jerarquía &amp; Rol de Cuenta
                    </h2>
                    <span class="rounded-full bg-red-50 px-2.5 py-1 text-[10px] font-bold text-red-700">Supervisor</span>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-4 rounded-xl bg-[#f5f7fc] p-3">
                        <div>
                            <p class="text-xs font-semibold text-slate-700">Estatus de la Cuenta</p>
                            <p class="mt-0.5 text-[10px] text-slate-500">Habilita transferencias y salidas de almacén</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span id="account-status-label" class="text-[10px] font-bold text-emerald-700">ACTIVO</span>
                            <button
                                id="account-status-toggle"
                                type="button"
                                role="switch"
                                aria-checked="true"
                                aria-label="Estatus de la cuenta"
                                class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full bg-emerald-500 transition-colors focus:outline-none focus:ring-4 focus:ring-emerald-100"
                            >
                                <span class="sr-only">Cambiar estatus de la cuenta</span>
                                <span id="account-status-thumb" class="pointer-events-none absolute right-0.5 size-5 rounded-full bg-white shadow transition-transform"></span>
                            </button>
                        </div>
                    </div>

                    <x-form-input name="role" label="Rol Asignado" icon="role" value="Repartidor (Operador de Unidad)" readonly />

                    <p class="flex items-start gap-2 text-[11px] leading-4 text-amber-800">
                        <svg class="mt-0.5 size-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 11v5M12 8h.01"></path>
                        </svg>
                        Editable únicamente con permisos de Administrador General en consola central.
                    </p>
                </div>
            </section>

            <div class="space-y-2.5">
                <x-primary-button type="button">
                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M5 4h12l3 3v13H4V4h1Z"></path>
                        <path d="M8 4v6h8V4M8 20v-6h8v6"></path>
                    </svg>
                    Guardar Cambios
                </x-primary-button>
                <a href="{{ url('/') }}" class="flex min-h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#e7edfb] px-4 py-2.5 text-sm font-semibold text-[#1e3a8a] transition hover:bg-blue-100">
                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="m7 7 10 10M17 7 7 17"></path>
                    </svg>
                    Descartar Cambios
                </a>
                <button type="button" class="flex min-h-10 w-full items-center justify-center gap-2 px-4 py-2 text-xs font-semibold text-red-700 transition hover:text-red-800">
                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M10 17l5-5-5-5M15 12H3"></path>
                        <path d="M12 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"></path>
                    </svg>
                    Cerrar Sesión en este Dispositivo
                </button>
            </div>
        </div>
    </main>
    <script>
        const statusToggle = document.getElementById('account-status-toggle');
        const statusLabel = document.getElementById('account-status-label');
        const statusThumb = document.getElementById('account-status-thumb');

        statusToggle.addEventListener('click', () => {
            const isActive = statusToggle.getAttribute('aria-checked') !== 'true';

            statusToggle.setAttribute('aria-checked', String(isActive));
            statusToggle.classList.toggle('bg-emerald-500', isActive);
            statusToggle.classList.toggle('bg-slate-400', !isActive);
            statusThumb.classList.toggle('right-0.5', isActive);
            statusThumb.classList.toggle('left-0.5', !isActive);
            statusLabel.textContent = isActive ? 'ACTIVO' : 'INACTIVO';
            statusLabel.classList.toggle('text-emerald-700', isActive);
            statusLabel.classList.toggle('text-slate-500', !isActive);
            statusToggle.setAttribute('aria-label', `Estatus de la cuenta: ${isActive ? 'Activo' : 'Inactivo'}`);
        });
    </script>
@endsection
