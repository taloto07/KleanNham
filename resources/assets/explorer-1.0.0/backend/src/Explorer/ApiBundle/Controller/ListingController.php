<?php

namespace Explorer\ApiBundle\Controller;

use Explorer\CoreBundle\Entity\Category;
use Explorer\CoreBundle\Entity\Listing;
use FOS\RestBundle\Controller\Annotations as Rest;
use NumberFormatter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListingController extends Controller
{
    /**
     * @Rest\Get("/v1/listings")
     */
    public function indexAction(Request $request)
    {
        $data = [];
        $listings = $this->getDoctrine()->getRepository('CoreBundle:Listing')->findAllPublished();

        /** @var Listing $listing */
        foreach ($listings as $listing) {
            $data[] = $this->getListingData($request, $listing);
        }

        return $data;
    }

    /**
     * @Rest\Get("/v1/listings/{id}", requirements={"id": "\d+"})
     * @ParamConverter("listing", class="Explorer\CoreBundle\Entity\Listing")
     */
    public function detailAction(Request $request, Listing $listing) {
        $data = $this->getListingData($request, $listing);
        return $data;
    }

    private function getListingData(Request $request, Listing $listing) {
        $categories = [];
        $vich = $this->container->get('vich_uploader.templating.helper.uploader_helper');

        if ($listing->getCategories()) {
            /** @var Category $category */
            foreach ($listing->getCategories() as $category) {
                $categories[] = $category->getName();
            }
        }

        $price = new NumberFormatter("en", NumberFormatter::CURRENCY);

        $data = [
            'id' => $listing->getId(),
            'name' => $listing->getName(),
            'address' => $listing->getAddress(),
            'categories' => $categories,
            'price' => $price->formatCurrency($listing->getPrice(), 'USD'),
            'rating' => $listing->getRating(),
            'description' => $listing->getDescription(),
            'thumbnail' => $request->getSchemeAndHttpHost() . $vich->asset($listing, 'featuredImage'),
            'latitude' => $listing->getLatitude(),
            'longitude' => $listing->getLongitude(),
            'is_featured' => $listing->getIsFeatured(),
            'is_verified' => $listing->getIsVerified(),
        ];

        return $data;
    }
}
