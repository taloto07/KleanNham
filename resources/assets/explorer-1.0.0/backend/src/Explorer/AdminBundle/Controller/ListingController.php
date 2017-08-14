<?php

namespace Explorer\AdminBundle\Controller;

use Explorer\AdminBundle\Form\Type\ListingType;
use Explorer\CoreBundle\Entity\Listing;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListingController extends Controller
{
    /**
     * @Route("/listings", name="admin_listings_list")
     */
    public function indexAction(Request $request)
    {
        $listings = $this->getDoctrine()->getRepository('CoreBundle:Listing')->findAllOrdered();
        $listings = $this->get('knp_paginator')->paginate($listings, $request->query->getInt('page', 1), 10);

        return $this->render('AdminBundle::Listings/list.html.twig', [
            'listings' => $listings,
        ]);
    }

    /**
     * @Route("/listings/create", name="admin_listings_create")
     */
    public function createAction(Request $request)
    {
        $listing = new Listing();
        $form = $this->createForm(ListingType::class, $listing, ['user' => $this->getUser()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $job = $form->getData();
            $job->setUser($this->getUser());

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($job);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully created.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing.'));
            }

            return $this->redirectToRoute('admin_listings_list');
        }

        return $this->render(
            'AdminBundle::Listings/create.html.twig', ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/listings/update/{id}", name="admin_listings_update", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="Explorer\CoreBundle\Entity\Listing")
     */
    public function updateAction(Request $request, Listing $listing)
    {
        $form = $this->createForm(ListingType::class, $listing, ['user' => $this->getUser()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $listing = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listing);
                $em->flush();
                $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully updated.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving listing.'));
            }


            return $this->redirectToRoute('admin_listings_list');
        }

        return $this->render('AdminBundle::Listings/update.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/listings/delete/{id}", name="admin_listings_delete", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="Explorer\CoreBundle\Entity\Listing")
     */
    public function deleteAction(Request $request, Listing $listing)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listing);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Listing has been successfully deleted.'));
        } catch (\Exception $e) {
            $this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting listing.'));
        }

        return $this->redirectToRoute('admin_listings_list');
    }
}
