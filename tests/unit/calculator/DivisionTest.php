<?php 

class DivisionTest extends \PHPUnit\Framework\TestCase
{
   /** @test */
   public function divides_given_operands()
   {
       $division = new \App\Calculator\Division;
       $division->setOperands([100, 2]);

       $this->assertEquals(50, $division->calculate());
   }

   /** @test */
   public function no_operands_given_throw_exception_when_calculate()
   {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new \App\Calculator\Division;
        $addition->calculate();
   }

   /** @test */
   public function removes_division_by_zero_operands()
   {
        $division = new \App\Calculator\Division;
        $division->setOperands([10,0,0,5,0]);

        $this->assertEquals(2, $division->calculate());
   }
}