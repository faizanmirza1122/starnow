@if (session('message'))
<div class="alert {{ session('alert-class', 'alert-info') }} border-0 alert-dismissible" id="alert-message">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {!! session('message') !!}
</div>
@endif
