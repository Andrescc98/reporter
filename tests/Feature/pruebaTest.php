<?php
    namespace Tests;

    use PHPUnit\Framework\TestCase;

    class PruebaTest extends TestCase{

        /** @test */
        public function debe_ser_verdadero(){
            $t=true;
            $this->assertEquals(true, $t);
        }
    }