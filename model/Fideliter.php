<?PHP
	class Fideliter{
		private ?int $idfideliter = null;
		private ?int $idf = null;
		private ?int $nombre = null;
		private ?string $categorie = null;
		



		function __construct(int $idf, int $nombre, string $categorie){
			
			$this->idf=$idf;
			$this->nombre=$nombre;
			$this->categorie=$categorie;
			

		}

		function getIdfideliter(): int{
			return $this->idfideliter;
		}
		function getIdf(): int{
			return $this->idf;
		}
		function getNombre(): int{
			return $this->nombre;
		}
		function getCategorie(): string{
			return $this->categorie;
		}
        function setIdf(int $idf): void{
			$this->idf=$idf;
		}
		function setNombre(int $nombre): void{
			$this->nombre=$nombre;
		}
		function setCategorie(string $categorie): void{
			$this->categorie=$categorie;
		}
		
		
	}
?>