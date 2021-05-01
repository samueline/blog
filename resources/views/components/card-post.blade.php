@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
 
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">

    <div class="px-6 py-8">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base text-bold">
            {{$post->extract}}
        </div>
        <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a class=" text-xm text-gray-700 mr-2 inline-block bg-{{$tag->color}}-300 rounded-full px-3 py-1" href="{{route('posts.tag',$tag)}}"> {{$tag->name}}</a>
        @endforeach    
        </div> 
    </div>
</article>