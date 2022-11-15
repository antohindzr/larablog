<div class="mt-10 max-w-xl mx-auto">
            @foreach($posts as $post)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                    <p>{{ Str::limit($post->body, 20) }}</p>
                    <p>Posted: {!! $post->created_at !!}</p>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
