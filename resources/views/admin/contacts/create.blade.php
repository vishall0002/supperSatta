@extends('admin.layout')

@section('content')
<!-- Include jQuery UI CSS for the Datepicker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: none;
    }

    .form-control {
        border: none !important;
        border-bottom: 1px solid black !important;
        border-radius: 0;
        font-weight: 300;
        font-size: 15px;
        padding: 10px;
        box-shadow: none !important;
    }

    .form-control:focus {
        border-bottom: 2px solid black !important;
        outline: none;
        box-shadow: none;
    }

    .btn-black {
        background-color: #000;
        color: #fff;
        font-weight: 400;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        transition: 0.3s;
    }

    .btn-black:hover {
        background-color: #333;
        color: #fff;
    }

    .btn-white {
        background-color: #fff;
        color: #000;
        font-weight: 400;
        padding: 10px 20px;
        border: 1px solid #000;
        border-radius: 5px;
        transition: 0.3s;
    }

    .btn-white:hover {
        background-color: #f1f1f1;
        color: #000;
    }

    h2 {
        font-weight: 400;
    }
</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-3 col-md-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group mb-3 col-md-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group mb-3 col-md-3">
                                <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
                            </div>

                            <div class="form-group mb-3 col-md-3">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>

                            <div class="form-group mb-3 col-md-12">
                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            </div>

                            <div class="form-group mb-3 col-md-3">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-9">
                                <button type="submit" class="btn-black"><i class="fas fa-save"></i> Save Contact</button>
                                <a href="{{ route('admin.contacts.create') }}" class="btn-white"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>

                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and jQuery UI JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

@endsection
