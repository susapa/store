 <?php
        class user{
            public $firstname;
            public $lastname;
           // public $address;
            public $birthdate;
            public $title;
            public $sex;
            public $pass;
            function setFirstName($firstname){
                $this->firstname=$firstname;
            }
             function getFirstName(){
                 return $this->firstname;
            }
             function setLastName($lastname){
                 $this->lastname=$lastname;
            }
             function getLastName(){
                 return $this->lastname;
            }
             function setBirthDate($birthdate){
                 $this->birthdate=$birthdate;
            }
             function getBirthDate(){
                 return $this->birthdate;
            }
             function setTitle($title){
                $this->title =$title;
            }
             function getTitle(){
                 return $this->title;
            }
             function setSex($sex){
                 $this->sex=$sex;
            }
             function getSex(){
                 return $this->sex;
            }

            public function add(){
                $sql = "INSERT INTO users (firstname,lastname,title,sex,birthdate)
                    VALUES ('$this->firstname','$this->lastname','$this->title','$this->sex','$this->birthdate')";
              if(!mysql_query($sql)){
                  die('ERROR: '.mysql_error($sql));
              }
            }
        }
        ?>
        
 