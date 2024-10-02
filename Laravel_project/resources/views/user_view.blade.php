@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>

            <!-- Users Table -->
            <table class="table table-bordered" id="usersTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Role</th> <!-- This will show the toggle button -->
                    </tr>
                </thead>
                <tbody></tbody> <!-- The data will be loaded via AJAX -->
            </table>
        </div>
    </div>
</div>

<!-- Include jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Fetch users and populate the table
        $.ajax({
            url: "{{ url('api/users') }}", // Adjust the URL as needed
            method: "GET",
            success: function(data) {
                let tbody = $('#usersTable tbody');
                tbody.empty(); // Clear existing table data
                $.each(data, function(index, user) {
                    let checked = user.type == 'admin' ? 'checked' : '';
                    let row = `<tr>
                        <td>${user.name}</td>
                        <td>${user.gender}</td>
                        <td>${user.country}</td>
                        <td>${user.email}</td>
                        <td>
                            <input type="checkbox" class="toggle-role" data-id="${user.id}" ${checked}>
                        </td>
                    </tr>`;
                    tbody.append(row);
                });
            }
        });

        // Update role when the toggle button is changed
        $(document).on('change', '.toggle-role', function() {
            const userId = $(this).data('id');
            const newRole = $(this).is(':checked') ? 'admin' : 'user';

            $.ajax({
                url: "{{ url('api/users/update-role') }}",
                method: "POST",
                data: {
                    id: userId,
                    type: newRole,
                    _token: "{{ csrf_token() }}" // Include CSRF token for security
                },
                success: function(response) {
                    alert(response.message); // Show a success message
                },
                error: function(xhr) {
                    alert('Error updating user role.'); // Handle errors
                }
            });
        });
    });
</script>
@endsection
