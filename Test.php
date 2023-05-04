<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test.php

use PHPUnit\Framework\TestCase;

require_once "Calculate.php";

class Test extends TestCase
{
    // rules:
    // On the 1st year she kills 1 villager
    // On the 2nd year she kills 1 + 1 = 2 villagers
    // On the 3rd year she kills 1 + 1 + 2 = 4 villagers
    // On the 4th year she kills 1 + 1 + 2 + 3 = 7 villagers
    // On the 5th year she kills 1 + 1 + 2 + 3 + 5 = 12 villagers
    // And so on...
    // give invalid data (i.e. negative age, person who born before the witch took control) the program should return -1.

    public function testValidData()
    {
        $calc   = new Calculate();

        // Person 1: Age of death = 10, Year of Death = 12
        // Person 1 born on Year = 12 – 10 = 2, number of people killed on year 2 is 2.
        $p1     = $calc->Killed(10, 12);
        $this->assertEquals(2, $p1);

        // Person 2: Age of death = 13, Year of Death = 17
        // Person 2 born on Year = 17 – 13 = 4, number of people killed on year 4 is 7.
        $p2     = $calc->Killed(13, 17);
        $this->assertEquals(7, $p2);

        // So the average is ( 7 + 2 )/2 = 4.5
        $avg    = $calc->Average($p1, $p2);
        $this->assertEquals(4.5, $avg);
    }

    public function testInValidData()
    {
        $calc   = new Calculate();

        // Person 1: Age of death = 15, Year of Death = 12
        // Person 1 born on Year = 12 – 15 = -3, so it must return invalid data (-1)
        $p1     = $calc->Killed(15, 12);
        $this->assertEquals(-1, $p1);

        // Person 2: Age of death = 18, Year of Death = 17
        // Person 2 born on Year = 17 – 18 = -1, so it must return invalid data (-1)
        $p2     = $calc->Killed(18, 17);
        $this->assertEquals(-1, $p2);

        // So the average is ( -1 + -1 )/2 = -1
        $avg    = $calc->Average($p1, $p2);
        $this->assertEquals(-1, $avg);
    }
}
