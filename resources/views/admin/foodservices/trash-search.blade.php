@foreach($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>{!! $model->title !!}</td><td>@if($model->image)<img style="border-radius: 50%;" src="{{ asset("public/admin/images/foodservices") }}/{{ $model->image }}" width="50px" height="50px" alt="">@else<img style="border-radius: 50%;" src="{{ asset("public/default.png") }}" width="50px" height="50px" alt="">@endif</td><td>@if($model->status)<span class="badge badge-success">Active</span>@else<span class="badge badge-danger">In-Active</span>@endif</td><td width="250px"><a href="{{ route("foodservice.show", $model->id) }}" data-toggle="tooltip" data-placement="top" title="Show Foodservice" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a><a href="{{ route("foodservice.edit", $model->id) }}" data-toggle="tooltip" data-placement="top" title="Edit Foodservice" class="btn btn-primary btn-sm" style="margin-left: 3px;"><i class="fa fa-edit"></i></a><button data-toggle="tooltip" data-placement="top" title="Delete Foodservice" class="btn btn-danger btn-sm delete" data-slug="{{ $model->id }}" data-del-url="{{ route("foodservice.destroy", $model->id) }}" style="margin-left: 3px;"><i class="fa fa-trash"></i></button></td>
    </tr>
@endforeach
<tr>
    <td colspan="{totalColumns}">
        Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
        <div class="d-flex justify-content-center">
            {!! $models->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>

<script>
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault();
        var search = $('#search').val();
        var status = $('#status').val();
        var pageurl = $('#page_url').val();
        var page = $(this).attr('href').split('page=')[1];
        fetchAll(pageurl, page, search, status);
    });

    function fetchAll(pageurl, page, search, status){
        $.ajax({
            url:pageurl+'?page='+page+'&search='+search+'&status='+status,
            type: 'get',
            success: function(response){
                $('#body').html(response);
            }
        });
    }

    //delete record
    $('.delete').on('click', function(){
        var slug = $(this).attr('data-slug');
        var delete_url = $(this).attr('data-del-url');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : delete_url,
                    type : 'DELETE',
                    success : function(response){
                        if(response){
                            $('#id-'+slug).hide();
                            Swal.fire(
                                'Deleted!',
                                'Your record has been deleted.',
                                'success'
                            )
                        }else{
                            Swal.fire(
                                'Not Deleted!',
                                'Sorry! Something went wrong.',
                                'danger'
                            )
                        }
                    }
                });
            }
        })
    });
</script>
