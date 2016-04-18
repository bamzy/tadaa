<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
        $task = new Task();
        $form = $this->createFormBuilder($task)
            ->add('name',TextType::class, array('attr'=>array('class'=>'form-control', 'style' => 'margin-buttom:15px')))
            ->add('type',TextType::class, array('attr'=>array('class'=>'form-control', 'style' => 'margin-buttom:15px')))
            ->add('description',TextareaType::class, array('attr'=>array('class'=>'form-control', 'style' => 'margin-buttom:15px')))
            ->add('priority',ChoiceType::class, array('choices'=> array('Low'=>'1','Normal'=>'2','High'=>'3'),'attr'=>array('class'=>'form-control', 'style' => 'margin-buttom:15px')))
            ->add('dueDate',DateType::class, array('attr'=>array('class'=>'form-ontrol', 'style' => 'margin-buttom:15px')))
            ->add('Save',SubmitType::class, array('attr'=>array('class'=>'btn btn-primary btn-lg', 'style' => 'margin-top:15px')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            die('submitted');
            $name = $form['name']->getData();
            $type = $form['type']->getData();
            $priority = $form['priority']->getData();
            $dueDate = $form['dueDate']->getData();
            $description = $form['description']->getData();
            $creationDate = new \DateTime('now');


            $task->setCreationDate($creationDate);
            $task->setDueDate($dueDate);
            $task->setName($name);
            $task->setType($type);
            $task->setPriority($priority);
            $task->setDescription($description);

            $em = $this->getDoctrine()->getManager();

            $em -> persist($task);
            $em->flush();
            $this->addFlash('notice','Task Added');
            return $this->redirectToRoute('todo_list');

        }
        return $this->render('todo/create.html.twig', array(
            'currentLocation' => 'create',
            'form'=> $form->createView()
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
    public function detailAction($id)
    {
        $task = $this->getDoctrine()
            ->getRepository('AppBundle:Task')
            ->find($id);
        return $this->render('todo/detail.html.twig',array(
            'task' => $task,
            'currentLocation' => 'list'
        ));
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
