<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article class="mb-5">
                        <header>
                            <h3> {{ $article->title }} </h3>
                            <h6>{{ !empty($article->user)? $article->user->name:'ab' }} | <a href="/categories/{{ $article->category->slug }}" class="no-underline hover:underline" >{{ $article->category->name }}</a></h6>
                        </header>
                        <p>{{ $article->body }}</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>