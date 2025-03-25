@extends('admin.layout')

@section('content')


<div class="content-wrapper">
    <div class="content-header">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body">
                              <!-- 🔍 Advanced Search Form -->
                              <!-- 🔍 Advanced Search Form -->
                              <div class="row">
                                <div class="col-md-9">
                                    <form method="GET" action="{{ route('admin.contacts.index') }}" class="p-3">
                                        
                                        <div class="row g-2">
                                            <!-- Search Type Dropdown -->
                                            <div class="col-md-3">
                                                <select id="searchType" class="form-select search-input">
                                                    <option value="" selected disabled>Choose Search Type</option>
                                                    <option value="name">Search by Name</option>
                                                    <option value="email">Search by Email</option>
                                                    <option value="mobile">Search by Mobile</option>
                                                    <option value="date_range">Search by Date Range</option>
                                                </select>
                                            </div>
        
                                            <!-- Name Input -->
                                            <div class="col-md-3">
                                                <input type="text" name="name" id="nameInput" class="form-control search-input" placeholder="Enter Name" value="{{ request('name') }}" disabled>
                                            </div>
        
                                            <!-- Email Input -->
                                            <div class="col-md-3">
                                                <input type="email" name="email" id="emailInput" class="form-control search-input" placeholder="Enter Email" value="{{ request('email') }}" disabled>
                                            </div>
        
                                            <!-- Mobile Input -->
                                            <div class="col-md-3">
                                                <input type="text" name="mobile" id="mobileInput" class="form-control search-input" placeholder="Enter Mobile" value="{{ request('mobile') }}" disabled>
                                            </div>
        
                                            <!-- Start Date -->
                                            <div class="col-md-3">
                                                {{-- <input type="text" name="start_date" id="startDateInput" class="form-control search-input datepicker" placeholder="Start Date" value="{{ request('start_date') }}" disabled autocomplete="off"> --}}

                                                <input type="text" id="created_at" name="created_at"
                                                    class="form-control" placeholder="Start Date" disabled
                                                    created-at autocomplete="off" value="{{ request('start_date') }}">
                                            </div>
        
                                            <!-- End Date -->
                                            <div class="col-md-3">
                                                {{-- <input type="text" name="end_date" id="endDateInput" class="form-control search-input datepicker" placeholder="End Date" value="{{ request('end_date') }}" disabled autocomplete="off"> --}}

                                                <input type="text" id="created_below" name="created_below"
                                                    class="form-control" placeholder="end Date" disabled
                                                    created-below autocomplete="off" value="{{ request('end_date') }}">
                                            </div>
        
                                            <!-- Search Button -->
                                            <div class="col-md-3">
                                                <button type="submit" class="btn search-btn w-100">
                                                    <i class="fas fa-search"></i> Search
                                                </button>
                                            </div>
        
                                            <!-- Reset Button -->
                                            <div class="col-md-3">
                                                <a href="{{ route('admin.contacts.index') }}" id="resetBtn" class="btn btn-secondary reset-btn w-100" style="display: none;">
                                                    <i class="fas fa-times"></i> Reset
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-md-3" style="
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            ">
                                        <button type="button" class="btn-black" id="addGameBtn" onclick="openPanel()">
                                            <i class="fas fa-plus" id="toggleIcon"></i>
                                            <span class="game-html">Add Contact</span>
                                        </button>
                                </div>
                              </div>


                              <div id="form_side_panel" >
                                <div class="card" style="padding:20px;">
                                    <div id="alert-container"></div>
                                    <h4 style="text-align: center; color:red!important" class="mt-3 mb-4">Add Contact detail</h4>
                                    <form action="{{ route('admin.contacts.store') }}" method="POST" enctype="multipart/form-data" id="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                
                                            <div class="form-group mb-3 col-md-3">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                
                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="mobile" class="form-control" placeholder="Mobile" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                @error('mobile')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            

                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="landmark" class="form-control" placeholder="Landmark">
                                            </div>
                
                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="city" class="form-control" placeholder="City">
                                            </div>

                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="state" class="form-control" placeholder="State">
                                            </div>

                                            <div class="form-group mb-3 col-md-3">
                                                <input type="text" name="country" class="form-control" placeholder="Country">
                                            </div>


                
                                            <div class="form-group mb-3 col-md-12">
                                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                                            </div>
                
                                            <div class="col-md-9">
                                                {{-- <button type="submit" class="btn-black"><i class="fas fa-save"></i> Save Contact</button>
                                                <a href="{{ route('admin.contacts.create') }}" class="btn-white"><i class="fas fa-arrow-left"></i> Back</a> --}}

                                                {{-- <button type="submit" class="btn-save">
                                                    <i class="fas fa-save"></i> 
                                                    Save Contact
                                                </button>
                                                <button type="button" class="btn-red" onclick="closePanel()">
                                                    <i class="fa fa-times"></i>
                                                    Close
                                                </button> --}}

                                                <button type="submit" id="saveContactBtn" class="btn-save">
                                                    <i class="fas fa-save"></i> Save Contact
                                                </button>
                                                <button type="button" class="btn-red" onclick="closePanel()">
                                                    <i class="fa fa-times"></i> Close
                                                </button>
                                            </div>
                
                                        </div>
                                     </form>
                                </div>
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

                    <!-- 📋 Responsive Table -->
                    <div class="table-responsive">
                        <table class="table table-hover custom-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><i class="fas fa-user"></i> Name</th>
                                    <th><i class="fas fa-envelope"></i> Email</th>
                                    <th><i class="fas fa-envelope"></i> Mobile</th>
                                    <th><i class="fas fa-comment"></i> Address</th>
                                    <th><i class="fas fa-comment"></i> Created</th>
                                    <th><i class="fas fa-edit"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contacts as $index => $contact)
                                {{-- @dd($contacts) --}}
                                <tr>
                                    <td>{{ $contacts->firstItem() + $index }}</td> <!-- Properly numbered rows -->
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td ><a href="#"><span style="color: black; padding: 2px;"><i class="fas fa-pencil-alt"></i> <!-- Preferred -->
                                    </span></a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No contacts found 📭</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- 🔄 Pagination (Right-Aligned) -->
                    <div class="d-flex justify-content-end mt-3">
                        {{ $contacts->links('pagination::bootstrap-4') }} 
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- Custom Styling --> <style> .reset-btn { border-radius: 30px; padding: 12px 20px; margin-left: 10px; font-weight: bold; display: flex; align-items: center; gap: 5px; transition: background 0.3s ease; } .reset-btn:hover { background-color: #6c757d; } .page-title { font-weight: 600; color: #333; letter-spacing: 1px; margin-bottom: 20px; } .custom-table thead { background: #343a40; color: #fff; } .custom-table tbody tr:hover { background: #f8f9fa; transition: 0.3s; } .custom-table th, .custom-table td { padding: 12px 15px; } .card { border-radius: 12px; background: #fff; } .card-body{ padding: 1rem!important; } /* Centered Search Bar */ .search-bar { max-width: 100%; width: 100%; display: flex; align-items: center; border-radius: 30px; border: 1px solid #ccc; overflow: hidden; } /* Search Input Fields */ .search-input { flex: 1; border: none; padding: 12px 15px; font-size: 16px; outline: none; } /* Search Icons inside Input */ .search-icon { background: white; border: none; padding: 0 12px; font-size: 16px; color: #666; } /* Search Button */ .search-btn { background-color: #212529; /* Dark Black */ color: white; border: none; padding: 12px 20px; font-weight: bold; border-radius: 0 30px 30px 0; transition: background 0.3s ease; display: flex; align-items: center; gap: 5px; } .search-btn:hover { background-color: #343a40; } /* Pagination Styling */ .pagination { background-color: #212529; /* Dark Black */ padding: 10px; border-radius: 8px; display: inline-flex; } .pagination .page-item .page-link { color: white; background: transparent; border: none; padding: 8px 12px; font-weight: bold; } .pagination .page-item.active .page-link { background-color: #343a40; /* Darker Black */ border-radius: 5px; } .pagination .page-item .page-link:hover { background-color: #343a40; border-radius: 5px; } .form-control:disabled{ background-color: white; border-bottom: 1px solid gray; } /* pagination  */ </style>
<style>
    /* Search Input Fields with only bottom border */
.search-input {
    flex: 1;
    border: none;
    border-bottom: 1px solid black;
    padding: 12px 15px;
    font-size: 16px;
    outline: none;
    border-radius: 0; /* No rounding */
    background-color: white;
    margin-right: 10px; /* Adds a little gap between input and button */
}

/* Adjust dropdown (searchType) similarly */
#searchType {
    border: none;
    border-bottom: 1px solid black;
    padding: 12px 15px;
    font-size: 16px;
    outline: none;
    background-color: white;
    margin-right: 10px;
}

