@extends('layouts.app')

@section('title', 'Iniciar sesión | DistriPapel')

@section('content')
    <main class="relative flex min-h-screen items-center justify-center overflow-hidden px-4 py-10 sm:px-6">
        <div class="pointer-events-none absolute -left-32 -top-32 size-96 rounded-full bg-blue-100/70 blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-40 -right-24 size-[28rem] rounded-full bg-emerald-100/50 blur-3xl" aria-hidden="true"></div>

        <section class="relative w-full max-w-md">
            <header class="mb-6 flex items-center gap-3 px-1">
                <div class="flex size-12 items-center justify-center rounded-2xl bg-[#1e3a8a] text-white shadow-lg shadow-blue-900/20" aria-hidden="true">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 20V8.5L12 4l9 4.5V20H3Z"></path>
                        <path d="M8 20v-6h8v6M7 9h.01M12 9h.01M17 9h.01"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-display text-lg font-bold tracking-tight text-slate-900">DistriPapel</p>
                    <p class="text-xs font-medium text-slate-500">Sistema interno</p>
                </div>
            </header>

            <div class="rounded-[1.75rem] border border-white/80 bg-white p-6 shadow-xl shadow-slate-900/5 sm:p-9">
                <div class="mb-8">
                    <span class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1.5 text-[11px] font-bold uppercase tracking-[0.12em] text-emerald-700">
                        <span class="size-1.5 rounded-full bg-emerald-500"></span>
                        Acceso de personal
                    </span>
                    <h1 class="mt-5 font-display text-3xl font-bold tracking-tight text-slate-900">Bienvenido de nuevo</h1>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Ingresa tus credenciales para acceder a la plataforma de distribución.
                    </p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf

                    <x-form-input
                        name="email"
                        label="Correo electrónico"
                        type="email"
                        autocomplete="username"
                        placeholder="nombre@distripapel.com"
                        :value="old('email')"
                    />

                    <x-form-input
                        name="password"
                        label="Contraseña"
                        type="password"
                        autocomplete="current-password"
                        placeholder="Ingresa tu contraseña"
                    />

                    <x-primary-button>
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <path d="m10 17 5-5-5-5M15 12H3"></path>
                        </svg>
                        Iniciar sesión
                    </x-primary-button>
                </form>

                <div class="mt-7 border-t border-slate-100 pt-5">
                    <p class="flex items-start gap-2 text-xs leading-5 text-slate-500">
                        <svg class="mt-0.5 size-4 shrink-0 text-[#1e3a8a]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M12 3 4 6v5c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6l-8-3Z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Tu sesión está protegida. Usa únicamente las credenciales asignadas por tu administrador.
                    </p>
                </div>
            </div>

            <p class="mt-6 text-center text-xs text-slate-400">
                © {{ date('Y') }} DistriPapel · Acceso seguro para colaboradores
            </p>
        </section>
    </main>
@endsection
