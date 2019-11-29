<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sekolahku App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if ($halaman == 'homepage')
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            @endif
            @if ($halaman == 'about')
            <li class="nav-item">
                <a class="nav-link active" href="/about">About</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            @endif
            @if ($halaman == 'siswa')
            <li class="nav-item">
                <a class="nav-link active" href="/siswa">Siswa</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/siswa">Siswa</a>
            </li>
            @endif
        </ul>
    </div>
</nav>