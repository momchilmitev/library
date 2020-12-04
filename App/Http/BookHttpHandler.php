<?php


namespace App\Http;


use App\Data\BookDTO;
use App\Services\BookServiceInterface;
use App\Services\GenreServiceInterface;
use App\Services\UserServiceInterface;
use Core\DataBinderInterface;
use Core\TemplateInterface;

class BookHttpHandler extends UserHttpHandlerAbstract
{
    private BookServiceInterface $bookService;

    private UserServiceInterface $userService;

    private GenreServiceInterface $genreService;

    /**
     * BookHttpHandler constructor.
     * @param TemplateInterface $template
     * @param DataBinderInterface $dataBinder
     * @param BookServiceInterface $bookService
     * @param UserServiceInterface $userService
     * @param GenreServiceInterface $genreService
     */
    public function __construct(
        TemplateInterface $template,
        DataBinderInterface $dataBinder,
        BookServiceInterface $bookService,
        UserServiceInterface $userService,
        GenreServiceInterface $genreService)
    {
        parent::__construct($template, $dataBinder);
        $this->bookService = $bookService;
        $this->userService = $userService;
        $this->genreService = $genreService;
    }

    public function add(array $formData = [])
    {
        if(!$this->userService->isLogged()) {
            $this->redirect("login.php");
        }

        if(isset($_POST['add'])) {
            $this->handleAddProcess($formData);
        } else {
            $genres = $this->genreService->getAll();
            $this->render('books/add', $genres);
        }
    }

    private function handleAddProcess(array $formData)
    {
        try {
            $currentUser = $this->userService->currentUser();
            $genre = $this->genreService->getOneById($formData['genre_id']);
            /**
             * @var BookDTO $book
             */
            $book = $this->dataBinder->bind($formData, BookDTO::class);
            $book->setGenre($genre);
            $book->setUser($currentUser);
            $this->bookService->add($book);
            $this->redirect("my_books.php");
        } catch (\Exception $e) {

        }
    }

    public function allBooksByAuthor()
    {
        if(!$this->userService->isLogged()) {
            $this->redirect("login.php");
        }

        $books = $this->bookService->getAllByAuthor();
        $this->render('books/my_books', $books);
    }

}