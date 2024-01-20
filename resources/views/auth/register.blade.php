@extends('layouts.app')

@section('content')
    <div class="bg-white shadow p-8 rounded-lg">
        <h1 class="font-medium text-xl mb-5">Halaman {{ $title }}</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="name" class="text-sm mb-2 block font medium">Name</label>
                <input type="text" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="name" id="name">
                @error('name')
                    <span class="mt-2 text-red-500 block text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="text-sm mb-2 block font medium">Email</label>
                <input type="email" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="email" id="email">
                @error('email')
                <span class="mt-2 text-red-500 block text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="text-sm mb-2 block font medium">Password</label>
                <input type="password" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="password" id="password">
                @error('password')
                <span class="mt-2 text-red-500 block text-sm">
                    {{ $message }}
                </span>
            @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="text-sm mb-2 block font medium">Password Confirmation</label>
                <input type="password" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="password_confirmation" id="password_confirmation">
            </div>
            <button class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white transition-colors duration-150">Register</button>
        </form>
    </div>
@endsection