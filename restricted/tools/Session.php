<?

    class Session {
        private $id;
        private $first_name;
        private $last_name;
        private $username;
        private $photo;
        private $hash;
        private $auth_date;

        private $bot_token;
        private $max_auth_time;

        public function __construct($data, $bot_token, $max_auth_time) {
            $this->setID($data['id']);
            $this->setFirstName($data['first_name']);
            $this->setLastName($data['last_name']);
            $this->setUsername($data['username']);
            $this->setProfilePhoto($data['photo_url']);
            $this->setHash($data, $bot_token);
            $this->setAuthDate($data['auth_date'],$max_auth_time);
        }

        /**
         * FUNZIONI PRIVATE D'UTILITA'
         */

        /**
         * Valuta se la sessione è da considerarsi terminata (expired)
         * @param Date auth_date data di autenticazione ricevuta al login
         * @return true se la sessione è ancora valida
         * @return false se la sessione è da considerarsi terminata
        */
        private function isLoginValid($auth_date, $max_time) {
            if ((time() - $auth_date) > $max_time) return false;
            return true;
        }

        /**
         * Valuta la validità dell'hash ricevuto
         * @param mixed auth_data dati della sessione
         * @return true se l'hash è valido
         * @return false se l'hash non è valido
         * @link https://core.telegram.org/widgets/login
         */
        private function isHashValid($auth_data, $bot_token) {
            $check_hash = $auth_data['hash'];
            unset($auth_data['hash']);
            $data_check_arr = [];
            foreach ($auth_data as $key => $value) $data_check_arr[] = $key . '=' . $value;
            sort($data_check_arr);
            $data_check_string = implode("\n", $data_check_arr);
            $secret_key = hash('sha256', $bot_token, true);
            $hash = hash_hmac('sha256', $data_check_string, $secret_key);
            if (strcmp($hash, $check_hash) !== 0) return false;
            return true;
        }

        private function buildArray() {
            return array(
                "id" => $this->getID(),
                "first_name" => $this->getFirstName(),
                "last_name" => $this->getLastName(),
                "username" => $this->getUsername(),
                "photo_url" => $this->getProfilePhoto(),
                "hash" => $this->getHash(),
                "auth_date" => $this->getAuthDate()
            );
        }

        /**
         * GETTERS & SETTERS
         */

        /**
         * @return int l'id Telegram (chat:id) dell'utente
         */
        public function getID() {return $this->id;}

        /**
         * @return string il nome (o i nomi) dell'utente
         */
        public function getFirstName() {return $this->first_name;}

        /**
         * @return string il cognome dell'utente
         */
        public function getLastName() {return $this->last_name;}

        /**
         * @return string username dell'utente
         */
        public function getUsername() {return $this->username;}

        /**
         * @return string il path della foto profilo dell'utente
         */
        public function getProfilePhoto() {return $this->photo;}

        /**
         * @return string l'hash della sessione
         */
        public function getHash() {return $this->hash;}

        /**
         * @return int unix timestamp della data di login
         */
        public function getAuthDate() {return $this->auth_date;}

        /**
         * @return string bot token
         */
        public function getBotToken() {return $this->bot_token;}


        /**
         * @return int tempo massimo per il quale la sessione è attiva
         */
        public function getMaxAuthTime() {return $this->max_auth_time;}

        /**
         * @param int $id l'id dell'utente
         */
        public function setID($id) {
            if (isset($id) && is_numeric($id)) $this->id = $id;
            else throw new Exception('ID utente non valido o non impostato',400);
        }

        /**
         * @param string $first_name il nome (o i nomi) dell'utente
         */
        public function setFirstName($first_name) {
            if (isset($first_name) && is_string($first_name)) $this->first_name = $first_name;
            else throw new Exception('Nome (o nomi) utente non valido/i o non impostato/i',400);
        }

        /**
         * @param string $last_name il cognome dell'utente
         */
        public function setLastName($last_name) {
            if (isset($last_name) && is_string($last_name)) $this->last_name = $last_name;
            else throw new Exception('Cognome utente non valido o non impostato',400);
        }

        /**
         * @param string $username username dell'utente
         */
        public function setUsername($username) {
            if (isset($username) && is_string($username)) $this->username = $username;
            else throw new Exception('Username utente non valido o non impostato',400);
        }

        /**
         * @param string $photo la foto profilo dell'utente
         */
        public function setProfilePhoto($photo) {
            if (isset($photo) && is_string($photo)) $this->photo = $photo;
            else throw new Exception('Foto profilo utente non valida o non impostata',400);
        }

        /**
         * @param string $data i dati di login
         */
        public function setHash($data, $bot_token) {
            if (isset($data) && is_string($bot_token)) {
                if ($this->isHashValid($data, $bot_token)) {
                    $this->hash = $data['hash'];
                    $this->bot_token = $bot_token;
                } else throw new Exception('HASH non valido',401);
            } else throw new Exception('Dati di login non validi',400);
        }

        /**
         * @param string $auth_date data di login
         */
        public function setAuthDate($auth_date, $max_auth_time) {
            if (isset($auth_date) && is_numeric($max_auth_time)) {
                if ($this->isLoginValid($auth_date, $max_auth_time)) {
                    $this->auth_date = $auth_date;
                    $this->max_auth_time = $max_auth_time;
                } else throw new Exception('Sessione scaduta',440);
            } else throw new Exception('Dati per il controllo del tempo di login non validi',400);
        }

        /**
         * Altri metodi
         */

        public function isSessionValid() {
            if ($this->getHash()!==NULL && $this->getAuthDate()!==NULL) {
                if ($this->isHashValid($this->buildArray(),$this->getBotToken()) && $this->isLoginValid($this->getAuthDate(),$this->getMaxAuthTime())) return true;
            } else throw new Exception('Dati per la verifica della sessione non validi',400); 
        }

        
    }

?>