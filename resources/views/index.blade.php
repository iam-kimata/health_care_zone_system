    @include('components.navbar')

    <!-- home section -->
    <section id="home" style="height: 100vh;">
    <div class="container-lg">
        <div class="row g-5 pt-5 justify-content-center align-items-center">
            <div class="col-md-5 text-center text-md-start">
                <p class="lead my-4" style="text-align: justify;">HealthCare Zone it is a platform for connecting patients and doctors for enabling smooth services
                for patients so as to ensure the revolution in heathly industry and well being of the people in the country</p>
            </div>
            <div class="col-md-5 text-center">
                <img class="img-fluid" src="{{ asset('assets/images/home.jpeg') }}" alt="an image of home page" style="width: 100%; height: 70vh;">
            </div>
        </div>
    </div>
    </section>

    <!-- about us section -->
    <section id="about" class="bg-light">
        <div class="container py-5">
            <div class="text-center">
                <h1>About Us</h1>
                <p class="lead"><i class="bi bi-dash-lg"></i> What We Are <i class="bi bi-dash-lg"></i></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="my-4" style="text-align: justify; font-size: 18px;">HealthCare Zone it is a platform which was founded in 2020 by a  proffessor known as
                    Aloyce Ereutel Kimata for the aim of connecting patients and doctors around various areas in Tanzania. The Company is located in Mlimani City
                    opposite to Sky City Mall in Dar-es-Salaam as an head quote but it has branches in other region like in Arusha, Dodoma, Kigoma and Tanga. Through
                    this platform patients can easy access the health services with high quality which in return bring the revolution in health industry as well as
                    promote the well being of the people.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- our services -->
    <section id="services">
        <div class="container-md py-5">
            <div class="text-center">
                <h1>Our Services</h1>
                <p class="lead"><i class="bi bi-dash-lg"></i> What We Are Doing <i class="bi bi-dash-lg"></i></p>
            </div>
            <div class="row my-5 g-5 justify-content-around align-items-center">
                <div class="col-6 col-lg-4">
                    <img class="img-fluid" src="{{ asset('assets/images/services.jpeg') }}" alt="An image of our services page" style="width: 100%; height: 100%;">
                </div>
                <div class="col-lg-6">
                    <div class="service-item mb-4">
                        <h5>Service No 1 - Virtual Consultation</h5>
                        <p style="text-align: justify;">Provide patients with the ability to schedule and conduct consultations with doctors or specialists via chat</p>
                    </div>
                    <div class="service-item mb-4">
                        <h5>Service No 2 - In-Person Appointments</h5>
                        <p style="text-align: justify;">Allow patients to book appointments for physical visits to healthcare facilities</p>
                    </div>
                    <div class="service-item mb-4">
                        <h5>Service No 3 - Health Record Management</h5>
                        <p style="text-align: justify;">Provide patients with access to their personal health records and medical history</p>
                    </div>
                    <div class="service-item mb-4">
                        <h5>Service No 4 - Patient Education and Resources</h5>
                        <p style="text-align: justify;">Provide educational materials and resources to help patients understand their health conditions and treatments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- reviews section -->
    <section id="reviews" class="bg-light">
        <div class="container-lg py-5">
            <div class="text-center">
                <h1>Reviews</h1>
                <p class="lead"><i class="bi bi-dash-lg"></i> Get The Latest Updates <i class="bi bi-dash-lg"></i></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- list group -->
                    <div class="list-group">
                        <div class="list-group-item py-3 my-5">
                            <h5 class="mb-1">Diabetes Mellitus</h5>
                            <p class="mb-1" style="text-align: justify">Diabetes Mellitus is a chronic condition where the body either does
                            not produce enough insulinor does not effectively use the insulin it produces. Insulin is a hormone that regulates
                            blood sugar levels. There are two main types: Type 1 Diabetes, where the body produces little to no insulin and Type 2
                            Diabetes, where the body becomes resistant to insulin or doesn't produce enough. Symptoms includes Increased thirst,
                            frequent urination, extreme fatigue, blurred vision and slow-healing sores.</p>
                        </div>
                        <div class="list-group-item py-3">
                            <h5 class="mb-1">Hypertension (High Blood Pressure)</h5>
                            <p class="mb-1" style="text-align: justify"> Hypertension is a condition where the force of the blood against the artery
                            walls is consistently too high. This can lead to serious health issues such as heart disease, stroke and kidney problems.
                            It is often called the "silent killer"because it can be present for years without any symptoms. Symptoms includes Often
                            asymptomatic, but severe cases may cause headaches, shortness of breath and nosebleeds.</p>
                        </div>
                        <div class="list-group-item py-3">
                            <h5 class="mb-1">Asthma</h5>
                            <p class="mb-1" style="text-align: justify">Asthma is a chronic respiratory condition characterized by inflammation and
                            narrowing of the airways which leads to difficulty breathing. It can be triggered by allergens, respiratory infections,
                            physical activity or irritants like smoke. Symptoms includes Wheezing, shortness of breath, chest tightness, and coughing,
                            especially at night or early in the morning.</p>
                        </div>
                        <div class="list-group-item py-3">
                            <h5 class="mb-1">Cancer</h5>
                            <p class="mb-1" style="text-align: justify">Cancer is a broad term for diseases where abnormal cells grow uncontrollably and
                            invade or spread to other parts of the body. There are many types of cancer including breast cancer, lung cancer and prostate
                            cancer, each affecting different organs and systems. Symptoms vary widely depending on the type and location of cancer but can
                            include unexplained weight loss, persistent pain, lumps or masses, fatigue, and changes in skin color or texture.</p>
                        </div>
                        <div class="list-group-item py-3">
                            <h5 class="mb-1">Influenza (Flu)</h5>
                            <p class="mb-1" style="text-align: justify">Influenza, commonly known as the flu, is a contagious respiratory illness caused by influenza
                            viruses. It can range from mild to severe and can lead to complications such as pneumonia. Flu viruses are typically seasonal, peaking in
                            the winter months. Symptoms includes Fever, chills, cough, sore throat, runny or stuffy nose, muscle aches, headaches, and fatigue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- register section -->
    <section id="register">
        <div class="container-lg py-5">
            <div class="text-center">
                <h1>Register</h1>
                <p class="lead"><i class="bi bi-dash-lg"></i> Be A Member <i class="bi bi-dash-lg"></i></p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form action="{{ route('patient.register') }}" method="POST">
                        @csrf
                        <input type="hidden" name="role" value="patient">

                        <label for="fullName" class="form-label">Full Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter Full Name">
                        </div>

                        <label for="gender" class="form-label">Gender:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <select class="form-select" id="gender" name="gender">
                                <option value="" disabled selected>--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-telephone-minus-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="phoneNumber" name="phone_number" placeholder="Enter Phone Number">
                        </div>

                        <label for="email" class="form-label">Email Address:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                        </div>

                        <label for="password" class="form-label">Password:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>

                        <label for="confirmPassword" class="form-label">Confirm Password:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password">
                        </div>

                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                        </div>
                        <p class="text-center mt-3">Already have an account?<a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signin-modal"> Sigin</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- signin model -->
    <div class="modal fade" id="signin-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100 fs-3" id="model-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Show any general error messages stored in the session (flashed) -->
                    @if(session('error'))
                        <div class="text-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="email" class="form-label">Username:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Username" value="{{ old('email') }}" required>
                        </div>

                        <label for="password" class="form-label">Password:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <button class="btn btn-primary w-100" name="submit">Signin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
