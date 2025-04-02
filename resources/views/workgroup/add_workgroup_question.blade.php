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
                <a href="{{ route('workgroup.showgroupquestion') }}" class="float-left d-flex text-black">
                    <i class="ti ti-arrow-narrow-left border border-dark rounded-circle mx-1 me-2 text-black"></i>Back
                </a>
            </div>
        </div>

        <div class="container mt-5">
            <div class="inner-container custmrmt0">

                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between align-items-center custmrmt0 mb-4">
                        <h2>Work Questions</h2>
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="col-md-6">
                        <form method="post" action="{{ route('workgroup.saveworkquestion') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="text-secondary mb-1">Select Work Group</label>
                                <select name="group_id" class="form-control border border-white-50" required>
                                    <option value="">Select</option>
                                    @foreach ($workgroups as $item)
                                    <option value="{{ $item->id }}">{{ $item->group_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="questions-wrapper">
                                <div class="mb-3 question-item">
                                    <label class="text-secondary mb-1">Add Question</label>
                                    <input type="text" name="questions[]" class="form-control border border-white-50" placeholder="Enter question" required />
                                </div>
                            </div>
                            <button type="button" id="add-question" class="btn btn-outline-success btn-sm mt-3">+ Add Question</button>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#add-question').click(function() {
                $('#questions-wrapper').append(`
            <div class="mb-3 question-item">
                <input type="text" name="questions[]" class="form-control mb-2" placeholder="Enter question" required />
            </div>
        `);
            });
        });
    </script>


    @endpush