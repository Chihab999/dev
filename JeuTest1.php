<?php

class JeuTest1 extends PHPUnit_Framework_TestCase {
    public function testJoueurEpuiseTousLesEssaisSansGagner() {
        $jeu = new Jeu();
        $nombre = rand(1, 100);
        $maxEssais = 5;
        $compteurEssais = 0;

        while ($compteurEssais < $maxEssais) {
            $guess = rand(1, 100);

            if ($guess === $nombre) {
                $jeu->gagner();
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

        $this->assertEquals("Perdu", $jeu->etat());
    }
}