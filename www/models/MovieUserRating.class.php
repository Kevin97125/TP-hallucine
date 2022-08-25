<?php 

    class MovieUserRating{

        private int $_id;
        private int $userId;
        private int $_movieId;
        private int $_rate;

        public function _construct($id, $userId, $movieId, $rate){
            $this->_id = $id;
            $this->userId = $userId;
            $this->movieId = $movieId;
            $this->rate = $rate;
        }

        public function getID(){return $this->id;}
        public function getuserId(){return ->userId;}
        public function getMovieId(){return ->movieId;}
        public function getRate(){return $this->rate;}
    }
?> 