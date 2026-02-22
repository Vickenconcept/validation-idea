<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stop Driving for Free Cleaning Estimates</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|sora:500,600,700" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body { font-family: 'Instrument Sans', system-ui, sans-serif; line-height: 1.5; color: #1b1b18; background: #FDFDFC; margin: 0; }
            .container { max-width: 42rem; margin: 0 auto; padding: 2rem; }
            h1 { font-family: 'Sora', sans-serif; font-size: 1.75rem; font-weight: 600; }
            input, select, textarea { width: 100%; padding: 0.625rem 0.875rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; font: inherit; }
            button { background: #0d9488; color: #fff; padding: 0.625rem 1.5rem; border-radius: 0.5rem; font-weight: 600; cursor: pointer; border: none; }
        </style>
    @endif
    <style>
        .font-display { font-family: 'Sora', 'Instrument Sans', system-ui, sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-[#fafaf9] text-stone-800 antialiased">
    {{-- Subtle grid background --}}
    <div class="fixed inset-0 -z-10 bg-[linear-gradient(to_right,#e7e5e4_1px,transparent_1px),linear-gradient(to_bottom,#e7e5e4_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_0%,#000_70%,transparent_110%)] opacity-40"></div>

    <div class="mx-auto max-w-3xl px-4 py-10 sm:px-6 sm:py-16 lg:py-20">
        {{-- Header / Logo --}}
        <header class="mb-10 sm:mb-14">
            <p class="font-display text-sm font-semibold uppercase tracking-wider text-teal-600">Early Access</p>
        </header>

        <div class="grid gap-12 lg:grid-cols-[1fr,26rem] lg:gap-16 lg:items-start">
            {{-- Left: Copy --}}
            <div>
                <h1 class="font-display text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl lg:text-[2.5rem] lg:leading-[1.15]">
                    Stop driving for free cleaning estimates.
                </h1>
                <p class="mt-4 text-lg text-stone-600 sm:text-xl">
                    Turn customer photos into bookable cleaning estimates in minutes — not hours.
                </p>

                <ul class="mt-8 space-y-4" role="list">
                    <li class="flex gap-3 text-stone-600">
                        <span class="mt-1.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-teal-100 text-teal-600">
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 12 12"><path d="M10 3L4.5 8.5 2 6"/></svg>
                        </span>
                        <span>Customers send photos and ask for a price</span>
                    </li>
                    <li class="flex gap-3 text-stone-600">
                        <span class="mt-1.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-amber-100 text-amber-700">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </span>
                        <span>You guess — or drive out for a free estimate</span>
                    </li>
                    <li class="flex gap-3 text-stone-600">
                        <span class="mt-1.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-rose-100 text-rose-600">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        <span>You reply late and lose the job</span>
                    </li>
                    <li class="flex gap-3 text-stone-600">
                        <span class="mt-1.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-rose-100 text-rose-600">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        <span>Or underquote and lose money</span>
                    </li>
                </ul>

                <p class="mt-8 text-sm text-stone-500">
                    Join the free beta. No credit card required.
                </p>
            </div>

            {{-- Right: Form card --}}
            <div class="lg:sticky lg:top-8">
                <div class="rounded-2xl border border-stone-200/80 bg-white p-6 shadow-[0_4px_24px_-4px_rgba(0,0,0,0.08),0_8px_16px_-8px_rgba(0,0,0,0.04)] sm:p-8">
                    <h2 class="font-display text-xl font-semibold text-stone-900">Get early access</h2>
                    <p class="mt-1 text-sm text-stone-500">Help shape the beta for cleaning businesses.</p>

                    @if (session('success'))
                        <div class="mt-4 rounded-xl bg-teal-50 px-4 py-3 text-sm font-medium text-teal-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mt-4 rounded-xl bg-rose-50 px-4 py-3 text-sm text-rose-800">
                            <ul class="list-disc space-y-0.5 pl-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('leads.store') }}" method="POST" class="mt-6 space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium text-stone-700">Email <span class="text-rose-500">*</span></label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email"
                                class="mt-1.5 block w-full rounded-lg border border-stone-300 bg-white px-3.5 py-2.5 text-stone-900 shadow-sm transition focus:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500/20"
                                placeholder="you@company.com">
                        </div>

                        <div>
                            <label for="business_size" class="block text-sm font-medium text-stone-700">Business size</label>
                            <select name="business_size" id="business_size" required
                                class="mt-1.5 block w-full rounded-lg border border-stone-300 bg-white px-3.5 py-2.5 text-stone-900 shadow-sm transition focus:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500/20">
                                <option value="solo" {{ old('business_size') === 'solo' ? 'selected' : '' }}>Solo</option>
                                <option value="2-5" {{ old('business_size') === '2-5' ? 'selected' : '' }}>2–5 cleaners</option>
                                <option value="6-10" {{ old('business_size') === '6-10' ? 'selected' : '' }}>6–10 cleaners</option>
                                <option value="10+" {{ old('business_size') === '10+' ? 'selected' : '' }}>10+</option>
                            </select>
                        </div>

                        <div>
                            <label for="quoting_method" class="block text-sm font-medium text-stone-700">How do you quote jobs today?</label>
                            <textarea name="quoting_method" id="quoting_method" required rows="4"
                                class="mt-1.5 block w-full rounded-lg border border-stone-300 bg-white px-3.5 py-2.5 text-stone-900 shadow-sm transition focus:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500/20"
                                placeholder="e.g. Drive in person, estimate from photos, or a mix">{{ old('quoting_method') }}</textarea>
                        </div>

                        <div class="mt-6">
                            <label for="willingness_to_pay" class="block text-sm font-medium text-stone-700">Would you pay $50–$100/month for this if it worked?</label>
                            <p class="mt-0.5 mb-1.5 text-xs italic text-stone-500">Assume this saves you several hours per month.</p>
                            <select name="willingness_to_pay" id="willingness_to_pay" required
                                class="mt-1.5 block w-full rounded-lg border border-stone-300 bg-white px-3.5 py-2.5 text-stone-900 shadow-sm transition focus:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500/20">
                                <option value="">Select…</option>
                                <option value="yes" {{ old('willingness_to_pay') === 'yes' ? 'selected' : '' }}>Yes</option>
                                <option value="maybe" {{ old('willingness_to_pay') === 'maybe' ? 'selected' : '' }}>Maybe</option>
                                <option value="no" {{ old('willingness_to_pay') === 'no' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <button type="submit"
                            class="w-full rounded-lg bg-teal-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            Join the beta
                        </button>
                    </form>

                    <p class="mt-4 text-xs text-stone-400">Free during beta. No credit card required.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
