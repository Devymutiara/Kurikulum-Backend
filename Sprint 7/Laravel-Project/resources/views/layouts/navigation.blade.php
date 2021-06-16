<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-1">
        <strong><a class="navbar-brand" href="/">LaraBlog</a></strong>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="/">Home</a>
                <a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="/about">About</a>
                <a class="nav-link{{ request()->is('contact') ? ' active' : '' }}" href="/contact">Contact</a>
                <a class="nav-link{{ request()->is('posts') ? ' active' : '' }}" href="/posts">All posts</a>
                <a class="nav-link{{ request()->is('authors') ? ' active' : '' }}" href="/authors">Post from authors</a>
                <a class="nav-link{{ request()->is('identities') ? ' active' : '' }}" href="/identities">Authors profile</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="/login">Logout</a>
            </div>
        </div>
    </div>
</nav>