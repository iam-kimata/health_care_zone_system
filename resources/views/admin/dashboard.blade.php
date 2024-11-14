    @include('admin.sidebar')

    <div class="container mt-5 me-5">
        <h1 class="text-center mb-4">ADMIN DASHBOARD</h1>
    <div class="row justify-content-center ms-lg-5">
        <!-- Total Patient Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary custom-margin">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-people"></i> Total Patients</h5>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>

        <!-- Total Doctor Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-people"></i> Total Doctors</h5>
                    <p class="card-text">30</p>
                </div>
            </div>
        </div>

        <!-- Accepted Booking Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-calendar-check"></i> Accepted Bookings</h5>
                    <p class="card-text">30</p>
                </div>
            </div>
        </div>

        <!-- Rejected Booking Card -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger" style="min-width: 200px;">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-calendar-x"></i> Rejected Bookings</h5>
                    <p class="card-text">20</p>
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
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>0765435212</td>
                                <td>johndoe@example.com</td>
                                <td>13-09-2024</td>
                                <td>02:30</td>
                                <td>Jane Smith</td>
                                <td class="text-success">Accepted</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>0765435212</td>
                                <td>janesmith@example.com</td>
                                <td>13-09-2024</td>
                                <td>02:30</td>
                                <td>Jane Smith</td>
                                <td class="text-success">Accepted</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Emily Brown</td>
                                <td>0765435212</td>
                                <td>emilybrown@example.com</td>
                                <td>13-09-2024</td>
                                <td>02:30</td>
                                <td>Jane Smith</td>
                                <td class="text-success">Accepted</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Michael Johnson</td>
                                <td>0765435212</td>
                                <td>michaeljohnson@example.com</td>
                                <td>13-09-2024</td>
                                <td>02:30</td>
                                <td>Jane Smith</td>
                                <td class="text-danger">Rejected</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sarah Lee</td>
                                <td>0765435212</td>
                                <td>sarahlee@example.com</td>
                                <td>13-09-2024</td>
                                <td>02:30</td>
                                <td>Jane Smith</td>
                                <td class="text-danger">Rejected</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>


