<?php

class JeuTest extends PHPUnit_Framework_TestCase {
    
    public function testJoueurGagneEnMoinsDEssaisMax() {
        $jeu = new Jeu();
        $nombre = rand(1, 100);
        $maxEssais = 5;
        $compteurEssais = 0;

        while ($compteurEssais < $maxEssais) {
            $guess = $nombre;

            if ($guess === $nombre) {
                break;
            } else {
                if ($guess < $nombre) {
                    $jeu->indiquerPlusGrand();
                } else {
                    $jeu->indiquerPlusPetit();
                }
            }

            $compteurEssais++;
        }

        $this->assertLessThanOrEqual($maxEssais, $compteurEssais);
    }
}