    @include('patient.sidebar')

    <div class="container mt-5 me-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h5 class="text-center text-dark pb-3">
                            <b>DOCTORS FEEDBACK</b>
                        </h5>
                        <table class="table table-sm table-light table-bordered table-striped">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Doctor Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                    <th>Suggestion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. John Doe</td>
                                    <td>0765435212</td>
                                    <td>johndoe@example.com</td>
                                    <td>07-8-2024</td>
                                    <td>12:00</td>
                                    <td class="text-danger">Rejected</td>
                                    <td>High jam</td>
                                    <td>Book other doctor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

