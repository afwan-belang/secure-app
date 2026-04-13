@extends('layout')
@section('content')
<div class="relative bg-gray-900 p-10 rounded-3xl shadow-2xl shadow-cyan-500/10 w-full max-w-2xl overflow-hidden border border-gray-800">
     <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-green-400 via-cyan-500 to-blue-600"></div>

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-white tracking-tight">Dashboard User</h1>
            <p class="text-gray-400 mt-1">Selamat datang kembali, {{ $user->username }}!</p>
        </div>
        <div class="h-12 w-12 rounded-full bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-cyan-500/30">
            {{ substr($user->username, 0, 1) }}
        </div>
    </div>
    
    <div class="bg-gray-800/50 p-6 rounded-2xl border border-gray-700/50 space-y-6 backdrop-blur-sm">
        <div class="space-y-1">
            <label class="text-xs uppercase tracking-wider text-gray-500 font-semibold">Username</label>
            <p class="text-xl text-white font-medium">{{ $user->username }}</p>
        </div>
        
        <div class="space-y-1">
            <label class="text-xs uppercase tracking-wider text-gray-500 font-semibold">Email Anda (Dekripsi Otomatis)</label>
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
                <p class="text-xl text-cyan-300 font-medium break-all">{{ $decryptedEmail }}</p>
            </div>
        </div>

        <div class="bg-yellow-900/20 border-l-4 border-yellow-500 p-4 rounded-r-lg flex items-start space-x-3">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-sm text-yellow-200/80 leading-relaxed">
                <strong class="text-yellow-400">Info Keamanan:</strong> Email Anda disimpan dalam bentuk kode acak terenkripsi di database kami. Sistem hanya mendekripsinya saat Anda login untuk ditampilkan di halaman ini.
            </p>
        </div>
    </div>

    <div class="mt-8">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="group flex items-center justify-center space-x-2 w-full bg-gray-800 hover:bg-red-900/30 text-gray-300 hover:text-red-400 px-6 py-3 rounded-xl border border-gray-700 hover:border-red-800/50 transition-all duration-200">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Keluar Aplikasi</span>
            </button>
        </form>
    </div>
</div>
@endsection