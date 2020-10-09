<?php
use PHPUnit\Framework\TestCase;
use App\TowerBuilder;

final class TowerBuilderTest extends TestCase
{
    public function testOneFloorTower() 
    {
        $floors = 1;
        $builder = new TowerBuilder();
        $tower = $builder->builder($floors);
        $this->assertEquals(['*'], $tower);
    }
    
    public function testThreeFloorsTower() 
    {
        $floors = 3;
        $builder = new TowerBuilder();
        $tower = $builder->builder($floors);
        $this->assertEquals([
            '  *  ',
            ' *** ',
            '*****'
        ], $tower);
    }
    public function testsixFloorsTower() 
    {
        $floors = 6;
        $builder = new TowerBuilder();
        $tower = $builder->builder($floors);
        $this->assertEquals([
            '     *     ', 
            '    ***    ', 
            '   *****   ', 
            '  *******  ', 
            ' ********* ', 
            '***********'
        ], $tower);
    }
}