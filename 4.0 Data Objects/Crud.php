<?php
interface Crud{
    public function insert();
    public function get($id=0);//optional parmeters
    public function delete($id);
}