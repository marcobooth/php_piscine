<?php

class UnholyFactory {
	private $fighter_types = array();
	
	public function absorb($model) {
		if ($model instanceof Fighter && array_key_exists($model->type, $this->fighter_types) != True) {
			$this->fighter_types[$model->type] = $model;
			printf("(Factory absorbed a fighter of type %s)\n", $model->type);
		}
		else if (array_key_exists($model->type, $this->fighter_types) == True)
			printf("(Factory already absorbed a fighter of type %s)\n", $model->type);
		else
			print("(Factory can't absorb this, it's not a fighter)\n");
	}


	public function fabricate($requested) {
		if ($this->fighter_types["$requested"] != NULL)
		{
			printf("(Factory fabricates a fighter of type %s)\n", $requested);
			return (clone($this->fighter_types["$requested"]));
		}
		else
			printf("(Factory hasn't absorbed any fighter of type %s)\n", $requested);
	}
}

?>