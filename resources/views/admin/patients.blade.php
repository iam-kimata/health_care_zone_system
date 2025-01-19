    @include('admin.sidebar')

    <div class="container mt-5 me-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p class="lead">All Patients</p>
                        <table class="table table-sm table-light table-bordered table-striped">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $index => $patient)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $patient->full_name }}</td>
                                        <td>{{ $patient->phone_number ?? 'N/A' }}</td>
                                        <td>{{ $patient->email }}</td>
                                        <td>{{ $patient->gender ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ url('/updatePatientPage', $patient->id) }}" class="btn btn-success btn-sm" role="button">Update</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/warningPatient', $patient->id) }}" class="btn btn-warning btn-sm" role="button">Warning</a>
                                        </td>
                                        <td>
                                            <form action="{{ url('/deletePatient', $patient->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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

