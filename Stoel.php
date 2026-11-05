<?php

class Stoel {

    // Fields (eigenschappen)
    private int $zithoogte;
    private string $kleur;

    // Constructor (start van blauwdruk)
    public function __construct(string $ingevoerdeKleur, int $ingevoerdeZithoogte)
    {
        $this->kleur = $ingevoerdeKleur;
        $this->zithoogte = $ingevoerdeZithoogte;
    }

    // Functions (handelingen)
    public function echoKleur()
    {
        return "De stoel is: " . $this->kleur;
    }

    public function echoZithoogte()
    {
        return $this->zithoogte;
    }

    public function verstelZithoogte(int $nieuweHoogte)
    {
        $this->zithoogte = $nieuweHoogte;
    }

}

?>