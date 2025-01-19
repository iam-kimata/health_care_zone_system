    @include('patient.sidebar')

    <div class="container-lg mt-5" style="margin-right: 10px">
        <h4 class="text-center text-dark pb-3">
            <b>BOOK NOW</b>
        </h4>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <label for="appointmentDate" class="form-label">Appointment Date:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-calendar-date-fill"></i>
                        </span>
                        <input type="date" class="form-control" id="appointmentDate" required>
                    </div>

                    <label for="appointmentTime" class="form-label">Appointment Time:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-alarm-fill"></i>
                        </span>
                        <input type="time" class="form-control" id="appointmentTime" required>
                    </div>

                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

