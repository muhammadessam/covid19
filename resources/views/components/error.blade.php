@props(['name'=>'name'])

@error("$name")
<div class="alert alert-danger mt-1">
    {{$message}}
</div>
@enderror