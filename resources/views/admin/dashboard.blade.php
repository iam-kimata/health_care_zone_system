    @include('admin.sidebar')

    <div class="container mt-5 me-5">
        <h2 class="text-center mb-4">ADMIN DASHBOARD</h2>
    <div class="row justify-content-center ms-lg-5">
        <!-- Total Patient Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary custom-margin">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-people"></i> Total Patients</h5>
                    <p class="card-text">{{ $totalPatients }}</p>
                </div>
            </div>
        </div>

        <!-- Total Doctor Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-people"></i> Total Doctors</h5>
                    <p class="card-text">{{ $totalDoctors }}</p>
                </div>
            </div>
        </div>

        <!-- Accepted Booking Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-calendar-check"></i> Accepted Bookings</h5>
                    <p class="card-text">{{ $totalAcceptedBookings }}</p>
                </div>
            </div>
        </div>

        <!-- Rejected Booking Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-calendar-x"></i> Rejected Bookings</h5>
                    <p class="card-text">{{ $totalRejectedBookings }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="lead">All Bookings</p>
                    <table class="table table-sm table-light table-bordered table-striped">
                        <thead class="text-dark">
                            <tr>
                                <th>#</th>
                                <th>Patient Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Doctor Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $booking)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $booking->user->name ?? 'N/A' }}</td>
                                    <td>{{ $booking->user->phone ?? 'N/A' }}</td>
                                    <td>{{ $booking->user->email ?? 'N/A' }}</td>
                                    <td>{{ $booking->appointment_date }}</td>
                                    <td>{{ $booking->appointment_time }}</td>
                                    <td>{{ $booking->doctor->name ?? 'N/A' }}</td>
                                    <td class="{{ $booking->status === 'Accepted' ? 'text-success' : ($booking->status === 'Rejected' ? 'text-danger' : 'text-warning') }}">
                                        {{ $booking->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>


