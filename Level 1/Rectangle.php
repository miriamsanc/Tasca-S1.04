<?php
class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->width*$this->height;
    }
}
?>