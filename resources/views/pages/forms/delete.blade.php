{!! FormBuilder::create('App\Forms\Content\Page',  [
'route' => ['pages.update', $page->slug],
'method' => 'DELETE',
'model' => $page
])->renderForm() !!}
