<?php

namespace AppBundle\Controller;
use AppBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ToDoController extends Controller
{
    /**
     * @Route("/todos/", name="todo_list")
     */
    public function listAction(Request $request)
    {
        return $this->render('todo/index.html.twig');
    }
    /**
     * @Route("/todos/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('todo/create.html.twig');
    }
    /**
     * @Route("/todos/update/{id}", name="todo_update")
     */
    public function updateAction(Request $request)
    {
        return $this->render('todo/update.html.twig');
    }
    /**
     * @Route("/todos/detail/{id}", name="todo_details")
     */
    public function detailAction(Request $request)
    {
        return $this->render('todo/detail.html.twig');
    }
    /**
     * @Route("/todos/delete/{id}", name="todo_delete")
     */
    public function deleteAction(Request $request)
    {
        return $this->render('todo/delete.html.twig');
    }
    /**
     * @Route("/todos/signup", name="todo_signup")
     */
    public function signupAction(Request $request)
    {
        return $this->render('todo/signup.html.twig');
    }
}
