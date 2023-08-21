# OOP_Concept_Test
The ObstructionDetector class is designed to help explorers working on a scientific exhibition project determine if there are any impenetrable obstructions between two points on the Earth's surface while digging to the core. The class calculates expected time based on machine speed and distance, and compares it with the actual time taken to identify potential obstructions.
Class Overview

    Class Name: ObstructionDetector
    Version: 1.0
    Author: [Your Name]
    Last Updated: [Date]

Constructor

The constructor sets up the machine's speed which will be used to calculate expected time for travel.
Method: __construct($speed)

    Parameters:
        $speed (float): Speed of the machine in miles per hour.

Public Methods
Method: calculateExpectedTime($distance)

This method calculates the expected time it will take to travel a certain distance based on the machine's speed.

    Parameters:
        $distance (float): Distance between two points in miles.

    Returns:
        $expectedTime (float): Expected travel time in hours.

Method: detectObstruction($pointA, $pointB, $timeDuration)

This method detects whether there's an impenetrable obstruction between two points by comparing expected travel time with the provided actual time.

    Parameters:
        $pointA (array): Coordinates of the starting point [latitude, longitude].
        $pointB (array): Coordinates of the ending point [latitude, longitude].
        $timeDuration (float): Actual travel time in minutes.

    Returns:
        $obstructionDetected (bool): true if an impenetrable obstruction is detected, false otherwise.

Private Methods
Method: calculateDistance($pointA, $pointB)

This private method calculates the distance between two points using a simplified formula.

    Parameters:
        $pointA (array): Coordinates of the starting point [latitude, longitude].
        $pointB (array): Coordinates of the ending point [latitude, longitude].

    Returns:
        $distance (float): Distance between two points in miles.
