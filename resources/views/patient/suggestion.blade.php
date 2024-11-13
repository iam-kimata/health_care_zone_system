    @include('patient.sidebar')

    <div class="container-lg mt-5" style="margin-right: 10px">
        <h4 class="text-center text-dark pb-3">
            <b>WRITE YOUR SUGGESTION</b>
        </h4>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <label for="description" class="form-label">Description:</label>
                    <div class="mb-4 input-group">
                        <textarea id="description" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Click to Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
