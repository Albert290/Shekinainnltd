 <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $apiKey = "5b3ce3597851110001cf6248cd5faf2ffd844c7d8fbe9b57418ff69d"; // Replace with your actual API key
    $storeLocation = "0.23206,37.94052"; // Replace with your store's latitude and longitude
    $address = $_POST['address'];

    // Use OpenRouteService API to get the coordinates of the address
    $geocodeUrl = "https://api.openrouteservice.org/geocode/search?api_key=$apiKey&text=" . urlencode($address);
    $geocodeResponse = file_get_contents($geocodeUrl);
    $geocodeData = json_decode($geocodeResponse, true);

    if (isset($geocodeData['features'][0])) {
        $deliveryLocation = $geocodeData['features'][0]['geometry']['coordinates'];
        $storeCoords = explode(',', $storeLocation);

        // Now, calculate the route distance and delivery fee
        $routeUrl = "https://api.openrouteservice.org/v2/directions/driving-car?api_key=$apiKey&start=" . implode(',', $storeCoords) . "&end=" . implode(',', $deliveryLocation);
        $routeResponse = file_get_contents($routeUrl);
        $routeData = json_decode($routeResponse, true);

        if (isset($routeData['routes'][0]['summary']['length'])) {
            $distance = $routeData['routes'][0]['summary']['length'] / 1000; // Convert to kilometers
            $fee = $distance * 50; // Example: 50 KES per kilometer
            echo "Delivery Fee: " . number_format($fee, 2) . " KES";
        } else {
            echo "Unable to calculate the route.";
        }
    } else {
        echo "Invalid address. Please try again.";
    }
} else {
    echo "No address provided.";
}
