<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // class with set and get method

    class a{
        public $name;
        

        function set($name){
            $this->name=$name;
        }

        function get(){
            return $this->name;
        }
    }

    $aswin=new a();
    $aswin->set('aswin');
    echo $aswin->get();



    // class with constructor function


    class cars{

        private $name;
        private $color;
    

        public function __construct($name,$color) {
            $this->name=$name;
            $this->color=$color;
        }

        public function display(){
            echo 'Brand name is '.$this->name.' '.'color is'.' '.$this->color;

        }

    
    }
    
    $BENZ = new cars('BENZ', 'BLACK'); echo '<br>'; $BENZ->display();
    $TOYOTA = new cars('TOYOTA', 'WHITE'); echo '<br>'; $TOYOTA->display();
    $FORD = new cars('FORD', 'BLUE'); echo '<br>'; $FORD->display();
    $CHEVROLET = new cars('CHEVROLET', 'RED'); echo '<br>'; $CHEVROLET->display();
    $HONDA = new cars('HONDA', 'SILVER'); echo '<br>'; $HONDA->display();
    $HYUNDAI = new cars('HYUNDAI', 'GRAY'); echo '<br>'; $HYUNDAI->display();
    $AUDI = new cars('AUDI', 'BLACK'); echo '<br>'; $AUDI->display();
    $BMW = new cars('BMW', 'WHITE'); echo '<br>'; $BMW->display();
    $VOLKSWAGEN = new cars('VOLKSWAGEN', 'YELLOW'); echo '<br>'; $VOLKSWAGEN->display();
    $MAZDA = new cars('MAZDA', 'ORANGE'); echo '<br>'; $MAZDA->display();
    $NISSAN = new cars('NISSAN', 'GREEN'); echo '<br>'; $NISSAN->display();
    $JEEP = new cars('JEEP', 'BROWN'); echo '<br>'; $JEEP->display();
    $MITSUBISHI = new cars('MITSUBISHI', 'PURPLE'); echo '<br>'; $MITSUBISHI->display();
    $SUBARU = new cars('SUBARU', 'PINK'); echo '<br>'; $SUBARU->display();
    $KIA = new cars('KIA', 'TURQUOISE'); echo '<br>'; $KIA->display();
    $LEXUS = new cars('LEXUS', 'BEIGE'); echo '<br>'; $LEXUS->display();
    $INFINITI = new cars('INFINITI', 'GOLD'); echo '<br>'; $INFINITI->display();
    $ACURA = new cars('ACURA', 'MAROON'); echo '<br>'; $ACURA->display();
    $CADILLAC = new cars('CADILLAC', 'NAVY'); echo '<br>'; $CADILLAC->display();
    $LINCOLN = new cars('LINCOLN', 'PEACH'); echo '<br>'; $LINCOLN->display();
    $FERRARI = new cars('FERRARI', 'RED'); echo '<br>'; $FERRARI->display();
    $LAMBORGHINI = new cars('LAMBORGHINI', 'YELLOW'); echo '<br>'; $LAMBORGHINI->display();
    $MASERATI = new cars('MASERATI', 'BLACK'); echo '<br>'; $MASERATI->display();
    $ASTON_MARTIN = new cars('ASTON MARTIN', 'BLUE'); echo '<br>'; $ASTON_MARTIN->display();
    $BUGATTI = new cars('BUGATTI', 'WHITE'); echo '<br>'; $BUGATTI->display();
    $TESLA = new cars('TESLA', 'SILVER'); echo '<br>'; $TESLA->display();
    $PORSCHE = new cars('PORSCHE', 'ORANGE'); echo '<br>'; $PORSCHE->display();
    $ROLLS_ROYCE = new cars('ROLLS ROYCE', 'BROWN'); echo '<br>'; $ROLLS_ROYCE->display();
    $BENTLEY = new cars('BENTLEY', 'GRAY'); echo '<br>'; $BENTLEY->display();
    $ALFA_ROMEO = new cars('ALFA ROMEO', 'GREEN'); echo '<br>'; $ALFA_ROMEO->display();
    $PEUGEOT = new cars('PEUGEOT', 'PURPLE'); echo '<br>'; $PEUGEOT->display();
    $CITROEN = new cars('CITROEN', 'PINK'); echo '<br>'; $CITROEN->display();
    $FIAT = new cars('FIAT', 'TURQUOISE'); echo '<br>'; $FIAT->display();
    $SEAT = new cars('SEAT', 'MAROON'); echo '<br>'; $SEAT->display();
    $SKODA = new cars('SKODA', 'BEIGE'); echo '<br>'; $SKODA->display();
    $VOLVO = new cars('VOLVO', 'GOLD'); echo '<br>'; $VOLVO->display();
    $JAGUAR = new cars('JAGUAR', 'NAVY'); echo '<br>'; $JAGUAR->display();
    $LAND_ROVER = new cars('LAND ROVER', 'PEACH'); echo '<br>'; $LAND_ROVER->display();
    $MINI = new cars('MINI', 'YELLOW'); echo '<br>'; $MINI->display();
    $SAAB = new cars('SAAB', 'RED'); echo '<br>'; $SAAB->display();
    $SUZUKI = new cars('SUZUKI', 'SILVER'); echo '<br>'; $SUZUKI->display();
    $TATA = new cars('TATA', 'BLUE'); echo '<br>'; $TATA->display();
    $MG = new cars('MG', 'WHITE'); echo '<br>'; $MG->display();
    $GEELY = new cars('GEELY', 'BLACK'); echo '<br>'; $GEELY->display();
    $GMC = new cars('GMC', 'GREEN'); echo '<br>'; $GMC->display();
    $CHRYSLER = new cars('CHRYSLER', 'ORANGE'); echo '<br>'; $CHRYSLER->display();
    $DODGE = new cars('DODGE', 'BROWN'); echo '<br>'; $DODGE->display();
    $RAM = new cars('RAM', 'GRAY'); echo '<br>'; $RAM->display();
    $ISUZU = new cars('ISUZU', 'PURPLE'); echo '<br>'; $ISUZU->display();
    $DAEWOO = new cars('DAEWOO', 'PINK'); echo '<br>'; $DAEWOO->display();


    $LUCID = new cars('LUCID', 'BLACK'); echo '<br>'; $LUCID->display();
