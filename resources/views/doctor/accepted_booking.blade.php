    @include('doctor.sidebar')

    <div class="container mt-5 me-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h5 class="text-center text-dark pb-3">
                            <b>ACCEPTED BOOKING</b>
                        </h5>
                        <table class="table table-sm table-light table-bordered table-striped">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Patient Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
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
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>0765435212</td>
                                    <td>janesmith@example.com</td>
                                    <td>13-09-2024</td>
                                    <td>02:30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>
