@props(['id' => 'table', 'printHead'])

<script>
    $('#{{$id}}').DataTable({
        "order": [[ 0, "desc" ]],
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
                    $(win.document.body).find('h1').append(`
 <div class="row m-5">
                        <div class="col-4 text-center ">
                            <h1> Sinaw Hospital </h1>
                            <h4>Investigation & follow-up team</h4>
                            <h5>By : Nasser Al Rashdi</h5>
                        </div>
                        <div class="col-4 text-center">
                            <img src="{{asset('admin/dist/img/moh.png')}}" alt="User Image" class="w-50 img-thumbnail">
                            <h3>Covid-19</h3>
                        </div>
                        <div class="col-4 text-center">
                            <h1>مستشفى سناو</h1>
                            <h3>فريق التقصي والمتابعة</h3>
                            <h5>فكرة : ناصر الراشدي</h5>
                        </div>

                    </div>
                    `)
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