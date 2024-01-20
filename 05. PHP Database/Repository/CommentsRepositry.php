<?php


namespace Repositry {

    use model\Comments;

    interface CommentsRepository
    {
        public function insert(Comments $comments): Comments;

        public function findById(?int $id): Comments;

        public function findAll(): array;
    }

    class CommentsRepositoryImpl implements CommentsRepository
    {
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public function insert(Comments $comments): Comments
        {
            $sql = "INSERT INTO comments(email, comment) VALUES (?,?);";
            $statment = $this->connection->prepare($sql);
            $statment->execute([$comments->getEmail(), $comments->getComment()]);

            $id = $this->connection->lastInsertId();
            $comments->setId($id);

            return $comments;
        }

        public function findById(?int $id): Comments
        {
            return new Comments();
        }

        public function findAll(): array
        {
            $comments = [];
            return $comments;
        }
    }
}
