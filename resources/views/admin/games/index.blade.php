@extends('admin.layout')

@section('content')


    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-md-12 text-center">
                        <div class="card">
                            <div class="card-body">

                                <!-- Search Form -->
                                <!-- Search Form -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <form method="GET" action="{{ route('admin.games.index') }}" class="search-form">
                                            <div class="search-bar">
                                                <input type="text" name="name" class="form-control search-input"
                                                    placeholder="Search by game name..." value="{{ request('name') }}">
                                                <button type="submit" class="btn search-btn">
                                                    <i class="fas fa-search"></i> Search
                                                </button>
                                            </div>

                                            @if(request('name'))
                                                <a href="{{ route('admin.games.index') }}" class="reset-search">Reset Search</a>
                                            @endif
                                        </form>
                                    </div>
                                    @if (count($games) === 1)
                                    <div class="col-md-4">
                                        <button type="button" class="btn-black" id="addGameBtn" onclick="openPanel()">
                                            <i class="fas fa-plus" id="toggleIcon"></i>
                                            <span class="game-html">Add Game</span>
                                        </button>
                                    </div>
                                    @endif
                                    
                                </div>


                                <div id="form_side_panel">
                                    <form action="{{ route('admin.games.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group mb-3 col-4">
                                                <input type="text" name="name" class="form-control" placeholder="Game Name"
                                                    required>
                                            </div>

                                            <div class="form-group mb-3 col-4">
                                                <input type="text" name="time" class="form-control" placeholder="Game Time"
                                                    flat-timpicker required>
                                            </div>

                                            <div class="form-group mb-3 col-4">
                                                <input type="text" id="release_date" name="release_date"
                                                    class="form-control" placeholder="Release Date" required
                                                    release-datepicker autocomplete="off">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn-save">
                                            <i class="fas fa-save"></i>
                                            Save Game
                                        </button>
                                        <button type="button" class="btn-red" onclick="closePanel()">
                                            <i class="fa fa-times"></i>
                                            Close
                                        </button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover custom-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><i class="fas fa-gamepad"></i> Name</th>
                                        <th><i class="fas fa-clock"></i> Time</th>
                                        <th><i class="fas fa-calendar-alt"></i> Release Date</th>
                                        <th><i class="fas fa-edit"></i> Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse($games as $index => $game)
                                        <tr>
                                            <td>{{ $games->firstItem() + $index }}</td>
                                            <td>{{ $game->name }}</td>
                                            <td>{{ $game->time }}</td>
                                            <td>{{ indianDateFormat($game->release_date) }}</td>
                                            <td>
                                                <a href="#"><span style="color: black; padding: 2px;"><i
                                                            class="fas fa-pencil-alt"></i> <!-- Preferred -->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">No games found 🎮</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        @if (0)
                            <div class="d-flex justify-content-end mt-3">
                                {{ $games->links('pagination::bootstrap-4') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Custom Styling -->
    <style>
        /* Search Form Styling */
        /* Search Form Styling */
        .search-form {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 15px;
            /* Gap between input and button */
        }

        .search-input {
            flex: 1;
            border: none;
            border-bottom: 1px solid #000;
            padding: 12px 5px;
            font-size: 16px;
            outline: none;
            background: #fff;
        }

        .search-btn {
            background-color: #000;
            color: white;
            border: none;
            padding: 12px 20px;
            font-weight: bold;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
            border-radius: 5px;
        }

        .search-btn:hover {
            background-color: #333;
        }

        .reset-search {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }

        .reset-search:hover {
            text-decoration: underline;
        }


        .reset-search {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .reset-search:hover {
            text-decoration: underline;
        }

        /* Table Styling */
        .custom-table {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
        }

        .custom-table thead {
            background: linear-gradient(to right, #343a40, #495057);
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .custom-table th,
        .custom-table td {
            padding: 15px 20px;
            vertical-align: middle;
            border-bottom: 1px solid #dee2e6;
        }

        .custom-table tbody tr:hover {
            background-color: #f9f9f9;
            transition: background 0.3s ease;
        }

        /* Pagination Styling - Already Decent */
        .pagination {
            background-color: black;
            padding: 10px;
            border-radius: 8px;
            display: inline-flex;
        }

        .pagination .page-item .page-link {
            color: white;
            background: transparent;
            border: none;
            padding: 8px 12px;
            font-weight: bold;
        }

        .pagination .page-item.active .page-link {
            background-color: #343a40;
            border-radius: 5px;
        }

        .pagination .page-item .page-link:hover {
            background-color: #343a40;
            border-radius: 5px;
        }
    </style>



@endsection