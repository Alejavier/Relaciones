<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Direcciones2;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Direcciones2 controller.
 *
 * @Route("direcciones2")
 */
class Direcciones2Controller extends Controller
{
    /**
     * Lists all direcciones2 entities.
     *
     * @Route("/", name="direcciones2_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $direcciones2s = $em->getRepository('AppBundle:Direcciones2')->findAll();

        return $this->render('direcciones2/index.html.twig', array(
            'direcciones2s' => $direcciones2s,
        ));
    }

    /**
     * Creates a new direcciones2 entity.
     *
     * @Route("/new", name="direcciones2_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $direcciones2 = new Direcciones2();
        $form = $this->createForm('AppBundle\Form\Direcciones2Type', $direcciones2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direcciones2);
            $em->flush();

            return $this->redirectToRoute('direcciones2_show', array('id' => $direcciones2->getId()));
        }

        return $this->render('direcciones2/new.html.twig', array(
            'direcciones2' => $direcciones2,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a direcciones2 entity.
     *
     * @Route("/{id}", name="direcciones2_show")
     * @Method("GET")
     */
    public function showAction(Direcciones2 $direcciones2)
    {
        $deleteForm = $this->createDeleteForm($direcciones2);

        return $this->render('direcciones2/show.html.twig', array(
            'direcciones2' => $direcciones2,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing direcciones2 entity.
     *
     * @Route("/{id}/edit", name="direcciones2_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Direcciones2 $direcciones2)
    {
        $deleteForm = $this->createDeleteForm($direcciones2);
        $editForm = $this->createForm('AppBundle\Form\Direcciones2Type', $direcciones2);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('direcciones2_edit', array('id' => $direcciones2->getId()));
        }

        return $this->render('direcciones2/edit.html.twig', array(
            'direcciones2' => $direcciones2,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a direcciones2 entity.
     *
     * @Route("/{id}", name="direcciones2_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Direcciones2 $direcciones2)
    {
        $form = $this->createDeleteForm($direcciones2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($direcciones2);
            $em->flush();
        }

        return $this->redirectToRoute('direcciones2_index');
    }

    /**
     * Creates a form to delete a direcciones2 entity.
     *
     * @param Direcciones2 $direcciones2 The direcciones2 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Direcciones2 $direcciones2)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direcciones2_delete', array('id' => $direcciones2->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
