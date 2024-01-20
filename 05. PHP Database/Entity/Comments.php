<?php

namespace model {
    class Comments
    {
        private $id;
        private $email;
        private $comment;

        public function __construct(?int $id = null, ?string $email = null, ?string $comment = null)
        {
            $this->id = $id;
            $this->email = $email;
            $this->comment = $comment;
        }

        public function getid(): ?int
        {
            return $this->id;
        }

        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        public function getEmail(): ?string
        {
            return $this->email;
        }

        public function setEmail(?string $email): void
        {
            $this->email = $email;
        }

        public function getComment(): ?string
        {
            return $this->comment;
        }

        public function setComment(?string $comment): void
        {
            $this->comment = $comment;
        }
    }
}
