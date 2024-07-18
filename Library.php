<?php
    class Library {
        private $books = [];

        public function __construct(){
            if(file_exists('library.json')){
                $this->books = json_decode(file_get_contents('library.json'), true);
            }
        }

        public function saveBooks(){
            file_put_contents('library.json', json_encode($this->books));
        }

        public function addBook($book) {
            $this->books[] = $book;
            $this->saveBooks();
        }

        public function getBooks() {
            return $this->books;
        }

        public function getBook($id) {
            foreach($this->books as $book) {
                if($book['id'] == $id) {
                    return $book;
                }
            }

            return null;
        }

        public function udateBook($updateBook){
            foreach($this->books as &$book) {
                if ($book['id'] == $updateBook['id']){
                    $book = $updateBook;
                    $this->saveBooks();
                    return true;
                }
            }
            return false;
        }

        public function deleteBook($id){
            foreach($this->books as $key => $book) {
                if ($book['id'] == $id) {
                    unset($this->books[$key]);
                    $this->saveBooks();
                    return true;
                }
            }
            return false;
        }
    }
