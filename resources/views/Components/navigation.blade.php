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
    <div id="navigation-container">
        <nav class="glass-theme">
            <div id="logo-container">
                <img src="/Images/logo-icon.png">
                <p>ChronoTask</p>
            </div>
            <div></div>
            <div id="search-bar-container">
                <input type="text" placeholder="Search">
                <button id="search-button"></button>
            </div>
            <div></div>
            <div id="profile-button-container">
                <button id="profile-button"></button>
            </div>
        </nav>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>
</html>