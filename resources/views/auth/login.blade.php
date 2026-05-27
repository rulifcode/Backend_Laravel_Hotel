<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Aurevia CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { accent: '#FF6B00' }
                }
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-[#F5F4F2] min-h-screen flex items-center justify-center px-4"
      style="background-image: linear-gradient(rgba(0,0,0,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.05) 1px, transparent 1px); background-size: 32px 32px;">

<div class="w-full max-w-[400px]">

    {{-- Brand --}}
    <div class="flex items-center gap-2.5 mb-5">
        <div class="w-9 h-9 bg-[#FF6B00] rounded-[9px] flex items-center justify-center flex-shrink-0">
            <i class="bi bi-building text-white text-base"></i>
        </div>
        <div>
            <h1 class="text-[14px] font-bold text-[#121212] tracking-tight">Aurevia CMS</h1>
            <p class="text-[11px] text-[#999] mt-0.5">Sistem Manajemen Hotel</p>
        </div>
    </div>

    {{-- Card --}}
    <div class="bg-white border border-black/[0.08] rounded-[12px] overflow-hidden shadow-sm">

        {{-- Card Header --}}
        <div class="px-5 py-[18px] border-b border-black/[0.06]">
            <h2 class="text-[13.5px] font-semibold text-[#121212]">Masuk ke akun Anda</h2>
            <p class="text-[11.5px] text-[#999] mt-0.5">Gunakan kredensial yang telah diberikan</p>
        </div>

        {{-- Card Body --}}
        <div class="p-5 flex flex-col gap-4">

            @if($errors->any())
                <div class="flex items-start gap-2 bg-[#FEF0F0] border border-[#E24B4A]/20 rounded-[7px] px-3 py-2.5 text-[12px] text-[#E24B4A]">
                    <i class="bi bi-exclamation-circle mt-0.5 flex-shrink-0"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST" id="login-form">
                @csrf

                <div class="flex flex-col gap-3.5">

                    {{-- Email --}}
                    <div>
                        <label class="block text-[11.5px] font-medium text-[#464646] mb-1.5">Email</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#bbb] text-[13px] pointer-events-none">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email"
                                   value="{{ old('email') }}"
                                   placeholder="admin@hotel.com"
                                   required autofocus
                                   class="w-full bg-[#FAFAF9] border border-black/[0.08] rounded-[7px] pl-8 pr-3 py-2 text-[12.5px] text-[#121212] placeholder-[#ccc] outline-none focus:border-[#FF6B00] focus:bg-white transition-colors">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div>
                        <label class="block text-[11.5px] font-medium text-[#464646] mb-1.5">Password</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#bbb] text-[13px] pointer-events-none">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="password"
                                   placeholder="••••••••"
                                   required
                                   class="w-full bg-[#FAFAF9] border border-black/[0.08] rounded-[7px] pl-8 pr-3 py-2 text-[12.5px] text-[#121212] placeholder-[#ccc] outline-none focus:border-[#FF6B00] focus:bg-white transition-colors">
                        </div>
                    </div>

                </div>
            </form>

        </div>

        {{-- Card Footer --}}
        <div class="px-5 py-3.5 border-t border-black/[0.06] bg-[#FAFAF9]">
            <button type="submit" form="login-form"
                    class="flex items-center justify-center gap-1.5 w-full bg-[#FF6B00] hover:bg-[#e05e00] text-white text-[12.5px] font-semibold px-4 py-2 rounded-[7px] transition-colors cursor-pointer">
                <i class="bi bi-box-arrow-in-right text-sm"></i>
                Masuk
            </button>
        </div>

    </div>

    {{-- Credential Hint --}}
    <div class="mt-3.5 bg-white border border-black/[0.08] rounded-[8px] px-3.5 py-3 flex flex-col gap-2">
        <div class="flex items-center gap-2 text-[11px] text-[#999]">
            <span class="text-[10px] font-semibold bg-[#F5F4F2] border border-black/[0.08] text-[#464646] rounded px-1.5 py-0.5 flex-shrink-0">Admin</span>
            admin@hotel.com &nbsp;/&nbsp; password
        </div>
        <div class="flex items-center gap-2 text-[11px] text-[#999]">
            <span class="text-[10px] font-semibold bg-[#F5F4F2] border border-black/[0.08] text-[#464646] rounded px-1.5 py-0.5 flex-shrink-0">Resepsionis</span>
            resepsionis@hotel.com &nbsp;/&nbsp; password
        </div>
    </div>

</div>

</body>
</html>