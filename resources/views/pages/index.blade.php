@extends ('layouts.default')

@section ('main')

    @if (count($pages))
        @foreach ($pages as $page)
            {{ $page->title }} <br />
            {{ $page->slug }} <br />
            {!! link_to_route('pages.edit', 'Edit (i18n)', $page) !!} <br />

            @include('pages.forms.delete')

        @endforeach
    @else
        <p>No pages (i18n)</p>
    @endif

    <p>
        {!! link_to_route('pages.create', 'Add (i18n)') !!} <br />
    </p>

@stop
