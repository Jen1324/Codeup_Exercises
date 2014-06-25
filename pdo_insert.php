<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'jen', 'letmein');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec("DROP TABLE national_parks");

$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_establish DATE NOT NULL,
    area_in_acres DECIMAL(20,2) NOT NULL,
    park_description VARCHAR(500) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

$parks = array(
	"Arches" => array(
		"name" 				=> "Arches",
		"location" 			=> "Utah",
		"date_establish" 	=> "1971-11-12",
		"area_in_acres" 	=> "76518.98",
		"park_description" 	=> "This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers."
	),
	"Badlands" => array(
		"name" 				=> "Badlands",
		"location" 			=> "South Dakota",
		"date_establish" 	=> "1978-11-10",
		"area_in_acres" 	=> "242755.94",
		"park_description" 	=> "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes."
	),
	"Carlsbad Caverns" => array(
		"name" 				=> "Carlsbad Caverns",
		"location" 			=> "New Mexico",
		"date_establish" 	=> "1930-05-14",
		"area_in_acres" 	=> "46766.45",
		"park_description"	=> "Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs."
	),
	"Death Valley" => array(
		"name" 				=> "Death Valley",
		"location" 			=> "California, Nevada",
		"date_establish" 	=> "1994-10-31",
		"area_in_acres" 	=> "3372401.96",
		"park_description"	=> "Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130 °F (54 °C) and it is home to Badwater Basin, the lowest elevation in North America. A diversity of colorful canyons, desolate badlands, shifting sand dunes, sprawling mountains, and over 1000 species of plants populate this geologic graben. Additional points of interest include salt flats, historic mines, and springs."
	),
	"Everglades" => array(
		"name" 				=> "Everglades",
		"location" 			=> "Florida",
		"date_establish" 	=> "1934-05-30",
		"area_in_acres" 	=> "1508537.90",
		"park_description"	=> "The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology."
	),
	"Glacier" => array(
		"name" 				=> "Glacier",
		"location" 			=> "Montana",
		"date_establish" 	=> "1910-05-11",
		"area_in_acres" 	=> "1013572.41",
		"park_description"	=> "The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust, expose the world's best-preserved sedimentary fossils from the Proterozoic era."
	),
	"Hawaii Volcanoes" => array(
		"name" 				=> "Hawaii Volcanoes",
		"location" 			=> "Hawaii",
		"date_establish" 	=> "1916-08-01",
		"area_in_acres" 	=> "323431.38",
		"park_description"	=> "This park on the Big Island protects the famous Kīlauea and Mauna Loa volcanoes, two of the world's most active geological features. Diverse ecosystems range from tropical forests at sea level to barren lava beds at more than 13,000 feet (4,000 m)."
	),
	"Isle Royale" => array(
		"name" 				=> "Isle Royale",
		"location" 			=> "Michigan",
		"date_establish" 	=> "1931-03-03",
		"area_in_acres" 	=> "571790.11",
		"park_description"	=> "The largest island in Lake Superior is a place of isolation and wilderness. Along with its many shipwrecks, waterways, and hiking trails, the park also includes over 400 smaller islands within 4.5 miles (7.2 km) of its shores. There are only 20 mammal species on the entire island, though the relationship between its wolf and moose populations is especially unique."
	),
	"Katmai" => array(
		"name" 				=> "Katmai",
		"location" 			=> "Alaska",
		"date_establish" 	=> "1980-12-02",
		"area_in_acres" 	=> "3674529.68",
		"park_description"	=> "This park on the Alaska Peninsula protects the Valley of Ten Thousand Smokes, an ash flow formed by the 1912 eruption of Novarupta, as well as Mount Katmai. Over 2,000 brown bears come here each year to catch spawning salmon."
	),
	"Mammoth Cave" => array(
		"name" 				=> "Mammoth Cave",
		"location" 			=> "Kentucky",
		"date_establish" 	=> "1941-07-01",
		"area_in_acres" 	=> "52830.19",
		"park_description"	=> "With 392 miles (631 km) of passageways mapped, Mammoth Cave is by far the world's longest cave system. Subterranean wildlife includes eight bat species, Kentucky cave shrimp, Northern cavefish, and cave salamanders. Above ground, the park provides recreation on the Green River, 70 miles of hiking trails, and plenty of sinkholes and springs."
	),

);

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_establish, area_in_acres, park_description) VALUES (:name, :location, :date_establish, :area_in_acres, :park_description)');

foreach ($parks as $park) {
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_establish', $park['date_establish'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':park_description', $park['park_description'], PDO::PARAM_STR);

	$stmt->execute();

	// $dbc->exec($query);
}