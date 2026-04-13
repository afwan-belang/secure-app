@extends('layout')
@section('content')
<div class="relative bg-gray-900 p-10 rounded-2xl shadow-2xl shadow-purple-500/10 w-full max-w-md overflow-hidden border border-gray-800">
    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 via-pink-500 to-red-500"></div>

    <h2 class="text-3xl font-bold mb-8 text-center text-white tracking-tight">Buat Akun Baru</h2>
    
    <form action="{{ route('register') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-400 mb-2">Username</label>
            <input type="text" name="username" class="w-full bg-gray-800 border border-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-200" placeholder="Pilih username unik" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-400 mb-2">Email Address</label>
            <input type="email" name="email" class="w-full bg-gray-800 border border-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-200" placeholder="nama@email.com" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-400 mb-2">Password</label>
            <input type="password" name="password" class="w-full bg-gray-800 border border-gray-700 text-white px-4 py-3 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition duration-200" placeholder="Minimal 6 karakter" required>
        </div>
        
        <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-pink-600 hover:from-purple-600 hover:to-pink-700 text-white font-bold py-3 rounded-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-purple-500/25">
            Daftar Sekarang
        </button>
    </form>
    <p class="mt-8 text-center text-gray-400 text-sm">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-purple-400 hover:text-purple-300 font-medium transition-colors underline-offset-4 hover:underline">Login disini</a>
    </p>
</div>
@endsection