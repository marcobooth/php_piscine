<?php

class House {
	public function introduce() {
		print("House ");
		print(static::getHouseName());
		print(" of ");
		print(static::getHouseSeat());
		print(' : "');
		print(static::getHouseMotto() . '"' . PHP_EOL);
	}
}

?>