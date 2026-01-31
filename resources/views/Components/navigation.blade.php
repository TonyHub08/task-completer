<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/CSS/navigation.css">
    <link rel="stylesheet" href="/CSS/{{ $heading }}.css">
    <link rel="stylesheet" href="/CSS/variables.css">

    <link rel="icon" type="image/x-icon" href="/Images/logo-icon.png">

    <title>ChronoTask</title>
</head>
<body>
    <div id="navigation-opener">
        <p>MENU</p>
    </div>

    <nav>
        <a id="home-page-link" class="glass-theme">HOME</a>
        <a id="about-page-link" class="glass-theme">ABOUT</a>
        <a id="profile-page-link" class="glass-theme">PROFILE</a>
    </nav>

    <main>
        {{ $slot }}
    </main>
</body>
</html>

<script>
    const navigationOpener = document.getElementById('navigation-opener');

    navigationOpener.addEventListener('click', () => {

    });
</script>