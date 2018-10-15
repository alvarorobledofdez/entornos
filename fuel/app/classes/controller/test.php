<?php
  class Controller_Test extends Controller_Rest
{

    public function get_list()
    {
        return $this->response(array(
            'id' => 1,
            'nombre' => "America Idiot",
        ));
    }
}