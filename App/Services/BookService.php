<?php


namespace App\Services;


use App\Data\BookDTO;
use App\Repositories\BookRepositoryInterface;

class BookService implements BookServiceInterface
{
    private BookRepositoryInterface $bookRepository;

    private UserServiceInterface  $userService;

    /**
     * BookService constructor.
     * @param BookRepositoryInterface $bookRepository
     * @param UserServiceInterface $userService
     */
    public function __construct(BookRepositoryInterface $bookRepository, UserServiceInterface $userService)
    {
        $this->bookRepository = $bookRepository;
        $this->userService = $userService;
    }

    public function add(BookDTO $bookDto): bool
    {
        return $this->bookRepository->insert($bookDto);
    }

    public function edit(BookDTO $bookDto): bool
    {
        return $this->bookRepository->update($bookDto, $bookDto->getId());
    }

    public function delete(int $id): bool
    {
        $this->bookRepository->remove($id);
    }

    public function getAll(): \Generator
    {
        $this->bookRepository->findAll();
    }

    public function getOneById(int $id): BookDTO
    {

        return $this->bookRepository->findOneById($id);
    }

    public function getAllByAuthor(): \Generator
    {
        $currentUser = $this->userService->currentUser();
        return $this->bookRepository->findAllByAuthorId($currentUser->getId());
    }
}