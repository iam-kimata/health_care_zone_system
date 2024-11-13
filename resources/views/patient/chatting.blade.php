    @include('patient.sidebar')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <b>Chat Room</b>
                    </div>
                    <div class="card-body chat-box">
                        <!-- Chat messages -->
                        <div class="message text-end">
                            <div class="user text-dark">You</div>
                            <div class="text bg-light text-dark">Hello! How are you?</div>
                        </div>

                        <div class="message">
                            <div class="user text-primary">Dr. John Doe</div>
                            <div class="text">I'm fine, thanks! How about you?</div>
                        </div>

                        <div class="message text-end">
                            <div class="user text-dark">You</div>
                            <div class="text">I'm doing well, thank you!</div>
                        </div>
                    </div>
                    <div class="card-footer chat-input">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type a message">
                            <button class="btn btn-primary" type="button">Send</button>
                        </div>
                    </div>
                </div>
                <a href="/virtualConsultation" class="btn btn-dark btn-sm mt-3" role="button">Go Back</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
