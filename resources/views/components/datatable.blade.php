@props(['id' => 'table', 'printHead'])

<script>
    $('#{{$id}}').DataTable({
        @if(isset($printHead))
        dom: 'Bfrtip',
        lengthMenu: [[10, 25, 50, 100 - 1], [10, 25, 50, 100, "All"]],
        pageLength: 10,
        buttons: [

            {
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                },
                customize: function (win) {
                    $(win.document.head).find('title').text('{{$printHead}}');
                    $(win.document.body).find('h1').text('{{$printHead}}').addClass('text-center mb-5');
                    $(win.document.body).find('h1').after(description);
                    win.onafterprint = function (e) {
                        $('#descriptionDiv').append(description);
                    };
                }
            },
            'pageLength'
        ],
        @endif
    });
</script>
<style>
    #{{$id}}_filter {
        float: right;
    }
</style>