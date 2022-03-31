<?php
class Cargo{
    private $idCargo;
    private $idSelecao;
    private $cargoNome;
    

	public function getIdCargo() {
		return $this->idCargo;
	}

	public function setIdCargo($idCargo) {
		$this->idCargo = $idCargo;
	}

	public function getIdSelecao() {
		return $this->idSelecao;
	}

	public function setIdSelecao($idSelecao) {
		$this->idSelecao = $idSelecao;
	}

	public function getcargoNome() {
		return $this->cargoNome;
	}

	public function setcargoNome($cargoNome) {
		$this->cargoNome = $cargoNome;
	}

	

}
?>