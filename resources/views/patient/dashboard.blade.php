    @include('patient.sidebar')

    <div class="container mt-5" style="margin-right: 10px">
        <h1 class="text-center mb-4">PATIENT DASHBOARD</h1>
        <div class="d-flex flex-column align-items-center">
            <p class="lead">Hi! Aloyce Kimata</p>
            <p class="lead">How Can I Help You Today?</p>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <table class="table table-sm table-light table-bordered table-striped">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Doctor Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. John Doe</td>
                                    <td>0765435212</td>
                                    <td>johndoe@example.com</td>
                                    <td>4.5</td>
                                    <td><a href="/chatting" class="btn btn-primary btn-sm" role="button">Start Chatting</a></td>
                                    <td><a href="/bookNow" class="btn btn-secondary btn-sm" role="button">Book Now</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. Jane Smith</td>
                                    <td>0765435212</td>
                                    <td>janesmith@example.com</td>
                                    <td>4.7</td>
                                    <td><a href="/chatting" class="btn btn-primary btn-sm" role="button">Start Chatting</a></td>
                                    <td><a href="/bookNow" class="btn btn-secondary btn-sm" role="button">Book Now</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. Emily Brown</td>
                                    <td>0765435212</td>
                                    <td>emilybrown@example.com</td>
                                    <td>4.8</td>
                                    <td><a href="/chatting" class="btn btn-primary btn-sm" role="button">Start Chatting</a></td>
                                    <td><a href="/bookNow" class="btn btn-secondary btn-sm" role="button">Book Now</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. Michael Johnson</td>
                                    <td>0765435212</td>
                                    <td>michaeljohnson@example.com</td>
                                    <td>4.6</td>
                                    <td><a href="/chatting" class="btn btn-primary btn-sm" role="button">Start Chatting</a></td>
                                    <td><a href="/bookNow" class="btn btn-secondary btn-sm" role="button">Book Now</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="{{ asset('assets/images/man.jpeg') }}" alt="Dr. John Doe" class="img-fluid" style="width: 50px; height: 50px;"></td>
                                    <td>Dr. Sarah Lee</td>
                                    <td>0765435212</td>
                                    <td>sarahlee@example.com</td>
                                    <td>4.9</td>
                                    <td><a href="/chatting" class="btn btn-primary btn-sm" role="button">Start Chatting</a></td>
                                    <td><a href="/bookNow" class="btn btn-secondary btn-sm" role="button">Book Now</a></td>
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
