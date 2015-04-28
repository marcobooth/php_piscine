<?php

class NightsWatch {

	private $_members = array();

	public function recruit($fighter) {
		if ($fighter instanceof IFighter) {
			$this->_members[] = $fighter;				
		}
	}
	public function fight() {
		foreach ($this->_members as $fighting ) {
			$fighting->fight();
		}
	}
}
?>