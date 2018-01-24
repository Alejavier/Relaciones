<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuarios2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Usuarios2 controller.
 *
 * @Route("usuarios2")
 */
class Usuarios2Controller extends Controller
{
    /**
     * Lists all usuarios2 entities.
     *
     * @Route("/", name="usuarios2_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios2s = $em->getRepository('AppBundle:Usuarios2')->findAll();

        return $this->render('usuarios2/index.html.twig', array(
            'usuarios2s' => $usuarios2s,
        ));
    }

    /**
     * Creates a new usuarios2 entity.
     *
     * @Route("/new", name="usuarios2_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuarios2 = new Usuarios2();
        $form = $this->createForm('AppBundle\Form\Usuarios2Type', $usuarios2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuarios2);
            $em->flush();

            return $this->redirectToRoute('usuarios2_show', array('id' => $usuarios2->getId()));
        }

        return $this->render('usuarios2/new.html.twig', array(
            'usuarios2' => $usuarios2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuarios2 entity.
     *
     * @Route("/{id}", name="usuarios2_show")
     * @Method("GET")
     */
    public function showAction(Usuarios2 $usuarios2)
    {
        $deleteForm = $this->createDeleteForm($usuarios2);

        return $this->render('usuarios2/show.html.twig', array(
            'usuarios2' => $usuarios2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuarios2 entity.
     *
     * @Route("/{id}/edit", name="usuarios2_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuarios2 $usuarios2)
    {
        $deleteForm = $this->createDeleteForm($usuarios2);
        $editForm = $this->createForm('AppBundle\Form\Usuarios2Type', $usuarios2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuarios2_edit', array('id' => $usuarios2->getId()));
        }

        return $this->render('usuarios2/edit.html.twig', array(
            'usuarios2' => $usuarios2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuarios2 entity.
     *
     * @Route("/{id}", name="usuarios2_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Usuarios2 $usuarios2)
    {
        $form = $this->createDeleteForm($usuarios2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuarios2);
            $em->flush();
        }

        return $this->redirectToRoute('usuarios2_index');
    }

    /**
     * Creates a form to delete a usuarios2 entity.
     *
     * @param Usuarios2 $usuarios2 The usuarios2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuarios2 $usuarios2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuarios2_delete', array('id' => $usuarios2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
