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

class Hotel extends Room {
    public $allRooms = [];

    function checkAvailability () {
        $availableRooms = [];

        foreach ($this->allRooms as $room) {
            if ($room->available === true) {
                $availableRooms[] = $room;
            }
        }

        return $availableRooms;
    }

    function bookRoom($room) {
        if(array_search($room, $this->allRooms) && $room->available === true){
            $room->available = false;
        }
        return "Room {$room} is booked!";
    }

    function unBookRoom($room) {
        if(array_search($room, $this->allRooms) && $room->available === false){
            $room->available = true;
        }

        return "Room {$room} is unbooked!";
    }

    function checkRooms() {
        foreach ($this->allRooms as $room) {
            return $room->avilable;
        }
    }
}