/* Search Button */
.search-btn {
    background-color: #212529;
    color: white;
    border: none;
    padding: 12px 20px;
    font-weight: bold;
    border-radius: 30px;
    transition: background 0.3s ease;
    display: flex;
    align-items: center;
    gap: 5px;
}
.search-btn:hover {
    background-color: #343a40;
}

.table thead th {
    border-right: 1px solid #ffffff; /* Light grey border */
    padding: 10px 15px;
    background-color: #000000; /* Optional: light background */
}

.table thead th:last-child {
    border-right: none; /* Remove border from the last th */
}

.table tbody td {
    padding: 10px 15px;
    border-right: 1px solid #dee2e6;
}

.table tbody td:last-child {
    border-right: none;
}


</style>
<!-- jQuery and jQuery UI Datepicker -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });

        // Handle search type change
        $('#searchType').on('change', function() {
            const type = $(this).val();

            $('#nameInput, #emailInput, #mobileInput, #startDateInput, #endDateInput').prop('disabled', true);

            if (type === 'name') {
                $('#nameInput').prop('disabled', false);
            } else if (type === 'email') {
                $('#emailInput').prop('disabled', false);
            } else if (type === 'mobile') {
                $('#mobileInput').prop('disabled', false);
            } else if (type === 'date_range') {
                $('#startDateInput, #endDateInput').prop('disabled', false);
            }
        });

        // Show Reset button if search is active
        let hasSearch = '{{ request('name') }}' || '{{ request('email') }}' || '{{ request('mobile') }}' || '{{ request('start_date') }}' || '{{ request('end_date') }}';
        if (hasSearch.trim() !== '') {
            $('#resetBtn').show();
        }
    });
