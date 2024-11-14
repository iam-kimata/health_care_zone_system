    @include('admin.sidebar')

    <div class="container mt-5 me-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p class="lead">All Doctors</p>
                        <table class="table table-sm table-light table-bordered table-striped">
                            <thead class="text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Rating</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>0765435212</td>
                                    <td>johndoe@example.com</td>
                                    <td>4.3</td>
                                    <td><a href="/updateDoctor" class="btn btn-success btn-sm" role="button">Update</a></td>
                                    <td><a href="/warningDoctor" class="btn btn-warning btn-sm" role="button">Warning</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>0765435212</td>
                                    <td>janesmith@example.com</td>
                                    <td>4.4</td>
                                    <td><a href="/updateDoctor" class="btn btn-success btn-sm" role="button">Update</a></td>
                                    <td><a href="/warningDoctor" class="btn btn-warning btn-sm" role="button">Warning</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Emily Brown</td>
                                    <td>0765435212</td>
                                    <td>emilybrown@example.com</td>
                                    <td>3.7</td>
                                    <td><a href="/updateDoctor" class="btn btn-success btn-sm" role="button">Update</a></td>
                                    <td><a href="/warningDoctor" class="btn btn-warning btn-sm" role="button">Warning</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Michael Johnson</td>
                                    <td>0765435212</td>
                                    <td>michaeljohnson@example.com</td>
                                    <td>4.0</td>
                                    <td><a href="/updateDoctor" class="btn btn-success btn-sm" role="button">Update</a></td>
                                    <td><a href="/warningDoctor" class="btn btn-warning btn-sm" role="button">Warning</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sarah Lee</td>
                                    <td>0765435212</td>
                                    <td>sarahlee@example.com</td>
                                    <td>4.4</td>
                                    <td><a href="/updateDoctor" class="btn btn-success btn-sm" role="button">Update</a></td>
                                    <td><a href="/warningDoctor" class="btn btn-warning btn-sm" role="button">Warning</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
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


