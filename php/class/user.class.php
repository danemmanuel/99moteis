<?php

require_once 'database.class.php';


class tests {

	private $id;
	private $site;
	private $data;
	private $ip;


	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}
	public function getSite(){
		return $this->site;
	}
	public function setSite($site){
		$this->site=$site;
	}
	public function getData(){
		return $this->data;
	}
	public function setData($data){
		$this->data=$data;
	}
	public function getIp(){
		return $this->ip;
	}
	public function setIp($ip){
		$this->ip=$ip;
	}

	
	public function inserir(){

			$conect = new conexao();
			try{
				$stmt = $conect->conn->prepare(
					"INSERT INTO tests(site, data, ip)
					VALUES(:site, :data, :ip)");
				$stmt->bindValue(":site",$this->getSite());
				$stmt->bindValue(":data",$this->getData());
				$stmt->bindValue(":ip",$this->getIp());

				

				return $stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}


}
?>
