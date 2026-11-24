<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIM-Surat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-800 antialiased">
    <div class="grid min-h-screen lg:grid-cols-[1.1fr_1fr]">

        {{-- ============ PANEL KIRI (layar lebar) ============ --}}
        <div class="relative hidden overflow-hidden bg-linear-to-br from-slate-900 via-indigo-950 to-indigo-800 p-12 text-white lg:flex lg:flex-col lg:justify-between">

            {{-- Hiasan latar --}}
            <div class="pointer-events-none absolute -left-24 -top-24 h-96 w-96 rounded-full bg-indigo-500/30 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-32 -right-24 h-[28rem] w-[28rem] rounded-full bg-violet-500/30 blur-3xl"></div>
            <div class="pointer-events-none absolute right-16 top-1/3 h-40 w-40 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute right-8 top-[calc(33%-2rem)] h-64 w-64 rounded-full border border-white/5"></div>

            {{-- Logo --}}
            <div class="relative flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 backdrop-blur">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </span>
                <span class="text-xl font-bold tracking-tight">SIM-Surat</span>
            </div>

            {{-- Judul dan keunggulan --}}
            <div class="relative max-w-lg">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-indigo-100 ring-1 ring-white/15">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                    Sistem Informasi Surat
                </span>

                <h2 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight xl:text-5xl">
                    Kelola arsip surat dengan rapi dan terstruktur.
                </h2>
                <p class="mt-5 text-base leading-relaxed text-indigo-100/80">
                    Catat surat masuk dan surat keluar dalam satu tempat, dengan hak akses yang jelas untuk setiap pengguna.
                </p>

                <ul class="mt-10 space-y-5">
                    <li class="flex items-start gap-4">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10 ring-1 ring-white/15">
                            <svg class="h-5 w-5 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Akses terkontrol</p>
                            <p class="text-sm text-indigo-100/70">Petugas mengelola surat, pembaca hanya melihat.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10 ring-1 ring-white/15">
                            <svg class="h-5 w-5 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Data tersimpan rapi</p>
                            <p class="text-sm text-indigo-100/70">Nomor, tanggal, pengirim, dan perihal tercatat jelas.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10 ring-1 ring-white/15">
                            <svg class="h-5 w-5 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Cepat dan ringan</p>
                            <p class="text-sm text-indigo-100/70">Tambah, ubah, dan cari surat hanya dalam beberapa klik.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <p class="relative text-sm text-indigo-200/70">&copy; {{ date('Y') }} SIM-Surat. Hak cipta dilindungi.</p>
        </div>

        {{-- ============ PANEL KANAN (form) ============ --}}
        <div class="flex flex-col justify-center bg-slate-50 px-6 py-12 sm:px-12 lg:bg-white">
            <div class="mx-auto w-full max-w-md">

                {{-- Logo untuk HP (panel kiri disembunyikan) --}}
                <div class="mb-10 flex items-center gap-3 lg:hidden">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-sm">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </span>
                    <span class="text-xl font-bold tracking-tight text-slate-900">SIM-Surat</span>
                </div>

                <div class="rounded-2xl bg-white p-8 shadow-xl shadow-slate-200/60 ring-1 ring-slate-100 sm:p-10 lg:p-0 lg:shadow-none lg:ring-0">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">Selamat datang kembali</h1>
                    <p class="mt-2 text-sm text-slate-500">Masuk dengan akun Anda untuk mengakses SIM-Surat.</p>

                    <form id="login-form" method="POST" action="{{ route('login.submit') }}" class="mt-8 space-y-5">
                        @csrf

                        {{-- Email --}}
                        <div>
                            <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Alamat email</label>
                            <div class="relative">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </span>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    autofocus autocomplete="email" placeholder="nama@contoh.com"
                                    class="block w-full rounded-xl border bg-white py-3 pl-11 pr-4 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:outline-none focus:ring-4 {{ $errors->has('email') ? 'border-red-400 focus:border-red-500 focus:ring-red-500/15' : 'border-slate-300 focus:border-indigo-500 focus:ring-indigo-500/15' }}">
                            </div>
                            @error('email')
                                <p class="mt-2 flex items-center gap-1.5 text-sm text-red-600">
                                    <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div>
                            <label for="password" class="mb-1.5 block text-sm font-medium text-slate-700">Password</label>
                            <div class="relative">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </span>
                                <input id="password" type="password" name="password" autocomplete="current-password"
                                    placeholder="Masukkan password"
                                    class="block w-full rounded-xl border bg-white py-3 pl-11 pr-12 text-sm text-slate-900 shadow-sm placeholder:text-slate-400 focus:outline-none focus:ring-4 {{ $errors->has('password') ? 'border-red-400 focus:border-red-500 focus:ring-red-500/15' : 'border-slate-300 focus:border-indigo-500 focus:ring-indigo-500/15' }}">

                                {{-- Tombol lihat/sembunyikan password --}}
                                <button type="button" id="toggle-password" aria-label="Tampilkan password"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-slate-600">
                                    <svg id="icon-eye" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <svg id="icon-eye-off" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="mt-2 flex items-center gap-1.5 text-sm text-red-600">
                                    <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Tombol masuk --}}
                        <button type="submit" id="submit-btn"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/25 transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500/30">
                            <span id="submit-label">Masuk</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </form>

                    <p class="mt-8 border-t border-slate-100 pt-6 text-center text-xs text-slate-400">
                        Akses sistem hanya untuk pengguna yang terdaftar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tampilkan / sembunyikan password
        const pwd = document.getElementById('password');
        const eye = document.getElementById('icon-eye');
        const eyeOff = document.getElementById('icon-eye-off');
        document.getElementById('toggle-password').addEventListener('click', function () {
            const show = pwd.type === 'password';
            pwd.type = show ? 'text' : 'password';
            eye.classList.toggle('hidden', show);
            eyeOff.classList.toggle('hidden', !show);
            this.setAttribute('aria-label', show ? 'Sembunyikan password' : 'Tampilkan password');
        });

        // Ubah teks tombol saat form dikirim
        document.getElementById('login-form').addEventListener('submit', function () {
            document.getElementById('submit-label').textContent = 'Memproses...';
            document.getElementById('submit-btn').classList.add('pointer-events-none', 'opacity-80');
        });
    </script>
</body>
</html>