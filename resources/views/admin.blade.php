

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Segitiga Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/logo-5.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            display: flex;
            transition: margin-left 0.3s;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding: 15px;
            position: fixed;
            transition: width 0.3s;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logout-btn {
            background-color: #dc3545; /* Bootstrap danger color */
            border: none;
            color: white;
            padding: 10px;
            margin-top: 15px; /* Pushes the logout button to the bottom */
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 5px; /* Menambahkan radius pada tombol */
        }

        .logout-btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2><img src="img/logo-2.png" alt="Segitiga Motor" style="width: 150px; height: 50px;"></h2>
        <a href="?page=bookings"><i class="fas fa-calendar-alt"></i> Manage Bookings</a>
        <a href="?page=users"><i class="fas fa-users"></i> Manage Users</a>
        <form method="POST" action="{{ route('logout') }}" style="margin-top: auto;">
            @csrf
            <button type="submit" class="logout-btn">Log Out</button>
        </form>

    </div>


    <!-- Main Content -->
    <div class="content">
    <div class="table-container">
        @if ($page == 'bookings')
            <h1 class="my-4">Manage Bookings</h1>
            <table class="table table-hover table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Plat No</th>
                        <th>Motor Brand</th>
                        <th>Motor Type</th>
                        <th>Service Type</th>
                        <th>Booking Date</th>
                        <th>Booking Time</th>
                        <th>Phone</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->user->firstname }} {{ $booking->user->lastname }}</td>
                            <td>{{ $booking->plat_no }}</td>
                            <td>{{ $booking->motor_brand }}</td>
                            <td>{{ $booking->motor_type }}</td>
                            <td>{{ $booking->service_type }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>{{ $booking->booking_time }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->notes }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.updateBookingStatus') }}">
                                    @csrf
                                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                        <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Confirmed" {{ $booking->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="Canceled" {{ $booking->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.deleteBooking') }}">
                                    @csrf
                                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11">No bookings found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @elseif ($page == 'users')
            <h1 class="my-4">Manage Users</h1>
            <table class="table table-hover table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.deleteUser') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @endif
    </div>
</div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
