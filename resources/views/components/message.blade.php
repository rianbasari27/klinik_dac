@if ($errors->any())
    <div>
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> {{ $item }}</div>
        @endforeach
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ Session::get('success') }}</div>
@endif