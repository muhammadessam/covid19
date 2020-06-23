@props(['id' => 'table', 'printHead'])

<script>
    $('#{{$id}}').DataTable({
        "info": false
    });
</script>
<style>
    #{{$id}}_filter {
        float: right;
    }
</style>