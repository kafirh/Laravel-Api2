<x-app-layout>
  <x-slot name="header">
    <div class="flex gap-8 items-center">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Edit Berita Anda') }}
      </h2>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                  <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                      <x-input-label for="title" value="{{ __('Judul') }}" />
                      <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post->title" required autofocus />
                      <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div class="mt-4">
                      <x-input-label for="slug" value="{{ __('Sulg') }}" />
                      <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="$post->slug" required autofocus />
                      <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                    </div>
                    <div class="mt-4">
                      <x-input-label for="content" value="{{ __('Content') }}" />
                      <textarea id="content" class="block mt-1 w-full" type="text" name="content" required autofocus>{{ $post->content }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('content')" />
                    </div>
                    <div class="mt-4">
                      <x-input-label for="image" value="{{ __('Gambar') }}" />
                      <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
                      <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  </div>
                  <div class="flex items-center justify-center my-4">
                    <button class="ml-4 bg-blue-500 hover:bg-blue-700 hover:text-white font-bold py-2 px-4 rounded" type="submit">
                      {{ __('Simpan') }}
                    </button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>