<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#f3f4f9]">
        <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-md border border-gray-100">
            
            <div class="text-center mb-8">
                <div class="flex justify-center mb-2">
                    <img src="{{ asset('images/logo.png') }}" class="h-20 w-auto mx-auto mb-3" alt="Logo RS M. Djamil">
                </div>
                <div class="mt-2 inline-block px-4 py-1 bg-gray-100 rounded-full text-xs font-bold text-gray-600 uppercase tracking-widest">
                    Instalasi Forensik & Pemulasaran Jenazah
                </div>
            </div>

            <div class="mb-8 text-left">
                <h2 class="text-2xl font-extrabold text-gray-900">Welcome</h2>
                <p class="text-gray-500 font-medium mt-1">Please sign-in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-5">
                    <label class="block font-bold text-[10px] text-blue-900 uppercase tracking-[0.15em] mb-2">EMAIL/USERNAME</label>
                    <input type="email" name="email" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all outline-none" placeholder="Enter your email/username" required>
                </div>

                <div class="mb-8">
                    <label class="block font-bold text-[10px] text-blue-900 uppercase tracking-[0.15em] mb-2">PASSWORD</label>
                    <div class="relative">
                        <input type="password" name="password" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all outline-none" placeholder="············" required>
                    </div>
                </div>

                <button type="submit" class="w-full bg-[#4669fa] hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-200 transition-all active:scale-[0.98]">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>