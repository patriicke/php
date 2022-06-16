<?php
    class  Person{
    protected $goal = "Goals";
    
    //    function __construct($fname,$lname,$age){
    //         $this->fname=$fname;
    //         $this->lname=$lname;
    //         $this->age=$age;
    //     }
    //     private function getLname(){
    //         return $this->fname;
    //     }
    }
    class Goal extends Person{
        protected $goal = "Goooooal";
        // public function setGoal($newData){
        //     return $this->goal= $newData;
        // }
        public function showGoal(){
            return $this->goal;
        }
    }
    $person1 = new Goal();
    // $person1->setGoal("Not a goal");
    echo $person1->showGoal();
    
?>