<?php


namespace App\Http;


use Core\DataBinderInterface;
use Core\TemplateInterface;

class UserHttpHandlerAbstract
{
    private TemplateInterface $template;
    protected DataBinderInterface $dataBinder;

    public function __construct(TemplateInterface $template, DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }

    public function render(string $templateName, $data = null, $errors = []): void
    {
        $this->template->render($templateName, $data, $errors);
    }

    public function redirect(string $url): void
    {
        header("Location: $url");
    }
}