<?php
class Person
{
   public static $company = 'DigitalOcean';
   public function getFriends()
   {
       return [
           'erika' => function () {
               return 'Elephpants and Cats';
           },
           'sammy' => function () {
               return 'Sharks and Penguins';
           }
       ];
   }

   public function getFriendsOf($someone)
   {
       return $this->getFriends()[$someone];
   }

   public static function getNewPerson()
   {
       return new Person();
   }
}
(new Person)->getFriends();

//$person = new Person();
//echo "\n" . $person->getFriends()['erika']() . "\n\n";
//echo "\n" . $person->getFriendsOf('sammy')() . "\n\n";
//echo "\n" . $person::getNewPerson()::$company . "\n\n";