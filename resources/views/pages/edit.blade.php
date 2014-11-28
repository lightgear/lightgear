{!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'PATCH']) !!}
    @include('pages.forms.resource')
{!! Form::close() !!}
