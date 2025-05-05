<x-layout title="{{ $post->title }}">

  <!-- Your content -->

  <article class="mb-5">
    <div class="text-base text-gray-500">
      {{ $post->author }} | {{ $post->created_date }}
    </div>
    <p class="my-4 font-light">{{ $post->content }}</p>
  </article>

</x-layout>