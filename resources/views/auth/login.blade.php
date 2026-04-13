@extends('layout')
@section('content')
<div class="relative bg-gray-900 p-10 rounded-2xl shadow-2xl shadow-cyan-500/10 w-full max-w-md overflow-hidden border border-gray-800">
    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600"></div>

    <h2 class="text-3xl font-bold mb-8 text-center text-white tracking-tight">Selamat Datang</h2>
    
    @if(session('success'))
        <div class="bg-green-900/30 border border-green-600 text-green-300 p-3 mb-6 rounded-lg text-sm text-center">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="bg-red-900/30 border border-red-600 text-red-300 p-3 mb-6 rounded-lg text-sm text-center">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-400 mb-2">Username</label>
            <input type="text" name="username" class="w-full bg-gray-800 border border-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-200" placeholder="Masukkan username Anda" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-400 mb-2">Password</label>
            <input type="password" name="password" class="w-full bg-gray-800 border border-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition duration-200" placeholder="••••••••" required>
        </div>
        
        <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-bold py-3 rounded-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-cyan-500/25">
            Masuk Sekarang
        </button>
    </form>
    <p class="mt-8 text-center text-gray-400 text-sm">
        Belum punya akun? <a href="{{ route('register') }}" class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors underline-offset-4 hover:underline">Daftar disini</a>
    </p>
</div>
@endsection