    @include('doctor.sidebar')

    <div class="container mt-5">
        <div class="row justify-content-center g-5">
            <!-- User list -->
            <div class="col-md-3 user-list bg-light">
                <a href="#" class="user">
                    <span class="text-dark">John Doe</span>
                    <span class="badge bg-danger">3</span>
                </a>
                <a href="#" class="user">
                    <span class="text-dark">Jane Smith</span>
                    <span class="badge bg-danger">7</span>
                </a>
                <a href="#" class="user">
                    <span class="text-dark">Alice Brown</span>
                    <span class="badge bg-danger">2</span>
                </a>
            </div>

            <!-- Chat room -->
            <div class="col-md-6">
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
                            <div class="user text-primary">John Doe</div>
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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>