$RIVIAN = new cars('RIVIAN', 'WHITE'); echo '<br>'; $RIVIAN->display();
$HUMMER = new cars('HUMMER', 'RED'); echo '<br>'; $HUMMER->display();
$LOTUS = new cars('LOTUS', 'BLUE'); echo '<br>'; $LOTUS->display();
$KOENIGSEGG = new cars('KOENIGSEGG', 'GREEN'); echo '<br>'; $KOENIGSEGG->display();
$PAGANI = new cars('PAGANI', 'ORANGE'); echo '<br>'; $PAGANI->display();
$SCION = new cars('SCION', 'YELLOW'); echo '<br>'; $SCION->display();
$DACIA = new cars('DACIA', 'GRAY'); echo '<br>'; $DACIA->display();
$MAHINDRA = new cars('MAHINDRA', 'SILVER'); echo '<br>'; $MAHINDRA->display();
$MARUTI = new cars('MARUTI', 'BEIGE'); echo '<br>'; $MARUTI->display();
$GENESIS = new cars('GENESIS', 'BROWN'); echo '<br>'; $GENESIS->display();
$GREAT_WALL = new cars('GREAT WALL', 'PURPLE'); echo '<br>'; $GREAT_WALL->display();
$BYD = new cars('BYD', 'PINK'); echo '<br>'; $BYD->display();
$RENAULT = new cars('RENAULT', 'TURQUOISE'); echo '<br>'; $RENAULT->display();
$SMART = new cars('SMART', 'GOLD'); echo '<br>'; $SMART->display();
$MCLAREN = new cars('MCLAREN', 'NAVY'); echo '<br>'; $MCLAREN->display();
$APOLLO = new cars('APOLLO', 'PEACH'); echo '<br>'; $APOLLO->display();
$ARO = new cars('ARO', 'MAROON'); echo '<br>'; $ARO->display();
$VECTOR = new cars('VECTOR', 'CYAN'); echo '<br>'; $VECTOR->display();
$MORGAN = new cars('MORGAN', 'INDIGO'); echo '<br>'; $MORGAN->display();
$SSC = new cars('SSC', 'IVORY'); echo '<br>'; $SSC->display();
$ZOTYE = new cars('ZOTYE', 'BLACK'); echo '<br>'; $ZOTYE->display();
$TROLLER = new cars('TROLLER', 'WHITE'); echo '<br>'; $TROLLER->display();
$CHANGAN = new cars('CHANGAN', 'RED'); echo '<br>'; $CHANGAN->display();
$FISKER = new cars('FISKER', 'BLUE'); echo '<br>'; $FISKER->display();
$POLARIS = new cars('POLARIS', 'GREEN'); echo '<br>'; $POLARIS->display();
$VANDERHALL = new cars('VANDERHALL', 'GRAY'); echo '<br>'; $VANDERHALL->display();
$BORGWARD = new cars('BORGWARD', 'ORANGE'); echo '<br>'; $BORGWARD->display();
$VINFAST = new cars('VINFAST', 'YELLOW'); echo '<br>'; $VINFAST->display();
$BRISTOL = new cars('BRISTOL', 'SILVER'); echo '<br>'; $BRISTOL->display();
$DE_TOMASO = new cars('DE TOMASO', 'BROWN'); echo '<br>'; $DE_TOMASO->display();
$DONKERVOORT = new cars('DONKERVOORT', 'PURPLE'); echo '<br>'; $DONKERVOORT->display();
$GUMPERT = new cars('GUMPERT', 'PINK'); echo '<br>'; $GUMPERT->display();
$HOLDEN = new cars('HOLDEN', 'TURQUOISE'); echo '<br>'; $HOLDEN->display();
$PANHARD = new cars('PANHARD', 'MAROON'); echo '<br>'; $PANHARD->display();
$PERODUA = new cars('PERODUA', 'BEIGE'); echo '<br>'; $PERODUA->display();
$PROTON = new cars('PROTON', 'GOLD'); echo '<br>'; $PROTON->display();
$SAIC = new cars('SAIC', 'NAVY'); echo '<br>'; $SAIC->display();
$GAC = new cars('GAC', 'PEACH'); echo '<br>'; $GAC->display();
$CHERY = new cars('CHERY', 'BLACK'); echo '<br>'; $CHERY->display();
$DAIHATSU = new cars('DAIHATSU', 'WHITE'); echo '<br>'; $DAIHATSU->display();
$BAIC = new cars('BAIC', 'RED'); echo '<br>'; $BAIC->display();
$HONGQI = new cars('HONGQI', 'BLUE'); echo '<br>'; $HONGQI->display();
$LADA = new cars('LADA', 'GREEN'); echo '<br>'; $LADA->display();
$HAVAL = new cars('HAVAL', 'ORANGE'); echo '<br>'; $HAVAL->display();
$ZHIJI = new cars('ZHIJI', 'YELLOW'); echo '<br>'; $ZHIJI->display();
$ROEWE = new cars('ROEWE', 'GRAY'); echo '<br>'; $ROEWE->display();
$LUXGEN = new cars('LUXGEN', 'SILVER'); echo '<br>'; $LUXGEN->display();
$FAW = new cars('FAW', 'BEIGE'); echo '<br>'; $FAW->display();
$WEY = new cars('WEY', 'CYAN'); echo '<br>'; $WEY->display();


?>
    
</body>
</html>