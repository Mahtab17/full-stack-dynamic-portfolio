@php
    $profileImage = asset('assets/images/profile.jpg');
@endphp

<style>
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.6rem 4rem;
        background-color: rgb(255, 255, 255, 0.7);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
        border-bottom: 1px solid rgb(0, 0, 0, 0.2);
    }

    .image-name-part {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .navbar-profile-image {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 50%;
    }

    .name {
        color: black;
        font-size: 22px;
        text-decoration: none;
    }

    .navigation-buttons-part {
        display: flex;
        align-items: center;
        gap: 4px;
        list-style: none;
    }

    .navigation-button {
        color: black;
        font-size: 22px;
        text-decoration: none;
        padding: 0.8rem 1.6rem;
        border-radius: 8px;
        transition: all 0.5s ease-in-out;
    }

    .navigation-button:hover {
        background-color: rgb(20, 20, 20, 0.1);

    }

    .navigation-button:active {
        background-color: rgb(20, 20, 20, 0.2);
    }
</style>

<nav class="navbar">
    {{-- image and name --}}
    <div class="image-name-part">
        <img src="{{ $profileImage }}" alt="Samius Sazin" class="navbar-profile-image">
        <a href="/" class="name">Samius Sazin</a>
    </div>

    {{-- navigation buttons --}}
    <ul class="navigation-buttons-part">
        <li><a class="navigation-button" href="/">Home</a></li>
        <li><a class="navigation-button" href="/projects">Projects</a></li>
        <li><a class="navigation-button" href="/about">About</a></li>
    </ul>
</nav>
