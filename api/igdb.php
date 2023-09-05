<?php
// Function to obtain an access token from Twitch OAuth2
function getTwitchAccessToken($client_id, $client_secret)
{
    $token_url = 'https://id.twitch.tv/oauth2/token';
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'grant_type' => 'client_credentials',
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $token_data = json_decode($response, true);

    return $token_data['access_token'];
}

// Function to fetch game data from IGDB API
function fetchGameDataFromIGDB($title, $access_token)
{
    $base_url = 'https://api.igdb.com/v4/';
    $endpoint = 'games';

    $query_params = [
        'search' => $title,
        'fields' => 'name,cover,summary',
    ];

    $url = $base_url . $endpoint;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Client-ID: YOUR_CLIENT_ID', // Replace with your Twitch Client ID
        'Authorization: Bearer ' . $access_token,
        'Accept: application/json',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query_params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Your game titles to fetch
$game_titles = [
    "Cabinet Design M-ATX Gaming Tower Computer Casing With RGB Fans and LED strip",
    "MSI MPG GUNGNIR 110L_111R ARGB Gaming ATX Computer Casing strip",
    "Evesky Gaming Mid Tower Computer Casing",
    // Add more game titles here
];

// Your Twitch Client ID and Client Secret
$client_id = 'YOUR_CLIENT_ID';
$client_secret = 'YOUR_CLIENT_SECRET';

// Get an access token from Twitch OAuth2
$access_token = getTwitchAccessToken($client_id, $client_secret);

// Loop through game titles and fetch data from IGDB API
foreach ($game_titles as $title) {
    $gameData = fetchGameDataFromIGDB($title, $access_token);

    if (!empty($gameData)) {
        $game = $gameData[0];
        $gameTitle = $game['name'];
        $gameDescription = $game['summary'];
        $gameCoverUrl = 'https:' . $game['cover']['url'];

        // Display game card
        echo '<li data-reveal="bottom">';
        echo '<div class="games-card">';
        echo '<figure class="card-banner img-holder">';
        echo '<img src="' . $gameCoverUrl . '" alt="' . $gameTitle . '" class="img-cover">';
        echo '</figure>';
        echo '<div class="card-content">';
        echo '<a href="#" class="card-tag">' . $gameTitle . '</a>';
        echo '<h3 class="h3">';
        echo '<a href="#" class="card-title">' . $gameTitle . '</a>';
        echo '</h3>';
        echo '<p class="card-text">' . $gameDescription . '</p>';
        echo '<a href="#" class="link has-before">Build Yours Now</a>';
        echo '</div>';
        echo '</div>';
        echo '</li>';
    }
}
?>
