<?php 

class Cards {
	public $deck1;
	public $deck2;

	public $card1;
	public $card2;

	public $play3;


	public function __construct() {
		$this->playCard($card1);
		$this->playCard($card2);
	}

	public function getCard1() {
		return $this->card1;
	}

	public function getCard2() {
		return $this->card2;
	}
}


class PlayedCard extends Cards {
	public function compareCards() {
		if ($card1 > $card2) {
			return $deck1;
		} else if ($card1 < $card2) {
			return $deck2;
		} else {
			match();
		}
	}
	
	public function match() {
		if ($card1 == $card2) {

		} else if ($card1 > $card2) {
			return $deck1;
		} else if ($card1 < $card2) {
			return $deck2;
		} else {
			match();
		}
	}
}

