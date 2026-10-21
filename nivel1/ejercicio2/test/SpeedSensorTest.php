<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/SpeedSensor.php";

class SpeedSensorTest extends TestCase {
    public function testSlowSpeed() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Slow Speed", $sensor->checkSpeed(1));
        $this->assertEquals("Slow Speed", $sensor->checkSpeed(15));
        $this->assertEquals("Slow Speed", $sensor->checkSpeed(29.9));
    }
    public function testAppropiateSpeed() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Appropiate Speed", $sensor->checkSpeed(30));
        $this->assertEquals("Appropiate Speed", $sensor->checkSpeed(45));
        $this->assertEquals("Appropiate Speed", $sensor->checkSpeed(60));
    }
    public function testSlightSpeeding() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Slight Speeding", $sensor->checkSpeed(60.1));
        $this->assertEquals("Slight Speeding", $sensor->checkSpeed(75));
        $this->assertEquals("Slight Speeding", $sensor->checkSpeed(80));
    }
    public function testModerateSpedding() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Moderate Speeding", $sensor->checkSpeed(80.1));
        $this->assertEquals("Moderate Speeding", $sensor->checkSpeed(90));
        $this->assertEquals("Moderate Speeding", $sensor->checkSpeed(100));
    }
    public function testSeriusSpedding() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Serious Speeding", $sensor->checkSpeed(100.1));
        $this->assertEquals("Serious Speeding", $sensor->checkSpeed(150));
        $this->assertEquals("Serious Speeding", $sensor->checkSpeed(300));
    }
    public function testUnexpectedSpeed(){
        $sensor = new SpeedSensor();
        $this->assertEquals("Unexpected speed", $sensor->checkSpeed(0));
        $this->assertEquals("Unexpected speed", $sensor->checkSpeed(-15));
        $this->assertEquals("Unexpected speed", $sensor->checkSpeed(9000));

    }
}








