<x-navigation>
    <x-slot:heading>sign-in</x-slot:heading>

    <form class="glass-theme" action="/sign-in" method="POST">
        <div id="links-container">
            <a>Sign-in</a>
            <a>Sign-up</a>
        </div>

        <div class="input-group">
            <input type="text" id="username" name="username" placeholder="">
            <label for="username">Username</label>
        </div>

        <div class="input-group">
            <input type="email" id="email" name="email" placeholder="">
            <label for="email">Email</label>
        </div>

        <div class="input-group">
            <input type="password" id="password" name="password" placeholder="">
            <label for="password">Password</label>
        </div>

        <div class="input-group">
            <input type="password" id="password-confirmation" name="password_confirmation" placeholder="">
            <label for="password-confirmation">Confirm password</label>
        </div>
    </form>
</x-navigation>