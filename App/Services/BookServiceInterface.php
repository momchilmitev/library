<?php


namespace App\Services;

use App\Data\BookDTO;

interface BookServiceInterface
{
    public function add(BookDTO $bookDto): bool;

    public function edit(BookDTO $bookDto): bool;

    public function delete(int $id): bool;

    /**
     * @return \Generator|BookDTO[]
     */
    public function getAll(): \Generator;

    public function getOneById(int $id): BookDTO;

    /**
     * @return \Generator|BookDTO[]
     */
    public function getAllByAuthor(): \Generator;
}