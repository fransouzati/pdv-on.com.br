<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Compra;
use AppBundle\Form\CompraType;

/**
 * Compra controller.
 *
 */
class CompraController extends Controller
{
    /**
     * Lists all Compra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $compras = $em->getRepository('AppBundle:Compra')->findAll();

        return $this->render('compra/index.html.twig', array(
            'compras' => $compras,
        ));
    }

    /**
     * Creates a new Compra entity.
     *
     */
    public function newAction(Request $request)
    {
        $compra = new Compra();
        $form = $this->createForm('AppBundle\Form\CompraType', $compra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compra);
            $em->flush();

            return $this->redirectToRoute('compra_show', array('id' => $compra->getId()));
        }

        return $this->render('compra/new.html.twig', array(
            'compra' => $compra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Compra entity.
     *
     */
    public function showAction(Compra $compra)
    {
        $deleteForm = $this->createDeleteForm($compra);

        return $this->render('compra/show.html.twig', array(
            'compra' => $compra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Compra entity.
     *
     */
    public function editAction(Request $request, Compra $compra)
    {
        $deleteForm = $this->createDeleteForm($compra);
        $editForm = $this->createForm('AppBundle\Form\CompraType', $compra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compra);
            $em->flush();

            return $this->redirectToRoute('compra_edit', array('id' => $compra->getId()));
        }

        return $this->render('compra/edit.html.twig', array(
            'compra' => $compra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Compra entity.
     *
     */
    public function deleteAction(Request $request, Compra $compra)
    {
        $form = $this->createDeleteForm($compra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compra);
            $em->flush();
        }

        return $this->redirectToRoute('compra_index');
    }

    /**
     * Creates a form to delete a Compra entity.
     *
     * @param Compra $compra The Compra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compra $compra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compra_delete', array('id' => $compra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
