<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\GraveRecord;

class GraveController extends BaseController
{

    /**
     * @Route("/grave/list")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function listingAction(Request $request)
    {
        $params = array("yee" => "yee");

        $listing = new GraveRecord\Listing();
        $listing->load();

        $params["graves"] = $listing;

        //echo print_r($listing);



        return $this->render('grave/listing.html.twig', $params);
    }

}
