    @include('doctor.sidebar')

    <div class="container-lg mt-5" style="margin-right: 10px">
        <h4 class="text-center text-dark pb-3">
            <b>REJECTION REASON</b>
        </h4>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <label for="reason" class="form-label">Reason:</label>
                    <div class="mb-4 input-group">
                        <textarea id="reason" class="form-control" rows="3" required></textarea>
                    </div>

                    <label for="suggestion" class="form-label">Suggestion:</label>
                    <div class="mb-4 input-group">
                        <textarea id="suggestion" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>