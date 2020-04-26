@if (Session::has('success'))

    @component('components.alerts.dismissible', ['type' => 'success'])
      {{ Session::get('success') }}
    @endcomponent
@endif

@if (Session::has('errors'))
    @component('components.alerts.dismissible', ['type' => 'danger'])
        @if ($errors->count() > 1)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @else
            {{ $errors->first() }}
        @endif
    @endcomponent
@endif
