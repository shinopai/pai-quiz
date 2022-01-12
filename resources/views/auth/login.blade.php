@extends('layouts.app')

@section('content')
<div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md p-5 mx-auto">
        <h2 class="mb-12 text-center text-5xl font-extrabold">ログイン</h2>
        <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="mb-4">
                <label class="block mb-1" for="email">メールアドレス</label>
                <input id="email" type="text" name="email" class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" value="{{ old('email') }}" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red-500">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="password">パスワード</label>
                <input id="password" type="password" name="password" class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red-500">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="border border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" {{ old('remember') ? 'checked' : '' }} />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">ログイン状態を保存する</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-sm">パスワードをお忘れですか？</a>
            </div>
            <div class="mt-6">
                <button class="w-full inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">ログイン</button>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('register') }}" class="underline">新規ユーザー登録をする</a>
            </div>
        </form>
    </div>
</div>
@endsection
