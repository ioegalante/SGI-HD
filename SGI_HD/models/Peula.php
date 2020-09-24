<?php

final class Peula{

    public $id;
    public $modulo;
    public $tema;
    public $subtema;
    public $racional;
    public $objetivos;
    public $metodologia;
    public $jomer;
    public $fecha;
    public $kvutza;

    function __construct($id,$modulo,$tema,$subtema,$racional,$objetivos,$metodologia,$jomer,$fecha,$kvutza){ 
        $this->id=$id; 
        $this->modulo=$modulo; 
        $this->tema=$tema; 
        $this->subtema=$subtema; 
        $this->racional=$racional; 
        $this->objetivos=$objetivos; 
        $this->metodologia=$metodologia; 
        $this->jomer=$jomer; 
        $this->fecha=$fecha; 
        $this->kvutza=$kvutza; 
     } 
};
?>