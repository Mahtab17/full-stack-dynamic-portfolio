@php
    $profileImage = asset('assets/images/profile.jpg');
@endphp

<style>
    .footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .image-name-social-part {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .footer-profile-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
    }

    .name {
        color: black;
        font-size: 32px;
        font-weight: 600;
        text-decoration: none;
    }

    .social-icons {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 28px;
        padding: 0;
        margin: 0;
    }

    .social-icons li a {
        font-size: 36px;
        color: #333;
        transition: color 0.3s, transform 0.3s;
        cursor: pointer;
    }

    .social-icons li:hover {
        transition: all 0.5s ease-in-out;
        transform: scale(1.02);
        color: #0073b1;
    }

    .divider {
        width: 80%;
        border: none;
        border-top: 1px solid rgb(0, 0, 0, 0.2);
        margin-top: 40px;
    }

    .copyright {
        margin-top: 20px;
        font-size: 18px;
        color: #666;
        font-style: italic;
    }
</style>

<footer class="footer">
    {{-- image and name --}}
    <div class="image-name-social-part">
        <img src="{{ $profileImage }}" class="footer-profile-image" alt="Samius Sazin">
        <a href="/" class="name">Samius Sazin</a>
        <ul class="social-icons">
            <li>
                <a href="https://github.com/Samius-Sazin">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/samius-sazin/">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://x.com/samius_sazin">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
            </li>
        </ul>
    </div>

    <hr class="divider">

    <p class="copyright">All right reserved by Samius Sazin. &copy 2025</p>
</footer>
