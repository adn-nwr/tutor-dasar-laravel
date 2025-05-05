<x-layout title="Blog">

  <!-- Your content -->

  @foreach ($posts as $post)

  <article class="py-4 max-w-screen-md border-b border-gray-300 mb-5">
    <h2 class="mb-2 text-2xl tracking-tight font-bold text-gray-900"><a href="article/{{ $post['id'] }}" class="hover:underline">{{ $post['title'] }}</a></h2>
    <div class="text-base text-gray-500">
      {{ $post['author'] }} | {{ $post['created_date'] }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['content'],80) }}</p>
    <a href="article/slug/{{ $post['slug'] }}" class="font-medium font-stretch-50% text-blue-400 hover:underline">Read more &raquo;</a>
  </article>

  @endforeach

</x-layout>