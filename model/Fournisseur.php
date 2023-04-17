<?PHP
	class Fournisseur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?float $prix = null;
		private ?int $quantite = null;
		private ?string $description = null;



		function __construct(string $nom, float $prix, int $quantite, string $description){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->description=$description;

		}

		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrix(): float{
			return $this->prix;
		}
		function getQuantite(): int{
			return $this->quantite;
		}
		function getDescription(): string{
			return $this->description;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrix(float $prix): void{
			$this->prix=$prix;
		}
		function setQuantite(int $quantite): void{
			$this->quantite=$quantite;
		}
		function setDescription(string $description): void{
			$this->description=$description;
		}
		
	}
?>