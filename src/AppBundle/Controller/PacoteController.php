<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Pacote;
use AppBundle\Form\PacoteType;

/**
 * Pacote controller.
 *
 */
class PacoteController extends Controller
{
    /**
     * Lists all Pacote entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pacotes = $em->getRepository('AppBundle:Pacote')->findAll();

        return $this->render('pacote/index.html.twig', array(
            'pacotes' => $pacotes,
        ));
    }

    /**
     * Creates a new Pacote entity.
     *
     */
    public function newAction(Request $request)
    {
        $pacote = new Pacote();
        $form = $this->createForm('AppBundle\Form\PacoteType', $pacote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pacote);
            $em->flush();

            return $this->redirectToRoute('pacote_show', array('id' => $pacote->getId()));
        }

        return $this->render('pacote/new.html.twig', array(
            'pacote' => $pacote,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pacote entity.
     *
     */
    public function showAction(Pacote $pacote)
    {
        $deleteForm = $this->createDeleteForm($pacote);

        return $this->render('pacote/show.html.twig', array(
            'pacote' => $pacote,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pacote entity.
     *
     */
    public function editAction(Request $request, Pacote $pacote)
    {
        $deleteForm = $this->createDeleteForm($pacote);
        $editForm = $this->createForm('AppBundle\Form\PacoteType', $pacote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pacote);
            $em->flush();

            return $this->redirectToRoute('pacote_edit', array('id' => $pacote->getId()));
        }

        return $this->render('pacote/edit.html.twig', array(
            'pacote' => $pacote,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pacote entity.
     *
     */
    public function deleteAction(Request $request, Pacote $pacote)
    {
        $form = $this->createDeleteForm($pacote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pacote);
            $em->flush();
        }

        return $this->redirectToRoute('pacote_index');
    }

    /**
     * Creates a form to delete a Pacote entity.
     *
     * @param Pacote $pacote The Pacote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pacote $pacote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pacote_delete', array('id' => $pacote->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
