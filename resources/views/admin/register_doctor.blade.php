    @include('admin.sidebar')

    <div class="container-lg mt-5" style="margin-right: 10px">
        <h4 class="text-center text-dark pb-3">
            <b>REGISTER DOCTOR</b>
        </h4>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                        <input type="hidden" class="form-control" id="doctor">

                    <label for="name" class="form-label">Full Name:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
                    </div>

                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-telephone-minus-fill"></i>
                        </span>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter Phone Number">
                    </div>

                    <label for="email" class="form-label">Email Address:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address">
                    </div>

                    <label for="rating" class="form-label">Rating:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-star-fill"></i>
                        </span>
                        <input type="text" class="form-control" id="rating" placeholder="Enter Rating">
                    </div>

                    <label for="image" class="form-label">Image:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-image-fill"></i>
                        </span>
                        <input type="file" class="form-control" id="image">
                    </div>

                    <label for="password" class="form-label">Password:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="text" value="HCZ 123" class="form-control" id="password" disabled>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Click to Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>

