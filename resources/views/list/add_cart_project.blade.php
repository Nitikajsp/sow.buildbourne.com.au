@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.1/jquery.bootstrap-touchspin.min.css">
@endpush

@section('content')

<div id="app" class="layout-wrapper">

  @include('include.sidebar')

<div class="container addcartwidth">
@include('include.navbar') 

    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center mt-3 p-5">
            <a href="{{ route('parties.show',$list->parties_id) }}" class="float-left d-flex text-black">
                <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
            </a>
        </div>
    </div>

<div class="container addcustomer_pad">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center custmrmt0"> 
            <h2>Our Product</h2>
            <form action="{{ route('lists.view-cart', ['list' => $list->id, 'party_id' => $list->parties_id]) }}" method="post">
                @csrf
                <button type="submit" class="border-0 position-relative" id="view-cart-btn">
                    <i class="ti ti-shopping-cart ti-md"></i>
                    <span id="cart-count-badge" class="badge bg-danger">0</span>
                </button>
            </form>
        </div>    
    </div>                 

    @if(session('success'))
        <div class="alert alert-success">   
            {{ session('success') }}
        </div>  
    @endif

    <div id="alert-placeholder"></div> <!-- Placeholder for Bootstrap alerts -->
    <div class="table_scroll">
    <table id="product-table" class="table table-bordered mt-3 table_scroll tablewdth">
        <thead class="table-dark">
            <tr>
                <th class="col-md-2">Project</th>
                <th class="col-md-2">Project Category</th>
                <th>Code</th>
                <th class="col-md-3">Project Title</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody id="addtocartdatatabal">
            @foreach($projects as $project)
                <tr>
                    <td style="border: 1px solid #DDDDDD !important">
                        @if($project->project_image)
                            <img src="{{ asset('images/projects/' . $project->project_image) }}" alt="{{ $project->project_name }}" width="70">
                        @else
                            No Image
                        @endif
                    </td>
                    <td style="border: 1px solid #DDDDDD !important">
                                    @if (isset($project->category_names))
                                        {{ implode(', ', $project->category_names) }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                    <td style="border: 1px solid #DDDDDD !important">{{ $project->project_code }}</td>
                    <td style="border: 1px solid #DDDDDD !important">
                        <div>{{ $project->project_name }}</div>
                    </td>
                    <td style="border: 1px solid #DDDDDD !important">
                        <div class="input-group justify-content-center">
                            <span class="d-flex align-items-center">
                                <span class="me-1">Qty: </span>
                                <input type="number" name="quantity" value="0" min="0" required class="form-control input-touchspin " data-project-id="{{ $project->id }}">

                            </span>
                        </div>
                        <textarea name="comment" class="form-control mt-2" rows="2" data-project-id="{{ $project->id }}" placeholder="Enter a comment..."></textarea>

                        <button type="button" class="btn btn-primary mt-2 add-to-cart rounded" data-project-id="{{ $project->id }}">Add to Cart</button>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>


@endsection

    @push('scripts')

    <script>

$(document).ready(function() {
    // Initialize TouchSpin with no restriction on minimum value
    $('.input-touchspin').TouchSpin({
        min: 0, // Allow 0 as minimum quantity
        max: Infinity,
        step: 1,
        boostat: 5,
        postfix: 'items'
    });

    $('.add-to-cart').click(function() {
    var button = $(this);
    var projectId = button.data('project-id');
    var inputField = $('input[data-project-id="' + projectId + '"]');
    var quantity = parseInt(inputField.val());
    var commentField = $('textarea[data-project-id="' + projectId + '"]');
    var comment = commentField.val();

    button.attr('disabled', true);

    $.ajax({
        url: "{{ route('lists.add-to-cart', ['list' => $list->id, 'party' => $list->parties_id]) }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            project_id: projectId,
            quantity: quantity,
            comment: comment // Pass the comment
        },
        success: function(response) {
            var currentCount = parseInt($('#cart-count-badge').text());
            $('#cart-count-badge').text(currentCount + 1);
            showAlert('Project added to cart successfully', 'success');
        },
        error: function(response) {
            showAlert('An error occurred while adding the project to the cart', 'danger');
        },
        complete: function() {
            button.attr('disabled', false);
        }
    });
});


    function showAlert(message, type) {
        var alertHtml = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                        message +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                        '</div>';
        $('#alert-placeholder').html(alertHtml);

        setTimeout(function() {
            $('.alert').alert('close');
        }, 2000); // Remove the alert after 2 seconds
    }

    $('#project-table').DataTable();
});

    </script>
@endpush
