<?php


namespace App\Repositories;


use App\Data\BookDTO;

class BookRepository extends DatabaseAbstract implements BookRepositoryInterface
{

    public function insert(BookDTO $bookDTO): bool
    {
        $this->db->query(
            "
                INSERT INTO books (
                    title,
                    author, 
                    description,
                    image_url,
                    genre_id,
                    user_id) 
                VALUES (?, ?, ?, ?, ?, ?)
            ")->execute([
                $bookDTO->getTitle(),
                $bookDTO->getAuthor(),
                $bookDTO->getDescription(),
                $bookDTO->getImageURL(),
                $bookDTO->getGenre()->getId(),
                $bookDTO->getUser()->getId()
        ]);

        return true;
    }

    public function update(BookDTO $bookDTO, int $id): bool
    {
        $this->db->query(
            "
                UPDATE books
                SET
                    title = ?,
                    author = ?, 
                    description = ?,
                    image_url = ?,
                    genre_id = ?,
                    user_id = ?
                WHERE id = ?
            ")->execute([
            $bookDTO->getTitle(),
            $bookDTO->getAuthor(),
            $bookDTO->getDescription(),
            $bookDTO->getImageURL(),
            $bookDTO->getGenre()->getId(),
            $bookDTO->getUser()->getId(),
            $id
        ]);

        return true;
    }

    public function remove(int $id): bool
    {
        $this->db->query("
            DELETE FROM books WHERE id = ?
        ")->execute([$id]);

        return true;
    }

    public function findAll(): \Generator
    {
        // TODO: Implement findAll() method.
    }

    public function findOneById(int $id): BookDTO
    {
        // TODO: Implement findOneById() method.
    }

    public function findAllByAuthorId(int $id): \Generator
    {
        // TODO: Implement findAllByAuthorId() method.
    }
}