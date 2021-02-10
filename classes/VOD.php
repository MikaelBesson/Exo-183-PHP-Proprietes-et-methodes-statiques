<?php


class VOD {

    protected array $film =[
        "l'empire contre attaque","le retour du jedi",
        "la revanche des sith","rogue one",
        "l'attaque des clones","le reveil de la force",
        "les derniers jedi"];

    protected string $tarif ="10 euro";
    protected static int $abonne = 0;

    /**
     * VOD constructor.
     * @param array|string[] $film
     * @param string $tarif
     */
    public function __construct(string $tarif)
    {
        $this->tarif = $tarif;
    }


    public static function addAbo(){
        static::$abonne++;
    }


    /**
     * @return array|string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return string
     */
    public function getTarif(): string
    {
        return $this->tarif;
    }

    /**
     * @param string $tarif
     */
    public function setTarif(string $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getAbonne(): int
    {
        return self::$abonne;
    }

    /**
     * @param int $abonne
     */
    public function setAbonne(int $abonne): void
    {
        self::$abonne += $abonne;
    }




}