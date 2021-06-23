<?php
namespace SpeedControlKata;

class FineCalculatorGermany {
    /**
     * @param int $allowedSpeed
     * @param int $actualSpeed
     * @param bool $isInCity
     * @return Fine
     *
     */

    public function getFine(int $allowedSpeed, int $actualSpeed, bool $isInCity)
    {
        $ToleranzSpeed = ($actualSpeed/100) * 97;
        $diffSpeed = ($ToleranzSpeed <= $allowedSpeed) ? false : $ToleranzSpeed - $allowedSpeed;

        $jsontempo = file_get_contents(__DIR__ . '/../json/tempostrafen.json');
        $jsonarray = json_decode($jsontempo, true);

        /**
         * der Wert bei $key['totempo'] ist maxtempo in strafbereich, 00 ist unendlich
         * $diffspeed wird überprüft ob man zu schnell war
         * Ist diffspeed zu schnell wir aus denn Json array die aktuelle Strafe ermittel
         */

        if ($diffSpeed <> false){
           foreach ($jsonarray as $key){
              if($diffSpeed >= $key['oftempo'] AND ($diffSpeed <= $key['totempo'] OR $key['totempo'] == 00 )){
                 if ($isInCity == true ){
                    $feeamount = $key['insideplace_price'];
                    $points = $key['insideplacepoint'];
                    $withdrawMonth = $key['insideplace_drivingban_monat'];
                    $feedback = 'Diesmal kostet ihnen das Foto '.$feeamount.'Euro';
                 }else{
                    $feeamount = $key['outsideplace_price'];
                    $points = $key['outsideplacepoint'];
                    $withdrawMonth = $key['outsideplace_drivingban_monat'];
                    $feedback = 'Diesmal kostet ihnen das Foto '.$feeamount.' Euro';
                 }

                 $feedback .= ($withdrawMonth <> 0) ? ' und Sie müssen '. $withdrawMonth.' Monat laufen.' : '.';
              }
           }
        }else{

            $feeamount = 0;
            $points = 0;
            $withdrawMonth = 0;
            $feedback = 'Tut mir Leid... sie waren leider so Langsam, vielleicht das nexte mal';
        }

        return new Fine($feeamount, $points, $withdrawMonth, $feedback);
    }
}
