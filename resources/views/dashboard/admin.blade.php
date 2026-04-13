@extends('layout')
@section('content')
<div class="relative bg-gray-900 p-8 rounded-3xl shadow-2xl shadow-red-500/10 w-full max-w-5xl overflow-hidden border border-gray-800 my-10">
    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-red-500 via-orange-500 to-yellow-500"></div>

    <div class="flex flex-col md:flex-row justify-between items-center mb-10 space-y-4 md:space-y-0">
        <div>
            <h1 class="text-3xl font-bold text-white tracking-tight">Admin Portal</h1>
            <p class="text-red-300/70 mt-1 text-sm uppercase tracking-widest font-semibold">Mode Pengawasan Terenkripsi</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
             <button class="group flex items-center space-x-2 bg-red-600/20 hover:bg-red-600/40 text-red-400 px-5 py-2.5 rounded-xl border border-red-800/50 transition-all duration-200">
                <span>Logout Admin</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>
    </div>

    <div class="bg-gray-800/50 rounded-2xl border border-gray-700/50 overflow-hidden backdrop-blur-sm">
        <div class="p-6 border-b border-gray-700/50">
            <h3 class="font-bold text-xl text-white">Daftar User Terdaftar</h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left whitespace-nowrap">
                <thead class="bg-gray-900/50 text-gray-400 text-xs uppercase tracking-wider font-semibold">
                    <tr>
                        <th class="p-5">Username</th>
                        <th class="p-5">Email (Encrypted View)</th>
                        <th class="p-5">Bergabung Pada</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700/50">
                    @foreach($allUsers as $u)
                    <tr class="hover:bg-gray-700/30 transition-colors duration-150">
                        <td class="p-5">
                            <div class="flex items-center space-x-3">
                                <div class="h-8 w-8 rounded-full bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center text-xs font-bold border border-gray-600">
                                    {{ substr($u->username, 0, 1) }}
                                </div>
                                <span class="font-medium text-gray-200">{{ $u->username }}</span>
                            </div>
                        </td>
                        <td class="p-5 max-w-md">
                            <div class="flex items-start space-x-2 text-gray-500 bg-gray-950/50 p-3 rounded-lg border border-gray-800/50 group hover:border-red-900/30 transition-colors">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400/50 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                                <code class="font-mono text-xs text-red-300/50 break-all line-clamp-2 group-hover:line-clamp-none transition-all duration-300">
                                    {{ $u->email }}
                                </code>
                            </div>
                        </td>
                        <td class="p-5 text-gray-400 text-sm">
                            {{ $u->created_at->format('d M Y, H:i') }} WIB
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($allUsers->isEmpty())
             <div class="p-8 text-center text-gray-500">Belum ada user yang mendaftar.</div>
        @endif
    </div>
</div>
@endsection