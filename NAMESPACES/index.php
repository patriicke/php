<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';
    // method declaration
    public function displayVar()
    {
        echo $this->var;
    }
}
class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class<br/>";
        parent::displayVar();
    }
}
$extended = new ExtendClass();
$extended->displayVar();
