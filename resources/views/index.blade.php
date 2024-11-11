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

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
