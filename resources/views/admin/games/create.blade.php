@extends('admin.layout')

@section('content')


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.games.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-3 col-4">
                                <input type="text" name="name" class="form-control" placeholder="Game Name" required>
                            </div>

                            <div class="form-group mb-3 col-4">
                                <input type="text" name="time" class="form-control" placeholder="Game Time" required flat-timpicker>
                            </div>

                            <div class="form-group mb-3 col-4">
                                <input type="text" id="release_date" name="release_date" class="form-control" placeholder="Release Date" required autocomplete="off" release-datepicker>
                            </div>
                        </div>

                        <button type="submit" class="btn-black"><i class="fas fa-save"></i> Save Game</button>
                        <a href="{{ route('admin.games.index') }}" class="btn-white"><i class="fas fa-arrow-left"></i> Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
