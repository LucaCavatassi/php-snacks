<?php 
class Room {
    public $rooms;
    public $bathrooms;
    public $available;

    public function __construct($rooms, $bathrooms, $available){
        $this->rooms = $rooms;
        $this->bathrooms = $bathrooms;
        $this->available = $available;
    }
}

class Hotel {
    public $allRooms = [];

    // Aggiungi una stanza all'hotel
    public function addRoom($room) {
        $this->allRooms[] = $room;
    }

    // Verifica disponibilità stanze
    public function checkAvailability() {
        $availableRooms = [];

        foreach ($this->allRooms as $room) {
            if ($room->available === true) {
                $availableRooms[] = $room;
            }
        }

        return $availableRooms;
    }

    // Prenota una stanza
    public function bookRoom($room) {
        // Verifica se la stanza è disponibile
        if (($key = array_search($room, $this->allRooms)) !== false && $room->available === true) {
            $this->allRooms[$key]->available = false;
            return "Room booked!";
        }

        return "Room is not available or does not exist.";
    }

    // Annulla prenotazione
    public function unBookRoom($room) {
        if (($key = array_search($room, $this->allRooms)) !== false && $room->available === false) {
            $this->allRooms[$key]->available = true;
            return "Room unbooked!";
        }

        return "Room was not booked or does not exist.";
    }

    // Controlla tutte le stanze
    public function checkRooms() {
        $roomStatus = [];
        foreach ($this->allRooms as $room) {
            $roomStatus[] = [
                'rooms' => $room->rooms,
                'bathrooms' => $room->bathrooms,
                'available' => $room->available
            ];
        }
        return $roomStatus;
    }
}

// Esempio d'uso
$hotel = new Hotel();

$room1 = new Room(1, 1, true);
$room2 = new Room(2, 1, true);
$room3 = new Room(3, 2, false);

$hotel->addRoom($room1);
$hotel->addRoom($room2);
$hotel->addRoom($room3);

// Prenotazione di una stanza
echo $hotel->bookRoom($room1);  // Room booked!
echo "\n";

// Verifica disponibilità
$availableRooms = $hotel->checkAvailability();
print_r($availableRooms);

// Controlla tutte le stanze
$rooms = $hotel->checkRooms();
print_r($rooms);
?>