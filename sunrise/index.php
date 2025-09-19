<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Times in India - City-wise Information</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="background-animation">
        <div class="sun" id="dynamicSun"></div>
        <div class="clouds">
            <div class="cloud cloud1"></div>
            <div class="cloud cloud2"></div>
            <div class="cloud cloud3"></div>
        </div>
        <div class="particles" id="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="shooting-star" style="top: 20%; right: 80%; animation-delay: 0s;"></div>
        <div class="shooting-star" style="top: 40%; right: 60%; animation-delay: 5s;"></div>
        <div class="shooting-star" style="top: 60%; right: 90%; animation-delay: 10s;"></div>
    </div>

    <!-- Theme Switcher -->
    <div class="theme-switcher">
        <button class="theme-btn day active" id="dayTheme" onclick="switchTheme('day')" data-tooltip="Day Mode">
            <i class="fas fa-sun"></i>
        </button>
        <button class="theme-btn night" id="nightTheme" onclick="switchTheme('night')" data-tooltip="Night Mode">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <header class="header">
        <div class="container">
            <h1 class="logo gradient-text">
                <i class="fas fa-sun"></i>
                Sunrise India timings
            </h1>
            <p class="tagline">Discover sunrise and sunset times across Indian cities</p>
            <p class="tagline">Sunset times across Indian cities</p>

        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <!-- Search Section -->
            <section class="search-section fade-in-up">
                <div class="search-card">
                    <h2>Find Sunrise Times</h2>
                    <div class="search-form">
                        <div class="input-group">
                            <i class="fas fa-search"></i>
                            <input type="text" id="citySearch" placeholder="Search for a city..." autocomplete="off">
                            <div class="search-suggestions" id="searchSuggestions"></div>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-calendar-alt"></i>
                            <input type="date" id="dateInput" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <button class="search-btn pulse" onclick="searchSunrise()">
                            <i class="fas fa-search"></i>
                            Get Sunrise Time
                        </button>
                    </div>
                </div>
            </section>

            <!-- Quick Cities Section -->
            <section class="quick-cities fade-in-left">
                <h3 class="gradient-text">Popular Cities</h3>
                <div class="city-grid">
                    <?php
                    require_once 'sunrise_calculator.php';
                    $popularCities = ['Mumbai', 'Delhi', 'Bangalore', 'Chennai', 'Kolkata', 'Hyderabad', 'Pune', 'Ahmedabad'];
                    foreach ($popularCities as $index => $city): 
                        $sunriseData = SunriseCalculator::getSunriseTime($city);
                    ?>
                    <div class="city-card scale-in gpu-accelerated" onclick="selectCity('<?php echo $city; ?>')" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <div class="city-name"><?php echo $city; ?></div>
                        <div class="city-time">
                            <span class="sunrise-time tooltip" data-tooltip="Sunrise Time">
                                <i class="fas fa-sun"></i>
                                <?php echo $sunriseData['sunrise']; ?>
                            </span>
                            <span class="sunset-time tooltip" data-tooltip="Sunset Time">
                                <i class="fas fa-moon"></i>
                                <?php echo $sunriseData['sunset']; ?>
                            </span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Results Section -->
            <section class="results-section" id="resultsSection" style="display: none;">
                <div class="result-card" id="resultCard">
                    <!-- Dynamic content will be loaded here -->
                </div>
            </section>

            <!-- All Cities Section -->
            <section class="all-cities-section fade-in-right">
                <div class="section-header">
                    <h3 class="gradient-text">All Indian Cities</h3>
                    <button class="toggle-btn" onclick="toggleAllCities()">
                        <span id="toggleText">Show All Cities</span>
                        <i class="fas fa-chevron-down" id="toggleIcon"></i>
                    </button>
                </div>
                <div class="all-cities-grid" id="allCitiesGrid" style="display: none;">
                    <?php
                    $allCities = SunriseCalculator::getAllSunriseTimes();
                    foreach ($allCities as $index => $cityData): 
                    ?>
                    <div class="city-info-card gpu-accelerated" style="animation-delay: <?php echo ($index % 12) * 0.05; ?>s">
                        <div class="city-header">
                            <h4><?php echo $cityData['city']; ?></h4>
                            <span class="coordinates tooltip" data-tooltip="Geographic Coordinates">
                                <?php echo round($cityData['coordinates']['lat'], 2); ?>°N, 
                                <?php echo round($cityData['coordinates']['lng'], 2); ?>°E
                            </span>
                        </div>
                        <div class="time-info">
                            <div class="time-item sunrise">
                                <i class="fas fa-sun"></i>
                                <span class="label">Sunrise</span>
                                <span class="time"><?php echo $cityData['sunrise']; ?></span>
                            </div>
                            <div class="time-item sunset">
                                <i class="fas fa-moon"></i>
                                <span class="label">Sunset</span>
                                <span class="time"><?php echo $cityData['sunset']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Sunrise India. Bringing you accurate sunrise and sunset times across India.</p>
            <div class="footer-links">
                <a href="#"><i class="fas fa-info-circle"></i> About</a>
                <a href="#"><i class="fas fa-envelope"></i> Contact</a>
                <a href="#"><i class="fas fa-share-alt"></i> Share</a>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>