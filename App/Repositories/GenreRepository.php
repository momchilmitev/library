<?php


namespace App\Repositories;


use App\Data\GenreDTO;

class GenreRepository extends DatabaseAbstract implements GenreRepositoryInterface
{

    public function findAll(): \Generator
    {
        return $this->db->query(
            "SELECT id, name FROM genres"
        )->execute()->fetch(GenreDTO::class);
    }

    public function findOneById(int $id): GenreDTO
    {
        return $this->db->query(
            "SELECT id, name FROM genres WHERE id = ?"
        )->execute([$id])->fetch(GenreDTO::class)->current();
    }
}