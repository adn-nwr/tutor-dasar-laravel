<x-layout title="Artikel dari `{{ $author->name }}`">

  <!-- Your content -->

  <div class="text-base text-gray-500 mb-5">
    {{ $author->name }} <br>
    {{ $author->email }} <br>
    {{ $author->created_at->format('d M Y H:i') }} <br>
  </div>

  @foreach ($posts as $post)

  <article class="py-4 max-w-screen-md border-b border-gray-300 mb-5">
    <h2 class="mb-2 text-2xl tracking-tight font-bold text-gray-900">
      <a href="/article/{{ $post->id }}" class="hover:underline">{{ $post->title }}</a>
    </h2>
    <div class="text-base text-gray-500">
      <a href="/author/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> | {{ $post->created_date->gt(now()->subWeek()) ? $post->created_date->diffForHumans() : $post->created_date->format('d M Y') }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post->content, 80) }}</p>
    <a href="/article/slug/{{ $post->slug }}" class="font-medium font-stretch-50% text-blue-400 hover:underline">Read more &raquo;</a>
  </article>

  @endforeach

</x-layout>