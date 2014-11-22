@foreach ($pages as $page)
    {{ $page->title }} <br />
    {{ $page->slug }}
@endforeach
