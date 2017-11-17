<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
  protected $user;

  protected function setUp()
  {
      $this->user = new \App\Models\User;
  }


  /** @test */
  public function that_we_can_get_the_first_name()
  {
    $this->user->setFirstName('Anurag');

    $this->assertEquals($this->user->getFirstName(),'Anurag');
  }

  public function testThatWeCanGetTheLastName()
  {
    $this->user->setLastName('Baral');

    $this->assertEquals($this->user->getLastName(),'Baral');
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
