@if($errors->any())
<div>
    <span class="text-danger" style="color:red;">Please fix the following errors before submitting the form again:</span>
    <ul>
        {!! implode('', $errors->all('<li class="text-danger" style="color:red;">:message</li>')) !!}
    </ul>
</div>
@if (isset($scrollUp))
<script>
    document.getElementById('livewire-scroll').scroll({ top:0, left:0, behavior: "smooth"});
</script>
@endif
@endif