</script>

<script>
    document.getElementById('searchType').addEventListener('change', function() {
        let selectedValue = this.value;

        // Disable all inputs first
        document.getElementById('nameInput').disabled = true;
        document.getElementById('emailInput').disabled = true;
        document.getElementById('mobileInput').disabled = true;
        document.getElementById('created_at').disabled = true;
        document.getElementById('created_below').disabled = true;

        // Enable only the selected input
        if (selectedValue === 'name') {
            document.getElementById('nameInput').disabled = false;
        } else if (selectedValue === 'email') {
            document.getElementById('emailInput').disabled = false;
        } else if (selectedValue === 'mobile') {
            document.getElementById('mobileInput').disabled = false;
        } else if (selectedValue === 'date_range') {
            document.getElementById('created_at').disabled = false;
            document.getElementById('created_below').disabled = false;
        }
    });

    // Show/hide reset button based on search parameters
    window.addEventListener('DOMContentLoaded', function() {
        let hasSearch = '{{ request('name') }}' || '{{ request('email') }}' || '{{ request('mobile') }}' || '{{ request('start_date') }}' || '{{ request('end_date') }}';
        if (hasSearch.trim() !== '') {
            document.getElementById('resetBtn').style.display = 'inline-block';
        }
    });
</script>


<script>
    $(document).ready(function() {
        $("#contactForm").on("submit", function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);
            let formAction = $(this).attr("action");

            // Clear previous error messages
            $(".text-danger").remove();

            $.ajax({
                url: formAction,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#saveContactBtn").prop("disabled", true).text("Saving...");
                },
                success: function(response) {
                    $("#saveContactBtn").prop("disabled", false).html('<i class="fas fa-save"></i> Save Contact');

                    if (response.success) {
                        // Reset form
                        $("#contactForm")[0].reset();

                        // Close the form panel
                        closePanel();

                        // Refresh the page (or update the contact list dynamically)
                        location.reload();
                    }
                },
                error: function(xhr) {
                    $("#saveContactBtn").prop("disabled", false).html('<i class="fas fa-save"></i> Save Contact');

                    let errors = xhr.responseJSON.errors;

                    if (errors) {
                        $.each(errors, function(field, messages) {
                            let inputField = $("input[name='" + field + "'], textarea[name='" + field + "']");
                            let errorMessage = '<span class="text-danger">' + messages[0] + '</span>';

                            // Remove existing error messages and append new one
                            inputField.next(".text-danger").remove();
                            inputField.after(errorMessage);
                        });
                    }
                }
            });
        });
    });
</script>

    
@endsection

