<?php


namespace App\Services;


use App\Data\GenreDTO;
use App\Repositories\GenreRepositoryInterface;

class GenreService implements GenreServiceInterface
{
    private GenreRepositoryInterface $genreRepository;

    public function __construct(GenreRepositoryInterface $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    public function getAll(): \Generator
    {
        return $this->genreRepository->findAll();
    }

    public function getOneById(int $id): GenreDTO
    {
        return $this->genreRepository->findOneById($id);
    }
}