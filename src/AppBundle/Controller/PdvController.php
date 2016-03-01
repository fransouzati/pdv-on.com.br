<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Pdv;
use AppBundle\Form\PdvType;

/**
 * Pdv controller.
 *
 */
class PdvController extends Controller
{
    /**
     * Lists all Pdv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pdvs = $em->getRepository('AppBundle:Pdv')->findAll();

        return $this->render('pdv/index.html.twig', array(
            'pdvs' => $pdvs,
        ));
    }

    /**
     * Creates a new Pdv entity.
     *
     */
    public function newAction(Request $request)
    {
        $pdv = new Pdv();
        $form = $this->createForm('AppBundle\Form\PdvType', $pdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pdv);
            $em->flush();

            return $this->redirectToRoute('pdv_show', array('id' => $pdv->getId()));
        }

        return $this->render('pdv/new.html.twig', array(
            'pdv' => $pdv,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pdv entity.
     *
     */
    public function showAction(Pdv $pdv)
    {
        $deleteForm = $this->createDeleteForm($pdv);

        return $this->render('pdv/show.html.twig', array(
            'pdv' => $pdv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pdv entity.
     *
     */
    public function editAction(Request $request, Pdv $pdv)
    {
        $deleteForm = $this->createDeleteForm($pdv);
        $editForm = $this->createForm('AppBundle\Form\PdvType', $pdv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pdv);
            $em->flush();

            return $this->redirectToRoute('pdv_edit', array('id' => $pdv->getId()));
        }

        return $this->render('pdv/edit.html.twig', array(
            'pdv' => $pdv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pdv entity.
     *
     */
    public function deleteAction(Request $request, Pdv $pdv)
    {
        $form = $this->createDeleteForm($pdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pdv);
            $em->flush();
        }

        return $this->redirectToRoute('pdv_index');
    }

    /**
     * Creates a form to delete a Pdv entity.
     *
     * @param Pdv $pdv The Pdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pdv $pdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pdv_delete', array('id' => $pdv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
