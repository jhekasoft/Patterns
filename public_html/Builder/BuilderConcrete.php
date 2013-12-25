<?php

class Builder_Concrete_barraksUkraine extends Builder_Abstract
{
    
    protected $Product = null;
    
    public function __construct()
    {
        $this->Product = new Builder_Product();
    }
    
    public function BuildUnits() 
    {
        $this->BuildUnitsShooters();
    }
    
    private function BuildUnitsShooters() 
    {
        $this->Product->markup .= '<img src="img/ukraine/serdyuk.png">';
    }
    
    public function BuildView() 
    {
        $this->Product->markup .= '<div class="barracks-ukraine"></div>';
    }
    
    public function getResult()
    {
        return $this->Product;
    }
    
}

class Builder_Concrete_stablesUkraine extends Builder_Abstract
{
    
    protected $Product = null;
    
    public function __construct()
    {
        $this->Product = new Builder_Product();
    }
    
    public function BuildUnits() 
    {
        $this->BuildUnitsCavalry();
    }
    
    private function BuildUnitsCavalry() 
    {
        $this->Product->markup .= '<img src="img/ukraine/sechevoy_kazak.png">';
        $this->Product->markup .= '<img src="img/ukraine/resstrovyy_kazak.png">';
        $this->Product->markup .= '<img src="img/ukraine/getman.png">';
    }
    
    public function BuildView() 
    {
        $this->Product->markup .= '<div class="stable-ukraine"></div>';
    }
    
    public function getResult()
    {
        return $this->Product;
    }
    
}

class Builder_Concrete_barraksAustria extends Builder_Abstract
{
    
    protected $Product = null;
    
    public function __construct()
    {
        $this->Product = new Builder_Product();
    }
    
    public function BuildUnits() 
    {
        $this->BuildUnitsWithMachetes();
        $this->BuildUnitsShooters();
    }
    
    private function BuildUnitsWithMachetes() 
    {
        $this->Product->markup .= '<img src="img/austria/pikiner.png">';
        $this->Product->markup .= '<img src="img/austria/rundashir.png">';
    }
    
    private function BuildUnitsShooters() 
    {
        $this->Product->markup .= '<img src="img/austria/pandur.png">';
    }
    
    public function BuildView() 
    {
        $this->Product->markup .= '<div class="barracks-austria"></div>';
    }
    
    public function getResult()
    {
        return $this->Product;
    }
    
}

class Builder_Concrete_barraksAlgeria extends Builder_Abstract
{
    
    protected $Product = null;
    
    public function __construct()
    {
        $this->Product = new Builder_Product();
    }
    
    public function BuildUnits() 
    {
        $this->BuildUnitsWithMachetes();
        $this->BuildUnitsArchers();
    }
    
    private function BuildUnitsWithMachetes() 
    {
        $this->Product->markup .= '<img src="img/algeria/turkey_pikiner.png">';
        $this->Product->markup .= '<img src="img/algeria/pehotinets.png">';
    }
    
    private function BuildUnitsArchers() 
    {
        $this->Product->markup .= '<img src="img/algeria/luchnik.png">';
    }
    
    public function BuildView() 
    {
        $this->Product->markup .= '<div class="barracks-algeria"></div>';
    }
    
    public function getResult()
    {
        return $this->Product;
    }
    
}
