<x-layout title="{{ $post['title'] }}">

  <!-- Your content -->

  <article class="mb-5">
    <div class="text-base text-gray-500">
      {{ $post['author'] }} | {{ $post['created_date'] }}
    </div>
    <p class="my-4 font-light">{{ $post['content'] }}</p>
    <a href="{{ url()->previous() }}" class="font-medium font-stretch-50% text-blue-400 hover:underline">Kembali &leftarrow;</a>
  </article>

</x-layout>