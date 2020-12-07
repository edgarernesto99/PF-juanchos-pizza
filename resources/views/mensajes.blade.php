@if (session()->has('msj'))
    <div class="alert {{ session('alert-type', 'alert-info') }} alert-dimissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('msj') }}
    </div>
@endif
