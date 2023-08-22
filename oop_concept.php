<?php

    class obstructionDetector {
        private $speed;
        public function __construct($speed){
            $this->speed = $speed;
        }
        public function calculateExpectedTime($distance){
            $expectedTime = $distance / $this->speed;
            return $expectedTime;
        }

        public function detectObstruction($point_A, $point_B, $timeDuration){
            $expectedTime = $this->calculateExpectedTime($this->calculateDistance($point_A, $point_B));

            $obstructionDetected = false;
            if($timeDuration > ($expectedTime + 60)){
                $obstructionDetected = true;
            }
            return $obstructionDetected;

        }

        private function calculateDistance($point_A, $point_B){
            $distance = sqrt(pow($point_B[0] - $point_A[0], 2) + pow($point_B[1] - $point_A[1], 2));
            return $distance;
            
        }
        
    }

    $obstructionDetected = new obstructionDetector(50);

    $point_A = [53.5872, -2.4138];
    $point_B = [53.474, -2.2388];

    $timeDuration = 78;
    $obstructionDetected = $obstructionDetected->detectObstruction($point_A, $point_B, $timeDuration);

    if($obstructionDetected) {
        echo "obstruction detected. Impenetrate obstruction!";
    } else{
        echo "No obstruction Detected";
    }

    ?>