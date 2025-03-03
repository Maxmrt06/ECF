<?php       // singleton7
class BddAcces
{
    private static $instance = null;
    private $handle;

    public function __construct()
        {
            $host = 'localhost';
            $user = 'root';
            $pswd = 'root';
            $dbname = 'moviesland';
            
            try{
                $this->handle = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pswd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            } catch (PDOException $e) {

                die('Echec de la connexion : ' . $e->getMessage());
            }
        }

        public static function getInstance() {
            if (is_null(self::$instance)) {
                self::$instance = new self();
            }
            return self::$instance;
        }
    
        public function getHandle() {
            return $this->handle;
        }
}