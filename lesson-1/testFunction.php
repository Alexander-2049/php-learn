<?php
function testFunction()
{
  return "testFunction return";
}

enum Color
{
  case Red;
  case Black;
  case Green;
}

class Model
{
  public $name;
  public $description;

  public function __construct(string $name, string|null $description)
  {
    $this->name = $name;
    $this->description = $description;
  }
}

class Car
{
  public $color;
  public $model;

  public function __construct(Color $color, Model $model)
  {
    $this->color = $color;
    $this->model = $model;
  }

  function get_color(): Color
  {
    return $this->color;
  }

  function get_model(): Model
  {
    return $this->model;
  }
}