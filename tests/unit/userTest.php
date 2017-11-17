<?php

class UserTest extends \PHPUnit_Framework_TestCase
{



  public function testThatWeCanGetTheFirstName()
  {
    $user = new \App\Models\User;

    $user->setFirstName('Anurag');

    $this->assertEquals($user->getFirstName(),'Anurag');
  }

  public function testThatWeCanGetTheLastName()
  {
    $user = new \App\Models\User;

    $user->setLastName('Baral');

    $this->assertEquals($user->getLastName(),'Baral');
  }

  public function testFullNameIsReturned()
  {
    $user = new \App\Models\User;
    $user->setFirstName('Anurag');
    $user->setLastName('Baral');

    $this->assertEquals($user->getFullName(),'Anurag Baral');


  }

  public function testFirstNameAreTrimmed()
  {
    $user = new \App\Models\User;

    $user->setFirstName('Anurag    ');
    $user->setLastName('      Baral');

    $this->assertEquals($user->getFirstName(),'Anurag');
    $this->assertEquals($user->getLastName(),'Baral');


  }

  public function testEmail()
  {
    $user = new \App\Models\User;
    $user->setEmail('anuragbaral@gmail.com');

    $this->assertEquals($user->getEmail(),'anuragbaral@gmail.com');
  }

  public function testEmailVariablesContainCorrectValues()
  {
    $user = new \App\Models\User;
    $user->setFirstName('Anurag');
    $user->setLastName('Baral');
    $user->setEmail('anuragbaral@gmail.com');

    $emailVariables = $user->getEmailVariables();

    $this->assertArrayHasKey('full_name', $emailVariables);
    $this->assertArrayHasKey('email', $emailVariables);

    $this->assertEquals($emailVariables['full_name'],'Anurag Baral');
    $this->assertEquals($emailVariables['email'], 'anuragbaral@gmail.com');


  }


}

?>
