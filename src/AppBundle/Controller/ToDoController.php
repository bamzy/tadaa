<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Task;
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
        $tasks = $this->getDoctrine()
            ->getRepository('AppBundle:Task')
            ->findAll();
        return $this->render('todo/index.html.twig',array(
            'tasks' => $tasks,
            'currentLocation' => 'list'
        ));
    }
    /**
     * @Route("/todos/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('todo/create.html.twig', array(
            'currentLocation' => 'create'
        ));
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
    /**
     * @Route("/todos/about", name="todo_about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('todo/about.html.twig',array(
            'currentLocation' => 'about'
        ));
    }
    /**
     * @Route("/todos/contact", name="todo_contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('todo/contact.html.twig',array(
            'currentLocation' => 'contact'
        ));
    }
}
