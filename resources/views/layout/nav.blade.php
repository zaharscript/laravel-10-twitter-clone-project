<nav class="navbar navbar-expand-lg border-bottom border-bottom-dark sticky-top  custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-light text-light" href="/"><span class="fa-regular fa-lightbulb fa-flip">
            </span> {{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
