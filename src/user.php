<?php 
    include "dbconnect.php";
    
    class user extends database{
        private int $id;
        private string $voornaam;
        private string $tussenvoegsel;
        private string $achternaam;
        private string $adres;
        private string $postcode;
        private string $telefoon;

        public function add($voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $telefoon){
            $var = $this->connect()->prepare("Insert into user ('voornaam','tussenvoegsel','achternaam','adres','postcode','telefoon'))
            values('voornaam','tussenvoegsel','achternaam','adres','postcode','telefoon');");
            $var->bindParam(':voornaam',$voornaam, PDO::PARAM_STR);
            $var->bindParam(':tussenvoegsel',$tussenvoegsel, PDO::PARAM_STR);
            $var->bindParam(':achternaam',$achternaam, PDO::PARAM_STR);
            $var->bindParam(':adres',$adres, PDO::PARAM_STR);
            $var->bindParam(':postcode',$postcode, PDO::PARAM_STR);
            $var->bindParam(':telefoon',$telefoon, PDO::PARAM_STR);
            $var->execute();
            return $var;
        }

        public function change(){
            $var = $this->connect()->prepare("Update user set voornaam='voornaam', tussenvoegsel='tussenvoegsel', achternaam='achternaam', adres='adres', postcode='postcode', telefoon='telefoon' 
            where user_id='id';");
            $var->bindParam(':id',$id, PDO::PARAM_STR);
            $var->bindParam(':voornaam',$voornaam, PDO::PARAM_STR);
            $var->bindParam(':tussenvoegsel',$tussenvoegsel, PDO::PARAM_STR);
            $var->bindParam(':achternaam',$achternaam, PDO::PARAM_STR);
            $var->bindParam(':adres',$adres, PDO::PARAM_STR);
            $var->bindParam(':postcode',$postcode, PDO::PARAM_STR);
            $var->bindParam(':telefoon',$telefoon, PDO::PARAM_STR);
            $var->execute();
            return $var;
        }

        public function delete(){
            $var = $this->connect()->prepare("Delete from user where user_id='$id';");
            $var->bindParam(':id',$id, PDO::PARAM_STR);
            $var->execute();
            return "user deleted";
        }

        public function show(){
            $var = $this->connect()->prepare("SELECT * FROM user");
            $var->execute();

            $result = $var->setFetchMode(PDO::FETCH_ASSOC);
        }

    }
