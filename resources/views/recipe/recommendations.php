<ul>
    @foreach($recommendedWords as $word)
        <li><a href="{{ route('home') }}">{{ $word }}</a></li>
    @endforeach
</ul>