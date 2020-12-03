<?php


namespace App\Services;


use App\Data\GenreDTO;

interface GenreServiceInterface
{
    /**
     * @return \Generator|GenreDTO[]
     */
    public function getAll(): \Generator;

    public function getOneById(int $id): GenreDTO;
}