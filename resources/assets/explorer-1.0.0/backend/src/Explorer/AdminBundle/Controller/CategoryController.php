<?php

namespace Explorer\AdminBundle\Controller;

use Explorer\AdminBundle\Form\Type\CategoryType;
use Explorer\AdminBundle\Form\Type\ListingType;
use Explorer\CoreBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    /**
     * @Route("/categories", name="admin_categories_list")
     */
    public function indexAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository('CoreBundle:Category')->findAll();
        $categories = $this->get('knp_paginator')->paginate($categories, $request->query->getInt('page', 1), 10);

        return $this->render('AdminBundle::Categories/list.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/categories/create", name="admin_categories_create")
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('Category has been successfully created.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving category.'));
            }

            return $this->redirectToRoute('admin_categories_list');
        }

        return $this->render(
            'AdminBundle::Categories/create.html.twig', ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/categories/update/{id}", name="admin_categories_update", requirements={"id": "\d+"})
     * @ParamConverter("category", class="Explorer\CoreBundle\Entity\Category")
     */
    public function updateAction(Request $request, Category $category)
    {
        $form = $this->createForm(ListingType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('Category has been successfully updated.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving category.'));
            }


            return $this->redirectToRoute('admin_categories_list');
        }

        return $this->render('AdminBundle::Categories/update.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/categories/delete/{id}", name="admin_categories_delete", requirements={"id": "\d+"})
     * @ParamConverter("category", class="Explorer\CoreBundle\Entity\Category")
     */
    public function deleteAction(Request $request, Category $category)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Category has been successfully deleted.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting category.'));
        }

        return $this->redirectToRoute('admin_categories_list');
    }
}
