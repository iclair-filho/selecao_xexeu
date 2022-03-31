<?php
class Candidato{
    private $idCandidato;
    private $idsecretaria;
    private $idcargo;
    private $cpf;
    private $nomecompleto;
    private $datanascimento;
    private $rg;
    private $nis;
    private $orgaoemissor;
    private $estadocivil;
    private $escolaridade;
    private $modalidade;
    private $sexo;
	private $email;
    private $cep;
    private $endereco;
    private $numero;
    private $cidade;
    private $uf;
    private $complemento;
    private $bairro;
    private $nacionalidade;
    private $telefone;
    private $celular;
    private $portador;
	private $datainscricao;
    


	public function getIdCandidato() {
		return $this->idCandidato;
	}

	public function setIdCandidato($idCandidato) {
		$this->idCandidato = $idCandidato;
	}
	public function getIdsecretaria() {
		return $this->idsecretaria;
	}

	public function setIdsecretaria($idsecretaria) {
		$this->idsecretaria = $idsecretaria;
	}
	public function getIdcargo() {
		return $this->idcargo;
	}

	public function setIdcargo($idcargo) {
		$this->idcargo = $idcargo;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getNomecompleto() {
		return $this->nomecompleto;
	}

	public function setNomecompleto($nomecompleto) {
		$this->nomecompleto = $nomecompleto;
	}

	public function getDatanascimento() {
		return $this->datanascimento;
	}

	public function setDatanascimento($datanascimento) {
		$this->datanascimento = $datanascimento;
	}

	public function getRg() {
		return $this->rg;
	}

	public function setRg($rg) {
		$this->rg = $rg;
	}
	public function getNis() {
		return $this->nis;
	}

	public function setNis($nis) {
		$this->nis = $nis;
	}

	public function getOrgaoemissor() {
		return $this->orgaoemissor;
	}

	public function setOrgaoemissor($orgaoemissor) {
		$this->orgaoemissor = $orgaoemissor;
	}

	public function getEstadocivil() {
		return $this->estadocivil;
	}

	public function setEstadocivil($estadocivil) {
		$this->estadocivil = $estadocivil;
	}
    public function getEscolaridade(){
        return $this->escolaridade;
    }
    public function setEscolaridade($escolaridade){
        $this->escolaridade=$escolaridade;
    }

	public function getModalidade() {
		return $this->modalidade;
	}

	public function setModalidade($modalidade) {
		$this->modalidade = $modalidade;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email=$email;
	}

	public function getCep() {
		return $this->cep;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getUf() {
		return $this->uf;
	}

	public function setUf($uf) {
		$this->uf = $uf;
	}

	public function getComplemento() {
		return $this->complemento;
	}

	public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function getNacionalidade() {
		return $this->nacionalidade;
	}

	public function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $nacionalidade;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function getCelular() {
		return $this->celular;
	}

	public function setCelular($celular) {
		$this->celular = $celular;
	}

	public function getPortador() {
		return $this->portador;
	}

	public function setPortador($portador) {
		$this->portador = $portador;
	}
	public function getdatainscricao(){
		return $this->datainscricao;
	}
	public function setdatainscricao($datainscricao){
		$this->datainscrica=$datainscricao;
	}


}
?>